<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Branches\Install;
	
	use phpweb\Controllers\Versions\Branches\BranchRouter;
	use phpweb\Data\Branches\Branch;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	class InstallBranchSourceController extends BranchRouter
	{
		protected function invokeForBranch(Request $request, Branch $branch): Response {
			$this->setPageTitle('Install ' . $branch->getBranchId() . ' from Source');
			return $this->render(
				function () use ($branch) {
					$this->renderContents($branch);
				}
			);
		}
		
		public function renderContents(Branch $branch) {
		    $release = $branch->getLatestRelease();
			foreach ($release->getSources() as $source) {
				?>
                <div style="margin-bottom: 5px">
                    <a style="font-weight: bold"
                       href="/distributions/<?= htmlspecialchars($source->getFilename()) ?>">
						<?= htmlspecialchars($source->getName()) ?>
                    </a>

                    (<?= htmlspecialchars($source->getDate()->format('Y-m-d')) ?>)
                    <br/>
                    SHA256: <?= htmlspecialchars($source->getSha256()) ?>
                </div>
				<?php
			}
		}
	}