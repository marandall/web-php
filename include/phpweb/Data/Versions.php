<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data;
	
	class Versions
	{
		/** @var array|null */
		private static $version_cache = null;
		
		/**
		 * Finds the latest version by iterating over the entire list of
		 * supported versions
		 *
		 * @return array - of form [major, minor]
		 */
		public static function GetLatestRelease(): array {
			$version = null;
			$current = null;
			foreach (self::GetVersions() as $versions) {
				foreach ($versions as $ver => $info) {
					if (version_compare($ver, $version) > 0) {
						$version = $ver;
						$current = $info;
					}
				}
			}
			
			return [$version, $current];
		}
		
		public static function GetVersions(): array {
			if (self::$version_cache !== null) {
				return self::$version_cache;
			}
			
			/* PHP 7.4 Release */
			$PHP_7_4_VERSION = "7.4.0";
			$PHP_7_4_DATE    = "28 Nov 2019";
			$PHP_7_4_TAGS    = []; // Set to ['security'] for security releases.
			$PHP_7_4_SHA256  = [
				"tar.gz"  => "004a1a8176176ee1b5c112e73d705977507803f425f9e48cb4a84f42b22abf22",
				"tar.bz2" => "bf206be96a39e643180013df39ddcd0493966692a2422c4b7d3355b6a15a01c0",
				"tar.xz"  => "9bb751b20e5d6cc1ea9b1ebf23ef2d5f07f99b2d9cc417bf1d70c04f8b20ec42",
			];
			
			/* PHP 7.3 Release */
			$PHP_7_3_VERSION = "7.3.12";
			$PHP_7_3_DATE    = "21 Nov 2019";
			$PHP_7_3_TAGS    = []; // Set to ['security'] for security releases.
			$PHP_7_3_SHA256  = [
				"tar.bz2" => "d317b029f991410578cc38ba4b76c9f764ec29c67e7124e1fec57bceb3ad8c39",
				"tar.gz"  => "d617e5116f8472a628083f448ebe4afdbc4ac013c9a890b08946649dcbe61b34",
				"tar.xz"  => "aafe5e9861ad828860c6af8c88cdc1488314785962328eb1783607c1fdd855df",
			];
			
			/* PHP 7.2 Release */
			$PHP_7_2_VERSION = "7.2.25";
			$PHP_7_2_DATE    = "21 Nov 2019";
			$PHP_7_2_TAGS    = []; // Set to ['security'] for security releases.
			$PHP_7_2_SHA256  = [
				"tar.bz2" => "7cb336b1ed0f9d87f46bbcb7b3437ee252d0d5060c0fb1a985adb6cbc73a6b9e",
				"tar.gz"  => "b2cb1bd46454d33b2c65c2fd559f464cd14e57dd47b953adf5caa77fdf0de52b",
				"tar.xz"  => "746efeedc38e6ff7b1ec1432440f5fa801537adf6cd21e4afb3f040e5b0760a9",
			];
			
			self::$version_cache = [
				7 => [
					$PHP_7_4_VERSION => [
						"announcement" => true,
						"tags"         => $PHP_7_4_TAGS,
						"date"         => $PHP_7_4_DATE,
						"source"       => [
							[
								"filename" => "php-$PHP_7_4_VERSION.tar.bz2",
								"name"     => "PHP $PHP_7_4_VERSION (tar.bz2)",
								"sha256"   => $PHP_7_4_SHA256["tar.bz2"],
								"date"     => $PHP_7_4_DATE,
							],
							[
								"filename" => "php-$PHP_7_4_VERSION.tar.gz",
								"name"     => "PHP $PHP_7_4_VERSION (tar.gz)",
								"sha256"   => $PHP_7_4_SHA256["tar.gz"],
								"date"     => $PHP_7_4_DATE,
							],
							[
								"filename" => "php-$PHP_7_4_VERSION.tar.xz",
								"name"     => "PHP $PHP_7_4_VERSION (tar.xz)",
								"sha256"   => $PHP_7_4_SHA256["tar.xz"],
								"date"     => $PHP_7_4_DATE,
							],
						],
					],
					$PHP_7_3_VERSION => [
						"announcement" => true,
						"tags"         => $PHP_7_3_TAGS,
						"date"         => $PHP_7_3_DATE,
						"source"       => [
							[
								"filename" => "php-$PHP_7_3_VERSION.tar.bz2",
								"name"     => "PHP $PHP_7_3_VERSION (tar.bz2)",
								"sha256"   => $PHP_7_3_SHA256["tar.bz2"],
								"date"     => $PHP_7_3_DATE,
							],
							[
								"filename" => "php-$PHP_7_3_VERSION.tar.gz",
								"name"     => "PHP $PHP_7_3_VERSION (tar.gz)",
								"sha256"   => $PHP_7_3_SHA256["tar.gz"],
								"date"     => $PHP_7_3_DATE,
							],
							[
								"filename" => "php-$PHP_7_3_VERSION.tar.xz",
								"name"     => "PHP $PHP_7_3_VERSION (tar.xz)",
								"sha256"   => $PHP_7_3_SHA256["tar.xz"],
								"date"     => $PHP_7_3_DATE,
							],
						],
					],
					$PHP_7_2_VERSION => [
						"announcement" => true,
						"tags"         => $PHP_7_2_TAGS,
						"date"         => $PHP_7_2_DATE,
						"source"       => [
							[
								"filename" => "php-$PHP_7_2_VERSION.tar.bz2",
								"name"     => "PHP $PHP_7_2_VERSION (tar.bz2)",
								"sha256"   => $PHP_7_2_SHA256["tar.bz2"],
								"date"     => $PHP_7_2_DATE,
							],
							[
								"filename" => "php-$PHP_7_2_VERSION.tar.gz",
								"name"     => "PHP $PHP_7_2_VERSION (tar.gz)",
								"sha256"   => $PHP_7_2_SHA256["tar.gz"],
								"date"     => $PHP_7_2_DATE,
							],
							[
								"filename" => "php-$PHP_7_2_VERSION.tar.xz",
								"name"     => "PHP $PHP_7_2_VERSION (tar.xz)",
								"sha256"   => $PHP_7_2_SHA256["tar.xz"],
								"date"     => $PHP_7_2_DATE,
							],
						],
					],
				],
			];
			
			return self::$version_cache;
		}
	}