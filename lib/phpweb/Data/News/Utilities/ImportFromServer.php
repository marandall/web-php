<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\News\Utilities;
	
	use League\Flysystem\FilesystemInterface;
	use phpweb\Config\Site;
	use phpweb\Services\Builder\InjectableService;
	use phpweb\Services\Builder\PublicService;
	use phpweb\Services\Http\FetchException;
	use phpweb\Services\Http\HttpFetcher;
	use phpweb\Services\Storage\StorageFactory;
	use phpweb\Services\TextFormatting\HtmlToMarkdownConverter;
	use phpweb\Services\Xml\XmlHelpers;
	use Psr\Log\LoggerInterface;
	
	/**
	 * Downloads the news article archive and attempts to generate both conference
	 * information, release announcements and other news-derrived sources
	 */
	class ImportFromServer implements PublicService, InjectableService
	{
		private HttpFetcher $http_fetcher;
		
		private FilesystemInterface $storage;
		
		private string $base_uri;
		
		private HtmlToMarkdownConverter $html_to_markdown_converter;
		
		public function __construct(
			HttpFetcher $http_fetcher,
			StorageFactory $storage_factory,
			HtmlToMarkdownConverter $html_to_markdown_converter
		) {
			$this->http_fetcher               = $http_fetcher;
			$this->storage                    = $storage_factory->managed();
			$this->base_uri                   = 'https://www.php.net';
			$this->html_to_markdown_converter = $html_to_markdown_converter;
		}
		
		public function import(LoggerInterface $logger) {
			try {
				$archives = $this->loadXmlUrl($this->base_uri . '/archive/archive.xml');
			}
			catch (FetchException $ex) {
				$logger->critical('Cannot load archive.xml; ' . $ex->getMessage());
				return false;
			}
			
			foreach ($archives->children('xi', true)->include as $included) {
				$href = (string)$included->attributes()->href;
				printf("%s\n", $href);
				
				$atom = $this->loadXmlUrl($this->base_uri . '/archive/' . $href);
				$logger->notice('Loading ' . (string)$atom->title);
				
				$category = (string)$atom->category->attributes()->term;
				if ($category === 'conferences') {
					$this->handleConference($atom, $logger);
				}
			}
			
			return true;
		}
		
		/**
		 * @throws FetchException
		 */
		private function loadXmlUrl(string $url): \SimpleXMLElement {
			return $this->http_fetcher->fetchXml($url);
		}
		
		private function handleConference(\SimpleXMLElement $xml, LoggerInterface $logger) {
			$title           = (string)$xml->title;
			
			$teaser_end_str = (string)$xml->children('default',true)->finalTeaserDate;
			if (!$teaser_end_str) {
				$logger->warning('Cannot process ' . $title . ' because it has no final teaser date');
				return false;
			}
			
			$teaser_end = new \DateTimeImmutable($teaser_end_str);
			
			$base_image_name = (string)$xml->children('default', true)->newsImage;
			$stripped_id     = self::ConferenceIdFromConferenceTitle($title);
			
			$existing_path = Site::GetDataDir() . '/conferences/' . $stripped_id . '.xml';
			if (file_exists($existing_path)) {
				$existing_xml = simplexml_load_string(file_get_contents($existing_path));
				if ($existing_xml === false) {
					$logger->error('Cannot parse existing XML file at ' . $existing_path);
					return false;
				}
				
				$locked = (int)(string)$existing_xml->locked;
				if ($locked === 1) {
					$logger->info('Skipping ' . $existing_path . ' as it is locked');
					return true;
				}
				
				$last_updated_existing = strtotime((string)$existing_xml->updated);
				$last_updated_atom = strtotime((string)$xml->updated);
				
				if ($last_updated_atom <= $last_updated_existing) {
					$logger->notice($stripped_id . ' is up-to-date');
					// return true;
				}
			}
			
			$content_html = '';
			
			$new_xml = simplexml_load_string('<conference></conference>');
			$new_xml->addAttribute('version', '1');
			$new_xml->addChild('id', $stripped_id);
			$new_xml->addChild('title', $title);
			$new_xml->addChild('start_date', $teaser_end->format('Y-m-d'));
			$new_xml->addChild('end_date', $teaser_end->format('Y-m-d'));
			$new_xml->addChild('location', '')->addAttribute('country', '');
			
			$content = $this->html_to_markdown_converter->parse((string)$xml->content->asXML());
			$summary = explode("\n", $content)[0] ?? '';
			
			$new_xml->addChild('summary', $summary)->addAttribute('type' ,'text');
			$new_xml->addChild('content', $content)->addAttribute('type', 'markdown');
			
			/* direct copy last updated time from atom feed */
			$new_xml->addChild('updated', (string)$xml->updated);
			
			try {
				$image = $this->imageFromUri($base_image_name);
				
				$logo_node = $new_xml->addChild('logo', $image['name']);
				$logo_node->addAttribute('width', (string)$image['width']);
				$logo_node->addAttribute('height', (string)$image['height']);
			}
			catch (\DomainException $ex) {
				$logger->warning('Image handling error; ' . $ex->getMessage());
				$new_xml->addChild('image', '');
			}
			
			$xml_content = XmlHelpers::SimpleXmlToFormattedXml($new_xml);
			
			if (!file_exists($existing_path) || $xml_content !== file_get_contents($existing_path)) {
				file_put_contents($existing_path, $xml_content);
			}
			
			return $existing_path;
		}
		
		public static function ConferenceIdFromConferenceTitle(string $title): string {
			$title = strtolower($title);
			
			/* as we have no reasonable id's to use, one needs to be extrapolated from the title */
			$allowed  = \str_split('abcdefghijklmnopqrstuvwxyz01233456789');
			$stripped = '';
			for ($c = 0, $cMax = strlen($title); $c < $cMax; $c++) {
				if (in_array($title[$c], $allowed, true)) {
					$stripped .= $title[$c];
				}
				else {
					$stripped .= '-';
				}
			}
			
			/* there may be sequences of dashes, collapse all */
			while (strpos($stripped, '--') !== false) {
				$stripped = str_replace('--', '-', $stripped);
			}
			
			return substr($stripped, 0, 30);
		}
		
		private function imageFromUri(string $image_name): array {
			$image_content  = null;
			$base_image_uri = $this->base_uri . '/images/news/' . $image_name;
			try {
				$image_content = $this->http_fetcher->fetch($base_image_uri);
			}
			catch (FetchException $ex) {
				throw new \DomainException('Unable to download news image from ' . $base_image_uri);
			}
			
			$ef        = explode('.', $image_name);
			$extension = strtolower($ef[count($ef) - 1]);
			if (!in_array($extension, ['jpg', 'jpeg', 'png', 'gif'], true)) {
				throw new \DomainException('Image contains an illegitimate file extension');
			}
			
			$save_name = hash('sha256', $image_content) . '.' . $extension;
			$save_path = 'conferences/' . $save_name;
			
			/* image must be valid, creating acts as the check */
			$image = @imagecreatefromstring($image_content);
			if ($image === false) {
				throw new \DomainException('Cannot verify that the image is a valid format');
			}
			
			try {
				if (!$this->storage->has($save_path)) {
					$this->storage->write($save_path, $image_content);
				}
			}
			catch (\Exception $ex) {
				throw new \DomainException('Unable to write the image file: ' . $ex->getMessage());
			}
			
			$result = [
				'name'   => $save_name,
				'width'  => imagesx($image),
				'height' => imagesy($image),
			];
			
			imagedestroy($image);
			return $result;
		}
	}