<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\About;
	
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class SitemapController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$this->setPageTitle('Sitemap');
			$this->setActivePage('help');
			
			return $this->render([$this, 'renderContents']);
		}
		
		protected function renderContents() {
			?>
			<h2>News</h2>
			<ul>
				<li><a href="/index.php">Home Page</a></li>
				<li><a href="/data/archive/index.php">News Archives</a></li>
				<li><a href="/feed.atom">Atom newsfeed</a></li>
				<li><a href="/conferences/">Conferences</a></li>
				<li><a href="/ChangeLog-4.php">PHP 4 ChangeLog</a></li>
				<li><a href="/ChangeLog-5.php">PHP 5 ChangeLog</a></li>
				<li><a href="/ChangeLog-7.php">PHP 7 ChangeLog</a></li>
			</ul>
			
			<h2>Getting PHP</h2>
			
			<ul>
				<li><a href="/downloads/">Downloads</a></li>
				<li><a href="/releases/">Older releases</a></li>
				<li><a href="/software.php">Software</a></li>
			</ul>
			
			<h2>PHP Bugs</h2>
			
			<ul>
				<li><a href="http://bugs.php.net/">Submit a bug or a feature request</a></li>
				<li><a href="http://bugs.php.net/search.php">Search for bugs</a></li>
			</ul>
			
			<h2>PHP Support</h2>
			
			<ul>
				<li><a href="/support.php">Getting Help</a>
					<ul>
						<li>Documentation
							<ul>
								<li><a href="/docs.php">Online Documentation</a></li>
								<li><a href="/faq.php">Frequently Asked Questions</a></li>
								<li><a href="/download-docs.php">Download documentation</a></li>
							</ul>
						</li>
						<li>Other support pages
							<ul>
								<li><a href="/lists/">Mailing Lists</a>, <a href="/lists/unsubscribe.php">Unsubscribe</a></li>
								<li><a href="/community/events/calendar">Events</a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
			
			<h2>Security</h2>
			
			<ul>
				<li><a href="/manual/security">In the Manual</a></li>
				<li><a href="/security-note.php">A Note</a></li>
			</ul>
			
			<h2>Navigation</h2>
			
			<ul>
				<li><a href="/my.php">My PHP.net</a></li>
				<li><a href="/urlhowto.php">URL Shortcuts</a></li>
				<li><a href="/quickref.php">Quick Function Reference</a></li>
				<li><a href="/sites.php">PHP.net Sites List</a></li>
			</ul>
			
			<h2>Git instructions</h2>
			
			<ul>
				<li><a href="/git.php">Getting PHP from Git</a></li>
				<li><a href="/git-php.php">Using Git for PHP Development</a></li>
				<!-- <li><a href="/svnsync.php">Maintaining a Local SVN Repository</a></li> -->
			</ul>
			
			<h2>Other pages</h2>
			
			<ul>
				<li><a href="/downloads/logos.php">Download Logos</a></li>
				<li><a href="/about/contact.php">Contact</a></li>
				<li><a href="/copyright.php">Copyright</a></li>
				<li><a href="/credits.php">Credits</a></li>
				<li><a href="/about/contact.php#ads">Advertising at PHP.net</a></li>
				<li><a href="/public/static/license/">License Information</a></li>
			</ul>
			<?php
		}
	}