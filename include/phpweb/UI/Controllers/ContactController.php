<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Controllers;
	
	use phpweb\UI\Templates\PHPWebTemplate;
	use phpweb\UI\Templates\BasicCallbackPanel;
	
	class ContactController extends PHPWebTemplate
	{
		public function setup() {
			$this->setPageTitle('Contact');
			$this->setActivePage('community');
			
			$this->render([$this, 'renderContents']);
		}
		
		protected function renderContents() {
			?>
            <a name="ads"></a>
            <h1>Advertising at PHP.net</h1>

            <p>
                The maintainers of PHP.net are definitely
                <em>not interested</em> in graphical banner or text ad placement
                deals.
            </p>

            <a name="contact"></a>
            <h1>Contact</h1>

            <p>
                Please report problems you find on PHP.net in
                <a href="http://bugs.php.net/">the bug system</a>. Categorize the bug
                as "PHP.net Website Problem". This allows us to follow the progress of
                the problem until it is fixed.
            </p>
            <p>
                For security related issues (in PHP or our websites) please contact
                <a href="mailto:security@php.net">security@php.net</a>.
            </p>
            <p>
                If you have problems setting up PHP or using some functionality,
                or especially a program written in PHP, please ask your question on a
                <a href="/support.php">support channel</a>, since the webmasters will
                not answer any such questions.
            </p>
            <p>
                If you would like to contact the webmasters for some other reason, please
                write to <a href="mailto:php-webmaster@lists.php.net">php-webmaster@lists.php.net</a>.
                Note that this address is mapped to a mailing list and a newsgroup, so
                <strong>every message you send will be stored in public archives at multiple
                    servers</strong>.
            </p>
			<?php
		}
	}
	