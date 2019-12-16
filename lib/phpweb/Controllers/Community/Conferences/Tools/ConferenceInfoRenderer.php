<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Community\Conferences\Tools;
	
	use phpweb\Data\Conferences\Conference;
	
	class ConferenceInfoRenderer
	{
		public function render(Conference $conference) {
			$image = $conference->getImageUrl();
			?>
			<div class="newsentry" style="clear: both">
				<h3><a href="<?= htmlspecialchars($conference->getUri()) ?>"><?= htmlspecialchars($conference->getTitle()) ?></a></h3>
				<div style="margin-bottom: 0.5em">Starting <?= htmlspecialchars($conference->getStartDate()->format('d M Y')) ?></div>
				<?php if ($image) { ?>
					<div class="newsimage" style="float: right; padding: 1em">
						<img src="<?= htmlspecialchars($image) ?>" alt="<?= htmlspecialchars($conference->getTitle()) ?>"/>
					</div>
				<?php } ?>
				<div class="newscontent">
					<?= $conference->getContentsHTML() ?>
				</div>
			</div>
			<?php
		}
	}