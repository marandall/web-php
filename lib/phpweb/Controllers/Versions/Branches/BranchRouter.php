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
				new BasicCallbackPanel('', function() use ($branch) {
					$this->renderNavigation($branch);
				})
			);
			
			return $this->invokeForBranch($request, $branch);
		}

		private function renderNavigation(Branch $branch) {
		    $base = $branch->getUrl();
			?>
            <aside>
                <a href="<?= htmlspecialchars($base) ?>"><?= htmlspecialchars($branch->getBranchId()) ?></a>
                <br />

                <a href="<?= htmlspecialchars($base) ?>#history">Version History</a>
                <br />
                
                <a href="<?= htmlspecialchars($base) ?>changelog">Combined Changelog</a>
            </aside>
			
            <aside style="padding: 20px">
                <h3 style="color: white">Install Guides</h3>

                <a href="<?= htmlspecialchars($base) ?>install/iis">Internet Information Services</a>
                <br />
                <a href="<?= htmlspecialchars($base) ?>install/ubuntu_ppa">Ubuntu (PPA)</a>
            </aside>
   
			<?php
		}
		
		abstract protected function invokeForBranch(Request $request, Branch $branch): Response;
	}