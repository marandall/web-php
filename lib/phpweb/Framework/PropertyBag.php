<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Framework;
	
	/**
	 * Provides a safer mechanism for accessing property buckets
	 *
	 * Politically safe variant of Symfony PropertyBucket
	 */
	class PropertyBag
	{
		/** @var array */
		private $values;
		
		public function __construct(array $values) {
			$this->values = $values;
		}
		
		public function getInt(string $key, int $default): int {
			if (!array_key_exists($key, $this->values)) {
				return $default;
			}
			
			$value = $this->values[$key];
			if (is_scalar($value)) {
				return (int)$value;
			}
			
			return $default;
		}
		
		public function getFloat(string $key, float $default): float {
			if (!array_key_exists($key, $this->values)) {
				return $default;
			}
			
			$value = $this->values[$key];
			if (is_scalar($value)) {
				return (float)$value;
			}
			
			return $default;
		}
		
		public function getString(string $key, string $default): string {
			if (!array_key_exists($key, $this->values)) {
				return $default;
			}
			
			$value = $this->values[$key];
			if (is_scalar($value)) {
				return (string)$value;
			}
			
			return $default;
		}
		
		public function get(string $key, $default) {
			if (!array_key_exists($key, $this->values)) {
				return $default;
			}
			
			return $this->values[$key];
		}
		
		public function exists(string $name): bool {
			return array_key_exists($name, $this->values);
		}
	}