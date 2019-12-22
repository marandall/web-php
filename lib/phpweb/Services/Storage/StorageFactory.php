<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Services\Storage;
	
	use League\Flysystem\Adapter\Local;
	use League\Flysystem\Filesystem;
	use League\Flysystem\FilesystemInterface;
	use phpweb\Config\Site;
	use phpweb\Services\Builder\InjectableService;
	
	/**
	 * Creates storage adapters to read and write files both locally
	 * and eventually to a cloud storage service.
	 */
	
	class StorageFactory implements InjectableService
	{
		private ?Filesystem $managed_adapter = null;
		
		public function managed(): FilesystemInterface {
			if ($this->managed_adapter !== null) {
				return $this->managed_adapter;
			}
			
			$adapter = new Filesystem(new Local(Site::GetDataDir() . '/../public/static/content'));
			return $this->managed_adapter = $adapter;
		}
	}