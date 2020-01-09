<?php
	
	declare(strict_types=1);
	
	
	namespace phpweb\Data\Release;
	
	
	class WindowsBuildFile
	{
		/* provides __set_state */
		use Restorable;
		
		private string $name;
		
		private string $path;
		
		private int $size;
		
		private string $sha256;
		
		private string $url;
		
		public static function FromJson(object $data): self {
			$file         = new  static();
			$file->name   = $data->name;
			$file->path   = $data->path;
			$file->size   = $data->size;
			$file->sha256 = $data->sha256;
			$file->url    = $data->url;
			return $file;
		}
		
		public function getName(): string {
			return $this->name;
		}
		
		public function getPath(): string {
			return $this->path;
		}
		
		public function getSize(): int {
			return $this->size;
		}
		
		public function getSha256(): string {
			return $this->sha256;
		}
		
		public function getUrl(): string {
			return $this->url;
		}
	}