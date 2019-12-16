<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\API;
	
	use phpweb\Data\Branches\Branches;
	use phpweb\Data\Release\Release;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services;
	use phpweb\Tools\ReleaseFeedBuilder\FeedBuilderFactory;
	
	class SupportedReleaseFeedController
	{
		public function __invoke(Request $request): Response {
			/** @var Release[] $visible */
			$visible = [];
			
			foreach (Branches::GetBranches() as $branch) {
				if (!$branch->isSupported()) {
					continue;
				}
				
				$latest = $branch->getLatestRelease();
				if ($latest === null) {
					continue;
				}
				
				$visible[] = $latest;
			}
			
			$format = $request->getAttributesBag()->getString('format');
			
			return Services::get(FeedBuilderFactory::class)
				->build($format)
				->buildResponse($visible, '/versions/api/supported.' . $format);
		}
	}