<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Branches\Install;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Controllers\Middleware\UiReleasesMiddleware;
	use phpweb\Controllers\Versions\Branches\BranchLoaderMiddleware;
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\GpgKeys;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\FreshTemplate;
	
	class InstallBranchSourceController implements ControllerInterface
	{
		public function load(): array {
			return [
				UiInjector::class,
				UiReleasesMiddleware::class,
				BranchLoaderMiddleware::class,
				$this
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			$branch = $request->get(Branch::class);
			return $request
				->get(FreshTemplate::class)
				->setPageTitle('Install ' . $branch->getBranchId() . ' From Source')
				->render(fn() => $this->renderContents($branch));
		}
		
		public function renderContents(Branch $branch) {
		    foreach (array_reverse($branch->getReleasesByVersion()) as $release) {
		        ?>
                <h2>PHP Version <?= htmlspecialchars($release->getVersionId()) ?></h2>
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
			?>
            <h2>GPG Keys</h2>
            <pre><?= htmlspecialchars(GpgKeys::GetKeys()[$branch->getBranchId()] ?? 'Not Available') ?></pre>
			<?php
		}
	}