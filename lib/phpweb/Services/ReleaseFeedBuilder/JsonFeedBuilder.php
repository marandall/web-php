<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Services\ReleaseFeedBuilder;
	
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
				
				$changes = [];
				foreach ($release->getModulesWithChanges() as $module_id => $module) {
					foreach ($module->getChanges() as $change) {
						$changes[$module_id][] = $change->toArray();
					}
				}
				
				$output[$release->getVersionId()] = (object)[
					'release' => $release->getVersionId(),
					'date'    => $release->getDate()->format('Y-m-d'),
					'source'  => $sources,
					'changes' => $changes,
				];
			}
			
			return new Response(json_encode($output, JSON_PRETTY_PRINT), 200, ['Content-Type' => 'application/json']);
		}
	}