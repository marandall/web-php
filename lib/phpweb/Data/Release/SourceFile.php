<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release;
	
	use DateTimeImmutable;
	use phpweb\Config\Site;
	
	class SourceFile
	{
		/* provides __set_state */
		use Restorable;
		
		/** @var string */
		private string $filename;
		
		/** @var string */
		private string $name;
		
		/** @var string */
		private string $sha256;
		
		/** @var DateTimeImmutable */
		private DateTimeImmutable $date;
		
		public static function FromJson(object $data): self {
			$file = new static();
			$file->filename = $data->filename ?? '';
			$file->name     = $data->name ?? '';
			$file->sha256   = $data->sha256 ?? '';
			$file->date     = new \DateTimeImmutable($data->date ?? '1970-01-01');
			return $file;
		}
		
		public function getName(): string {
			return $this->name;
		}
		
		public function getSha256(): string {
			return $this->sha256;
		}
		
		public function getDate(): \DateTimeImmutable {
			return $this->date;
		}
		
		public function getUrl(): string {
			return Site::$BaseUrl . '/distributions/' . $this->getFilename();
		}
		
		public function getFilename(): string {
			return $this->filename;
		}
		
		public function toArray(): array {
			return [
				'filename' => $this->filename,
				'name'     => $this->name,
				'sha256'   => $this->sha256,
				'date'     => $this->date->format(DATE_ATOM),
			];
		}
	}