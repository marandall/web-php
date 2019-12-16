<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Tools\ReleaseFeedBuilder;
	
	use phpweb\Framework\Response;
	
	class ErrorFeedBuilder implements FeedBuilderInterface
	{
		public function buildResponse(array $releases, string $page_uri): Response {
			return new Response('{ "error": "Invalid file extension. Accepts atom, json or ser." }', 404, ['Content-Type' => 'application/json']);
		}
	}