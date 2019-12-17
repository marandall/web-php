<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers;
	
	interface ControllerInterface extends MiddlewareInterface
	{
		/* returns an array of object instances to use for these controllers */
		public function load(): array;
	}