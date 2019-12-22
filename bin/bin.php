<?php
	
	use phpweb\Services\Kernel\Kernel;
	use Symfony\Component\Console\Application;
	use Symfony\Component\DependencyInjection\Container;
	
	require_once __DIR__ . '/../lib/vendor/autoload.php';
	
	$kernel = new Kernel();
	$kernel->run(function(Container $container) {
		$handler_classes = [
			\phpweb\Data\Conferences\Tasks\CompileConferencesToArray::class,
			\phpweb\Data\Conferences\Tasks\ExtractTasksFromNews::class,
			\phpweb\Data\Release\Commands\ReleasesToXMLCommand::class,
			\phpweb\Data\Release\Commands\CompileReleasesCommand::class,
			\phpweb\Data\Videos\Commands\AddYoutubeVideoCommand::class,
			\phpweb\Data\Videos\Commands\CompileVideosCommand::class,
			\phpweb\Data\Videos\Commands\SetPromotedVideoCommand::class,
			\phpweb\Data\News\Commands\SyncCommand::class
		];
		
		$handlers = [];
		foreach ($handler_classes as $class_id) {
			if ($container->has($class_id)) {
				$handlers[] = $container->get($class_id);
			}
			else {
				$handlers[] = new $class_id();
			}
		}
		
		$application = new Application('PHP.net Utilities');
		$application->addCommands($handlers);
		$application->run();
	});
	

	
	$application->run();