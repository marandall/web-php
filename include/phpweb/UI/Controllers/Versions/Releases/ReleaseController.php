<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Controllers\Versions\Releases;
	
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Release\Release;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\BasicCallbackPanel;
	
	class ReleaseController extends ReleaseRouter
	{
		protected function invokeForRelease(Request $request, Release $release, Branch $branch): Response {
			$version_id = $release->getVersionId();
			$this->setPageTitle('Release Announcement for PHP ' . $version_id);
			
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
			if ($latest_release !== $release) {
				?>
                <div style="padding: 10px; margin-bottom: 1em; background-color: firebrick; color: white">
                    <span style="font-weight: bold; ">Important:</span>
                    This version is not the most recent release of the <?= htmlspecialchars($branch->getBranchId()) ?>
                    branch
                    -
                    For the most recent version please see
                    <a href="<?= htmlspecialchars($latest_release->getUrl()) ?>"><?= htmlspecialchars(
							$latest_release->getVersionId()
						) ?></a>
                </div>
				<?php
			}
			
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