<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Community\Conferences\Conference;
	
	use phpweb\Controllers\MiddlewareInterface;
	use phpweb\Data\Conferences\Conference;
	use phpweb\Data\Conferences\ConferenceRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	
	class ConferenceLoaderFromUri implements MiddlewareInterface
	{
		private ConferenceRepository $repository;
		
		public function __construct(ConferenceRepository $repository) {
			$this->repository = $repository;
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			$conf_id = $request->getAttributesBag()->getString('conference');
			
			$conf = $this->repository->find($conf_id);
			if ($conf === null) {
				die('Not Found'); // todo: replace with 404 controller
			}
			
			$request->store(Conference::class, '', $conf);
			return $next($request);
		}
	}