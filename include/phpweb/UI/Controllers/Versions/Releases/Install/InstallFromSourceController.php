<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Controllers\Versions\Release\Install;
	
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Release\Release;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Controllers\Versions\Releases\ReleaseRouter;
	
	class InstallFromSourceController extends ReleaseRouter
	{
		protected function invokeForRelease(Request $request, Release $release, Branch $branch): Response {
			$this->setPageTitle('Install ' . $release->getVersionId() . ' From Source');
			return $this->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			
		}
		
	}