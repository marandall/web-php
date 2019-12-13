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
			?>
			<div>
				<h2><?= htmlspecialchars($this->title) ?></h2>
				<div>
					<?= $this->contents ?>
				</div>
			</div>
			<?php
		}
	}