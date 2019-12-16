<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Downloads;
	
	use phpweb\Data\GpgKeys;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class GpgKeysController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$this->setPageTitle('GPG Keys');
			$this->setActivePage('download');
			
			return $this->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			?>
            <p>
                Starting in April 2012, PHP release tags have been signed in Git by the
                release managers for each branch. The following GnuPG keys can be used to
                verify these tags:
            </p>
			
			<?php foreach (GpgKeys::GetKeys() as $branch => $data) { ?>
                <h3 id="gpg-<?= $branch ?>" class="content-header">PHP <?= $branch ?></h3>

                <div class="content-box">
                    <pre><?= $data ?></pre>
                </div>
			<?php } ?>

            <h3 id="keyring" class="content-header">Keyring</h3>

            <p>
                You can download the keyring with all Release Manager public keys:
				<?php download_link('php-keyring.gpg', 'php-keyring.gpg'); ?>
            </p>
			<?php
		}
	}