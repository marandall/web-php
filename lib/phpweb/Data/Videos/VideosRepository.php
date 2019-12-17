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
	}