<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Release\Install;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Controllers\Middleware\UiReleasesMiddleware;
	use phpweb\Controllers\Versions\Releases\ReleaseLoaderMiddleware;
	use phpweb\Data\Release\Release;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\FreshTemplate;
	
	class InstallFromSourceController implements ControllerInterface
	{
		public function load(): array {
			return [
				UiInjector::class,
				UiReleasesMiddleware::class,
				ReleaseLoaderMiddleware::class,
				$this
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			$release = $request->get(Release::class);
			
			return $request->get(FreshTemplate::class)
				->setPageTitle('Install ' . $release->getVersionId() . ' From Source')
				->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			
		}
		
	}