<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers;
	
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class CreditsController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$this->setPageTitle('Credits');
			$this->setActivePage('community');
			
			return $this->render([$this, 'renderContents']);
		}
		
		protected function renderContents() {
            // Put credits information to $credits
			ob_start();
			phpcredits();
			$credits = ob_get_contents();
			ob_end_clean();

            // Strip all but the body and drop styles
			preg_match('!<body.*?>(.*)</body>!ims', $credits, $m);
			$credits = preg_replace('!<style.*?>.*</style>!ims', '', $m[1]);

            // Fix for PHP bug #24839,
            // which affects the page layout
			$credits = str_replace(
				array("</center>", "& ", 'class="center"'),
				array("</div>", "&amp; ", ''),
				$credits
			);
			
			echo '<div style="text-align: left">' . $credits . '</div>';
		}
	}
	