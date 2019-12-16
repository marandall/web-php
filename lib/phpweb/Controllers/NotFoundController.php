<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers;
	
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class NotFoundController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			return $this->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			?>
			<p style="text-align: center">
				Page Not Found
			</p>
			<?php
		}
		
	}