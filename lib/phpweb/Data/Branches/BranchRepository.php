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
	}