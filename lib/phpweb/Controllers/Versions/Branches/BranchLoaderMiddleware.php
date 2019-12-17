<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Branches;
	
	use phpweb\Controllers\MiddlewareInterface;
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Branches\BranchRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\BasicCallbackPanel;
	use phpweb\UI\Templates\FreshTemplate;
	
	class BranchLoaderMiddleware implements MiddlewareInterface
	{
		/** @var BranchRepository */
		private $repository;
		
		public function __construct(BranchRepository  $repository) {
			$this->repository = $repository;
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			$attr  = $request->getAttributesBag();
			$major = $attr->getInt('major', 0);
			$minor = $attr->getInt('minor', 0);
			
			$version_id = $major . '.' . $minor;
			$branch     = $this->repository->find($version_id);
			if ($branch === null) {
				die('Not found');
			}
			
			/* include the branch navigation panel on every page that uses this router */
			if ($request->has(FreshTemplate::class)) {
				$request->get(FreshTemplate::class)
					->addSidePanel(
						new BasicCallbackPanel('PHP ' . $branch->getBranchId(), function() use ($branch) {
							$this->renderNavigation($branch);
						})
					);
			}
			
			$request->store(Branch::class, '', $branch);
			$next($request);
		}
	}