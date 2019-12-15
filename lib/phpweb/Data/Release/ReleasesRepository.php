<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release;
	
	use phpweb\Config\Site;
	
	class ReleasesRepository
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
			$source_data = require $source_path;
			
			$output = [];
			foreach ($source_data as $release_id => $data) {
				$output[$release_id] = new Release($release_id, $data);
			}
			
			return $this->cache = $output;
		}
	}