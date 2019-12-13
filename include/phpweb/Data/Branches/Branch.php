<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Branches;
	
	use phpweb\Data\Release\Release;
	
	class Branch
	{
		/** @var string */
		private $branch_id;
		
		/** @var array */
		private $data;
		
		/** @var Release[] */
		private $releases;
		
		/**
		 * Branch constructor.
		 *
		 * @param string $branch_id
		 * @param array  $data
		 * @param Release[] $releases
		 */
		public function __construct(string $branch_id, array $data, array $releases) {
			$this->branch_id = $branch_id;
			$this->data = $data;
			$this->releases = $releases;
		}
		
		/**
		 * @return Release[]
		 */
		public function getReleasesByVersion(): array {
			return $this->releases;
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
	}