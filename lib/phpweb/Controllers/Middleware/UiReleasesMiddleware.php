<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Middleware;
	
	use phpweb\Controllers\MiddlewareInterface;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	class UiReleasesMiddleware implements MiddlewareInterface
	{
		public function __invoke(Request $request, ?callable $next): Response {
			return $next($request);
		}
	}