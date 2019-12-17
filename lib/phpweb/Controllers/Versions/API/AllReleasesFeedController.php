<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\API;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Data\Release\ReleasesRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services\ReleaseFeedBuilder\FeedBuilderFactory;
	
	class AllReleasesFeedController implements ControllerInterface
	{
		private ReleasesRepository $repository;
		
		private FeedBuilderFactory $feed_factory;
		
		public function __construct(
			ReleasesRepository $repository,
			FeedBuilderFactory $feed_factory
		) {
			$this->repository   = $repository;
			$this->feed_factory = $feed_factory;
		}
		
		public function load(): array {
			return [$this];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			$format  = $request->getAttributesBag()->getString('format');
			$visible = $this->repository->all();
			
			return $this
				->feed_factory
				->build($format)
				->buildResponse($visible, '/releases/api/releases.' . $format);
		}
	}