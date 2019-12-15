<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Conferences;
	
	use phpweb\Config\Site;
	
	/**
	 * DTO representing a single conference
	 */
	class Conference
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
		
		public function getStartDate(): \DateTimeImmutable {
			return new \DateTimeImmutable($this->data['start_date']);
		}
		
		public function getEndDate(): \DateTimeImmutable {
			return new \DateTimeImmutable($this->data['end_date']);
		}
		
		public function getSummaryText(): string {
			return $this->data['summary'] ?? '';
		}
		
		public function getContentsHTML(): string {
			return $this->data['content'] ?? '';
		}
		
		public function getImageUrl(): string {
			return Site::$BaseUrl . '/static/images/news/' . $this->data['image'] ?? '';
		}
		
		public function getWebsiteLink(): string {
			return $this->data['website'] ?? '';
		}
		
		/**
		 * Returns the Alpha3 country code that this conference takes place in
		 * if it has one.
		 *
		 * Historical conferences do not have this field.
		 */
		
		public function getCountryCode(): string {
			return $this->data['country'] ?? '';
		}
		
		/**
		 * Returns the user-provided location name for this conference
		 *
		 * Historical conferences do not have this field
		 */
		
		public function getLocationName(): string {
			return $this->data['location'] ?? '';
		}
	}