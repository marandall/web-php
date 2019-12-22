<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Services\Kernel;
	
	use phpweb\Services\Builder\ServiceDetector;
	use phpweb\Services\Builder\ServiceLoader;
	
	class Kernel
	{
		public function run(callable $callback) {
			$container = ServiceLoader::load();
			
			return $callback($container);
		}
	}