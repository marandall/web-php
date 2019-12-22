<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Community\Conferences\Conference;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Data\Conferences\Conference;
	use phpweb\Data\Conferences\ConferenceRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services\TextFormatting\TextFormatter;
	use phpweb\UI\Templates\FreshTemplate;
	use phpweb\UI\Templates\LinkPanel;
	
	class ConferenceIndexController implements ControllerInterface
	{
		private TextFormatter $formatter;

		private ConferenceRepository $repository;
		
		public function __construct(TextFormatter $formatter, ConferenceRepository $repository) {
			$this->formatter = $formatter;
			$this->repository = $repository;
		}
		
		public function load(): array {
			return [
			    UiInjector::class,
                ConferenceLoaderFromUri::class,
                $this
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			$conference = $request->get(Conference::class);
			
			$links = new LinkPanel('Explore');
			$links->add('/community/conferences/', 'Coming Up');
			
			$next_conf = $this->repository->findFirstAfter($conference->getStartDate()->getTimestamp());
			if ($next_conf) {
				$links->add($next_conf->getUri(), 'Next: ' . $next_conf->getTitle());
			}
			
			$prev_conf = $this->repository->findFirstBefore($conference->getStartDate()->getTimestamp());
			if ($prev_conf) {
			    $links->add($prev_conf->getUri(), 'Previous: ' . $prev_conf->getTitle());
            }
			
			return $request
                ->get(FreshTemplate::class)
                ->setPageTitle($conference->getTitle())
                ->addSidePanel($links)
                ->render(fn() => $this->renderContents($conference));
		}
		
		public function renderContents(Conference $conference) {
			$start_date = $conference->getStartDate()->format('d M Y');
			$end_date   = $conference->getEndDate()->format('d M Y');
			
			?>
            <section class="r2-sec" style="font-weight: bold">
                <div>
	                <?= (($conference->getEndDate()->getTimestamp() > time(
		                )) ? 'Happening' : 'Happened') ?> <?= ($start_date !== $end_date) ? ($start_date . ' - ' . $end_date) : ($start_date) ?>
                </div>
            </section>

            <section class="r2-sec">
                <div>
                    <div style="width: 256px; height: 256px; float: right; background-image: url('<?= htmlspecialchars(
		                $conference->getLogoUrl()
	                ) ?>'); background-size: contain; background-position: center center; background-repeat: no-repeat; margin-left: 10px; margin-bottom: 10px"></div>

                    <div>
		                <?= $this->formatter->format($conference->getContentsHTML()) ?>
                    </div>
                </div>
            </section>

			<?php
		}
	}