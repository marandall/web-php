<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Framework;
	
	/**
	 * Very very lightweight equivilent of a request
	 *
	 * Because politics
	 */
	class Request
	{
		/** @var string */
		private string $url;
		
		/** @var PropertyBag */
		private PropertyBag $query;
		
		/** @var PropertyBag */
		private PropertyBag $post;
		
		/** @var PropertyBag */
		private PropertyBag $server;
		
		
		/** @var Visitor */
		private Visitor $visitor;
		
		/** @var PropertyBag */
		private PropertyBag $cookies;
		
		/** @var PropertyBag */
		private PropertyBag $attributes;
		
		/** @var object[]  */
		private array $object_cache = [];
		
		public function __construct(
			string $url,
			array $query,
			array $post,
			array $server,
			array $cookies,
			array $attributes,
			Visitor $visitor
		) {
			$this->url        = $url;
			$this->query      = new PropertyBag($query);
			$this->post       = new PropertyBag($post);
			$this->server     = new PropertyBag($server);
			$this->cookies    = new PropertyBag($cookies);
			$this->attributes = new PropertyBag($attributes);
			$this->visitor    = $visitor;
		}
		
		/**
		 * Returns the path and query string portion of the request
		 */
		public function getUrl(): string {
			return $this->url;
		}
		
		public function getQueryBag(): PropertyBag {
			return $this->query;
		}
		
		public function getServerBag(): PropertyBag {
			return $this->server;
		}
		
		public function getPostBag(): PropertyBag {
			return $this->post;
		}
		
		public function getVisitor(): Visitor {
			return $this->visitor;
		}
		
		public function getCookiesBag(): PropertyBag {
			return $this->cookies;
		}
		
		public function getAttributesBag(): PropertyBag {
			return $this->attributes;
		}
		
		public function getClientIp(): string {
			return $this->server->getString('REMOTE_ADDR', '');
		}
		
		public function get(string $class_id, string $instance = ''): object {
			$obj = $this->object_cache[$class_id . ':' . $instance];
			if ($obj === null) {
				throw new \DomainException('Could not find container property ' . $class_id);
			}
			
			return $obj;
		}
		
		public function has(string $class_id, string $instance = ''): bool {
			return isset($this->object_cache[$class_id . ':' . $instance]);
		}
		
		public function store(string $class_id, string $instance, object $obj) {
			$this->object_cache[$class_id . ':' . $instance] = $obj;
		}
	}