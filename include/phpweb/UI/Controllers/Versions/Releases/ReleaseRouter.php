<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Controllers\Versions\Releases;
	
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Release\Release;
	use phpweb\Data\Releases;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	abstract class ReleaseRouter extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$attr  = $request->getAttributesBag();
			$major = $attr->getInt('major', 0);
			$minor = $attr->getInt('minor', 0);
			$patch = $attr->getInt('patch', 0);
			
			$version_id = $major . '.' . $minor . '.' . $patch;
			
			$release = Releases::Lookup($version_id);
			if ($release === null) {
				die('Not found');
			}
			
			
			$branch = $release->getBranch();
			
			return $this->invokeForRelease($request, $release, $branch);
		}
		
		abstract protected function invokeForRelease(Request $request, Release $release, Branch $branch): Response;
		
	}