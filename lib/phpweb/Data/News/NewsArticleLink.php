<?php
	
	declare(strict_types=1);
	
	
	namespace phpweb\Data\News;
	
	class NewsArticleLink
	{
		/** @var string */
		private $href;
		
		/** @var string */
		private $rel;
		
		/** @var string */
		private $type;
		
		public function __construct(string $href, string $rel, string $type) {
			$this->href = $href;
			$this->rel  = $rel;
			$this->type = $type;
		}
		
		public function getHref(): string {
			return $this->href;
		}
		
		public function getRel(): string {
			return $this->rel;
		}
		
		public function getType(): string {
			return $this->type;
		}
	}