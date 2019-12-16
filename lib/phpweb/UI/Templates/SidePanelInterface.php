<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Templates;
	
	interface SidePanelInterface
	{
		public function getTitle(): string;
		public function draw();
	}