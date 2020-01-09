<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release\Commands;
	
	use JsonException;
	use phpweb\Config\Site;
	use phpweb\Data\Release\Release;
	use Symfony\Component\Console\Command\Command;
	use Symfony\Component\Console\Input\InputInterface;
	use Symfony\Component\Console\Output\OutputInterface;
	
	class CompileReleasesCommand extends Command
	{
		public function configure() {
			$this
				->setName('releases:compile')
				->setDescription('Reads the release XML file and builds the PHP data array');
		}
		
		public function execute(InputInterface $input, OutputInterface $output) {
			$base_dir = Site::GetDataDir() . '/compiled';
			
			$releases = [];
			$json_str = file_get_contents('https://php-meta.markrandall.uk/releases/releases.json');
			
			try {
				$json = json_decode($json_str, false, 128, JSON_THROW_ON_ERROR);
			}
			catch (JsonException $ex) {
				$output->writeln('Import failed; ' . $ex->getMessage());
				return 1;
			}

			foreach ($json as $branch_id => $branch_data) {
				foreach ($branch_data->releases as $release_version => $release_data) {
					$releases[$release_version] = Release::FromJson($release_data);
				}
			}
			
			$exportable = '<?php return ' . var_export($releases, true) . ';';
			$export_path = Site::GetDataDir() . '/compiled/releases.php';
			
			if (!file_exists($export_path) || file_get_contents($export_path) !== $export_path) {
				file_put_contents($export_path, $exportable);
			}
			
			return 0;
		}
	}