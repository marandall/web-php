<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Downloads;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Data\Branches\BranchRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Notices\BranchNoticeFactory;
	use phpweb\UI\Templates\FreshTemplate;
	
	class WindowsController implements ControllerInterface
	{
		private BranchRepository $branch_repository;
		
		private BranchNoticeFactory $branch_notice_factory;
		
		public function __construct(BranchRepository $branch_repository, BranchNoticeFactory $branch_notice_factory) {
			$this->branch_repository     = $branch_repository;
			$this->branch_notice_factory = $branch_notice_factory;
		}
		
		public function load(): array {
			return [
				UiInjector::class,
				$this,
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			return $request
				->get(FreshTemplate::class)
				->setPageTitle('Download PHP for Windows')
				->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			foreach ($this->branch_repository->supportedByBranchDescending() as $branch) {
				$release = $branch->getLatestWindowsRelease();
				if ($release === null) {
					continue;
				}
				
				?>
                <section class="r2-sec">
                    <h2>PHP <?= htmlspecialchars($release->getVersionId()) ?></h2>
                    <div>
						<?php
							foreach ($this->branch_notice_factory->find($branch) as $notice) {
								$notice->draw();
							}
						?>

                        <p>
                        <ul>
							<?php
								foreach ($release->getWindowsBuilds() as $build) {
									$zip = $build->getDownloadZip();
									if ($zip === null) {
										continue;
									}
									?>
                                    <li style="margin-bottom: 1em">
                                        <div style="font-weight:  bold"><?= htmlspecialchars(
												$build->getLabel()
											) ?></div>
                                        <div><a href="<?= htmlspecialchars($zip->getUrl()) ?>"><?= htmlspecialchars(
													$zip->getPath()
												) ?></a></div>
                                        <div style="font-family: 'Courier New'; font-size: smaller">
                                            SHA256: <?= htmlspecialchars($zip->getSha256()) ?></div>
                                    </li>
									<?php
								}
							?>
                        </ul>
                        </p>
                        If you would like to see a complete list of Windows downloads
                        for PHP <?= htmlspecialchars($release->getVersionId()) ?>, including debugging &amp; development
                        kits, please
                        <a href="<?= htmlspecialchars($release->getUrl() . 'install/windows-downloads') ?>">see here</a>.
                        </p>
                    </div>
                </section>
				<?php
			}
		}
	}