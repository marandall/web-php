<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Framework;
	
	/**
	 * Very very lightweight representation of a response
	 *
	 * Because politics
	 */
	class Response
	{
		/** @var array[] */
		protected $headers = [];
		
		/** @var string|resource */
		protected $content = null;
		
		/** @var int  */
		protected $status = 200;
		
		public function __construct($content, int $status = 200, array $headers = []) {
			$this->setContent($content);
			$this->status = $status;
			
			foreach ($headers as $header => $value) {
				$this->addHeader($header, $value);
			}
		}
		
		/**
		 * @return $this
		 */
		public function addHeader(string $header, string $value) {
			$this->headers[$header][] = $value;
			return $this;
		}
		
		/**
		 * Sets a string to use as the content for the response
		 */
		
		public function setContent(string $content) {
			$this->content = $content;
			return $this;
		}
		
		/**
		 * Writes the contents of the response to the output stream
		 */
		
		public function write() {
			foreach ($this->headers as $header => $values) {
				foreach ($values as $value) {
					header($header . ': ' . $value, false);
				}
			}
			
			header('Content-Length: ' . strlen($this->content));
			echo $this->content;
		}
	}