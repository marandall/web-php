<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers;
	
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\FreshTemplate;
	
	class CreditsController  implements ControllerInterface
	{
		public function load(): array {
			return [
				UiInjector::class,
				$this,
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			return $request
				->get(FreshTemplate::class)
				->setPageTitle('Credits')
				->render([$this, 'renderContents']);
		}
		
		
		public function renderContents() {
            // Put credits information to $credits
			ob_start();
			phpcredits();
			$credits = ob_get_contents();
			ob_end_clean();

            // Strip all but the body and drop styles
			preg_match('!<body.*?>(.*)</body>!ims', $credits, $m);
			$credits = preg_replace('!<style.*?>.*</style>!ims', '', $m[1]);

            // Fix for PHP bug #24839,
            // which affects the page layout
			$credits = str_replace(
				array('</center>', '& ', 'class="center"'),
				array('</div>', '&amp; ', ''),
				$credits
			);
			
			echo '<div style="text-align: left">' . $credits . '</div>';
		}
	}
	