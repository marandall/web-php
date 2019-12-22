<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Services\Storage;
	
	use League\Flysystem\FilesystemInterface;
	
	interface StorageAdapterInterface extends FilesystemInterface
	{
		
	}