<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Downloads;
	
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Branches\Branches;
	use phpweb\Data\StabilityEnum;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class DownloadsIndexController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$this->setPageTitle('Download PHP');
			$this->setActivePage('downloads');
			
			return $this->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			$SHOW_COUNT = 4;
			
			/** @var Branch[] $branches */
			$branches = [];
			foreach (Branches::GetBranches() as $branch_id => $branch) {
				if (!$branch->isSupported()) {
					continue;
				}
				
				$branches[] = $branch;
			}
			
			foreach (array_reverse($branches) as $index => $branch) {
				$latest = $branch->getLatestRelease();
				if ($latest === null) {
					continue;
				}
				
				$current = ($index === 0);
				?>

                <h3>
					<?= htmlspecialchars(
						($current ? 'Current Stable' : 'Old Stable') . ' ' . $latest->getVersionId()
					) ?>
                </h3>
                
                <?php
                    $support = $branch->getStability();
                    if ($support === StabilityEnum::SECURITY) {
                        ?>
                        <div style="padding: 10px; margin-bottom: 1em">
                            <span style="font-weight: bold">Advisory: </span>
                            The PHP <?= htmlspecialchars($branch->getBranchId())?> branch is currently only receiving security updates until
                            <?= htmlspecialchars($branch->getEolSecurityDate()->format('d M Y')) ?>
                            and it is recommended that you make plans to upgrade to the latest branch.
                        </div>
                        <?php
                    }
                ?>
                
                View the release announcement and changelog for
                <a href="<?= htmlspecialchars($latest->getUrl()) ?>"><?= htmlspecialchars($latest->getVersionId()) ?></a>.
                <br />
                <br />
                
                <ul>
					<?php
						foreach ($latest->getSources() as $source) {
							?>
                            <li style="padding-bottom: 0.25em">
                                <a href="<?= htmlspecialchars($source->getUrl()) ?>" target="_blank">
									<?= htmlspecialchars($source->getName()) ?>
                                </a>
                                <span style="float: right">
                                         <?= htmlspecialchars($source->getDate()->format('d M Y')) ?>
                                    </span>
                                <div class="sha256" style="font-size: smaller; font-family: 'Courier New' ">
                                    SHA256: <?= htmlspecialchars($source->getSha256()) ?>
                                </div>
                            </li>
							<?php
						}
					?>

                    <li class="margin-bottom: 0.25em">
                        <a href="<?= htmlspecialchars($latest->getWindowsDownloadUrl()) ?>" target="_blank">
                            Windows Downloads
                        </a>
                    </li>
                </ul>

                <br/>
				<?php
			}
			
			?>

            <hr>
            <h2>GPG Keys</h2>
            <p>
                The releases are tagged and signed in the <a href='git.php'>PHP Git Repository</a>.
                The following official GnuPG keys of the current PHP Release Manager can be used
                to verify the tags:
            </p>
			
			<?php
		}
	}