<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release;
	
	
	use League\Flysystem\File;
	
	class WindowsBuild
	{
		/* provides __set_state */
		use Restorable;
		
		/** @var string - This is the internal build */
		private string $build_name;
		
		/** @var string -  This is what is shown to the user */
		private string $label;
		
		/** @var WindowsBuildFile[] */
		private array $files;
		
		/** @var WindowsBuildDependency[] */
		private array $dependencies;
		
		/**
		 * @return string
		 */
		public function getBuildName(): string {
			return $this->build_name;
		}
		
		/**
		 * @return string
		 */
		public function getLabel(): string {
			return $this->label;
		}
		
		/**
		 * @return WindowsBuildFile[]
		 */
		public function getFiles(): array {
			return $this->files;
		}
		
		/**
		 * @return WindowsBuildDependency[]
		 */
		public function getDependencies(): array {
			return $this->dependencies;
		}
		
		public static function FromJson(object $data): self {
			$build = new static();
			$build->build_name = $data->name;
			$build->label = $data->label;
			
			foreach (($data->files ?? []) as $file_data) {
				$build->files[] = WindowsBuildFile::FromJson($file_data);
			}
			
			foreach (($data->dependencies ?? []) as $dependency_data) {
				$build->dependencies[] = WindowsBuildDependency::FromJson($dependency_data);
			}
			
			return $build;
		}
		
		public function getDownloadZip(): ?WindowsBuildFile {
			foreach ($this->files as $file) {
				if ($file->getName() === 'zip') {
					return $file;
				}
			}
			
			return null;
		}
	}