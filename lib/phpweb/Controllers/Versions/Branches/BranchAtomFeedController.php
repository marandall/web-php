<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Branches;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Data\Branches\Branch;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services;
	use phpweb\Tools\ReleaseFeedBuilder\FeedBuilderFactory;
	
	class BranchAtomFeedController implements ControllerInterface
	{
		public function load(): array {
			return [
				BranchLoaderMiddleware::class,
				$this
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			$branch = $request->get(Branch::class);
			$format = $request->getAttributesBag()->getString('format');
			
			return Services::get(FeedBuilderFactory::class)
				->build($format)
				->buildResponse(
					$branch->getReleasesByVersion(),
					$branch->getUrl() . 'api/releases.' . $format
				);
		}
	}