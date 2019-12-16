<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Tools\ReleaseFeedBuilder;
	
	use phpweb\Data\Release\Release;
	use phpweb\Framework\Response;
	
	class JsonFeedBuilder implements FeedBuilderInterface
	{
		/**
		 * @param Release[] $releases
		 */
		public function buildResponse(array $releases, string $page_uri): Response {
			$output = [];
			
			foreach ($releases as $release) {
				$sources = [];
				foreach ($release->getSources() as $source) {
					$sources[] = (object)$source->toArray();
				}
				
				$output[] = (object)[
					'release' => $release->getVersionId(),
					'date'    => $release->getDate()->format('Y-m-d'),
					'source'  => $sources,
				];
			}
			
			return new Response(json_encode($output), 200, ['Content-Type' => 'application/json']);
		}
	}