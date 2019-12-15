<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Branches\Install;
	
	use phpweb\Controllers\Versions\Branches\BranchRouter;
	use phpweb\Data\Branches\Branch;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	class InstallBranchDockerController extends BranchRouter
	{
		protected function invokeForBranch(Request $request, Branch $branch): Response {
			$this->setPageTitle('Install ' . $branch->getBranchId() . ' via Docker');
			return $this->render(
				function () use ($branch) {
					$this->renderContents($branch);
				}
			);
		}
		
		public function renderContents(Branch $branch) {
			?>
            Instructions for using PHP <?= htmlspecialchars($branch->getStability()) ?> via Docker are
            coming soon.
			<?php
		}
	}