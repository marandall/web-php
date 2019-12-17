<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers;
	
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	interface MiddlewareInterface
	{
		public function __invoke(Request $request, ?callable $next): Response;
	}