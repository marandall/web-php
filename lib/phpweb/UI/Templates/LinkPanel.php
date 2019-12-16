<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Templates;
	
	class LinkPanel implements SidePanelInterface
	{
		/** @var string */
		private $title;
		
		private $links = [];
		
		public function __construct(string $title) {
			$this->title = $title;
		}
		
		public function draw() {
			$output = ['<ul style="margin-bottom: 0;  padding-bottom: 0">'];
			foreach ($this->links as $link) {
				$output[] = sprintf(
					'<li><a href="%s" target="%s">%s</a></li>',
					htmlspecialchars($link['href']),
					htmlspecialchars($link['target']),
					htmlspecialchars($link['label'])
				);
			}
			$output[] = '</ul>';
			echo implode('', $output);
		}
		
		public function getTitle(): string {
			return $this->title;
		}
		
		public function add(string $href, string $label, string $target = '_self'): self {
			$this->links[] = [
				'href'   => $href,
				'label'  => $label,
				'target' => $target,
			];
			
			return $this;
		}
	}