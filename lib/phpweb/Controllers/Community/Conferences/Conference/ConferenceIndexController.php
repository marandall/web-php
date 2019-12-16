<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Community\Conferences\Conference;
	
	use phpweb\Data\Conferences\Conference;
	use phpweb\Data\Conferences\ConferenceRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class ConferenceIndexController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$conf_id = $request->getAttributesBag()->getString('conference');
			
			$conf = Services::get(ConferenceRepository::class)->find($conf_id);
			if ($conf === null) {
				die('Not Found'); // todo: replace with 404 controller
			}
			
			$this->setPageTitle($conf->getTitle());
			return $this->render(
				function () use ($conf) {
					$this->renderContents($conf);
				}
			);
		}
		
		public function renderContents(Conference $conference) {
			$start_date = $conference->getStartDate()->format('d M Y');
			$end_date = $conference->getEndDate()->format('d M Y');
			
			?>
			<div>
				<?= (($conference->getEndDate()->getTimestamp() > time()) ? 'Happening' : 'Happened')  ?> <?= ($start_date !== $end_date) ? ($start_date . ' - ' . $end_date) : ($start_date) ?>
			</div>
			
			<hr style="border: 1px dashed #eeeeee; margin-top: 1em; margin-bottom: 1em"/>
			
			<div style="width: 256px; height: 256px; float: right; background-image: url('<?= htmlspecialchars(
				$conference->getImageUrl()
			) ?>'); background-size: contain; background-position: center center; background-repeat: no-repeat; margin-left: 10px; margin-bottom: 10px"></div>
			
			<div>
				<?= $conference->getContentsHTML() ?>
			</div>
			<?php
		}
	}