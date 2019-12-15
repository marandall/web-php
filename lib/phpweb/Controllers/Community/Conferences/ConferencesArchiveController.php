<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Community\Conferences;
	
	use phpweb\Data\News\ArticlesRepository;
	use phpweb\Data\News\NewsArticle;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class ConferencesArchiveController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$this->setPageTitle('Worldwide PHP Conferences (Archive)');
			return $this->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			$articles = (new ArticlesRepository())->all();
			foreach ($articles as $entry) {
				if (!$entry->hasCategory('cfp') && !$entry->hasCategory('conferences')) {
					continue;
				}
				
				$teaser_end = $entry->getTeaserLimit();
				if (!$teaser_end || $teaser_end->getTimestamp() < time()) {
					$this->renderConference($entry);
				}
			}
		}
		
		private function renderConference(NewsArticle $article) {
			$image = $article->getNewsImage();
			?>
            <div class="newsentry" style="clear: both">
                <h3 class="newstitle title"><a href=""><?= htmlspecialchars($article->getTitle()) ?></a></h3>
				<?php if ($image !== null) { ?>
                    <div class="newsimage" style="float: right; padding: 1em">
                        <img src="/static/images/news/<?= htmlspecialchars($image['content']) ?>" alt="<?= htmlspecialchars($article->getTitle()) ?>"/>
                    </div>
				<?php } ?>
                <div class="newscontent">
					<?= $article->getContentsHTML() ?>
                </div>
            </div>
			<?php
		}
	}