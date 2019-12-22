<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Services\MemoryCache;
	
	class KeyValueStore
	{
		private \Redis $redis;
		
		public function __construct() {
			$this->redis = new \Redis('localhost');
		}
		
		public function get() {
		
		}
	}