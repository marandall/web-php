<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Branches;
	
	use phpweb\Data\Release\Release;
	use phpweb\Data\Releases;
	
	class Branches
	{
		public const BRANCHES        = [
			/* 3.0 is here because version_compare() can't handle the only version in
			 * $OLDRELEASES, and it saves another special case in
			 * get_branch_security_eol_date(). */
			'3.0' => [
				'security' => '2000-10-20',
			],
			'5.3' => [
				'stable'   => '2013-07-11',
				'security' => '2014-08-14',
			],
			'5.4' => [
				'stable'   => '2014-09-14',
				'security' => '2015-09-03',
			],
			'5.5' => [
				'stable'   => '2015-07-10',
				'security' => '2016-07-21',
			],
			'5.6' => [
				'stable'   => '2017-01-19',
				'security' => '2018-12-31',
			],
			'7.0' => [
				'stable'   => '2018-01-04',
				'security' => '2019-01-10',
			],
		];
		public const MIGRATION_NOTES = [
			'7.1' => '<a href="/migration72">A guide is available for migrating from PHP 7.1 to 7.2.</a>',
			'7.0' => '<a href="/migration71">A guide is available for migrating from PHP 7.0 to 7.1.</a>',
			'5.6' => '<a href="/migration70">A guide is available for migrating from PHP 5.6 to 7.0.</a>',
			'5.5' => '<a href="/migration56">A guide is available for migrating from PHP 5.5 to 5.6.</a>',
			'5.4' => '<a href="/migration55">A guide is available for migrating from PHP 5.4 to 5.5.</a>',
			'5.3' => '<a href="/migration54">A guide is available for migrating from PHP 5.3 to 5.4.</a>',
			'5.2' => '<a href="/migration53">A guide is available for migrating from PHP 5.2 to 5.3.</a>',
			'5.1' => '<a href="/migration52">A guide is available for migrating from PHP 5.1 to 5.2.</a>',
			'5.0' => '<a href="/migration51">A guide is available for migrating from PHP 5.0 to 5.1.</a>',
			'4.4' => '<a href="/migration5">A guide is available for migrating from PHP 4 to PHP 5.0.</a><br>The end of life for PHP 4.4 also marks the end of life for PHP 4 as a whole.',
		];
		/** @var null|Branch[] */
		private static $branches = null;
		
		public static function GetBranch(string $branch_id): ?Branch {
			return self::GetBranches()[$branch_id] ?? null;
		}
		
		/**
		 * @return Branch[]
		 */
		public static function GetBranches(): array {
			if (self::$branches !== null) {
				return self::$branches;
			}
			
			/** @var Release[][] $releases_by_branch */
			$releases_by_branch = [];
			foreach (Releases::GetReleases() as $release_id => $release) {
				$releases_by_branch[$release->getBranchVersion()][$release_id] = $release;
			}
			
			$branches = [];
			foreach ($releases_by_branch as $branch_id => $releases) {
				usort(
					$releases,
					function (Release $a, Release $b) {
						return $a->getDate()->getTimestamp() - $b->getDate()->getTimestamp();
					}
				);
				
				$branches[$branch_id] = new Branch($branch_id, [], $releases);
			}
			
			return self::$branches = $branches;
		}
		
		public static function GetActiveBranches($include_recent_eols = true): array {
			$branches = [];
			$now      = new \DateTime();
			
			foreach (Releases::GetCurrentReleases() as $major => $releases) {
				foreach ($releases as $version => $release) {
					if ($branch = version_number_to_branch($version)) {
						$threshold = get_branch_security_eol_date($branch);
						if ($include_recent_eols) {
							$threshold->add(new \DateInterval('P28D'));
						}
						if ($now < $threshold) {
							$branches[$major][$branch]            = $release;
							$branches[$major][$branch]['version'] = $version;
						}
					}
				}
				if (!empty($branches[$major])) {
					ksort($branches[$major]);
				}
			}
			
			ksort($branches);
			return $branches;
		}
		
		/**
		 * If you provide an array to $always_include, note that the version numbers
		 * must be in $RELEASES _and_ must be the full version number, not the branch:
		 * ie provide array('5.3.29'), not array('5.3').
		 */
		public static function GetEolBranches($always_include = null) {
			$always_include = $always_include ?: [];
			$branches       = [];
			$now            = new \DateTime();
			
			// Gather the last release on each branch into a convenient array.
			foreach (Releases::GetOldReleases() as $major => $releases) {
				foreach ($releases as $version => $release) {
					if ($branch = version_number_to_branch($version)) {
						if (!isset($branches[$major][$branch]) || version_compare(
								$version, $branches[$major][$branch]['version'], 'gt'
							)) {
							$branches[$major][$branch] = [
								'date'    => strtotime($release['date']),
								'link'    => "/releases#$version",
								'version' => $version,
							];
						}
					}
				}
			}
			
			/* Exclude releases from active branches, where active is defined as "in
			 * the $RELEASES array and not explicitly marked as EOL there". */
			foreach (Releases::GetCurrentReleases() as $major => $releases) {
				foreach ($releases as $version => $release) {
					if ($branch = version_number_to_branch($version)) {
						if ($now < get_branch_security_eol_date($branch)) {
							/* This branch isn't EOL: remove it from our array. */
							if (isset($branches[$major][$branch])) {
								unset($branches[$major][$branch]);
							}
						}
						else {
							/* Add the release information to the EOL branches array, since it
							 * should be newer than the information we got from $OLDRELEASES. */
							$always_include[] = $version;
						}
					}
				}
			}
			
			// Include any release in the always_include list that's in $RELEASES.
			if ($always_include) {
				foreach ($always_include as $version) {
					$parts = explode('.', $version);
					$major = $parts[0];
					
					$release = Releases::GetCurrentReleases()[$major][$version] ?? null;
					if ($release !== null) {
						if ($branch = version_number_to_branch($version)) {
							$branches[$major][$branch] = [
								'date'    => strtotime($release['source'][0]['date']),
								'link'    => "/downloads#v$version",
								'version' => $version,
							];
						}
					}
				}
			}
			
			krsort($branches);
			foreach ($branches as $major => &$branch) {
				krsort($branch);
			}
			
			return $branches;
		}
	}