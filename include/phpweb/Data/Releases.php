<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data;
	
	use phpweb\Data\Release\Release;
	
	class Releases
	{
		/** @var null|Release[] */
		private static $release_cache = null;
		
		public static function GetOldReleasesData(): array {
			return require __DIR__ . '/../../releases_old.inc';
		}
		
		public static function GetCurrentReleasesData(): array {
			return require __DIR__ . '/../../releases_current.inc';
		}
		
		/**
		 * @return Release[]
		 */
		
		public static function GetReleases(): array {
			if (self::$release_cache !== null) {
				return self::$release_cache;
			}
			
			$releases = [];
			foreach (self::GetOldReleasesData() as $major => $branch_releases) {
				foreach ($branch_releases as $version => $branch_release) {
					$releases[$version] = new Release($version, $branch_release);
				}
			}
			
			foreach (self::GetCurrentReleasesData() as $major => $branch_releases) {
				foreach ($branch_releases as $version => $branch_release) {
					$releases[$version] = new Release($version, $branch_release);
				}
			}
			
			return self::$release_cache = $releases;
		}
		
		/**
		 * Finds the latest version by iterating over the entire list of
		 * supported versions
		 *
		 * @return Release[] - of form [major, minor]
		 */
		public static function GetLatestReleaseVersionArray(): array {
			$version = null;
			$current = null;
			foreach (self::GetCurrentReleasesData() as $versions) {
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
		
		/**
		 * @param string $version
		 * @return array|null
		 */
		
		public static function Lookup(string $version): ?Release {
			return self::GetReleases()[$version] ?? null;
		}
	}