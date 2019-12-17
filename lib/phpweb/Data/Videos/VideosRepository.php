<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Videos;
	
	use phpweb\Config\Site;
	
	class VideosRepository
	{
		/** @var Video[]|null */
		private $cache = null;
		
		/**
		 * @return Video[]
		 */
		public function all(): array {
			if ($this->cache !== null) {
				return $this->cache;
			}
			
			$all_videos = require Site::GetDataDir() . '/compiled/videos.php';
			$results = [];
			
			foreach ($all_videos as $data) {
				$video = new Video($data);
				$results[$video->getId()] = $video;
			}
			
			return $this->cache = $results;
		}
		
		/**
		 * Allows looking up an individual video
		 */
		
		public function find(string $id): ?Video {
			return $this->all()[$id] ?? null;
		}
		
		/**
		 * Returns an array of promoted videos, although to start with this will only be the one
		 *
		 * @return Video[]
		 */
		
		public function getPromoted(int $limit = 3): array {
			$path = Site::GetDataDir() . '/compiled/videos_promoted.php';
			if (!file_exists($path) || !is_readable($path)) {
				return [];
			}
			
			$promoted = [];
			foreach (require $path as $video_id) {
				$found = $this->all()[$video_id] ?? null;
				if ($found) {
					$promoted[] = $found;
				}
			}
			
			return array_slice($promoted, 0, $limit);
		}
	}