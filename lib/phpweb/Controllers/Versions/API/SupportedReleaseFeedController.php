<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\API;
	
	use phpweb\Data\Branches\Branches;
	use phpweb\Data\Release\AtomFeedBuilder;
	use phpweb\Data\Release\Release;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
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
			
			return new Response(
				(new AtomFeedBuilder())->build($visible, '/versions/api/releases.atom')->asXML(),
				200,
				['Content-Type' => 'application/atom+xml']
			);
		}
	}