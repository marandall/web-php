<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Config;
	
	class Site
	{
		public static $BaseUrl = '/';
		
		public static function GetDataDir(): string {
			return realpath(__DIR__ . '/../../../data');
		}
		
		public static function GetContentDir(): string {
			return realpath(__DIR__ . '/../../../public/static/content');
		}
	}