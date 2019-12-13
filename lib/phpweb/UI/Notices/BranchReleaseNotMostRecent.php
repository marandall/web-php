<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Notices;
	
	use phpweb\Data\Release\Release;
	
	class BranchReleaseNotMostRecent
	{
		/** @var Release */
		private $release;
		
		public function __construct(Release $release) {
			$this->release = $release;
		}
		
		public function draw() {
			$release = $this->release;
			$branch  = $release->getBranch();
			
			$recent = $branch->getLatestRelease();
			if ($recent === null) {
			    return;
            }
			
			?>
            <div style="background-color: firebrick; color: white; padding: 1em; margin-bottom: 1em">
                <span style="font-weight: bold">Advisory:</span>
                PHP <?= htmlspecialchars($release->getVersionId()) ?> not the most recent release in the
                PHP <a href="<?= htmlspecialchars($branch->getUrl()) ?>" style="color: white"><?= htmlspecialchars($branch->getBranchId()) ?></a> branch -
                For the most recent version please see
                <a href="<?= htmlspecialchars($recent->getUrl()) ?>" style="color: white"><?= htmlspecialchars($recent->getVersionId()) ?></a>
            </div>
			<?php
		}
	}