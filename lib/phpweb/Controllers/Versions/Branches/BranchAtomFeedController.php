<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Branches;
	
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Release\AtomFeedBuilder;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	class BranchAtomFeedController extends BranchRouter
	{
		protected function invokeForBranch(Request $request, Branch $branch): Response {
			return new Response(
				(new AtomFeedBuilder())->build(
					$branch->getReleasesByVersion(),
					$branch->getUrl() . 'releases.atom'
				)->asXML(),
				200,
				['Content-Type' => 'application/atom+xml']
			);
		}
	}