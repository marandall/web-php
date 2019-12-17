<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Controllers\Middleware\UiReleasesMiddleware;
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Branches\BranchRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services;
	use phpweb\Services\ReleaseFeedBuilder\FeedBuilderFactory;
	use phpweb\Tools\ReleaseTableRenderer;
	use phpweb\UI\Templates\FreshTemplate;
	
	class VersionsIndexController implements ControllerInterface
	{
		
		private BranchRepository $branch_repository;
		
		private FeedBuilderFactory $feed_factory;
		
		public function __construct(
			BranchRepository $branch_repository,
			FeedBuilderFactory $feed_factory
		) {
			$this->branch_repository = $branch_repository;
			$this->feed_factory      = $feed_factory;
		}
		
		public function load(): array {
			return [
				UiInjector::class,
				UiReleasesMiddleware::class,
				$this,
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			return $request->get(FreshTemplate::class)
				->setPageTitle('Version History')
				->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			$branches = $this->branch_repository->all();
			usort(
				$branches,
				fn(Branch $b, Branch $a) => ($a->getMajorVer() - $b->getMajorVer())
					?: ($b->getMinorVer() - $b->getMinorVer())
			);
			
			?>
            <p>
                This is the human-readable index of every version of PHP. There are also various APIs available
                to allow you to read the data programmatically such as <a href="api/releases.atom" target="_blank">releases.atom</a>
                and <a href="api/supported.atom" target="_blank">supported.atom</a>.
            </p>
			<?php
			
			foreach ($branches as $branch) {
				?>
                <h2>PHP <?= htmlspecialchars($branch->getBranchId()) ?></h2>
                <p>
                    For more information about PHP <?= htmlspecialchars($branch->getBranchId()) ?> please see
                    the <a href="<?= htmlspecialchars($branch->getUrl()) ?>"><?= htmlspecialchars(
							$branch->getBranchId()
						) ?> Branch Page</a>.
                </p>
				
				<?php
				Services::get(ReleaseTableRenderer::class)->render(array_reverse($branch->getReleasesByVersion()));
			}
		}
	}