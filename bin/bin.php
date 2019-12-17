<?php
	
	require_once __DIR__ . '/../lib/vendor/autoload.php';
	
	$application = new \Symfony\Component\Console\Application('PHP.net Utilities');
	$application->add(new \phpweb\Data\Conferences\Tasks\CompileConferencesToArray());
	$application->add(new \phpweb\Data\Conferences\Tasks\ExtractTasksFromNews());
	$application->add(new \phpweb\Data\Release\Commands\ReleasesToXMLCommand());
	$application->add(new \phpweb\Data\Release\Commands\CompileReleasesCommand());
	$application->add(new \phpweb\Data\Videos\Commands\AddYoutubeVideoCommand());
	$application->add(new \phpweb\Data\Videos\Commands\CompileVideosCommand());
	$application->add(new \phpweb\Data\Videos\Commands\SetPromotedVideoCommand());
	
	$application->run();