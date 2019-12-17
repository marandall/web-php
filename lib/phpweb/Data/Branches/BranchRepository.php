<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Branches;
	
	use phpweb\Services\Builder\InjectableService;
	
	class BranchRepository implements InjectableService
	{
		/**
		 * @return Branch[]
		 */
		public function all(): array {
			return Branches::GetBranches();
		}
		
		/**
		 * Returns just the supported branches
		 *
		 * @return Branch[]
		 */
		public function supportedByBranchDescending(): array{
			/** @var Branch[] $supported */
			$supported = [];
			foreach ($this->all() as $branch) {
				if ($branch->isSupported()) {
					$supported[] = $branch;
				}
			}
			
			return array_reverse($supported);
		}
		
		/**
		 * Locate an individual branch
		 *
		 * @param string $branch_id
		 * @return Branch|null
		 */
		
		public function find(string $branch_id): ?Branch {
			return $this->all()[$branch_id] ?? null;
		}
	}