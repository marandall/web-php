<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Community\Conferences;
	
	use phpweb\Controllers\Community\Conferences\Tools\ConferenceInfoRenderer;
	use phpweb\Data\Conferences\Conference;
	use phpweb\Data\Conferences\ConferenceRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class ConferencesIndexController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$this->setPageTitle('Worldwide PHP Conferences');
			return $this->render([$this, 'renderContents']);
			
		}
		
		public function renderContents() {
		    $repo = Services::get(ConferenceRepository::class);
			$renderer = Services::get(ConferenceInfoRenderer::class);
			
		    foreach ($repo->upcoming() as $conference) {
		        $renderer->render($conference);
			}
		}
	}