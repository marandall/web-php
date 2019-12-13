<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Developers;
	
	use Closure;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\BasicCallbackPanel;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class GetInvolvedController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$this->setPageTitle('Get Involved');
			$this->addSidePanel(new BasicCallbackPanel('', Closure::fromCallable([$this, 'renderPanel'])));
			return $this->render([$this, 'renderContents']);
		}
		
		public function renderPanel() {
		    ?>
            <div class="panel">
                <div class="headline">Table of Contents</div>
                <div class="body">
                    <ul>
                        <li><a href="#contributing-to-php">Contributing to PHP</a></li>
                        <li><a href="#ways-to-contribute">Four Best Ways to Contribute</a></li>
                        <li><a href="#php-src">Development of the PHP source</a></li>
                        <li><a href="#references">Useful links for developers</a></li>
                    </ul>
                </div>
            </div>
            <?php
        }
		
		public function renderContents() {
			?>
			<h2 class="content-title" id="contributing-to-php">Contributing to PHP</h2>
			<div class="content-box">
				
				<p>
					Anybody who programs in PHP can be a contributing member of the community
					that develops and deploys it; the task of deploying PHP, documentation and
					associated websites is a never ending one. With every release, or release
					candidate comes a wave of work, which takes a lot of organization and
					co-ordination.
				</p>
				
				<p>
					With the introduction of release managers comes a smoother release process,
					but help is still needed: testing release candidates, finding and squashing
					bugs in tests, documentation, and sources.
				</p>
			</div>
			
			<h3 class="content-title" id="ways-to-contribute">Four Best Ways to Contribute</h3>
			
			<ol class="content-box listed">
				<li>Running test suites in <a href="http://qa.php.net/">RC</a>
					and <a href="http://php.net/releases">release</a> distributions of PHP</li>
				<li>Help finding and diagnosing failed tests, see
					the <a href="http://qa.php.net/write-test.php">phpt documentation</a></li>
				<li>Filing and resolving bug reports
					at <a href="http://bugs.php.net">bugs.php.net</a></li>
				<li>Help maintain and or translate documentation files
					at <a href="http://edit.php.net">edit.php.net</a>. Check out our
					<a href="http://doc.php.net/tutorial/">guide for contributors</a>.</li>
			</ol>
			
			<h3 class="content-header" id="php-src">Development of the PHP source</h3>
			
			<div class="content-box">
				<p>
					Someone hoping to become involved in the maintenance and development of
					the source should be experienced in all of the areas mentioned above, as
					this creates a strong team; everyone knows how every other part of the
					project works.
				</p>
				
				<p>
					You will also need experience in C programming as PHP is written entirely in C.
				</p>
			</div>
			
			<h3 class="content-title" id="references">Useful links for developers</h3>
			<ul class="content-box listed">
				<li><a href="https://wiki.php.net/rfc/howto">The RFC process</a> - the process
					by which developers can suggest and discuss new ideas with the community</li>
				<li><a href="/build-setup.php">Developer Setup Help</a> - some helpful information
					regarding setting up a development environment for PHP</li>
				<li><a href="/lists/">Mailing List</a> - list of general and internal mailing lists
					used by PHP</li>
			</ul>
			<?php
		}
	}