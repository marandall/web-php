<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Manual\En;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\BasicPanel;
	use phpweb\UI\Templates\FreshTemplate;
	
	/**
	 * Oh oh oh, this is a terrible idea...
	 *
	 * Pulls data straight from the live site, and attempts to parse it to get just the
	 * meat of the information, and then reformats it to use here
	 */
	class EnglishManualRouter implements ControllerInterface
	{
		public function load(): array {
			return [
				UiInjector::class,
				$this,
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			$manual_path = $request->getAttributesBag()->getString('manual_path');
			
			$manual_uri = 'https://www.php.net/manual/en/' . $manual_path;
			$contents   = @file_get_contents($manual_uri);
			if ($contents === false) {
				die('Manual page could not be fetched');
			}
			
			$map = [
				'ref'      => 'reference',
				'function' => 'refentry',
				'refs'     => 'set',
				'class'    => 'reference',
				'install'  => 'chapter',
			];
			
			$seg    = explode('.', $manual_path);
			$prefix = $seg[0];
			
			$inner = $this->clip(
				$contents, '<div id="' . $manual_path . '" class="' . ($map[$prefix] ?? 'reference') . '">',
				'<section id="usernotes">',
				-6
			);
			
			if ($inner === null) {
				return $this->badRequestResponse('Could not parse the HTML');
			}
			
			$menu_html = $this->clip(
				$contents,
				"<aside class='layout-menu'>",
				'</aside>',
				0
			);
			
			$refname = $this->clip(
				$contents,
				'<h1 class="refname">',
				'</h1>',
				0
			);
			
			/* prevents title duplication */
			$inner = str_replace('<h1 class="refname">' . $refname . '</h1>', '', $inner);
			
			return $request
				->get(FreshTemplate::class)
				->addSidePanel(new BasicPanel('Navigation', $menu_html))
				->setPageTitle((string)$refname)
				->render(
					static function () use ($inner) {
					echo '<div class="r2-manual">' . $inner . '</div>';
				}
			);
		}
		
		private function clip(string $contents, string $start_tag, string $end_tag, int $clip): ?string {
			$st_find = strpos($contents, $start_tag);
			if ($st_find === false) {
				return null;
			}
			
			$st_close = strpos($contents, $end_tag, $st_find + strlen($start_tag));
			if ($st_close === false) {
				return null;
			}
			
			return substr(
				$contents,
				$st_find + strlen($start_tag),
				$st_close - $st_find - strlen($start_tag) - $clip // required for final </div>,
			);
		}
		
		private function badRequestResponse(string $error): Response {
			return $this->render(
				static function () use ($error) {
					echo 'Cannot handle that page - ' . htmlspecialchars($error);
				}
			);
		}
	}