<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\API;
	
	use phpweb\Data\Release\AtomFeedBuilder;
	use phpweb\Data\Release\ReleasesRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services;
	
	class AllReleasesFeedController
	{
		public function __invoke(Request $request): Response {
			$visible = Services::get(ReleasesRepository::class)->all();
			return new Response(
				(new AtomFeedBuilder())->build($visible, '/versions/api/releases.atom')->asXML(),
				200,
				['Content-Type' => 'application/atom+xml']
			);
		}
	}