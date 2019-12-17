<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Community\Conferences;
	
	use phpweb\Controllers\Community\Conferences\Tools\ConferenceInfoRenderer;
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\CommunityMiddleware;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Data\Conferences\ConferenceRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services;
	use phpweb\UI\Templates\FreshTemplate;
	
	class ConferencesArchiveController implements ControllerInterface
	{
		public function load(): array {
			return [
				UiInjector::class,
				CommunityMiddleware::class,
				$this
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			return $request
				->get(FreshTemplate::class)
				->setPageTitle('Worldwide PHP Conferences Archive')
				->render([$this, 'renderContents']);
		}
		
		
		public function renderContents() {
			$repo = Services::get(ConferenceRepository::class);
			$renderer = Services::get(ConferenceInfoRenderer::class);
			
			foreach ($repo->all() as $conference) {
				if ($conference->getEndDate()->getTimestamp() < time()) {
					$renderer->render($conference);
				}
			}
		}
	}