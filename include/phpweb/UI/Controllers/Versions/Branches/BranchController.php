<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Controllers\Versions\Branches;
	
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\StabilityEnum;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Notices\BranchSecurityOnlyNotice;
	use phpweb\UI\Notices\BranchUnsupportedNotice;
	
	class BranchController extends BranchRouter
	{
		protected function invokeForBranch(Request $request, Branch $branch): Response {
			$this->setPageTitle('PHP ' . $branch->getBranchId());
			
			return $this->render(
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
			
            <a id="history"></a>
            <h3>Version History</h3>
			
			<div style="margin-bottom: 1em;">
				The following <?= count($branch->getReleasesByVersion()) ?> versions of PHP <?= htmlspecialchars($branch->getBranchId()) ?> have been released:
			</div>
			
            <ul>
				<?php
					foreach ($branch->getReleasesByVersion() as $release) {
						?>
						<li>
							<a href="<?= htmlspecialchars($release->getUrl()) ?>">
								PHP <?= htmlspecialchars($release->getVersionId()) ?>
							</a>
							-
							<?= htmlspecialchars($release->getDate()->format('d M Y')) ?>
						</li>
						<?php
					}
				?>
            </ul>
			<?php
		}
	}