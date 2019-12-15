<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release\Commands;
	
	use phpweb\Config\Site;
	use Symfony\Component\Console\Command\Command;
	use Symfony\Component\Console\Input\InputInterface;
	use Symfony\Component\Console\Output\OutputInterface;
	
	/**
	 * Converts the (modified) JSON dumps into XML as a one-time operation
	 * to meet the new standards for release metadata
	 */
	class ReleasesToXMLCommand extends Command
	{
		public function configure() {
			$this
				->setName('releases:live2xml')
				->setDescription('Converts the old style release data into XML');
		}
		
		public function execute(InputInterface $input, OutputInterface $output) {
			$release_path = Site::GetDataDir() . '/releases/releases_current.inc';
			if (!file_exists($release_path)) {
				$output->writeln('Error! Cannot find ' . $release_path);
				return 1;
			}
			
			$archive_path = Site::GetDataDir() . '/releases/releases_old.inc';
			if (!file_exists($archive_path)) {
				$output->writeln('Error! Cannot find ' . $archive_path);
			}
			
			/* the data exists in these files, which have been modified to return it rather than use globals */
			$release_data = require $release_path;
			$archive_data = require $archive_path;
			$all_data     = array_merge($this->reduce($release_data), $this->reduce($archive_data));
			
			foreach ($all_data as $release_id => $release_data) {
				$ec          = explode('.', $release_id);
				$major_ver   = (int)($ec[0] ?? 0);
				$minor_ver   = (int)($ec[1] ?? 0);
				$release_ver = (int)($ec[2] ?? 0);
				
				$xml = simplexml_load_string('<release></release>');
				$xml->addAttribute('id', $release_id);
				
				$xml->addChild('release', $release_id);
				$xml->addChild('date', $release_data['date'] ?? '');
				
				$xml_ver = $xml->addChild('version');
				$xml_ver->addChild('major', (string)$major_ver);
				$xml_ver->addChild('minor', (string)$minor_ver);
				$xml_ver->addChild('release', (string)$release_ver);
				
				$sources = $xml->addChild('source');
				foreach ($release_data['source'] as $source_data) {
					$xml_source = $sources->addChild('source');
					$xml_source->addChild('filename', $source_data['filename'] ?? $source_data['name']);
					$xml_source->addChild('name', $source_data['name']);
					$xml_source->addChild('sha256', $source_data['sha256'] ?? '');
					$xml_source->addChild('md5', $source_data['md5'] ?? '');
					$xml_source->addChild('date', $source_data['date'] ?? '');
				}
				
				$xml_tags = $xml->addChild('tags');
				foreach (($release_data['tags'] ?? []) as $tag) {
					$xml_tags->addChild('tag', $tag);
				}
				
				$xml->addChild('announcements');
				$xml->addChild('changes');
				
				$output_path = Site::GetDataDir() . '/releases/' . $major_ver . '_' . $minor_ver . '/' .
					str_replace('.', '_', $release_id) . '.xml';
				
				/* directory should exist */
				$output_dir = dirname($output_path);
				if (!is_dir($output_dir)) {
					@mkdir($output_dir, 0, true);
				}
				
				
				/* converts the raw xml into something easier to read */
				$cn               = new \DOMDocument('1.0', 'UTF-8');
				$cn->formatOutput = true;
				
				$imported = $cn->importNode(dom_import_simplexml($xml), true);
				$cn->appendChild($imported);
				
				/* now the messy bit, it's seemingly near-impossible to copy SimpleXML nodes so now we replace the content */
				$announcement_node = $cn->documentElement->getElementsByTagName('announcement');
				
				$announcement_file = Site::GetDataDir(
					) . '/releases/' . $major_ver . '/' . $major_ver . '_' . $minor_ver . '/' .
					str_replace('.', '_', $release_id) . '.html';
				
				if (file_exists($announcement_file)) {
					$dom_announce = new \DOMDocument();
					
					libxml_use_internal_errors(true);
					$dom_announce->loadHTML(
						'<announcement>' . file_get_contents($announcement_file) . '</announcement>'
					);
					libxml_clear_errors();
					
					$announce_imported = $cn->importNode(
						$dom_announce->documentElement->getElementsByTagName('body')[0]->getElementsByTagName(
							'announcement'
						)[0], true
					);
					
					$announce_imported->setAttribute('lang', 'en');
					
					$cn->documentElement->getElementsByTagName('announcements')[0]->appendChild($announce_imported);
				}
				else {
					$output->writeln('Missing announcement file ' . $announcement_file);
				}
				
				$output_str = $cn->saveXML();
				
				if (!file_exists($output_path) || file_get_contents($output_path) !== $output_str) {
					$output->writeln('Writing ' . $release_id . ' to ' . $output_path);
					file_put_contents($output_path, $output_str);
				}
			}
			
			return 0;
		}
		
		private function reduce(array $data): array {
			$result = [];
			foreach ($data as $major => $releases) {
				foreach ($releases as $ver => $release) {
					$result[$ver] = $release;
				}
			}
			return $result;
		}
	}