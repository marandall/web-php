<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Templates;
	
	
	use Exception;
	use phpweb\Data\Branches\Branches;
	use phpweb\Data\StabilityEnum;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	abstract class PHPWebTemplate
	{
		/** @var string[] */
		private $css_files = [
			'/static/fonts/Fira/fira.css',
			'/static/fonts/Font-Awesome/css/fontello.css',
			'/static/styles/theme-base.css',
			'/static/styles/theme-medium.css',
		];
		
		/** @var string[] */
		private $jscript_files = [
			'//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
			'/static/js/ext/modernizr.js',
			'/static/js/ext/hogan-2.0.0.min.js',
			'/static/js/ext/typeahead.min.js',
			'/static/js/ext/mousetrap.min.js',
			'/static/js/search.js',
			'/static/js/common.js',
		];
		
		private $active_page = 'main';
		
		private $page_title = '';
		
		/** @var SidePanelInterface[] */
		private $side_panels = [];
		
		/** @var SidePanelInterface[] */
		private $error_panels = [];
		
		/** @var array[] */
		private $page_headers = [
			'main'          => [
				'url'      => '/',
				'title'    => '',
				'sections' => [
				
				],
			],
			'downloads'     => [
				'url'      => '/downloads/',
				'title'    => 'Download / Install',
				'sections' => [
				
				],
			],
			'documentation' => [
				'url'      => '/docs.php',
				'title'    => 'Documentation',
				'sections' => [
				],
			],
			'developers'    => [
				'url'      => '/developers/',
				'title'    => 'Developers',
				'sections' => [
					'Get Involved' => [
						'/developers/git/'         => 'Using GIT',
						'/developers/git/register' => 'Register for Access',
					],
					'Tools'        => [
						'/developers/tools/build-setup' => 'Setting Up Tool',
					],
				],
			],
			'community'     => [
				'url'      => '/community/',
				'title'    => 'Community',
				'sections' => [
					'Events' => [
						'/community/events/calendar'     => 'Events'
                        ],
                    'Conferences' => [
						'/community/conferences/'        => 'Conferences & CFP',
						'/community/conferences/archive' => 'Archive',
					],
				],
			],
			'help'          => [
				'url'      => '/support.php',
				'title'    => 'Help',
				'sections' => [
				
				],
			],
		];
		
		public function __construct() {
		    $download_links = [];
		    foreach (array_reverse(Branches::GetBranches()) as $branch) {
		        if (in_array($branch->getStability(), [ StabilityEnum::STABLE, StabilityEnum::SECURITY ], true)) {
		            $this->page_headers['downloads']['sections']['Major Versions'][$branch->getUrl() . 'install/'] = 'Get PHP ' . $branch->getBranchId();
                }
            }
			
			$this->page_headers['downloads']['sections']['Support'] = [
			    '/versions/supported.php' => 'Supported Versions',
                '/versions/eol.php' => 'End of Life'
            ];
		}
		
		abstract public function __invoke(Request $request): Response;
		
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
		
		protected function render(callable $internal): Response {
			try {
				ob_start();
				$this->renderInternal($internal);
				
				return new Response(ob_get_clean(), 200, ['Content-Type' => 'text/html']);
			}
			catch (Exception $ex) {
				ob_get_clean();
				return new Response('Unexpected error: ' . (string)$ex, 500, ['Content-Type' => 'text/html']);
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
                      href="/opensearch.xml" title="Add PHP.net search">

                <link rel="alternate" type="application/atom+xml" href="/releases/api/releases.xml"
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
                <script src="/public/static/js/ext/html5.js"></script>
                <![endif]-->
				
				<?php foreach ($this->jscript_files as $file) { ?>
                    <script type="text/javascript" src="<?= htmlspecialchars($file) ?>"></script>
				<?php } ?>
            </head>
            <body>

            <nav id="head-nav" class="navbar navbar-fixed-top">
                <div class="navbar-inner clearfix">
                    <a href="/" class="brand"><img src="/static/images/logos/php-logo.svg" width="48" height="24"
                                                   alt="php"></a>
                    <div id="mainmenu-toggle-overlay"></div>
                    <input type="checkbox" id="mainmenu-toggle">
                    <ul class="nav">
						<?php foreach ($this->page_headers as $k => $header) { ?>
                            <li class="<?= ($this->active_page === $k) ? 'active' : '' ?> top-menu top-menu-<?= htmlspecialchars(
								$k
							) ?>" data-menu="<?= htmlspecialchars($k) ?>">
                                <a href="<?= htmlspecialchars($header['url']) ?>">
									<?= htmlspecialchars($header['title']) ?>
                                </a>
                            </li>
						<?php } ?>
                    </ul>
                    <form class="navbar-search" id="topsearch" action="/search/search.php">
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
                </section>
				<?php foreach ($this->side_panels as $panel) { ?>
                    <aside>
                        <div style="padding-left: 10px">
							<?php $panel->draw(); ?>
                        </div>
                    </aside>
				<?php } ?>
            </div><!-- layout -->

            <footer>
                <div class="container footer-content">
                    <div class="row-fluid">
                        <ul class="footmenu">
                            <li><a href="/about/copyright.php">Copyright &copy; 2001-<?= date('Y') ?> The PHP Group</a>
                            </li>
                            <li><a href="/my.php">My PHP.net</a></li>
                            <li><a href="/about/contact.php">Contact</a></li>
                            <li><a href="/about/sites.php">Other PHP.net sites</a></li>
                            <li><a href="/about/privacy.php">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
            </footer>

            <a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top"
                                                                                src="/static/images/to-top@2x.png"></a>
			
			<?php foreach ($this->page_headers as $nav_id => $header) {
			    if (count($header['sections']) === 0) {
			        continue;
                }
			    ?>
                <div style="line-height: 1em; display: none; width: 100%; height: 200px; background-color: #eeeeee; position: fixed; top: 48px; left: 0; right: 0; z-index: 10000"
                     class="nav-<?= $nav_id ?> top-menu" data-menu="<?= $nav_id ?>">
                    <div class="inner-align" style="margin-left: auto; margin-right: auto; padding: 10px">
                        <div style="display: flex; flex-direction: row">
							<?php foreach ($header['sections'] as $category_label => $links) { ?>
                                <div style="padding: 10px; width: 200px">
                                    <div style="font-weight: bold; margin-bottom: 0.5em; color: #555555">
										<?= htmlspecialchars($category_label) ?>
                                    </div>
									<?php foreach ($links as $url => $link_label) { ?>
                                        <div style="margin-bottom: 0.5em">
                                            <a href="<?= htmlspecialchars($url) ?>"
                                               style="text-decoration: none !important; font-size: 14px; color: #333333"><?= htmlspecialchars(
													$link_label
												) ?></a>
                                        </div>
									<?php } ?>
                                </div>
							<?php } ?>
                        </div>
                    </div>
                </div>
			<?php } ?>
            <script type="text/javascript">
                $(function () {
                    var top_bar = $('#head-nav'),
                        layout_area = $('#layout-content');
                    
                    $('.top-menu').each(function () {
                        var self = $(this),
                            menu_id = $(this).attr('data-menu'),
                            target = $('.nav-' + menu_id);

                        function show() {
                            if ($(window).width() > 900) {
                                target.find('.inner-align').css('width', layout_area.width() + 'px');
                                target.show();
                            }
                        }

                        function hide() {
                            target.hide();
                        }
                        
                        target.css('top', (top_bar.outerHeight() - 5) + 'px');
                        
                        self.mouseenter(show).mouseleave(hide);
                        target.mouseenter(show).mouseleave(hide);
                    });
                });
            </script>
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