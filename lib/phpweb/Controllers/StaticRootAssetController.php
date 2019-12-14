<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers;
	
	use phpweb\Config\Site;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	class StaticRootAssetController
	{
		public function __invoke(Request $request): Response {
			$mime = [
				'xml' => 'application/xml',
				'txt' => 'text/plain',
				'ico' => 'image/vnd.microsoft.icon',
			];
			
			$file = substr($request->getUrl(), 1);
			
			$path = Site::GetDataDir() . '/root_assets/' . $file;
			
			/* mime type given will be based on the file extension */
			$sig  = explode('.', $path);
			$mime = $mime[$sig[count($sig) - 1]];
			
			$contents = @file_get_contents($path);
			if ($contents === false) {
				return new Response('Not Found', 404);
			}
			
			return new Response($contents, 200, ['Content-Type' => $mime]);
		}
	}