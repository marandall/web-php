<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Branches;
	
	use phpweb\Data\Branches\Branch;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services;
	use phpweb\Tools\ReleaseFeedBuilder\FeedBuilderFactory;
	
	class BranchAtomFeedController extends BranchRouter
	{
		protected function invokeForBranch(Request $request, Branch $branch): Response {
			$format = $request->getAttributesBag()->getString('format');
			
			return Services::get(FeedBuilderFactory::class)
				->build($format)
				->buildResponse(
					$branch->getReleasesByVersion(),
					$branch->getUrl() . 'api/releases.' . $format
				);
		}
	}