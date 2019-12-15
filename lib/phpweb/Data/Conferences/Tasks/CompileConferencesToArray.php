<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Conferences\Tasks;
	
	use phpweb\Config\Site;
	use Symfony\Component\Console\Command\Command;
	use Symfony\Component\Console\Input\InputInterface;
	use Symfony\Component\Console\Output\OutputInterface;
	
	class CompileConferencesToArray extends Command
	{
		public function configure() {
			parent::configure();
			
			$this
				->setName('conferences:compile')
				->setDescription('Converts conference xml files into an array of conference data');
		}
		
		public function execute(InputInterface $input, OutputInterface $output) {
			$base_dir = Site::GetDataDir() . '/events/conferences/';
			
			$data = [];
			
			foreach (scandir($base_dir, SCANDIR_SORT_DESCENDING) as $file) {
				$path = $base_dir . '/' . $file;
				if (!is_file($path) || $path[0] === '.') {
					continue;
				}
				
				$output->writeln('Reading ' . $path);
				$xml = @simplexml_load_string(file_get_contents($path));
				if (!$xml) {
					$output->writeln('Error! Cannot parse the XML of ' . $path);
					$output->writeln(error_get_last()['message']);
					
					continue;
				}
				
				/* data has the ID as its prefix for easier lookups */
				$data[(string)$xml->id] = [
					'id'         => (string)$xml->id,
					'title'      => (string)$xml->title,
					'start_date' => (string)$xml->start_date,
					'end_date'   => (string)$xml->end_date,
					'image'      => (string)$xml->image,
					'website'    => (string)$xml->website,
					'country'    => (string)$xml->country,
					'location'   => (string)$xml->location,
					'summary'    => (string)$xml->summary, /* summary does not allow HTML */
					'content'    => $xml->content->asXML(),
				];
			}
			
			$output_str  = '<?php return ' . var_export($data, true) . ';';
			$output_path = Site::GetDataDir() . '/compiled/conferences.php';
			
			if (!file_exists($output_path) || file_get_contents($output_path) !== $output_str) {
				$output->writeln('Writing compiled outputs to ' . $output_path);
				file_put_contents($output_path, $output_str);
			}
			
			return 0;
		}
	}