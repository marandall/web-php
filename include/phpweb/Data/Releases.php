<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data;
	
	class Releases
	{
		public static function GetOldReleases(): array {
			return require __DIR__ . '/../../releases_old.inc';
		}
		
		public static function GetCurrentReleases(): array {
			return require __DIR__ . '/../../releases_current.inc';
		}
		
		public static function GetAllReleases(): array {
			return self::GetCurrentReleases() + self::GetOldReleases();
		}
		
		/**
		 * Finds the latest version by iterating over the entire list of
		 * supported versions
		 *
		 * @return array - of form [major, minor]
		 */
		public static function GetLatestReleaseVersionArray(): array {
			$version = null;
			$current = null;
			foreach (self::GetCurrentReleases() as $versions) {
				foreach ($versions as $ver => $info) {
					if (version_compare($ver, $version) > 0) {
						$version = $ver;
						$current = $info;
					}
				}
			}
			
			return [$version, $current];
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