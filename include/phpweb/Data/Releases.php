<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data;
	
	class Releases
	{
		public static function GetOldReleases(): array {
			return require __DIR__ . '/../../releases.inc';
		}
	}