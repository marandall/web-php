<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Middleware;
	
	use phpweb\Controllers\MiddlewareInterface;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\ConferencesPanel;
	use phpweb\UI\Templates\FreshTemplate;
	
	class UiInjector implements MiddlewareInterface
	{
		public function __invoke(Request $request, ?callable $next): Response {
			$renderer = new FreshTemplate();
			$renderer->addSidePanel(new ConferencesPanel());
			
			/* guess the section type based on the url */
			$section_guesses = [
				'/community/' => 'community',
				'/versions/'  => 'documentation',
				'/downloads/' => 'downloads',
				'/developers/' => 'developers',
			];
			
			foreach ($section_guesses as $prefix => $section_guess) {
				if (strpos($request->getUrl(), $prefix) === 0) {
					$renderer->setActivePage($section_guess);
					break;
				}
			}
			
			$request->store(FreshTemplate::class, '', $renderer);
			return $next($request);
		}
	}