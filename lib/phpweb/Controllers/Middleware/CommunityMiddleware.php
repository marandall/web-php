<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Middleware;
	
	use phpweb\Controllers\MiddlewareInterface;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\FreshTemplate;
	
	class CommunityMiddleware implements MiddlewareInterface
	{
		public function __invoke(Request $request, ?callable $next): Response {
			if ($request->has(FreshTemplate::class)) {
				$request->get(FreshTemplate::class);
			}
			return $next($request);
		}
	}