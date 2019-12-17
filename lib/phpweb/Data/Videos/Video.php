<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Videos;
	
	use phpweb\Config\Site;
	
	class Video
	{
		/** @var array */
		private $data;
		
		public function __construct(array $data) {
			$this->data = $data;
		}
		
		public function getId(): string {
			return $this->data['id'];
		}
		
		public function getTitle(): string {
			return $this->data['title'];
		}
		
		public function getDescription(): string {
			return $this->data['description'];
		}
		
		public function getGroupId(): string {
			return $this->data['group'];
		}
		
		public function getWatchUrl(): string {
			return $this->data['watch_url'];
		}
		
		public function getAddedTime(): \DateTimeImmutable {
			return new \DateTimeImmutable($this->data['added_time']);
		}
		
		public function getThumbnailUri(): string {
			return Site::$BaseUrl . '/static/content/videos/thumbs/' . $this->data['thumbnail'];
		}
	}
	