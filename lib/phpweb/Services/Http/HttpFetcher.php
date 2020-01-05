<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Services\Http;
	
	use GuzzleHttp\Client;
	use GuzzleHttp\Exception\GuzzleException;
	use GuzzleHttp\Exception\RequestException;
	use phpweb\Services\Builder\InjectableService;
	
	class HttpFetcher implements InjectableService
	{
		private Client $client;
		
		public function __construct() {
			$this->client = new Client();
		}
		
		/**
		 * @throws FetchException
		 */
		public function fetch(string $url): string {
			$tmp = sys_get_temp_dir() . '/' . hash('sha256', $url) . '.tmp1';
			if (file_exists($tmp)) {
				return file_get_contents($tmp);
			}
			
			$client = $this->client;
			try {
				$content = $client->get($url)->getBody()->getContents();
			}
			catch (GuzzleException $ex) {
				throw new FetchException('Cannot fetch ' . $url . '; ' . $ex->getMessage(), 0, $ex);
			}
			
			if (file_put_contents($tmp, $content) === false) {
				@unlink($tmp);
				// die('Failed to write contents, it didnt work');
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
			$xml = @simplexml_load_string($this->fetch($uri));
			if ($xml === false) {
				throw new FetchException('Could not parse content as XML');
			}
			
			return $xml;
		}
	}