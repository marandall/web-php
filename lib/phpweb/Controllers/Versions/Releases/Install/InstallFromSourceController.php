<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Release\Install;
	
	use phpweb\Controllers\Versions\Releases\ReleaseRouter;
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Release\Release;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	class InstallFromSourceController extends ReleaseRouter
	{
		protected function invokeForRelease(Request $request, Release $release, Branch $branch): Response {
			$this->setPageTitle('Install ' . $release->getVersionId() . ' From Source');
			return $this->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			
		}
		
	}