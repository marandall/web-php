<?php

	spl_autoload_register(static function($class_id) {
		$absolute = __DIR__ . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $class_id) . '.php';
		require_once $absolute;
	});