<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Releases;
	
	use phpweb\Controllers\MiddlewareInterface;
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Branches\BranchRepository;
	use phpweb\Data\Release\Release;
	use phpweb\Data\Release\ReleasesRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	class ReleaseLoaderMiddleware implements MiddlewareInterface
	{
		private ReleasesRepository $repository;
		private BranchRepository $branch_repository;
		
		public function __construct(
			ReleasesRepository $repository,
			BranchRepository $branch_repository
		) {
			$this->repository = $repository;
			$this->branch_repository = $branch_repository;
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			$attr  = $request->getAttributesBag();
			$major = $attr->getInt('major', 0);
			$minor = $attr->getInt('minor', 0);
			$patch = $attr->getInt('patch', 0);
			
			$version_id = $major . '.' . $minor . '.' . $patch;
			
			$release = $this->repository->find($version_id);
			if ($release === null) {
				die('Not found');
			}
			
			$request->store(Release::class, '', $release);
			$request->store(Branch::class, '', $this->branch_repository->find($release->getBranchVersion()));
			
			return $next($request);
		}
	}