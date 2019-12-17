<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Middleware;
	
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	class Runner
	{
		/** @var callable[] */
		private array $handlers;
		
		public function __construct(array $handlers) {
			$this->handlers = $handlers;
		}
		
		public function __invoke(Request $request): Response {
			$index = 0;
			
			$call = null;
			$call = function (Request $passed_request) use (&$index, &$call): Response {
				$index++;
				// printf("Running %s\n", get_class($this->handlers[$index - 1]));
				return $this->handlers[$index - 1]($passed_request, $call);
			};
			
			return $call($request);
		}
	}