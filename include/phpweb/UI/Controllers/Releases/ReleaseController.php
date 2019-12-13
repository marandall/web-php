<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Controllers\Releases;
	
	use phpweb\Config\Site;
	use phpweb\Data\Branches\Branch;use phpweb\Data\Release\Release;
	use phpweb\Data\Releases;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\BasicCallbackPanel;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class ReleaseController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$major = $request->getAttributesBag()->getInt('major', 0);
			$minor = $request->getAttributesBag()->getInt('minor', 0);
			$patch = $request->getAttributesBag()->getInt('patch', 0);
			
			$version_id = $major . '.' . $minor . '.' . $patch;
			
			$release = Releases::Lookup($version_id);
			if ($release === null) {
				die('Not found');
			}
			
			$branch = $release->getBranch();
			
			$this->setPageTitle('Release Announcement for PHP ' . $version_id);
			
			$path = Site::GetDataDir()
				. '/data/releases/' . $major . '/' . $major . '_' . $minor . '/' . str_replace(
					'.', '_', $version_id
				) . '.html';
			
			
			$changelog_contents = file_get_contents(Site::GetDataDir() . '/../Changelog-' . $major . '.php');
			$changelog_start    = strpos($changelog_contents, '<section class="version" id="' . $version_id . '">');
			$changelog          = '';
			
			if ($changelog_start !== false) {
				$changelog_end = strpos($changelog_contents, '</section>', $changelog_start);
				if ($changelog_end !== false) {
					$changelog = substr($changelog_contents, $changelog_start, $changelog_end - $changelog_start + 10);
					$changelog = preg_replace('/\<h3\>(.+?)\<\/h3\>/', '', $changelog);
				}
			}
			
			$this->addSidePanel(
				new BasicCallbackPanel(
					'Branch Info',
					function () use ($release, $branch) {
						$this->renderReleaseInfo($release, $branch);
					}
				)
			);
			
			if (file_exists($path)) {
				return $this->render(
					function () use ($release, $branch, $path, $changelog) {
						$this->renderContents($release, $branch, $path, $changelog);
					}
				);
			}
			else {
				die('Cannot find file ' . $path);
			}
		}
		
		public function renderReleaseInfo(Release $release, Branch $branch) {
			?>
            <aside>
                <?php foreach($branch->getReleasesByVersion() as $version => $branch_release) { ?>
                    <div>
                        <a href="<?= htmlspecialchars($branch_release->getUrl()) ?>"><?= htmlspecialchars($branch_release->getVersionId()) ?></a>
                        (<?= htmlspecialchars($branch_release->getDate()->format('Y-m-d')) ?>)
                    </div>
                <?php } ?>
            </aside>
			<?php
		}
		
		public function renderContents(Release $release, Branch $branch, string $announcement_path, string $changelog) {
		    $latest_release = $branch->getLatestRelease();
		    if ($latest_release !== $release) {
		        ?>
                <div style="padding: 10px; margin-bottom: 1em; background-color: firebrick; color: white">
                    <span style="font-weight: bold; ">Important:</span>
                    This version is not the most recent release of the <?= htmlspecialchars($branch->getBranchId()) ?> branch
                    -
                    For the most recent version please see
                    <a href="<?= htmlspecialchars($latest_release->getUrl()) ?>"><?= htmlspecialchars($latest_release->getVersionId()) ?></a>
                </div>
                <?php
            }
		    
			echo file_get_contents($announcement_path);
		    
		    ?>
            To download the source code for this release please view the <a href="#sources">sources</a>.
            <br /><br />
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