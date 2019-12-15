<?php
	
	declare(strict_types=1);
	
	namespace phpweb;
	
	class Services
	{
		private static $services = [];
		
		public static function get(string $class_id): object {
			$service = self::$services[$class_id] ?? null;
			if ($service === null) {
				self::$services[$class_id] = $service = new $class_id();
			}
			
			return $service;
		}
	}