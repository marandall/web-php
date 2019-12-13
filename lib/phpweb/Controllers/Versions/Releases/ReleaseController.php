<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Releases;
	
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Release\Release;
	use phpweb\Data\StabilityEnum;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Notices\BranchReleaseNotMostRecent;
	use phpweb\UI\Notices\BranchSecurityOnlyNotice;
	use phpweb\UI\Notices\BranchUnsupportedNotice;
	use phpweb\UI\Templates\BasicCallbackPanel;
	
	class ReleaseController extends ReleaseRouter
	{
		protected function invokeForRelease(Request $request, Release $release, Branch $branch): Response {
			$version_id = $release->getVersionId();
			$this->setPageTitle('PHP Version ' . $version_id);
			
			$changelog = $release->getChangelogText();
			
			$this->addSidePanel(
				new BasicCallbackPanel(
					'Branch Info',
					function () use ($release, $branch) {
						$this->renderReleaseInfo($release, $branch);
					}
				)
			);
			
			return $this->render(
				function () use ($release, $branch, $changelog) {
					$this->renderContents($release, $branch, $changelog);
				}
			);
		}
		
		public function renderReleaseInfo(Release $release, Branch $branch) {
			?>
            <aside>
				<?php foreach ($branch->getReleasesByVersion() as $version => $branch_release) { ?>
                    <div>
                        <a href="<?= htmlspecialchars($branch_release->getUrl()) ?>"><?= htmlspecialchars(
								$branch_release->getVersionId()
							) ?></a>
                        (<?= htmlspecialchars($branch_release->getDate()->format('Y-m-d')) ?>)
                    </div>
				<?php } ?>
            </aside>
			<?php
		}
		
		public function renderContents(Release $release, Branch $branch, string $changelog) {
			$latest_release = $branch->getLatestRelease();
			if ($latest_release->getVersionId() !== $release->getVersionId()) {
                (new BranchReleaseNotMostRecent($release))->draw();
			}
			
			$stability = $branch->getStability();
			if ($stability === StabilityEnum::UNSUPPORTED) {
				(new BranchUnsupportedNotice($branch))->draw();
			}
			else if ($stability === StabilityEnum::SECURITY) {
				(new BranchSecurityOnlyNotice($branch))->draw();
			}
			
			
            ?>
            <h2>Release Announcement</h2>
            <?php
			echo $release->getAnnouncementHTML();
			
			?>
            To download the source code for this release please view the <a href="#sources">sources</a>.
            <br/><br/>
			<?php
			
			if ($changelog !== '') {
				?>
                <h2>Change Log <?= htmlspecialchars($release->getVersionId()) ?></h2>
				<?php
				echo $changelog;
			}
			
			?>
            <a id="sources"></a>
            <h2>Source Files <?= htmlspecialchars($release->getVersionId()) ?></h2>
			<?php
			foreach ($release->getSources() as $source) {
				?>
                <div style="margin-bottom: 5px">
                    <a style="font-weight: bold"
                       href="/distributions/<?= htmlspecialchars($source->getFilename()) ?>">
						<?= htmlspecialchars($source->getName()) ?>
                    </a>

                    (<?= htmlspecialchars($source->getDate()->format('Y-m-d')) ?>)
                    <br/>
                    SHA256: <?= htmlspecialchars($source->getSha256()) ?>
                </div>
				<?php
			}
		}
	}