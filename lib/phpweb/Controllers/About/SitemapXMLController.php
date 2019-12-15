<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\About;
	
	use phpweb\Data\Branches\Branches;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	class SitemapXMLController
	{
		public function __invoke(Request $request): Response {
			$xml = simplexml_load_string(
				'<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
							  xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"
							  xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>'
			);
			
			$locations = [];
		
			foreach (Branches::GetBranches() as $branch) {
				$locations[] = $branch->getUrl();
				
				foreach ($branch->getReleasesByVersion() as $release) {
					$locations[] = $release->getUrl();
				}
			}
			
			foreach ($locations as $loc) {
				$xml->addChild('url')->addChild('loc', $loc);
			}
			
			return new Response($xml->asXML(), 200, ['Content-Type' => 'application/xml']);
		}
	}