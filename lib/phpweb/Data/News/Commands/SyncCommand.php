<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\News\Commands;
	
	use phpweb\Data\News\Utilities\ImportFromServer;
	use phpweb\Services\Builder\PublicService;
	use Psr\Log\LoggerInterface;
	use Psr\Log\NullLogger;
	use Symfony\Component\Console\Command\Command;
	use Symfony\Component\Console\Input\InputInterface;
	use Symfony\Component\Console\Logger\ConsoleLogger;
	use Symfony\Component\Console\Output\OutputInterface;
	
	class SyncCommand extends Command implements PublicService
	{
		private ImportFromServer $import_from_server;
		
		public function __construct(ImportFromServer $import_from_server) {
			parent::__construct(null);
			$this->import_from_server = $import_from_server;
		}
		
		public function configure() {
			parent::configure();
			
			$this
				->setName('news:sync')
				->setDescription('Syncs local news with that from the PHP.net ATOM archives');
		}
		
		public function execute(InputInterface $input, OutputInterface $output) {
			$this->import_from_server->import(new ConsoleLogger($output));
			return 0;
		}
	}