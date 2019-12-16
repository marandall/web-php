<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions;
	
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Branches\BranchRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services;
	use phpweb\Tools\ReleaseTableRenderer;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class VersionsIndexController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$this->setPageTitle('Version History');
			return $this->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			$branches = Services::get(BranchRepository::class)->all();
			usort($branches, function(Branch $b, Branch $a) {
				return ($a->getMajorVer() - $b->getMajorVer())
					?: ($b->getMinorVer() - $b->getMinorVer());
			});
			
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
					the <a href="<?= htmlspecialchars($branch->getUrl()) ?>"><?= htmlspecialchars($branch->getBranchId()) ?> Branch Page</a>.
				</p>
                
                <?php
                Services::get(ReleaseTableRenderer::class)->render(array_reverse($branch->getReleasesByVersion()));
			}
		}
	}