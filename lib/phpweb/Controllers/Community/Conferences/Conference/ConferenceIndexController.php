<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Community\Conferences\Conference;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Data\Conferences\Conference;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\FreshTemplate;
	
	class ConferenceIndexController implements ControllerInterface
	{
		public function load(): array {
			return [
			    UiInjector::class,
                ConferenceLoaderFromUri::class,
                $this
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			$conference = $request->get(Conference::class);
			return $request
                ->get(FreshTemplate::class)
                ->setPageTitle($conference->getTitle())
                ->render(fn() => $this->renderContents($conference));
		}
		
		public function renderContents(Conference $conference) {
			$start_date = $conference->getStartDate()->format('d M Y');
			$end_date   = $conference->getEndDate()->format('d M Y');
			
			?>
            <div>
				<?= (($conference->getEndDate()->getTimestamp() > time(
					)) ? 'Happening' : 'Happened') ?> <?= ($start_date !== $end_date) ? ($start_date . ' - ' . $end_date) : ($start_date) ?>
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