<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Conferences;
	
	use phpweb\Config\Site;
	use phpweb\Services\Builder\InjectableService;
	
	class ConferenceRepository implements InjectableService
	{
		/** @var Conference[]|null - Cache stored in ascending start time */
		private $cache = null;
		
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
				$conf                        = new Conference($input_datum);
				$this->cache[$conf->getId()] = $conf;
			}
			
			uasort(
				$this->cache,
				fn(Conference $a, Conference $b) => $a->getStartDate()->getTimestamp()
					- $b->getStartDate()->getTimestamp()
			);
			
			return $this->cache;
		}
		
		public function find(string $conference_id): ?Conference {
			foreach ($this->all() as $conference) {
				if ($conference->getId() === $conference_id) {
					return $conference;
				}
			}
			
			return null;
		}
		
		/**
		 * @return Conference[]
		 */
		
		public function allOrderedByStartDate(): array {
			return $this->all();
		}
		
		/**
		 * Finds the next conference after the current timestamp
		 *
		 * @param int $timestamp
		 * @return Conference|null
		 */
		
		public function findFirstAfter(int $timestamp): ?Conference {
			foreach ($this->allOrderedByStartDate() as $conference) {
				if ($conference->getStartDate()->getTimestamp() > $timestamp) {
					return $conference;
				}
			}
			
			return null;
		}
		
		
		/**
		 * Finds the previous conference before the current timestamp
		 *
		 * @param int $timestamp
		 * @return Conference|null
		 */
		
		public function findFirstBefore(int $timestamp): ?Conference {
			/** @var Conference|null $current */
			$current = null;
			
			foreach ($this->allOrderedByStartDate() as $conference) {
				$ct = $conference->getStartDate()->getTimestamp();
				if ($ct < $timestamp) {
					$current = $conference;
				}
				else if ($ct >= $timestamp) {
					break;
				}
			}
			
			return $current;
		}
	}