<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Videos\Commands;
	
	use phpweb\Config\Site;
	use Symfony\Component\Console\Command\Command;
	use Symfony\Component\Console\Input\InputInterface;
	use Symfony\Component\Console\Output\OutputInterface;
	
	class CompileVideosCommand extends Command
	{
		public function configure() {
			$this
				->setName('videos:compile')
				->setDescription('Compiles the video XML files into a PHP array as part of the build process');
		}
		
		public function execute(InputInterface $input, OutputInterface $output) {
			$videos = [];
			
			$base_dir = Site::GetDataDir() . '/videos';
			foreach (scandir($base_dir, SCANDIR_SORT_NONE) as $cat_folder) {
				foreach (scandir($base_dir . DIRECTORY_SEPARATOR . $cat_folder) as $file) {
					$path = $base_dir . DIRECTORY_SEPARATOR . $cat_folder . DIRECTORY_SEPARATOR . $file;
					if (substr($path, -4) !== '.xml') {
						continue;
					}
					
					$xml = simplexml_load_string(file_get_contents($path));
					
					$type = (string)$xml->type;
					if ($type === 'youtube') {
						$dx                = $this->handleYoutubeXml($xml, $output);
						$videos[$dx['id']] = $dx;
					}
				}
			}
			
			$storage_path = Site::GetDataDir() . '/compiled/videos.php';
			$payload      = '<?php return ' . var_export($videos, true) . ';';
			
			if (!is_file($storage_path) || file_get_contents($storage_path) !== $payload) {
				$output->writeln('Writing compiled video information to ' . $storage_path);
				file_put_contents($storage_path, $payload);
			}
			else {
				$output->writeln('Video content is unchanged');
			}
			
			return 0;
		}
		
		private function handleYoutubeXml(\SimpleXMLElement $xml, OutputInterface $output): array {
			return [
				'id'          => (string)$xml->attributes()->id,
				'type'        => 'youtube',
				'title'       => (string)$xml->title,
				'description' => (string)$xml->description,
				'watch_url'   => (string)$xml->watch_url,
				'embeddable'  => (string)$xml->embeddable === '1',
				'added_time'  => (string)$xml->added_time,
				'added_by'    => (string)$xml->added_by,
				'thumbnail'   => (string)$xml->thumbnail,
				'group'       => (string)$xml->group,
			];
		}
	}