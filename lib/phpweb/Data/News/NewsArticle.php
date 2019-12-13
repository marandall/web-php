<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\News;
	
	class NewsArticle
	{
		private $id;
		
		/** @var array */
		private $data;
		
		/** @var NewsArticleLink[]|null */
		private $links = null;
		
		/** @var \DateTimeImmutable|null */
		private $published = null;
		
		public function __construct(array $data) {
			$this->id = $data['id'];
			$this->data = $data;
		}
		
		public function getTitle(): string {
			return $this->data['title'] ?? '';
		}
		
		public function getId():  string {
			return $this->id;
		}
		
		public function getTime(): \DateTimeImmutable {
			if ($this->published === null) {
				return $this->published = new \DateTimeImmutable($this->data['published']);
			}
			
			return $this->published;
		}
		
		public function getContentsHTML(): string {
			return $this->data['content'] ?? '';
		}
		
		public function getIntroHTML(): string {
			return $this->data['intro'] ?? '';
		}
		
		public function getCategories(): array {
			return $this->data['category'] ?? [];
		}
		
		public function hasCategory(string $category_term): bool {
			foreach ($this->getCategories() as $category) {
				if ($category['term'] === $category_term) {
					return true;
				}
			}
			
			return false;
		}
		
		public function getLinks(): array {
			if ($this->links !== null) {
				return $this->links;
			}
			
			$this->links = [];
			foreach ($this->data['link'] as $link) {
				$this->links[] = new NewsArticleLink($link['href'], $link['rel'], $link['type']);
			}
			
			return $this->links;
		}
	}