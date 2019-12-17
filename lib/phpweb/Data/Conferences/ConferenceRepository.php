<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Conferences;
	
	use phpweb\Config\Site;
	use phpweb\Services\Builder\InjectableService;
	
	class ConferenceRepository implements InjectableService
	{
		/** @var Conference[]|null */
		private $cache = null;
		
		/**
		 * Reads all of the conferences from the data dump
		 *
		 * @return Conference[]
		 */
		
		public function all(): array {
			if ($this->cache !== null) {
				return $this->cache;
			}
			
			$input_data = require Site::GetDataDir() . '/compiled/conferences.php';
			
			foreach ($input_data as $input_datum) {
				$conf = new Conference($input_datum);
				$this->cache[$conf->getId()] = $conf;
			}
			
			return $this->cache;
		}
		
		/**
		 * Reads the conferences which are upcoming (or have not ended)
		 *
		 * @return Conference[]
		 */
		public function upcoming(): array {
			$boundary = new \DateTime('now');
			
			/** @var Conference[] $results */
			$results = [];
			
			foreach ($this->all() as $conference) {
				if ($conference->getEndDate()->getTimestamp() > $boundary->getTimestamp()) {
					$results[] = $conference;
				}
			}
			
			return $results;
		}
		
		
		public function find(string $conference_id): ?Conference {
			foreach ($this->all() as $conference) {
				if ($conference->getId() === $conference_id) {
					return $conference;
				}
			}
			
			return null;
		}
	}