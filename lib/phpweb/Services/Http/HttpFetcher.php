<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Services\Http;
	
	use phpweb\Services\Builder\InjectableService;
	
	class HttpFetcher implements InjectableService
	{
		/**
		 * @throws FetchException
		 */
		public function fetch(string $url): string {
			$content = @file_get_contents($url);
			if ($content === false) {
				throw new FetchException('Unable to fetch ' . $url);
			}
			
			return $content;
		}
		
		/**
		 * @throws FetchException
		 */
		public function fetchJson(string $uri): object {
			try {
				return \json_decode($this->fetch($uri), false, 512, JSON_THROW_ON_ERROR);
			}
			catch (\JsonException $ex) {
				throw new FetchException('Could not parse content as JSON; ' . $ex->getMessage());
			}
		}
		
		/**
		 * @throws FetchException
		 */
		public function fetchXml(string $uri): \SimpleXMLElement {
			$xml = @simplexml_load_string($uri);
			if ($xml === false) {
				throw new FetchException('Could not parse content as XML');
			}
			
			return $xml;
		}
	}