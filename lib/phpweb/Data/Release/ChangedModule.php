<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release;
	
	class ChangedModule
	{
		/* provides __set_state */
		use Restorable;
		
		private string $module_id;
		
		/** @var ChangedModuleChange[] */
		private array $changes = [];
		
		public static function FromJson(string $module_id, array $data): ChangedModule {
			$changed_module            = new self();
			$changed_module->module_id = $module_id;
			
			foreach ($data as $change_data) {
				$changed_module->changes[] = ChangedModuleChange::FromJson($change_data);
			}
			
			return $changed_module;
		}
		
		/**
		 * @return string
		 */
		public function getModuleId(): string {
			return $this->module_id;
		}
		
		/**
		 * @return ChangedModuleChange[]
		 */
		public function getChanges(): array {
			return $this->changes;
		}
	}