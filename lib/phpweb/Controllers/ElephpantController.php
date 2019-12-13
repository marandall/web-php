<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers;
	
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class ElephpantController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$this->setPageTitle('ElePHPant');
			$this->setActivePage('community');
			
			return $this->render([$this, 'renderContents']);
		}
		
		protected function renderContents() {
		    ?>
            <a name="copyright"></a>
            <p>
                The ElePHPant is the adorable, elephantine mascot of the PHP project.
                Occasionally, official stuffed toy elePHPants designed by
                <a href="http://www.elroubio.net">Vincent Pontier</a> are made available.
                You may have seen pictures of them (from
                <a href="https://www.flickr.com/groups/elephpants/">Flickr</a>) at the bottom
                of the php.net homepage. Beware of imitators.
            </p>

            <p>
                <img src="/static/images/logos/elephpant-running-78x48.gif" alt="">
            </p>

            <p>
                For more information on the PHP Group and the PHP project, please see
                <a href="http://php.net/">the PHP homepage</a>.
            </p>
			<?php
		}
	}
	