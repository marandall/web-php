<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Releases\Install;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Controllers\Middleware\UiReleasesMiddleware;
	use phpweb\Controllers\Versions\Releases\ReleaseLoaderMiddleware;
	use phpweb\Data\Release\Release;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\FreshTemplate;
	
	class WindowsDownloadsController implements ControllerInterface
	{
		public function load(): array {
			return [
				UiInjector::class,
				UiReleasesMiddleware::class,
				ReleaseLoaderMiddleware::class,
				$this,
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			$release = $request->get(Release::class);
			
			return $request->get(FreshTemplate::class)
				->setPageTitle('Windows Downloads for ' . $release->getVersionId())
				->render(fn() => $this->renderContents($release));
		}
		
		public function renderContents(Release $release) {
			foreach ($release->getWindowsBuilds() as $build) {
				?>
                <section class="r2-sec">
                    <h2><?= htmlspecialchars($build->getLabel()) ?></h2>
                    <div>
	                    <div style="font-weight: bold">PHP Downloads</div>
                        <ul>
							<?php foreach ($build->getFiles() as $file) { ?>
								<li>
									<div style="margin-bottom: 1em">
										<div style="font-weight: bold">
											<?= htmlspecialchars($file->getName()) ?>
										</div>
										<div>
											<a href="<?= htmlspecialchars($file->getUrl()) ?>" target="_blank">
												<?= htmlspecialchars($file->getPath()) ?>
											</a>
										</div>
										<div style="font-family: 'Courier New'; font-size: smaller; word-wrap: break-word; margin-bottom: 1em">
											SHA256: <?= htmlspecialchars($file->getSha256()) ?>
										</div>
									</div>
								</li>
        
							<?php } ?>
                        </ul>

                        <div style="font-weight: bold">Dependencies</div>
                        <ol>
							<?php foreach ($build->getDependencies() as $dependency) { ?>
                                <li>
                                    <a href="<?= htmlspecialchars($dependency->getUrl()) ?>" target="_blank">
										<?= htmlspecialchars($dependency->getLabel()) ?>
                                    </a>
                                </li>
							<?php } ?>
                        </ol>
                    </div>
                </section>
				<?php
			}
			?>
			<?php
		}
		
	}