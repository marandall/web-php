<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release\Commands;
	
	use phpweb\Config\Site;
	use phpweb\Services\Builder\PublicService;
	use Symfony\Component\Console\Command\Command;
	use Symfony\Component\Console\Input\InputInterface;
	use Symfony\Component\Console\Logger\ConsoleLogger;
	use Symfony\Component\Console\Output\OutputInterface;
	
	/**
	 * Converts the (modified) JSON dumps into XML as a one-time operation
	 * to meet the new standards for release metadata
	 */
	class ReleasesToXMLCommand extends Command implements PublicService
	{
		private SyncReleases $sync_releases;
		
		public function __construct(SyncReleases $sync_releases) {
			parent::__construct(null);
			$this->sync_releases = $sync_releases;
		}
		
		public function configure() {
			$this
				->setName('releases:live2xml')
				->setDescription('Converts the old style release data into XML');
		}
		
		public function execute(InputInterface $input, OutputInterface $output) {
			$this->sync_releases->import(new ConsoleLogger($output));
			return 0;
		}
	}