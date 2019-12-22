<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release;
	
	class ModuleWithChanges
	{
		private string $module_id;
		
		/** @var ModuleChange[] */
		private array $changes;
		
		public function __construct(string $module_id, array $changes) {
			$this->module_id = $module_id;
			
			foreach ($changes as $change_data) {
				$this->changes[] = new ModuleChange($change_data);
			}
		}
		
		/**
		 * @return string
		 */
		public function getModuleId(): string {
			return $this->module_id;
		}
		
		/**
		 * @return ModuleChange[]
		 */
		public function getChanges(): array {
			return $this->changes;
		}
	}