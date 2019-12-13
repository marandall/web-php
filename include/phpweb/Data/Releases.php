<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data;
	
	use phpweb\Data\Release\Release;
	
	class Releases
	{
		/** @var null|Release[] */
		private static $release_cache = null;
		
		public static function GetOldReleases(): array {
			return require __DIR__ . '/../../releases_old.inc';
		}
		
		public static function GetCurrentReleases(): array {
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
			foreach (self::GetOldReleases() as $major => $branch_releases) {
				foreach ($branch_releases as $version => $branch_release) {
					$releases[$version] = new Release($version, $branch_release);
				}
			}
			
			foreach (self::GetCurrentReleases() as $major => $branch_releases) {
				foreach ($branch_releases as $version => $branch_release) {
					$releases[$version] = new Release($version, $branch_release);
				}
			}
			
			return self::$release_cache = $releases;
		}
		
		/**
		 * @return Release[]
		 */
		
		public static function GetFlatReleases(): array {
			$dx = [];
			
			foreach (self::GetCurrentReleases() as $major => $minor) {
				foreach ($minor as $ver_id => $data) {
					$dx[$ver_id] = $data;
				}
			}
			
			foreach (self::GetOldReleases() as $major => $minor) {
				foreach ($minor as $ver_id => $data) {
					$dx[$ver_id] = $data;
				}
			}
			
			return $dx;
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
		
		/**
		 * @param string $version
		 * @return array|null
		 */
		
		public static function Lookup(string $version): ?Release {
			return self::GetReleases()[$version] ?? null;
		}
	}