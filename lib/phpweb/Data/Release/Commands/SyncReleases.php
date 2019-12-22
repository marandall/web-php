<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release\Commands;
	
	use phpweb\Config\Site;
	use phpweb\Services\Builder\InjectableService;
	use phpweb\Services\Builder\PublicService;
	use phpweb\Services\Http\FetchException;
	use phpweb\Services\Http\HttpFetcher;
	use phpweb\Services\TextFormatting\HtmlToMarkdownConverter;
	use phpweb\Services\Xml\XmlHelpers;
	use Psr\Log\LoggerInterface;
	
	class SyncReleases implements InjectableService, PublicService
	{
		private HttpFetcher $http_fetcher;
		
		private $base_uri = 'https://www.php.net';
		
		private HtmlToMarkdownConverter $html_to_markdown_converter;
		
		public function __construct(HttpFetcher $http_fetcher, HtmlToMarkdownConverter $html_to_markdown_converter) {
			$this->http_fetcher               = $http_fetcher;
			$this->html_to_markdown_converter = $html_to_markdown_converter;
		}
		
		public function import(LoggerInterface $logger) {
			$changelogs = [];
			
			/* the change log contains a list of changes that we need to parse out */
			foreach ([4, 5, 7] as $major_version) {
				$changelogs[$major_version] = $this->http_fetcher->fetch(
					$this->base_uri . '/ChangeLog-' . $major_version . '.php'
				);
			}
			
			foreach ($this->fetchRemote() as $release_id => $data) {
				$logger->info('Processing ' . $release_id);
				
				/* release may contain string elements for alpha / release candidates */
				$mv      = explode('.', $release_id);
				$major   = (int)$mv[0];
				$minor   = (int)$mv[1];
				$release = $mv[2];
				
				/*
				 * Building up the release information into the XML using multiple sources
				 */
				$xml = new \SimpleXMLElement('<release version="1"></release>');
				$xml->addAttribute('id', $release_id);
				$xml->addChild('release', $release_id);
				$xml->addChild('date', $data->date);
				
				$xml_sources = $xml->addChild('source');
				
				foreach ($data->source as $source) {
					$xml_source = $xml_sources->addChild('source');
					$xml_source->addChild('name', $source->name ?? '');
					$xml_source->addChild('filename', $source->filename ?? '');
					$xml_source->addChild('date', $source->date ?? '');
					$xml_source->addChild('sha256', $source->sha256 ?? '');
				}
				
				$lang_announcements       = [];
				$lang_announcements['en'] = '/releases/' . $major . '_' . $minor . '_' . $release . '.php';
				
				$xml_announcements = $xml->addChild('announcements');
				foreach ($lang_announcements as $lang_id => $announcement_uri) {
					$annoucement_page  = $this->http_fetcher->fetch($this->base_uri . $announcement_uri);
					$announcement_html = $this->clip(
						$annoucement_page, '<section id="layout-content">', '</section>', 0
					);
					
					$markdown = $this->html_to_markdown_converter->parse($announcement_html);
					
					/*
					 * Theres a lot of information that is jut repetative and we absolutely do not
					 * want it... telling people to use a particular version or download it once it's
					 * long out of date is bad, let the controller take care of this instead
					 */
					
					$paragraphs = explode("\n", str_replace("\r", '', $markdown));
					foreach ($paragraphs as &$paragraph) {
						if (strpos($paragraph, 'are encouraged to upgrade') !== false) {
							$paragraph = '';
						}
						
						if (strpos($paragraph, 'For source downloads of PHP') !== false) {
							$paragraph = '';
						}
						
						if ($paragraph === 'PHP ' . $release_id . ' Release Announcement') {
							$paragraph = '';
						}
						
						/* strips off the underline for headers added by the markdown parser */
						if (strpos($paragraph, '=================') === 0) {
							$paragraph = '';
						}
						
						unset($paragraph);
					}
					
					$markdown = trim(implode("\n", $paragraphs));
					while (strpos($markdown, "\n\n\n\n") !== false) {
						$markdown = str_replace("\n\n\n", "\n", $markdown);
					}
					
					$xml_announcements->addChild('announcement', $markdown)->addAttribute('lang', $lang_id);
				}
				
				$xml_tags = $xml->addChild('tags');
				foreach (($data->tags ?? []) as $tag) {
					$xml_tags->addChild('tag', $tag);
				}
				
				$xml_changes    = $xml->addChild('changes');
				$module_changes = $this->extractChangelog($changelogs[$major] ?? '', $release_id);
				foreach ($module_changes as $module_id => $changes) {
					$xml_module = $xml_changes->addChild('module');
					$xml_module->addAttribute('id', $module_id);
					
					foreach ($changes as $change) {
						$change_xml = $xml_module->addChild('change');
						$change_xml->addChild('description', $change['description']);
						
						$change_xml_tags = $change_xml->addChild('references');
						foreach ($change['references'] as $reference) {
							$change_xml_tags->addChild('reference', (string)$reference['value'])->addAttribute('type', $reference['type']);
						}
					}
				}
				
				$output_xml  = XmlHelpers::SimpleXmlToFormattedXml($xml);
				$output_path = Site::GetDataDir() . '/releases/' . $major . '_' . $minor . '/' .
					$major . '_' . $minor . '_' . $release . '.xml';
				
				$output_dir = dirname($output_path);
				if (!is_dir($output_dir)) {
					if (!mkdir($output_dir) && !is_dir($output_dir)) {
						throw new \RuntimeException(sprintf('Directory "%s" was not created', $output_dir));
					}
				}
				
				if (!file_exists($output_path) || file_get_contents($output_path) !== $output_xml) {
					file_put_contents($output_path, $output_xml);
				}
			}
		}
		
		private function fetchRemote(): array {
			$versions = [3, 4, 5, 7];
			$releases = [];
			
			foreach ($versions as $major_version) {
				try {
					$json = $this->http_fetcher->fetchJson(
						$this->base_uri . '/releases/index.php?json=1&max=-1&version=' . $major_version
					);
				}
				catch (FetchException $ex) {
					throw new \DomainException(
						'Unable to fetch the API data for version ' . $major_version . '; ' . $ex->getMessage()
					);
				}
				
				foreach ($json as $ver => $data) {
					$releases[$ver] = $data;
				}
			}
			
			return $releases;
		}
		
		private function clip(string $contents, string $start_tag, string $end_tag, int $clip = 0): ?string {
			$st_find = strpos($contents, $start_tag);
			if ($st_find === false) {
				return null;
			}
			
			$st_close = strpos($contents, $end_tag, $st_find + strlen($start_tag));
			if ($st_close === false) {
				return null;
			}
			
			return substr(
				$contents,
				$st_find + strlen($start_tag),
				$st_close - $st_find - strlen($start_tag) - $clip // required for final </div>,
			);
		}
		
		private function extractChangelog(string $page, string $release_id): array {
			$opening_tag = '<section class="version" id="' . $release_id . '">';
			$closing_tag = '</section>';
			
			$ver_data = $this->clip($page, $opening_tag, $closing_tag);
			if ($ver_data === null) {
				return [];
			}
			
			/* moving everything into bbcode saves a lot of parsing because markdown converter is already great at it */
			$lines = explode("\n", $this->html_to_markdown_converter->parse($ver_data));
			
			$modules        = [];
			$current_module = '';
			
			foreach ($lines as $line) {
				if (substr($line, 0, 2) === '- ') {
					$current_module = trim(substr($line, 2), ': ');
					continue;
				}
				
				if (substr($line, 0, 4) === '  - ') {
					$modules[$current_module ?: 'Core'][] = $this->parseChangeLine(substr($line, 4));
				}
			}
			
			return $modules;
		}
		
		private function parseChangeLine(string $line): array {
			$terms = [];
			preg_match_all(
				'/' . preg_quote('Fixed bug [#', '/') . '(\\d+)' . preg_quote(']', '/') . '/u',
				$line,
				$terms,
				PREG_SET_ORDER
			);
			
			$tags = [];
			
			if (count($terms) !== 0) {
				$bug_id      = (int)$terms[0][1];
				$replacement = sprintf('Fixed bug [#%d](http://bugs.php.net/%d)', $bug_id, $bug_id);
				$line = str_replace($replacement, '', $line);
				
				$tags[] = ['type' => 'bugfix', 'value' => (string)$bug_id];
			}
			
			$matches = [];
			preg_match_all('/CVE-\\d+-\\d+/u', $line, $matches, PREG_SET_ORDER);
			if (count($matches) !== 0) {
				$tags[] = ['type' => 'cve', 'value' => $matches[0][0]];
			}
			
			return [
				'description' => trim($line),
				'references'  => $tags,
			];
		}
	}