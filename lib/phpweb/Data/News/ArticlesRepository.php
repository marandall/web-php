<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\News;
	
	use phpweb\Config\Site;
	
	class ArticlesRepository
	{
		/** @var NewsArticle[]|null */
		private $cache = null;
		
		protected static function GetArticlesData(): array {
			return require Site::GetDataDir() . '/news/compiled.inc';
		}
		
		/**
		 * @return NewsArticle[]
		 */
		public function all(): array {
			if ($this->cache !== null) {
				return $this->cache;
			}
			
			foreach (self::GetArticlesData() as $article_data) {
				$this->cache[] = new NewsArticle($article_data);
			}
			
			usort($this->cache, function(NewsArticle $a, NewsArticle $b) {
				return $b->getTime()->getTimestamp() <=> $a->getTime()->getTimestamp();
			});
			
			return $this->cache;
		}
	}