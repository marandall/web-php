<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Notices;
	
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\StabilityEnum;
	use phpweb\Services\Builder\PublicService;
	
	class BranchNoticeFactory implements PublicService
	{
		/**
		 * @return NoticeInterface[]
		 */
		public function find(Branch $branch): array {
			$notices = [];
			$stability = $branch->getStability();
			
			if ($stability === StabilityEnum::SECURITY) {
				$notices[] = new BranchSecurityOnlyNotice($branch);
			}
			else if ($stability === StabilityEnum::UNSUPPORTED) {
				$notices[] = new BranchUnsupportedNotice($branch);
			}
			
			return $notices;
		}
	}