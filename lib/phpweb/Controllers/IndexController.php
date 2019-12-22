<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers;
	
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Data\Branches\BranchRepository;
	use phpweb\Data\News\ArticlesRepository;
	use phpweb\Data\Videos\VideosRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services;
	use phpweb\UI\Templates\FreshTemplate;
	
	class IndexController implements ControllerInterface
	{
		public function load(): array {
			return [
				UiInjector::class,
				$this,
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			return $request->get(FreshTemplate::class)
				->setPageTitle('PHP - Powering The Web')
				->render([$this, 'renderContents']);
		}
		
		public function renderCustomHeader() {
			?>
            <div style="text-align: center; background: #fafafa; padding: 2em;">
                <div style="font-size: 70px;font-weight: bold; color: #8892BF">
                    PHP
                </div>
                <div style="color: #4F5B93; font-size:20px">
                    The technology powering many of the world's largest websites
                </div>
            </div>
			<?php
		}
		
		public function renderContents() {
			$supported_branches = Services::get(BranchRepository::class)->supportedByBranchDescending();
			$promoted_video     = Services::get(VideosRepository::class)->getPromoted(1)[0] ?? null;
			
			?>

            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); grid-column-gap: 10px; width: 100%; margin-bottom: 1em">
				<?php
					foreach ($supported_branches as $branch) {
						$latest = $branch->getLatestRelease();
						?>
                        <div style="padding: 1em; text-align: center; background-color: #fafafa">
                            <div style="font-weight: bold; font-size: 150%; margin-bottom: 10px">
                                <a href="<?= htmlspecialchars($branch->getUrl()) ?>"
                                   style="color: black">PHP <?= htmlspecialchars($branch->getBranchId()) ?></a>
                            </div>

                            <div><?= htmlspecialchars($latest->getVersionId()) ?></div>
                            <div style="margin-bottom: 0.5em">Released <?= htmlspecialchars(
									$latest->getDate()->format('d M Y')
								) ?></div>

                            <a href="<?= htmlspecialchars($branch->getUrl()) ?>" style="display: block; padding: 10px"
                               class="r2-hover-gray-2">Find out more</a>
                        </div>
						<?php
					}
				?>
            </div>
			
			<?php if ($promoted_video !== null) { ?>
                <section class="r2-sec">
                    <h2>Today's Promoted Video</h2>
                    <div>
                        <table cellspacing="0" cellpadding="0" style="width: 100%">
                            <tbody>
                            <tr>
                                <td style="width: 200px">
                                    <a href="<?= htmlspecialchars($promoted_video->getWatchUrl()) ?>" target="_blank">
                                        <img src="<?= htmlspecialchars($promoted_video->getThumbnailUri()) ?>"
                                             alt="<?= htmlspecialchars($promoted_video->getTitle()) ?>"
                                             style="width: 100%"/>
                                    </a>
                                </td>
                                <td style="padding-left: 20px">
                                    <div style="margin-bottom: 1em; font-weight: bold">
										<?= nl2br(htmlspecialchars($promoted_video->getTitle())) ?>
                                    </div>
                                    <div style="margin-bottom: 1em">
										<?= nl2br(htmlspecialchars($promoted_video->getDescription())) ?>
                                    </div>
                                    <div>
                                        Watch at <a href="<?= htmlspecialchars($promoted_video->getWatchUrl()) ?>"
                                                    target="_blank"><?= htmlspecialchars(
												$promoted_video->getWatchUrl()
											) ?></a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
			<?php } ?>
			
			<?php
			$boundary = strtotime('6 months ago');
			foreach ((new ArticlesRepository())->all() as $index => $article) {
				$timestamp = $article->getTime();
				if ($timestamp->getTimestamp() < $boundary) {
					break;
				}
				?>
                <section class="r2-sec">
                    <h2><?= htmlspecialchars($article->getTitle()) ?></h2>
                    <div>
                        <time style="float: right" datetime="<?= $timestamp->format(DATE_ATOM) ?>"><?= htmlspecialchars(
								$timestamp->format('d M Y')
							) ?></time>
                        
                        <div style="margin-bottom: 2em; clear: both; padding-top: 1em">
		                    <?= $article->getContentsHTML() ?>
                        </div>
                    </div>
                </section>
				<?php
				
				if ($index > 10) {
					break;
				}
			}
		}
	}