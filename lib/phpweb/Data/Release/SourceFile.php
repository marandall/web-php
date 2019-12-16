<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release;
	
	use phpweb\Config\Site;
	
	class SourceFile
	{
		/** @var string */
		private $filename;
		
		/** @var string */
		private $name;
		
		/** @var string */
		private $sha256;
		
		/** @var \DateTime */
		private $date;
		
		public function __construct(array $data) {
			$this->filename = $data['filename'] ?? '';
			$this->name     = $data['name'] ?? '';
			$this->sha256   = $data['sha256'] ?? '';
			$this->date     = new \DateTime($data['date'] ?? '1970-01-01');
		}
		
		public function getName(): string {
			return $this->name;
		}
		
		public function getSha256(): string {
			return $this->sha256;
		}
		
		public function getDate(): \DateTime {
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