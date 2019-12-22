<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Services\Config;
	
	use phpweb\Config\Site;
	use phpweb\Services\Builder\InjectableService;
	use phpweb\Services\Builder\PublicService;
	
	class SiteConfig implements InjectableService, PublicService
	{
		private array $config;
		
		public function __construct(
			array $config
		) {
			$this->config = $config;
		}
		
		public function getConfigInt(string $key, int $default): int {
			return (int)($this->config[$key] ?? $default);
		}
		
		public function getConfigString(string $key, string $default = ''): string {
			return $this->config[$key] ?? $default;
		}
		
		public function getConfig(string $key, $default = null) {
			return array_key_exists($key, $this->config) ? $this->config[$key] : $default;
		}
		
		public function getProtocolAndHost(): string {
			return Site::$BaseUrl;
		}
	}