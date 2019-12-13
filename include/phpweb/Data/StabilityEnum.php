<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data;
	
	class StabilityEnum
	{
		public const FUTURE      = 'future';
		public const STABLE      = 'stable';
		public const SECURITY    = 'security';
		public const UNSUPPORTED = 'unsupported';
	}