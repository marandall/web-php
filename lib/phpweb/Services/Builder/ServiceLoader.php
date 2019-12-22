<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Services\Builder;
	
	use Psr\Container\ContainerInterface;
	use Symfony\Component\DependencyInjection\Container;
	
	class ServiceLoader
	{
		public static function load(): Container {
			/** @var Container $container */
			static $container = null;
			
			if ($container === null) {
				require_once ServiceDetector::GetCacheClassPath();
				
				$class_id = ServiceDetector::GetCacheClassName();
				$container = new $class_id();
			}
			
			return $container;
		}
	}