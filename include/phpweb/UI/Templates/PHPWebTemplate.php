<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Templates;
	
	
	use Exception;
	
	class PHPWebTemplate
	{
		/** @var string[] */
		private $css_files = [
			'/fonts/Fira/fira.css',
			'/fonts/Font-Awesome/css/fontello.css',
			'/styles/theme-base.css',
			'/styles/theme-medium.css',
		];
		
		/** @var string[] */
		private $jscript_files = [];
		
		private $active_page = 'main';
		
		private $page_title = '';
		
		/** @var SidePanelInterface[] */
		private $side_panels = [];
		
		/** @var SidePanelInterface[] */
		private $error_panels = [];
		
		/** @var array[] */
		private $page_headers = [
			'main'          => ['url' => '/', 'title' => ''],
			'downloads'     => ['url' => '/downloads', 'title' => 'Downloads'],
			'documentation' => ['url' => '/docs.php', 'title' => 'Documentation'],
			'community'     => ['url' => '/get-involved.php', 'title' => 'Get Involved'],
			'help'          => ['url' => '/support.php', 'title' => 'Help'],
		];
		
		
		public function __invoke() {
			$this->setup();
		}
		
		public function setup() {
		
		}
		
		public function getLanguage(): string {
			return 'en';
		}
		
		/**
		 * Registers a new side panel
		 *
		 * The panels view will only appear when there are one or more panels that have
		 * been registered to this controller
		 *
		 * @return $this
		 */
		public function addSidePanel(SidePanelInterface $panel) {
			$this->side_panels[] = $panel;
			return $this;
		}
		
		public function addErrorPanel(SidePanelInterface $panel) {
			$this->error_panels[] = $panel;
			return $this;
		}
		
		public function getPageTitle(): string {
			return $this->page_title;
		}
		
		/**
		 * @param string $page_title - Overrides the page title
		 */
		public function setPageTitle(string $page_title): void {
			$this->page_title = $page_title;
		}
		
		protected function render(callable $internal): void {
			try {
				ob_start();
				$this->renderInternal($internal);
				echo ob_get_clean();
			}
			catch (Exception $ex) {
				ob_get_clean();
				die('Error: ' . $ex->getMessage());
			}
		}
		
		private function renderInternal(callable $internal) {
			$config = [
				'headsup'         => '',
				'meta-navigation' => [],
				'languages'       => [],
				'thispage'        => '',
			];
			
			?>
            <!DOCTYPE html>
            <html xmlns="http://www.w3.org/1999/xhtml">
            <head>

                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <title>PHP: <?= htmlspecialchars($this->page_title) ?></title>

                <link rel="shortcut icon" href="/favicon.ico">
                <link rel="search" type="application/opensearchdescription+xml"
                      href="http://php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
                <link rel="alternate" type="application/atom+xml" href="/releases/feed.php"
                      title="PHP Release feed">
                <link rel="alternate" type="application/atom+xml" href="/feed.atom"
                      title="PHP: Hypertext Preprocessor">
				
				<?php foreach ($config["meta-navigation"] as $rel => $page): ?>
                    <link rel="<?php echo $rel ?>" href="/<?php echo $page ?>">
				<?php endforeach ?>
				
				<?php foreach ($config["languages"] as $code): ?>
                    <link rel="alternate"
                          href="/manual/<?php echo $code ?>/<?php echo $config["thispage"] ?>"
                          hreflang="<?php echo $code ?>">
				<?php endforeach ?>
				
				<?php foreach ($this->css_files as $filename): ?>
                    <link rel="stylesheet" type="text/css"
                          href="<?= htmlspecialchars($filename) ?>" media="screen">
				<?php endforeach ?>

                <!--[if IE]>
                <script src="/js/ext/html5.js"></script>
                <![endif]-->
            </head>
            <body>

            <nav id="head-nav" class="navbar navbar-fixed-top">
                <div class="navbar-inner clearfix">
                    <a href="/" class="brand"><img src="/images/logos/php-logo.svg" width="48" height="24"
                                                   alt="php"></a>
                    <div id="mainmenu-toggle-overlay"></div>
                    <input type="checkbox" id="mainmenu-toggle">
                    <ul class="nav">
						<?php foreach ($this->page_headers as $k => $header) { ?>
                            <li class="<?= ($this->active_page === $k) ? 'active' : '' ?>">
                                <a href="<?= htmlspecialchars($header['url']) ?>">
									<?= htmlspecialchars($header['title']) ?>
                                </a>
                            </li>
						<?php } ?>
                    </ul>
                    <form class="navbar-search" id="topsearch" action="/search.php">
                        <input type="hidden" name="show" value="quickref">
                        <input type="search" name="pattern" class="search-query" placeholder="Search" accesskey="s">
                    </form>
                </div>
                <div id="flash-message"></div>
            </nav>
			<?php if (!empty($config["headsup"])): ?>
                <div class="headsup"><?php echo $config["headsup"] ?></div>
			<?php endif ?>
            <nav id="trick">
                <div><?php doc_toc("en") ?></div>
            </nav>
            <div id="goto">
                <div class="search">
                    <div class="text"></div>
                    <div class="results">
                        <ul></ul>
                    </div>
                </div>
            </div>

            <div id="layout" class="clearfix">
                <section id="layout-content">
                    <h1><?= htmlspecialchars($this->page_title) ?></h1>
					
					<?php foreach ($this->error_panels as $panel) { ?>
					<div style="margin-bottom; 1em; background-color: darkred; color: white; padding: 1em">
                        <?php $panel->draw(); ?>
                    </div>
					<?php } ?>
					
					<?php $internal(); ?>
            </div><!-- layout -->

            <footer>
                <div class="container footer-content">
                    <div class="row-fluid">
                        <ul class="footmenu">
                            <li><a href="/copyright.php">Copyright &copy; 2001-<?= date('Y') ?> The PHP Group</a></li>
                            <li><a href="/my.php">My PHP.net</a></li>
                            <li><a href="/contact.php">Contact</a></li>
                            <li><a href="/sites.php">Other PHP.net sites</a></li>
                            <li><a href="/privacy.php">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
            </footer>

            <!-- External and third party libraries. -->
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<?php
				$jsfiles = ["ext/modernizr.js", "ext/hogan-2.0.0.min.js", "ext/typeahead.min.js", "ext/mousetrap.min.js", "search.js", "common.js"];
				foreach ($jsfiles as $filename) {
					$path = dirname(__DIR__) . '/js/' . $filename;
					echo '<script src="/cached.php?t=' . @filemtime(
							$path
						) . '&amp;f=/js/' . $filename . '"></script>' . "\n";
				}
			?>

            <a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top"
                                                                                src="/images/to-top@2x.png"></a>

            </body>
            </html>
			<?php
		}
		
		/**
		 * Override the active page (sets which header is active
		 * @return $this
		 */
		protected function setActivePage(string $active_page) {
			$this->active_page = $active_page;
			return $this;
		}
	}