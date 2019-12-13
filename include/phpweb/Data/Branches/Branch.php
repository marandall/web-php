<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Branches;
	
	use phpweb\Config\Site;
	use phpweb\Data\Release\Release;
	use phpweb\Data\StabilityEnum;
	
	class Branch
	{
		/** @var string */
		private $branch_id;
		
		/** @var array */
		private $data;
		
		/** @var Release[] */
		private $releases;
		
		/** @var int */
		private $major_ver;
		
		/** @var int */
		private $minor_ver;
		
		/**
		 * Branch constructor.
		 *
		 * @param string    $branch_id
		 * @param array     $data
		 * @param Release[] $releases
		 */
		public function __construct(string $branch_id, array $data, array $releases) {
			$this->branch_id = $branch_id;
			$this->data      = $data;
			$this->releases  = $releases;
			
			$ev = explode('.', $branch_id);
			$this->major_ver = (int)$ev[0];
			$this->minor_ver = (int)$ev[1];
			
		}
		
		/**
		 * @return Release[]
		 */
		public function getReleasesByVersion(): array {
			return $this->releases;
		}
		
		/**
		 * Finds when the first production release was released
		 *
		 * @return \DateTime|null
		 */
		
		public function getReleaseDate(): ?\DateTime {
			$initial = $this->getInitialRelease();
			return $initial ? $initial->getDate() : null;
		}
		
		/**
		 * Finds the release of the form major.minor.0
		 *
		 * This is done using a symbol lookup rather than the first item which
		 * may involve rc versions
		 *
		 * @return Release|null
		 */
		
		public function getInitialRelease(): ?Release {
			$vid = $this->branch_id . '.0';
			
			return $this->releases[$vid] ?? null;
		}
		
		public function isSupported(): bool {
			$eol = $this->getEolSecurityDate();
			return $eol ? ($eol > new \DateTime()) : false;
		}
		
		/**
		 * Calculates the end of security updates date
		 *
		 * @return \DateTime|null
		 */
		
		public function getEolSecurityDate(): ?\DateTime {
			if (version_compare($this->getBranchId(), '5.3', '<')) {
				return clone $this->getLatestRelease()->getDate();
			}
			
			$initial = $this->getInitialRelease();
			if ($initial === null) {
				return null;
			}
			
			$date = clone $initial->getDate();
			$date->add(new \DateInterval('P3Y'));
			return $date;
		}
		
		/**
		 * Gets the branch version e.g. 5.6, 7.4, 8.0
		 *
		 * @return string
		 */
		public function getBranchId(): string {
			return $this->branch_id;
		}
		
		/**
		 * Finds the release with the latest date
		 *
		 * @return Release
		 */
		
		public function getLatestRelease(): Release {
			$latest = null;
			foreach ($this->releases as $release) {
				if ($latest === null || $release->getDate()->getTimestamp() > $latest->getDate()->getTimestamp()) {
					$latest = $release;
				}
			}
			
			return $latest;
		}
		
		public function getStability(): string {
			$initial = $this->getInitialRelease();
			if ($initial === null) {
				return StabilityEnum::FUTURE;
			}
			
			$security_eol = $this->getEolSecurityDate();
			$bugs_eol     = $initial->getDate()->add(new \DateInterval('P2Y'));
			$cur          = new \DateTime();
			
			if ($bugs_eol > $cur) {
				return StabilityEnum::STABLE;
			}
			
			if ($security_eol > $cur) {
				return StabilityEnum::SECURITY;
			}
			
			return StabilityEnum::UNSUPPORTED;
		}
		
		public function getMajorVer(): int {
			return $this->major_ver;
		}
		
		public function getMinorVer(): int {
			return $this->minor_ver;
		}
		
		/**
		 * Maps the branch-specific changelog to the given location on file where
		 * it is stored.
		 *
		 * Performs a check to see if it exists
		 *
		 * @return string
		 */
		
		public function getChangelogPath(): string {
			$path = Site::GetDataDir() . '/data/releases/' . $this->major_ver . '/changelog.php';
			return file_exists($path) ? $path : '';
		}
		
		public function getUrl(): string {
			return '/versions/' . $this->major_ver . '.' . $this->minor_ver . '/';
		}
	}