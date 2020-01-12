<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Services\Builder;
	
	use phpweb\Config\Site;
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\MiddlewareInterface;
	use phpweb\Services\Config\SiteConfig;
	use Symfony\Component\DependencyInjection\ContainerBuilder;
	use Symfony\Component\DependencyInjection\Dumper\PhpDumper;
	
	class ServiceDetector
	{
		public static function GetCacheClassPath(): string {
			return Site::GetDataDir() . '/compiled/service-list.php';
		}
		
		public static function GetCacheClassName(): string {
			return 'ServiceList';
		}
		
		public function compile() {
			$classes = require __DIR__ . '/../../../vendor/composer/autoload_classmap.php';
			
			$builder = new ContainerBuilder();
			
			foreach ($classes as $class_id => $class_path) {
				try {
					$ref = new \ReflectionClass($class_id);
					if ($ref->isSubclassOf(InjectableService::class) || $ref->isSubclassOf(MiddlewareInterface::class) || $ref->isSubclassOf(ControllerInterface::class) || $ref->isSubclassOf(PublicService::class) ) {
						// printf( "  [OK] Registering in container\n");
						
						$builder
							->register($class_id, $class_id)
							->setAutoconfigured(true)
							->setAutowired(true)
							->setPublic(true);
					}
				}
				catch (\Throwable $ex) {
					printf("!! Cannot load %s\n", $class_id);
				}
			}
			
			/* site config is synthetic */
			$builder->register(SiteConfig::class, SiteConfig::class)
				->setPublic(true)
				->setSynthetic(true);
			
			$builder->compile();
			$dumper = new PhpDumper($builder);
			
			file_put_contents(
				self::GetCacheClassPath(),
				$dumper->dump(
					[
						'class' => self::GetCacheClassName()
					]
				)
			);
		}
	}