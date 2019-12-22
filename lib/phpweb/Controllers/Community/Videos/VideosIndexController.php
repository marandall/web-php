<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Community\Videos;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Data\Videos\VideosRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services;
	use phpweb\UI\Templates\FreshTemplate;
	
	class VideosIndexController implements ControllerInterface
	{
		public function load(): array {
			return [
				UiInjector::class,
				$this,
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			return $request
				->get(FreshTemplate::class)
				->setPageTitle('Community and Conference Videos')
				->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			$videos = array_values(Services::get(VideosRepository::class)->all());
			
			foreach ($videos as $index => $video) {
				$watch_url = $video->getWatchUrl();
				?>
                <section class="r2-sec">
                    <h2 class="nolink"><?= htmlspecialchars($video->getTitle()) ?></h2>
                    <div>
                        <table cellspacing="0" cellpadding="0" style="width: 100%">
                            <tbody>
                            <tr>
                                <td style="width: 200px">
                                    <a href="<?= htmlspecialchars($watch_url) ?>" target="_blank">
                                        <img src="<?= htmlspecialchars($video->getThumbnailUri()) ?>"
                                             alt="<?= htmlspecialchars($video->getTitle()) ?>" style="width: 100%"/>
                                    </a>
                                </td>
                                <td style="padding-left: 20px">
                                    <div style="margin-bottom: 1em">
										<?= nl2br(htmlspecialchars($video->getDescription())) ?>
                                    </div>
                                    <div>
                                        Watch at <a href="<?= htmlspecialchars($watch_url) ?>"
                                                    target="_blank"><?= htmlspecialchars($watch_url) ?></a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
				<?php
			}
		}
	}