<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Branches;
	
	class BranchRepository
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
	}