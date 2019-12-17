<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Services\ReleaseFeedBuilder;
	
	use phpweb\Services\Builder\InjectableService;
	
	class FeedBuilderFactory implements InjectableService
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