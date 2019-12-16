<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Templates;
	
	class BasicPanel implements SidePanelInterface
	{
		/**
		 * @var string
		 */
		private $title;
		
		/**
		 * @var string
		 */
		private $contents;
		
		public function __construct(string $title, string $contents) {
			$this->title = $title;
			$this->contents = $contents;
		}
		
		public function draw() {
			echo $this->contents;
		}
		
		/**
		 * @return string
		 */
		public function getTitle(): string {
			return $this->title;
		}
	}