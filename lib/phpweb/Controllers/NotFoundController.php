<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers;
	
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\FreshTemplate;
	
	class NotFoundController implements ControllerInterface
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
				->setPageTitle('Not Found')
				->render([$this, 'renderContents']);
		}
		
		
		public function renderContents() {
			?>
			<p style="text-align: center">
				Page Not Found
			</p>
			<?php
		}
		
	}