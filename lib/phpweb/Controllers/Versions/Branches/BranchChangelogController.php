<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Branches;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Controllers\Middleware\UiReleasesMiddleware;
	use phpweb\Data\Branches\Branch;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services\ChangelogRenderer\ChangelogRenderer;
	use phpweb\UI\Templates\FreshTemplate;
	
	class BranchChangelogController implements ControllerInterface
	{
		private ChangelogRenderer $changelog_renderer;
		
		public function __construct(ChangelogRenderer $changelog_renderer) {
			$this->changelog_renderer = $changelog_renderer;
		}
		
		public function load(): array {
			return [
				UiInjector::class,
				UiReleasesMiddleware::class,
				BranchLoaderMiddleware::class,
				$this,
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
		    $branch = $request->get(Branch::class);
		    return $request
                ->get(FreshTemplate::class)
                ->setPageTitle('PHP ' . $branch->getBranchId() . ' Combined Changelog')
                ->render(function() use ($branch) {
                     $this->renderContents($branch);
                });
		}
		
		public function renderContents(Branch $brach) {
			foreach (array_reverse($brach->getReleasesByVersion()) as $release) {
				?>
                <section class="r2-sec">
                    <h2>PHP <?= htmlspecialchars($release->getVersionId()) ?></h2>
                    <div>
	                    <?php $this->changelog_renderer->render($release->getModulesWithChanges()); ?>
                    </div>
                </section>
				<?php
			}
		}
	}