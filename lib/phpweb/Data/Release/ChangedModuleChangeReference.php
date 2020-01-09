<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release;
	
	class ChangedModuleChangeReference
	{
		/* provides __set_state */
		use Restorable;
		
		private string $type;
		
		private string $value;
		
		public static function FromJson(object $data): self {
			$ref        = new static();
			$ref->type  = $data->type;
			$ref->value = $data->value;
			return $ref;
		}
		
		public function getType(): string {
			return $this->type;
		}
		
		public function getValue(): string {
			return $this->value;
		}
	}