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
	    /** @var RendererInterface */
	    private $renderer;
	 
		/** @var string[] */
		private $css_files = [
			'/static/fonts/Fira/fira.css',
			'/static/fonts/Font-Awesome/css/fontello.css',
			'/static/styles/theme-base.css',
			// '/static/styles/theme-medium.css',
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
					'Mailing Lists'        => [
						'/lists/' => 'Mailing List Guide',
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
		    $this->renderer = new FreshTemplate();
		    
		    $this->side_panels[] = new ConferencesPanel();
		    
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
		
		/**
		 * @return string[]
		 */
		public function getCssFiles(): array {
			return $this->css_files;
		}
		
		/**
		 * @return string[]
		 */
		public function getJscriptFiles(): array {
			return $this->jscript_files;
		}
		
		/**
		 * @return SidePanelInterface[]
		 */
		public function getSidePanels(): array {
			return $this->side_panels;
		}
		
		/**
		 * @return SidePanelInterface[]
		 */
		public function getErrorPanels(): array {
			return $this->error_panels;
		}
		
		/**
		 * @return string
		 */
		public function getActivePage(): string {
			return $this->active_page;
		}
		
		/**
		 * @return array[]
		 */
		public function getPageHeaders(): array {
			return $this->page_headers;
		}
		
		protected function render(callable $internal): Response {
			try {
				ob_start();
				$this->renderer->render($this, $internal);
				
				return new Response(ob_get_clean(), 200, ['Content-Type' => 'text/html']);
			}
			catch (Exception $ex) {
				ob_get_clean();
				return new Response('Unexpected error: ' . (string)$ex, 500, ['Content-Type' => 'text/html']);
			}
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