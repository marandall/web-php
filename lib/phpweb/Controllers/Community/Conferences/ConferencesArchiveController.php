<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Community\Conferences;
	
	use phpweb\Controllers\Community\Conferences\Tools\ConferenceInfoRenderer;
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\CommunityMiddleware;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Data\Conferences\Conference;
	use phpweb\Data\Conferences\ConferenceRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\FreshTemplate;
	
	class ConferencesArchiveController implements ControllerInterface
	{
		private ConferenceInfoRenderer $conference_renderer;
		
		private ConferenceRepository $repository;
		
		public function __construct(
			ConferenceRepository $repository,
			ConferenceInfoRenderer $conference_renderer
		) {
			$this->conference_renderer = $conference_renderer;
			$this->repository          = $repository;
		}
		
		public function load(): array {
			return [
				UiInjector::class,
				CommunityMiddleware::class,
				$this,
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			return $request
				->get(FreshTemplate::class)
				->setPageTitle('Worldwide PHP Conferences Archive')
				->render([$this, 'renderContents']);
		}
		
		
		public function renderContents() {
			/** @var Conference[] $found */
			$found = [];
			foreach ($this->repository->all() as $conference) {
				if ($conference->getEndDate()->getTimestamp() < time()) {
					$found[] = $conference;
				}
			}
			
			?>
            <div class="r2-separated-sections">
				<?php
					foreach ($found as $conf) {
						$this->conference_renderer->render($conf, false);
					}
				?>
            </div>
			<?php
		}
	}