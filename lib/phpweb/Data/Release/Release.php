<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release;
	
	use DateTimeImmutable;
	use phpweb\Config\Site;
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Branches\Branches;
	
	class Release
	{
		/** @var Announcement[] - Language announcements */
		private array $announcements = [];
		
		/** @var string[] - Special tags, security etc */
		private array $tags = [];
		
		/** @var \DateTimeImmutable - When the release occured */
		private DateTimeImmutable $date;
		
		/** @var SourceFile[] - List of sources */
		private array $sources = [];
		
		/** @var WindowsBuild[] */
		private $windows_builds = [];
		
		/** @var string - What stability of the release */
		private string $stage = '';
		
		private string $version_id;
		
		private int $major_ver = 0;
		
		private int $minor_ver = 0;
		
		private string $release_ver = '';
		
		/** @var ChangedModule[]|null */
		private ?array $changes = null;
		
		private $data;
		
		public static function FromJson($data) {
			$release        = new Release($data->version);
			$release->date  = new DateTimeImmutable($data->date);
			$release->stage = $data->stage ?? 'stable';
			
			foreach (($data->announcements ?? []) as $lang_id => $announcement_data) {
				$ann                                     = new Announcement($lang_id, $announcement_data);
				$release->announcements[$ann->getLang()] = $ann;
			}
			
			foreach (($data->source->files ?? []) as $file_data) {
				$release->sources[] = SourceFile::FromJson($file_data);
			}
			
			foreach (($data->changes->modules ?? []) as $module_id => $module_changes) {
				$release->changes[$module_id] = ChangedModule::FromJson($module_id, $module_changes);
			}
			
			foreach (($data->windows_builds ?? []) as $build_tag => $build_info) {
				$release->windows_builds[$build_tag] = WindowsBuild::FromJson($build_info);
			}
			
			foreach (($data->tags ?? []) as $tag) {
				$release->tags[] = $tag;
			}
			
			return $release;
		}
		
		public function __construct(string $version_id) {
			$p                 = explode('.', $version_id);
			$this->major_ver   = (int)$p[0];
			$this->minor_ver   = (int)$p[1];
			$this->release_ver = $p[2];
			$this->version_id  = $version_id;
		}
		
		public static function __set_state($an_array) {
			$rel = new Release($an_array['version_id']);
			foreach ($an_array as $k => $v) {
				$rel->{$k} = $v;
			}
			return $rel;
		}
		
		/**
		 * @return Announcement[]
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
		 * @return \DateTimeImmutable
		 */
		public function getDate(): \DateTimeImmutable {
			return $this->date;
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
		
		public function getAnnouncement(string $lang = 'en'): ?Announcement {
			return $this->announcements[$lang] ?? null;
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
		 * @return ChangedModule[]
		 */
		
		public function getModulesWithChanges(): array {
			return $this->changes ?? [];
		}
		
		/**
		 * @return WindowsBuild[]
		 */
		public function getWindowsBuilds(): array {
			return $this->windows_builds;
		}
		
		public function isStable(): bool {
			return $this->stage === 'stable';
		}
	}