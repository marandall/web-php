<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Release\Commands;
	
	use phpweb\Config\Site;
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
			$base_dir = Site::GetDataDir() . '/releases';
			$results  = [];
			
			foreach (scandir($base_dir, SCANDIR_SORT_NONE) as $branch_file) {
				$branch_dir = $base_dir . '/' . $branch_file;
				if (!is_dir($branch_dir) || $branch_dir[0] === '.') {
					continue;
				}
				
				foreach (scandir($branch_dir, SCANDIR_SORT_NONE) as $file) {
					$path = $branch_dir . '/' . $file;
					if (!is_file($path) || substr($file, -4) !== '.xml') {
						continue;
					}
					
					$xml     = simplexml_load_string(file_get_contents($path));
					$version = (string)$xml->release;
					
					$sources_array = [];
					foreach ($xml->source->source as $source) {
						$sources_array[] = [
							'name'     => (string)$source->name,
							'filename' => (string)$source->filename,
							'sha256'   => (string)$source->sha256,
							'md5'      => (string)$source->md5,
							'date'     => (string)$source->date,
						];
					}
					
					$announcements = [];
					foreach ($xml->announcements->announcement as $announcement) {
						$lang = (string)$announcement->attributes()->lang;

						$announcements[$lang ?: 'en'] = [
							'format'  => 'html',
							'content' => (string)$announcement->asXML(),
						];
					}
					
					$tags = [];
					foreach ($xml->tags->children() as $tag) {
						$tags[] = (string)$tag;
					}
					
					$results[$version] = [
						'version'       => $version,
						'date'          => (string)$xml->date,
						'source'        => $sources_array,
						'tags'          => $tags,
						'announcements' => $announcements,
					];
				}
			}
			
			$output_str  = '<?php return ' . var_export($results, true) . ';';
			$output_path = Site::GetDataDir() . '/compiled/releases.php';
			
			if (!is_file($output_path) || file_get_contents($output_path) !== $output_str) {
				file_put_contents($output_path, $output_str);
			}
			
			return 0;
		}
	}