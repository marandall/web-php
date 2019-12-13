<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Branches;
	
	use phpweb\Data\Branches\Branch;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	class BranchChangelogController extends BranchRouter
	{
		public function renderContents(Branch $brach) {
			foreach (array_reverse($brach->getReleasesByVersion()) as $release) {
				?>
				<h3>PHP <?= htmlspecialchars($release->getVersionId()) ?></h3>
				<div style="margin-bottom: 1em">
					<?= $release->getChangelogText() ?>
				</div>
				<?php
			}
		}
		
		protected function invokeForBranch(Request $request, Branch $branch): Response {
			$this->setPageTitle('PHP ' . $branch->getBranchId() . ' Combined Changelog');
			
			return $this->render(function() use ($branch) {
				$this->renderContents($branch);
			});
		}
	}