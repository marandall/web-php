<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Downloads;
	
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Branches\Branches;
	use phpweb\Data\Branches\InstallHelpers\HelperSearch;
	use phpweb\Data\StabilityEnum;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services;
	use phpweb\UI\Notices\BranchSecurityOnlyNotice;
	use phpweb\UI\Templates\BasicCallbackPanel;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class DownloadsIndexController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$this->setPageTitle('Download PHP');
			$this->setActivePage('downloads');
			
			$this->addSidePanel(new BasicCallbackPanel('GPG Keys', [$this, 'renderGpgInfo']));
			$this->addSidePanel(new BasicCallbackPanel('How to Install PHP', [$this, 'renderInstallPolicy']));
			
			return $this->render([$this, 'renderContents']);
		}
		
		public function renderInstallPolicy() {
		    ?>
            <p>
                Due to the nature of PHP, it is typically installed through platform vendors
                who download the source code, compile it themselves, and distribute it via their
                own platform-specific package managers such as apt and apk.
            </p>
            <p>
                You can download the source code directly from PHP.net and compile it yourself,
                or use one of our interactive guides to help you install it.
            </p>
            <?php
        }
		
		public function renderGpgInfo() {
			?>
            <p>
                The releases are tagged and signed in the <a href="/developers/git/">PHP Git Repository</a>.
            </p>
            
            <p>
                The following official GnuPG keys of the current PHP Release Manager can be found
                at <a href="/downloads/gpg-keys.php">here</a>.
            </p>
			<?php
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

                <h2><?= htmlspecialchars(
						($current ? 'Current Stable' : 'Old Stable') . ' ' . $branch->getBranchId()
					) ?></h2>
				
				<?php
				$helpers = Services::get(HelperSearch::class)->findHelpers($branch);
				$support = $branch->getStability();
				if ($support === StabilityEnum::SECURITY) {
					(new BranchSecurityOnlyNotice($branch))->draw();
				}
				?>

                View the release announcement and changelog for
                <a href="<?= htmlspecialchars($latest->getUrl()) ?>"><?= htmlspecialchars(
						$latest->getVersionId()
					) ?></a>.
                <br/>
                <br/>

                <table class="standard" style="width: 100%">
                    <tbody>
					<?php foreach ($helpers as $helper) { ?>
                        <tr>
                            <td style="width: 80px">
                                <img src="<?= htmlspecialchars($helper->getImageUri()) ?>"
                                     alt="<?= htmlspecialchars($helper->getDescription()) ?>" style="max-width: 100%"/>
                            </td>
                            <td>
                                <a href="<?= htmlspecialchars($helper->getUri()) ?>">Using <?= htmlspecialchars(
										$helper->getDescription()
									) ?></a>
                            </td>
                        </tr>
					
					<?php } ?>
                    </tbody>
                </table>

                <h4>Latest Source Code for <?= htmlspecialchars($latest->getVersionId()) ?></h4>
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
            <h2>Older Versions</h2>
            <p>
                If you're looking to download older versions of PHP please check the
                <a href="/versions/">entire release history</a>.
            </p>
            <?php
		}
	}