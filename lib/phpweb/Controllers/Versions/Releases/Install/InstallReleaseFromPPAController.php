<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Releases\Install;
	
	use phpweb\Controllers\Versions\Releases\ReleaseRouter;
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Release\Release;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	class InstallReleaseFromPPAController extends ReleaseRouter
	{
	
		protected function invokeForRelease(Request $request, Release $release, Branch $branch): Response {
			$this->setPageTitle('Install ' . $release->getVersionId() . ' From PPA');
			return $this->render(
				function () use ($request, $branch) {
					$this->renderContents($request, $branch);
				}
			);
		}
		
		public function renderContents(Request $request, Branch $branch) {
			?>
            The Ondřej Surý PPA (Personal Package Archive) is a common way of installing specific versions
            of the PHP runtime on Ubuntu using the APT package manager.
            <br/><br/>

            <strong>This is an unofficial source and is not maintained by PHP.net</strong>
            <br/><br/>

            <h3>Installation Guide</h3>
            Ondřej packages are released for specific PHP branches and are updated as new versions are released.
            For more information on installing <?= htmlspecialchars($branch->getBranchId()) ?> packages please
            <a href="<?= htmlspecialchars($branch->getUrl()) ?>/install/ubuntu_ppa" >see here</a>
            
			<?php
		}
		
	}