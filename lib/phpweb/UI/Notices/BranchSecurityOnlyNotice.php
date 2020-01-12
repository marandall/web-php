<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Notices;
	
	use phpweb\Data\Branches\Branch;
	
	class BranchSecurityOnlyNotice implements NoticeInterface
	{
		private Branch $branch;
		
		public function __construct(Branch $branch) {
			$this->branch = $branch;
		}
		
		public function draw() {
			$branch = $this->branch;
			?>
			<div style="background-color: firebrick; color: white; padding: 1em; margin-bottom: 1em">
				<span style="font-weight: bold">Advisory:</span>
                PHP <a href="<?= htmlspecialchars($branch->getUrl()) ?>" style="color: white">
                    <?= htmlspecialchars($branch->getBranchId()) ?></a>
                
                will only receive security updates until
				<?= htmlspecialchars($branch->getEolSecurityDate()->format('d M Y')) ?>. If you are
				using this version it is recommended that you make plans to upgrade to the latest version of PHP.
			</div>
			<?php
		}
	}