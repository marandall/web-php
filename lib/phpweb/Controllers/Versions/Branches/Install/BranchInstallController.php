<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Branches\Install;
	
	use phpweb\Controllers\Versions\Branches\BranchRouter;
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\StabilityEnum;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Notices\BranchSecurityOnlyNotice;
	use phpweb\UI\Notices\BranchUnsupportedNotice;
	
	class BranchInstallController extends BranchRouter
	{
		protected function invokeForBranch(Request $request, Branch $branch): Response {
			$this->setPageTitle('Download & Install PHP ' . $branch->getBranchId());
			return $this->render(
				function () use ($request, $branch) {
					$this->renderContents($request, $branch);
				}
			);
		}
		
		public function renderContents(Request $request, Branch $branch) {
			switch ($branch->getStability()) {
				case StabilityEnum::SECURITY:
					(new BranchSecurityOnlyNotice($branch))->draw();
					break;
				
				case StabilityEnum::UNSUPPORTED:
					(new BranchUnsupportedNotice($branch))->draw();
					break;
			}
			
			$methods = [
				[
					'label' => 'Ubuntu / Debian',
					'icon'  => '/static/images/logos/installers/launchpad.png',
					'url'   => $branch->getUrl() . 'install/ubuntu_ppa',
				],
				[
					'label' => 'Windows IIS',
					'icon'  => '/static/images/logos/installers/iis.png',
					'url'   => $branch->getUrl() . 'install/iis',
				],
				[
					'label' => 'Docker',
					'icon'  => '/static/images/logos/installers/docker.png',
					'url'   => $branch->getUrl() . 'install/docker',
				],
				[
					'label' => 'Compile From Source',
					'icon'  => '/static/images/logos/installers/php.png',
					'url'   => $branch->getUrl() . 'install/source',
				],
			];
			
			$latest = $branch->getLatestRelease();
			
			?>
            
            <div style="text-align: center">
                Here are the methods available for downloading and installing
                <a href="<?= htmlspecialchars($branch->getUrl()) ?>">PHP <?= htmlspecialchars($branch->getBranchId()) ?></a> on a variety of different platforms.
            </div>

            <div style="font-size: 150%; text-align: center; padding: 1em">
                Latest Release: <a href="<?= htmlspecialchars($latest->getUrl())?>">PHP <?= htmlspecialchars($latest->getVersionId()) ?></a> <?= htmlspecialchars('(' . $latest->getDate()->format('d M Y') . ')') ?>
            </div>
            
            <div style="text-align: center; margin-bottom: 1em">
				<?php
					foreach ($methods as $method) {
						?>
                        <a style="display: inline-block; width: 200px; background-color: #eeeeee; padding: 10px; border: 1px solid #aaaaaa; text-align: center; margin: 10px"
                           href="<?= htmlspecialchars($method['url']) ?>">
                            <img src="<?= htmlspecialchars($method['icon']) ?>"
                                 alt="<?= htmlspecialchars($method['label']) ?>"
                                 style="width: 100%"/>
                            
                            <div>
	                            <?= htmlspecialchars($method['label']) ?>
                            </div>
                        </a>
						<?php
					}
				?>
            </div>
			<?php
		}
	}