<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Framework;
	
	use phpweb\Data\Languages;
	
	/**
	 * Represents a user that is visiting the website
	 *
	 * As there are no sessions available, this will all be done using unauthenticated cookies
	 * so it's important to be extra careful to validate the data where it is read and used
	 */
	
	class Visitor
	{
		private const CV_LANGUAGE = 'language';
		private const CV_SEARCH_FALLBACK = 'search';
		
		/** @var array */
		private $cookies;
		
		public function __construct(array $cookies) {
			$this->cookies = $cookies;
		}
		
		protected function readValue(string $key, $default): string {
			return $this->cookies[$key] ?? $default;
		}
		
		public function writeValue(string $key, $value) {
		
		}
		
		public function getLanguage(): string {
			$lang = $this->readValue(self::CV_LANGUAGE, 'en');
			if ($lang === '') {
				return 'en';
			}
			
			if (isset(Languages::ACTIVE[$lang])) {
				return $lang;
			}
			
			return 'en';
		}
		
		public function setLanguage(string $lang) {
			$this->writeValue(self::CV_LANGUAGE, $lang);
		}
		
		public function getFallbackSearch(): string {
			return $this->readValue(self::CV_SEARCH_FALLBACK, 'functions');
		}
		
		public function setFallbackSearch(string $method) {
			$this->writeValue(self::CV_SEARCH_FALLBACK, $method);
		}
		
		public function getCountry(): string {
			return 'en';
		}
	}