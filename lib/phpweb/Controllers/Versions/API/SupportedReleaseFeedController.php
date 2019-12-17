<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\API;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Data\Branches\BranchRepository;
	use phpweb\Data\Release\Release;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services\ReleaseFeedBuilder\FeedBuilderFactory;
	
	class SupportedReleaseFeedController implements ControllerInterface
	{
		private BranchRepository $repository;
		
		private FeedBuilderFactory $feed_factory;
		
		public function __construct(
			BranchRepository $repository,
			FeedBuilderFactory $feed_factory
		) {
			$this->repository   = $repository;
			$this->feed_factory = $feed_factory;
		}
		
		public function load(): array {
			return [$this];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			/** @var Release[] $visible */
			$visible = [];
			
			foreach ($this->repository->all() as $branch) {
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
			
			return $this
				->feed_factory
				->build($format)
				->buildResponse($visible, '/versions/api/supported.' . $format);
		}
	}