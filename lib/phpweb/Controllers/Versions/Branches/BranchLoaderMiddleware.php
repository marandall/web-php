<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Branches;
	
	use phpweb\Controllers\MiddlewareInterface;
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Branches\BranchRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\FreshTemplate;
	use phpweb\UI\Templates\LinkPanel;
	
	class BranchLoaderMiddleware implements MiddlewareInterface
	{
		/** @var BranchRepository */
		private $repository;
		
		public function __construct(BranchRepository $repository) {
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
				$nav = new LinkPanel('PHP ' . $branch->getBranchId());
				$nav->add($branch->getUrl(), 'About');
				$nav->add($branch->getUrl() . '#history', 'Version History');
				$nav->add($branch->getUrl() . 'changelog', 'Combined Changelog');
				$nav->add($branch->getUrl() . 'install/', 'Download / Install');
				
				$request->get(FreshTemplate::class)->addSidePanel($nav);
			}
			
			$request->store(Branch::class, '', $branch);
			return $next($request);
		}
	}