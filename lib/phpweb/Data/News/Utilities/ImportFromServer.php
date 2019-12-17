<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\News\Utilities;
	
	use Psr\Log\LoggerInterface;
	
	class ImportFromServer
	{
		private function loadXmlUrl(string $url): ?\SimpleXMLElement {
			$contents = @file_get_contents($url);
			if ($contents === false) {
				return null;
			}
			
			return simplexml_load_string($contents);
		}
		
		public function import(LoggerInterface $logger) {
			$archives = $this->loadXmlUrl('/archive/archive.xml');
			if ($archives === null) {
				$logger->critical('Cannot load archive.xml');
				return false;
			}
			
			foreach ($archives->children('xi')->include as $included) {
				$href = (string)$included->attributes()->href;
				
				$atom = $this->loadXmlUrl('/archive/' . $href);
				
				$category = (string)$atom->category->attributes()->term;
				if ($category === 'conference') {
				
				}
			}
		}
	}