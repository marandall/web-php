<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Templates;
	
	class BasicCallbackPanel implements SidePanelInterface
	{
		/**
		 * @var string
		 */
		private string $title;
		
		/**
		 * @var callable
		 */
		private $contents;
		
		public function __construct(string $title, callable $contents) {
			$this->title = $title;
			$this->contents = $contents;
		}
		
		public function draw() {
            ($this->contents)();
		}
		
		/**
		 * @return string
		 */
		public function getTitle(): string {
			return $this->title;
		}
	}