<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\About;
	
	use phpweb\Controllers\MiddlewareInterface;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	class AboutMiddleware implements MiddlewareInterface
	{
		public function __invoke(Request $request, ?callable $next): Response {
			return $next($request);
		}
	}