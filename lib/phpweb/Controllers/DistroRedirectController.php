<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers;
	
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	class DistroRedirectController
	{
		public function __invoke(Request $request): Response {
			$path = $request->getAttributesBag()->getString('path', '');
			$url  = 'https://www.php.net/distributions/' . $path;
			
			return new Response(
				'Redirecting to ' . $url,
				307,
				[
					'Location'     => $url,
					'Content-Type' => 'text/plain',
				]
			);
		}
	}