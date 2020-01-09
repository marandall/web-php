<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release;
	
	
	/**
	 * Most windows builds have additional requirements for the compiler runtime which
	 * must be installed in order for PHP to run.
	 *
	 * This object represents such a dependency
	 */
	class WindowsBuildDependency
	{
		/* provides __set_state */
		use Restorable;
		
		private string $label;
		
		private string $url;
		
		public static function FromJson(object $data): self {
			$dep = new static();
			$dep->label = $data->label;
			$dep->url = $data->url;
			return $dep;
		}
		
		public function getLabel(): string {
			return $this->label;
		}
		
		public function getUrl(): string {
			return $this->url;
		}
	}