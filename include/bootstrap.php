<?php
	
	include_once __DIR__ . '/changelogs.inc';
	
	spl_autoload_register(static function($class_id) {
		$absolute = realpath(__DIR__ . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $class_id) . '.php');
		if ($absolute) {
			require_once $absolute;
		}
	});