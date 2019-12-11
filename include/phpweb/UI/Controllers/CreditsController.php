<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Controllers;
	
	use phpweb\UI\Templates\BasicCallbackPanel as BasicCallbackPanelAlias;
	use phpweb\UI\Templates\PHPWebTemplate;
	use phpweb\UI\Templates\BasicCallbackPanel;
	
	class CreditsController extends PHPWebTemplate
	{
		public function setup() {
			$this->setPageTitle('Credits');
			$this->setActivePage('community');
			
			$this->render([$this, 'renderContents']);
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
	