<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Services\HtmlSanitizer;
	
	use phpweb\Services\Builder\InjectableService;
	
	/**
	 * Sanitizes HTML
	 *
	 * Previously the code just injected HTML wherever it saw fit, even with sign-off on
	 * GIT commits this is generally not considered an overly-wise idea, thus anything which
	 * previously was submitted as pure HTML will need to be sanitized.
	 *
	 * This strips off almost everything except the basics.
	 */
	
	class HtmlSanitizer implements InjectableService
	{
		public function sanitize(string $html): string {
			$config = \HTMLPurifier_Config::createDefault();
			$config->set('HTML.AllowedAttributes', '*.class,a.href,img.src,span.style');
			$config->set('CSS.AllowedProperties', 'background-color');
			
			$purifier = new \HTMLPurifier($config);
			return $purifier->purify($html);
		}
	}