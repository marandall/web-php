<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release;
	
	use phpweb\Config\Site;
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Branches\Branches;
	
	class Release
	{
		/** @var string[] Language announcements */
		private array $announcements = [];
		
		/** @var string[] Special tags, security etc */
		private array $tags = [];
		
		/** @var \DateTime When the release occured */
		private $date;
		
		/** @var SourceFile[] List of sources */
		private array $sources = [];
		
		private string $version_id;
		
		private int $major_ver = 0;
		
		private int $minor_ver = 0;
		
		private string $release_ver = '';
		
		/** @var ModuleWithChanges[]|null */
		private ?array $changes = null;
		
		private $data;
		
		public function __construct(string $version_id, array $data) {
			if (($data['announcement'] ?? '') === true) {
				$this->announcements['en'] = true;
			}
			
			$this->tags = $data['tags'] ?? [];
			$this->date = new \DateTime($data['date']);
			
			foreach (($data['source'] ?? []) as $source) {
				$this->sources[] = new SourceFile($source);
			}
			
			$eq                = explode('.', $version_id, 3);
			$this->major_ver   = (int)($eq[0] ?? 0);
			$this->minor_ver   = (int)($eq[1] ?? 0);
			$this->release_ver = $eq[2] ?? '';
			
			$this->data       = $data;
			$this->version_id = $version_id;
		}
		
		/**
		 * @return string[]
		 */
		public function getAnnouncements(): array {
			return $this->announcements;
		}
		
		/**
		 * @return string[]
		 */
		public function getTags(): array {
			return $this->tags;
		}
		
		/**
		 * @return \DateTime
		 */
		public function getDate(): \DateTime {
			return clone $this->date;
		}
		
		/**
		 * @return SourceFile[]
		 */
		public function getSources(): array {
			return $this->sources;
		}
		
		/**
		 * @return int
		 */
		public function getMajorVer(): int {
			return $this->major_ver;
		}
		
		/**
		 * @return int
		 */
		public function getMinorVer(): int {
			return $this->minor_ver;
		}
		
		/**
		 * @return string
		 */
		public function getReleaseVer(): string {
			return $this->release_ver;
		}
		
		/**
		 * Provides a URL to the general page for this release
		 *
		 * @return string
		 */
		
		public function getUrl(): string {
			return Site::$BaseUrl . '/versions/' . $this->major_ver . '.' . $this->minor_ver . '.' . urlencode(
					$this->release_ver
				) . '/';
		}
		
		public function getWindowsDownloadUrl(): string {
			return 'https://windows.php.net/download#php-' . $this->getBranchVersion();
		}
		
		public function getBranchVersion(): string {
			return $this->major_ver . '.' . $this->minor_ver;
		}
		
		public function getAnnouncementHTML(): string {
			return $this->data['announcements']['en']['content'] ?? '';
		}
		
		/**
		 * Extracts the changelog data from the full-version changelog file
		 * and returns it as a string
		 */
		
		public function getChangelogText() {
			$changelog_path = $this->getBranch()->getChangelogPath();
			if (!$changelog_path) {
				return '';
			}
			
			$changelog_contents = file_get_contents($changelog_path);
			$changelog_start    = strpos(
				$changelog_contents, '<section class="version" id="' . $this->getVersionId() . '">'
			);
			
			if ($changelog_start !== false) {
				$changelog_end = strpos($changelog_contents, '</section>', $changelog_start);
				if ($changelog_end !== false) {
					$changelog = substr($changelog_contents, $changelog_start, $changelog_end - $changelog_start + 10);
					$changelog = preg_replace('/\<h3\>(.+?)\<\/h3\>/', '', $changelog);
					
					try {
						ob_start();
						eval('?>' . $changelog);
						return ob_get_clean();
					}
					catch (\Error $ex) {
						ob_get_clean();
						return '-- Cannot Parse --';
					}
				}
			}
			
			return '';
		}
		
		/**
		 * Looks up the owning branch
		 *
		 * We don't inject the branch into this to start with due to how it's generated, so instead
		 * the branch is looked up in the branch table (which will contain this instance)
		 *
		 * @return Branch
		 */
		
		public function getBranch(): Branch {
			return Branches::GetBranch($this->getBranchVersion());
		}
		
		/**
		 * @return string
		 */
		public function getVersionId(): string {
			return $this->version_id;
		}
		
		/**
		 * Returns a list of changes from the change log, keys are indexed to the module
		 *
		 * @return ModuleWithChanges[]
		 */
		
		public function getModulesWithChanges(): array {
			if ($this->changes !== null) {
				return $this->changes;
			}
			
			$this->changes = [];
			foreach ($this->data['changes'] as $module_id => $changes) {
				$this->changes[$module_id] = new ModuleWithChanges($module_id, $changes);
			}
			
			return $this->changes;
		}
	}