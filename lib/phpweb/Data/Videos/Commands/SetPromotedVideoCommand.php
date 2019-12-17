<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Videos\Commands;
	
	use phpweb\Config\Site;
	use phpweb\Data\Videos\VideosRepository;
	use phpweb\Services;
	use Symfony\Component\Console\Command\Command;
	use Symfony\Component\Console\Input\InputArgument;
	use Symfony\Component\Console\Input\InputInterface;
	use Symfony\Component\Console\Output\OutputInterface;
	
	class SetPromotedVideoCommand extends Command
	{
		public function configure() {
			$this
				->setName('videos:promote')
				->setDescription('Marks a video as being promoted for the front page and banners');
			
			$this->addArgument('id', InputArgument::REQUIRED, 'The internal ID of the video to promote');
		}
		
		public function execute(InputInterface $input, OutputInterface $output) {
			$video_id = $input->getArgument('id');
			
			$video = Services::get(VideosRepository::class)->find($video_id);
			if ($video === null) {
				$output->writeln(
					'Cannot find video "' . $video_id . '". If this video is new, be sure to compile the list first with videos:compile'
				);
				return 1;
			}
			
			$payload = '<?php return ' . var_export([$video->getId()], true) . ';';
			$payload_path = Site::GetDataDir() . '/compiled/videos_promoted.php';
			
			if (!file_exists($payload_path) || file_get_contents($payload_path) !== $payload_path) {
				$output->writeln('Setting promoted video to ' . $video->getTitle());
				file_put_contents($payload_path, $payload);
			}
			else {
				$output->writeln('Promoted video is unchanged');
			}
			
			return 0;
		}
	}