<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Community\Videos;
	
	use phpweb\Data\Videos\VideosRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class VideosIndexController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$this->setPageTitle('Community and Conference Videos');
			$this->setActivePage('community');
			
			return $this->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			$videos = array_values(Services::get(VideosRepository::class)->all());
			
			foreach ($videos as $index => $video) {
				$watch_url = $video->getWatchUrl();
				?>
				<h2 class="nolink"><?= htmlspecialchars($video->getTitle()) ?></h2>
                <table cellspacing="0" cellpadding="0" style="width: 100%">
                    <tbody>
                    <tr>
                        <td style="width: 200px">
	                        <a href="<?= htmlspecialchars($watch_url)?>" target="_blank">
		                        <img src="<?= htmlspecialchars($video->getThumbnailUri()) ?>"
		                             alt="<?= htmlspecialchars($video->getTitle()) ?>" style="width: 100%"/>
	                        </a>
                        </td>
                        <td style="padding-left: 20px">
							<div style="margin-bottom: 1em">
								<?= nl2br(htmlspecialchars($video->getDescription())) ?>
							</div>
	                        <div>
		                        Watch at <a href="<?= htmlspecialchars($watch_url) ?>" target="_blank"><?= htmlspecialchars($watch_url) ?></a>
	                        </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
				<?php
				if ($index !== count($videos) - 1) {
					echo '<hr style="border: 1px dotted #eeeeee; margin-top: 0.5em; margin-bottom: 0.5em"/>';
				}
			}
		}
	}