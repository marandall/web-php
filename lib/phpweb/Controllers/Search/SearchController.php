<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Search;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\FreshTemplate;
	
	/**
	 * Not really sure if this has any relevance in the current website
	 * as there's an async dropdown attached to it instead
	 */
	class SearchController implements ControllerInterface
	{
		public function load(): array {
			return [
				UiInjector::class,
				$this,
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			return $request
				->get(FreshTemplate::class)
				->setPageTitle('Search Results')
				->render([$this, 'renderContents']);
		}
		
		
		public function renderContents() {
			?>
            <noscript>
                Php.net's search functionality requires JavaScript to operate. Please enable
                JavaScript and reload to continue.
            </noscript>
            <script>
                (function () {
                    var cx = '011570197911755000456:fip9wopfz_u';
                    var gcse = document.createElement('script');
                    gcse.type = 'text/javascript';
                    gcse.async = true;
                    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(gcse, s);
                })();
            </script>
            <div class="gcse-search" data-linktarget></div>
			<?php
		}
	}