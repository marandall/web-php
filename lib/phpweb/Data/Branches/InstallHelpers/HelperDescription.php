<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Branches\InstallHelpers;
	
	/**
	 * DTO for which installer tools should be available for a particular
	 * branch
	 */
	class HelperDescription
	{
		/** @var string */
		private $description;
		
		/** @var string */
		private $uri;
		
		/** @var string */
		private $image_uri;
		
		public function __construct(
			string $description,
			string $uri,
			string $image_uri
		) {
			$this->description = $description;
			$this->uri         = $uri;
			$this->image_uri   = $image_uri;
		}
		
		public function getDescription(): string {
			return $this->description;
		}
		
		public function getUri(): string {
			return $this->uri;
		}
		
		public function getImageUri(): string {
			return $this->image_uri;
		}
	}