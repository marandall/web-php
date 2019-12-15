<?php
	
	require_once __DIR__ . '/../lib/vendor/autoload.php';
	
	$application = new \Symfony\Component\Console\Application('PHP.net Utilities');
	$application->add(new \phpweb\Data\Conferences\Tasks\CompileConferencesToArray());
	$application->add(new \phpweb\Data\Conferences\Tasks\ExtractTasksFromNews());
	$application->run();