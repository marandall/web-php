<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Controllers\Downloads;
	
	use phpweb\Data\Releases;
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
			
			?>
			<?php foreach (Releases::GetCurrentReleases() as $MAJOR => $major_releases) {
				$releases = array_slice($major_releases, 0, $SHOW_COUNT);
				?>
                <a id="v<?php echo $MAJOR; ?>"></a>
				<?php $i = 0;
				foreach ($releases as $v => $a) { ?>
					<?php $mver = substr($v, 0, strrpos($v, '.')); ?>
					<?php $stable = $i++ === 0 ? "Current Stable" : "Old Stable"; ?>

                    <h3 id="v<?php echo $v; ?>" class="title">
                        <span class="release-state"><?php echo $stable; ?></span>
                        PHP <?php echo $v; ?>
                        (<a href="/ChangeLog-<?php echo $MAJOR; ?>.php#<?php echo urlencode($v); ?>" class="changelog">Changelog</a>)
                    </h3>
                    <div class="content-box">

                        <ul>
							<?php foreach ($a['source'] as $rel): ?>
                                <li>
									<?php download_link($rel['filename'], $rel['filename']); ?>
                                    <span class="releasedate"><?php echo date(
											'd M Y', strtotime($rel['date'])
										); ?></span>
									<?php
										if (isset($rel['md5'])) {
											echo '<span class="md5sum">', $rel['md5'], '</span>';
										}
										if (isset($rel['sha256'])) {
											echo '<span class="sha256">', $rel['sha256'], '</span>';
										}
									?>
									<?php if (isset($rel['note']) && $rel['note']): ?>
                                        <p>
                                            <strong>Note:</strong>
											<?php echo $rel['note']; ?>
                                        </p>
									<?php endif; ?>
                                </li>
							<?php endforeach; ?>
                            <li>
                                <a href="https://windows.php.net/download#php-<?php echo urlencode($mver); ?>">
                                    Windows downloads
                                </a>
                            </li>
                        </ul>

                        <a href="#gpg-<?php echo $mver; ?>">GPG Keys for PHP <?php echo $mver; ?></a>
                    </div>
				<?php } ?>
			<?php } ?>

            <hr>
            <h2>GPG Keys</h2>
            <p>
                The releases are tagged and signed in the <a href='git.php'>PHP Git Repository</a>.
                The following official GnuPG keys of the current PHP Release Manager can be used
                to verify the tags:
            </p>
			
			<?php
			$gpg_keys = \phpweb\Data\GpgKeys::GetKeys();
			
			foreach (Releases::GetCurrentReleases() as $MAJOR => $major_releases) {
				$releases = array_slice($major_releases, 0, $SHOW_COUNT);
				foreach ($releases as $v => $_) {
					$branch = implode('.', array_slice(explode('.', $v), 0, 2));
					if (isset($gpg_keys[$branch])) {
						?>
                        <h3 id="gpg-<?php echo $branch; ?>" class="content-header">PHP <?php echo $branch; ?></h3>
                        <div class="content-box">
      <pre>
<?php echo $gpg_keys[$branch]; ?>
      </pre>
                        </div>
						<?php
					}
				}
			}
			?>
            <p>
                <a href="gpg-keys.php">
                    A full list of GPG keys used for current and older releases is also
                    available.
                </a>
            </p>
			<?php
		}
	}