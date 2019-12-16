<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Tools\ReleaseFeedBuilder;
	
	class FeedBuilderFactory
	{
		public function build(string $format): FeedBuilderInterface {
			if ($format === 'atom') {
				return new AtomFeedBuilder();
			}
			
			if ($format === 'json') {
				return new JsonFeedBuilder();
			}
			
			return new ErrorFeedBuilder();
		}
	}