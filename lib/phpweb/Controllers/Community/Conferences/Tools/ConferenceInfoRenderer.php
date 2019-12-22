<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Community\Conferences\Tools;
	
	use phpweb\Data\Conferences\Conference;
	use phpweb\Services\Builder\InjectableService;
	use phpweb\Services\TextFormatting\TextFormatter;
	
	class ConferenceInfoRenderer implements InjectableService
	{
		private TextFormatter $formatter;
		
		public function __construct(
			TextFormatter $formatter
		) {
			$this->formatter = $formatter;
		}
		
		public function render(Conference $conference, bool $full = true) {
			$image = $conference->getLogoUrl();
			?>
            <section class="r2-sec">
                <h2>
                    <a href="<?= htmlspecialchars($conference->getUri()) ?>" >
						<?= htmlspecialchars($conference->getTitle()) ?>
                    </a>
                </h2>
                <div>
					<?php if ($image) { ?>
                        <div class="newsimage" style="float: right; padding: 1em">
                            <a href="<?= htmlspecialchars($conference->getUri())?>">
                                <img src="<?= htmlspecialchars($image) ?>"
                                     alt="<?= htmlspecialchars($conference->getTitle()) ?>"
                                     style="max-width: 200px"/>
                            </a>
                        </div>
					<?php } ?>

                    <div style="margin-bottom: 0.5em">Starting <?= htmlspecialchars(
							$conference->getStartDate()->format('d M Y')
						) ?></div>

                    <div class="newscontent">
						<?= $full
                            ? $this->formatter->format($conference->getContentsHTML())
                            : htmlspecialchars($conference->getSummaryText())
						?>
                    </div>
                    
                    <?php if (!$full) { ?>
                    <div style="margin-top: 1em">
                        <a href="<?= htmlspecialchars($conference->getUri())?>">
                            Find out more about <?= htmlspecialchars($conference->getTitle()) ?>
                        </a>
                    </div>
                <?php } ?>
                </div>
            </section>
			<?php
		}
	}