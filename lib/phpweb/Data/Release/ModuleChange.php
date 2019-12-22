<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release;
	
	class ModuleChange
	{
		private array $data;
		
		public function __construct(array $data) {
			$this->data = $data;
		}
		
		public function getContent(): string {
			return $this->data['description'] ?? '';
		}
		
		public function getReferences(): array {
			return $this->data['references'] ?? [];
		}
	}