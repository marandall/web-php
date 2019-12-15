<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data;
	
	use phpweb\Config\Site;
	use phpweb\Data\Release\Release;
	use phpweb\Data\Release\ReleasesRepository;
	use phpweb\Services;
	
	class Releases
	{
		/** @var null|Release[] */
		private static $release_cache = null;
		
		public static function GetOldReleasesData(): array {
			return require Site::GetDataDir() . '/releases/releases_old.inc';
		}
		
		public static function GetCurrentReleasesData(): array {
			return require Site::GetDataDir() . '/releases/releases_current.inc';
		}
		
		/**
		 * @return Release[]
		 */
		
		public static function GetReleases(): array {
			return Services::get(ReleasesRepository::class)->all();
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