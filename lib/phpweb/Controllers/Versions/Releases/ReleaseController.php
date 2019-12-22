<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions\Releases;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Release\Release;
	use phpweb\Data\StabilityEnum;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services\ChangelogRenderer\ChangelogRenderer;
	use phpweb\Services\TextFormatting\TextFormatter;
	use phpweb\UI\Notices\BranchReleaseNotMostRecent;
	use phpweb\UI\Notices\BranchSecurityOnlyNotice;
	use phpweb\UI\Notices\BranchUnsupportedNotice;
	use phpweb\UI\Templates\FreshTemplate;
	use phpweb\UI\Templates\LinkPanel;
	
	class ReleaseController implements ControllerInterface
	{
		private ChangelogRenderer $changelog_renderer;
		
		private TextFormatter $text_formatter;
		
		public function __construct(ChangelogRenderer $changelog_renderer, TextFormatter $text_formatter) {
			$this->changelog_renderer = $changelog_renderer;
			$this->text_formatter = $text_formatter;
		}
		
		public function load(): array {
			return [
				UiInjector::class,
				ReleaseLoaderMiddleware::class,
				$this,
			];
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
		
		
		public function __invoke(Request $request, ?callable $next): Response {
			$release = $request->get(Release::class);
			$branch  = $request->get(Branch::class);
			
			$version_id = $release->getVersionId();
			$changelog  = $release->getChangelogText();
			
			/* list order is inverted so this goes at the top */
			$release_list = new LinkPanel('Other Releases in ' . $branch->getBranchId());
			foreach ($branch->getReleasesByVersion() as $branch_release) {
				$release_list->add($branch_release->getUrl(), $branch_release->getVersionId());
			}
			
			$branch_menu = new LinkPanel('PHP ' . $branch->getBranchId());
			$branch_menu->add($branch->getUrl(), 'About ' . $branch->getBranchId());
			$branch_menu->add($branch->getUrl() . 'install/', 'Download / Install');
			
			return $request
				->get(FreshTemplate::class)
				->setPageTitle('PHP Version ' . $version_id)
				->addSidePanel($release_list)
				->addSidePanel($branch_menu)
				->render(fn() => $this->renderContents($release, $branch, $changelog));
			
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
            <section class="r2-sec">
                <h2>Release Announcement</h2>
                <div>
					<?= $this->text_formatter->format($release->getAnnouncementHTML()) ?>
                    To download the source code for this release please view the <a href="#sources">sources</a>.
                </div>
            </section>

            <section class="r2-sec">
                <h2>Changelog</h2>
                <div>
					<?php $this->changelog_renderer->render($release->getModulesWithChanges()); ?>
                </div>
            </section>


            <section class="r2-sec">
                <h2>Sources</h2>
                <div>
					<?php foreach ($release->getSources() as $source) { ?>
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
					?>
                </div>
            </section>
			
			<?php
			
		}
	}