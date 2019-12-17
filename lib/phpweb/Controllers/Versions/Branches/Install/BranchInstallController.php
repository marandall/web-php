<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Branches\Install;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Controllers\Middleware\UiReleasesMiddleware;
	use phpweb\Controllers\Versions\Branches\BranchLoaderMiddleware;
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Branches\InstallHelpers\HelperSearch;
	use phpweb\Data\StabilityEnum;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services;
	use phpweb\UI\Notices\BranchSecurityOnlyNotice;
	use phpweb\UI\Notices\BranchUnsupportedNotice;
	use phpweb\UI\Templates\FreshTemplate;
	
	class BranchInstallController implements ControllerInterface
	{
		public function load(): array {
			return [
				UiInjector::class,
				UiReleasesMiddleware::class,
                BranchLoaderMiddleware::class,
                $this
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			$branch = $request->get(Branch::class);
			return $request
                ->get(FreshTemplate::class)
                ->setPageTitle('Download and Install ' . $branch->getBranchId())
                ->render(fn() => $this->renderContents($branch));
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
			
			$latest = $branch->getLatestRelease();
			
			$helpers = Services::get(HelperSearch::class)->findHelpers($branch);
			
			?>

            <div style="text-align: center">
                Here are the methods available for downloading and installing
                <a href="<?= htmlspecialchars($branch->getUrl()) ?>">PHP <?= htmlspecialchars(
						$branch->getBranchId()
					) ?></a> on a variety of different platforms.
            </div>

            <div style="font-size: 150%; text-align: center; padding: 1em">
                Latest Release: <a href="<?= htmlspecialchars($latest->getUrl()) ?>">PHP <?= htmlspecialchars(
						$latest->getVersionId()
					) ?></a> <?= htmlspecialchars('(' . $latest->getDate()->format('d M Y') . ')') ?>
            </div>

            <div style="text-align: center; margin-bottom: 1em">
				<?php
					foreach ($helpers as $method) {
						?>
                        <a style="display: inline-block; width: 160px; background-color: #fafafa; padding: 10px; border: 1px solid #aaaaaa; text-align: center; margin: 10px; border-radius: 10px"
                           href="<?= htmlspecialchars($method->getUri()) ?>">
                            <img src="<?= htmlspecialchars($method->getImageUri()) ?>"
                                 alt="<?= htmlspecialchars($method->getDescription()) ?>"
                                 style="width: 100%"/>

                            <div>
								<?= htmlspecialchars($method->getDescription()) ?>
                            </div>
                        </a>
						<?php
					}
				?>
            </div>
			<?php
		}
	}