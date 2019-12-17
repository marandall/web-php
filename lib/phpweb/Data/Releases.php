<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data;
	
	use phpweb\Config\Site;
	use phpweb\Data\Release\Release;
	use phpweb\Data\Release\ReleasesRepository;
	use phpweb\Services;
	
	class Releases
	{
		public static function GetOldReleasesData(): array {
			return require Site::GetDataDir() . '/releases/releases_old.inc';
		}
		
		public static function GetCurrentReleasesData(): array {
			return require Site::GetDataDir() . '/releases/releases_current.inc';
		}
		
		public static function CompareVersion(array $arrayA, array $versionB)
		{
			static $sortValues = array(
				true => 1,
				false => -1,
			);
			
			$length = count($arrayA);
			$arrayB = version_array($versionB, $length);
			
			if (!is_array($arrayA) || !is_array($arrayB)) {
				return $sortValues[$arrayA > $arrayB];
			}
			
			foreach ($arrayA as $index => $componentA) {
				$componentA = $arrayA[$index];
				$componentB = $arrayB[$index];
				if ($componentA != $componentB) {
					return $sortValues[$componentA > $componentB];
				}
			}
			
			return 0;
		}
		
	}