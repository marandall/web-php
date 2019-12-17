<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Branches;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Controllers\Middleware\UiReleasesMiddleware;
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\StabilityEnum;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services;
	use phpweb\Tools\ReleaseTableRenderer;
	use phpweb\UI\Notices\BranchSecurityOnlyNotice;
	use phpweb\UI\Notices\BranchUnsupportedNotice;
	use phpweb\UI\Templates\FreshTemplate;
	
	class BranchController implements ControllerInterface
	{
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
				->setPageTitle('PHP ' . $branch->getBranchId())
				->render(
					function () use ($branch) {
						$this->renderContents($branch);
					}
				);
		}
		
		public function renderContents(Branch $branch) {
			switch ($branch->getStability()) {
				case StabilityEnum::SECURITY:
					(new BranchSecurityOnlyNotice($branch))->draw();
					break;
				
				case StabilityEnum::UNSUPPORTED:
					(new BranchUnsupportedNotice($branch))->draw();
					break;
			}
			
			$initial = $branch->getInitialRelease();
			if ($initial) {
				echo $initial->getAnnouncementHTML();
			}
			?>
			
			<?php if ($branch->isSupported()) { ?>
                <div style="text-align: center; margin-bottom: 1em">
                    <a href="./install/"
                       style="text-align: center; padding: 20px; background: #dddddd; margin: 10px; display: inline-block; width: 50%; font-size: large">
                        Download / Install PHP <?= htmlspecialchars($branch->getBranchId()) ?>
                    </a>
                </div>
			<?php } ?>

            <a id="history"></a>
            <h3>Version History</h3>

            <div style="margin-bottom: 1em;">
                The following <?= count($branch->getReleasesByVersion()) ?> versions of PHP <?= htmlspecialchars(
					$branch->getBranchId()
				) ?> have been released:
            </div>
			
			<?php
			Services::get(ReleaseTableRenderer::class)->render(array_reverse($branch->getReleasesByVersion()));
		}
	}