<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Branches;
	
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Branches\Branches;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\BasicCallbackPanel;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	abstract class BranchRouter extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$attr  = $request->getAttributesBag();
			$major = $attr->getInt('major', 0);
			$minor = $attr->getInt('minor', 0);
			
			$version_id = $major . '.' . $minor;
			$branch     = Branches::GetBranch($version_id);
			if ($branch === null) {
				die('Not found');
			}
			
			/* include the branch navigation panel on every page that uses this router */
			$this->addSidePanel(
				new BasicCallbackPanel('PHP ' . $branch->getBranchId(), function() use ($branch) {
					$this->renderNavigation($branch);
				})
			);
			
			return $this->invokeForBranch($request, $branch);
		}

		private function renderNavigation(Branch $branch) {
		    $base = $branch->getUrl();
			?>
            <ul style="margin-bottom: 0px">
                <li><a href="<?= htmlspecialchars($base) ?>">About <?= htmlspecialchars($branch->getBranchId()) ?></a></li>
                <li><a href="<?= htmlspecialchars($base) ?>#history">Version History</a></li>
                <li><a href="<?= htmlspecialchars($base) ?>changelog">Combined Changelog</a></li>
                <li><a href="<?= htmlspecialchars($base) ?>install/">Download / Install </a></li>
            </ul>
			<?php
		}
		
		abstract protected function invokeForBranch(Request $request, Branch $branch): Response;
	}