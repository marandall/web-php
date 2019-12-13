<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers;
	
	use phpweb\Data\News\ArticlesRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class IndexController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$this->setPageTitle('PHP - Powering the Web');
			
			return $this->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			foreach ((new ArticlesRepository())->all() as $index => $article) {
				$timestamp = $article->getTime();
				?>
				<div>
					<time style="float: right" datetime="<?= $timestamp->format(DATE_ATOM) ?>"><?= htmlspecialchars($timestamp->format('d M Y')) ?></time>
					<h3><?= htmlspecialchars($article->getTitle()) ?></h3>
				</div>
                <div style="margin-bottom: 2em">
					<?= $article->getContentsHTML() ?>
                </div>
				<?php
				
				if ($index > 20) {
					break;
				}
			}
		}
	}