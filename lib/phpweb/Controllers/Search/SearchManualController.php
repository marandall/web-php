<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Search;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\FreshTemplate;
	
	class SearchManualController implements ControllerInterface
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
				->setPageTitle('')
				->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			echo 'todo';
		}
	}