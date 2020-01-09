<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release;
	
	use phpweb\Config\Site;
	use phpweb\Services\Builder\InjectableService;
	
	class ReleasesRepository implements InjectableService
	{
		/** @var Release[]|null */
		private $cache = null;
		
		/**
		 * @return Release[]
		 */
		
		public function all(): array {
			if ($this->cache !== null) {
				return $this->cache;
			}
			
			$source_path = Site::GetDataDir() . '/compiled/releases.php';
			
			$mt = microtime(true);
			$source_data = require $source_path;
			$this->cache = $source_data;
			
			header('X-Import-Time: ' . (microtime(true) - $mt));
			return $this->cache;
		}
		
		public function find(string $release_version): ?Release {
			return $this->all()[$release_version] ?? null;
		}
	}