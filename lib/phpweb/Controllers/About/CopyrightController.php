<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\About;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\BasicCallbackPanel;
	use phpweb\UI\Templates\FreshTemplate;
	
	class CopyrightController implements ControllerInterface
	{
		public function load(): array {
			return [
				UiInjector::class,
				AboutMiddleware::class,
				$this,
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			return $request->get(FreshTemplate::class)
				->setPageTitle('Website Copyright')
				->addSidePanel(new BasicCallbackPanel('About', fn() => $this->renderPanel()))
				->render([$this, 'renderContents']);
		}
		
		public function renderPanel() {
			?>
            <a name="license"></a>
            <h3>PHP License</h3>
            <p>
                For information on the PHP License (i.e. using the PHP language),
                <a href="/public/static/license/">see our licensing information page</a>.
            </p>
			<?php
		}
		
		public function renderContents() {
			?>
            <p>
                The code, text, PHP logo, and graphical elements on this website
                and the mirror websites (the "Site") are Copyright &copy; 2001-<?php echo date('Y') ?>
                the <a href="/credits.php">PHP Group</a>. All rights reserved.
            </p>

            <p>
                Except as otherwise indicated elsewhere on this Site, you are free
                to view, download and print the documents and information available
                on this Site subject to the following conditions:
            </p>

            <ul>
                <li>
                    You may not remove any copyright or other proprietary notices
                    contained in the documents and information on this Site.
                </li>
                <li>
                    The rights granted to you constitute a license and not a transfer
                    of title.
                </li>
                <li>
                    The rights specified above to view, download and print the
                    documents and information available on this Site are not applicable
                    to the graphical elements, design or layout of this Site. These
                    elements of the Site are protected by trade dress and other laws
                    and may not be copied or imitated in whole or in part.
                </li>
            </ul>

            <p>
                For more information on the PHP Group and the PHP project, please see
                <a href="http://php.net/">the PHP homepage</a>.
            </p>

            <h2>PHP Manual</h2>

            <p>
                The PHP Manual is covered by a separate license, which is available
                <a href="/manual/en/copyright.php">from within the manual itself</a>.
            </p>
			<?php
		}
	}