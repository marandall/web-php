<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\API;
	
	use phpweb\Data\Release\ReleasesRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services;
	use phpweb\Tools\ReleaseFeedBuilder\FeedBuilderFactory;
	
	class AllReleasesFeedController
	{
		public function __invoke(Request $request): Response {
			$format = $request->getAttributesBag()->getString('format');
			$visible = Services::get(ReleasesRepository::class)->all();
			
			return Services::get(FeedBuilderFactory::class)
				->build($format)
				->buildResponse($visible, '/releases/api/releases.' . $format);
		}
	}