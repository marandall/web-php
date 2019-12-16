<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Tools\ReleaseFeedBuilder;
	
	use phpweb\Framework\Response;
	
	interface FeedBuilderInterface
	{
		public function buildResponse(array $releases, string $page_uri): Response;
	}