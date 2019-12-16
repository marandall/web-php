<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Templates;
	
	interface RendererInterface
	{
		public function render(PHPWebTemplate $tpl, callable $body);
	}