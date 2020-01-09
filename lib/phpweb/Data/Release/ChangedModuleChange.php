<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release;
	
	class ChangedModuleChange
	{
		/* provides __set_state */
		use Restorable;
		
		private string $description;
		
		/** @var ChangedModuleChangeReference[] */
		private array $references = [];
		
		public static function FromJson(object $data): self {
			$change              = new static();
			$change->description = $data->description;
			
			foreach (($data->references ?? []) as $reference_data) {
				$change->references[] = ChangedModuleChangeReference::FromJson($reference_data);
			}
			
			return $change;
		}
		
		public function getDescription(): string {
			return $this->description;
		}
		
		/**
		 * @return ChangedModuleChangeReference[]
		 */
		public function getReferences(): array {
			return $this->references;
		}
	}