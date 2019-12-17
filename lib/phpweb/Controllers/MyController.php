<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers;
	
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\FreshTemplate;
	
	class MyController implements ControllerInterface
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
				->setPageTitle('My PHP.net Preferences')
				->render(fn() => $this->renderContents($request));
		}
		
		public function renderContents(Request $request) {
			$country = $request->getVisitor()->getCountry();
			?>
			
			<?php
		}
	}