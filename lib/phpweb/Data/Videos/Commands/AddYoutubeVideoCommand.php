<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Data\Videos\Commands;
	
	use phpweb\Config\Site;
	use Symfony\Component\Console\Command\Command;
	use Symfony\Component\Console\Input\InputArgument;
	use Symfony\Component\Console\Input\InputInterface;
	use Symfony\Component\Console\Input\InputOption;
	use Symfony\Component\Console\Output\OutputInterface;
	
	class AddYoutubeVideoCommand extends Command
	{
		public function configure() {
			$this
				->setName('videos:add-yt')
				->setDescription('Adds a YouTube video');
			
			$this->addArgument('yt_id', InputArgument::REQUIRED, 'The video ID of the YouTube video');
			$this->addArgument('group', InputArgument::REQUIRED, 'Which group to put this video in');
			
			$this->addOption('conference', '', InputOption::VALUE_REQUIRED, 'Which conference id to attach these to');
			$this->addOption('added-by', '', InputOption::VALUE_REQUIRED, 'User that added this video');
			$this->addOption('id', '', InputOption::VALUE_REQUIRED, 'Override the ID for this video');
		}
		
		public function execute(InputInterface $input, OutputInterface $output) {
			$yt_id = $input->getArgument('yt_id');
			if (strpos($yt_id, 'https://') === 0) {
				$query_string = parse_url($yt_id, PHP_URL_QUERY);
				
				$query_args = [];
				parse_str($query_string, $query_args);
				
				$yt_id = $query_args['v'];
				if (!$yt_id) {
					$output->writeln('Cannot find video identifier in URL');
					return 1;
				}
			}
			
			$group_id = $input->getArgument('group');
			
			$video_id = $input->getOption('id');
			if (!$video_id) {
				$video_id = 'yt_' . strtolower($yt_id);
			}
			else {
				$output->writeln('Using custom video id = ' . $video_id);
			}
			
			$output->writeln('Downloading video information from YouTube API...');
			$info_uri = 'https://www.youtube.com/get_video_info?video_id=' . urlencode($yt_id);
			$info_str = @file_get_contents($info_uri);
			if ($info_str === false) {
				$output->writeln('Cannot read video information from ' . $info_uri);
				return 1;
			}
			
			$info_results = [];
			parse_str($info_str, $info_results);
			
			try {
				$player_response = \json_decode($info_results['player_response'], false, 512, JSON_THROW_ON_ERROR);
			}
			catch (\JsonException $ex) {
				$output->writeln('Could not decode YouTube API response: ' . $ex->getMessage());
				return 1;
			}
			
			$details = $player_response->videoDetails ?? null;
			if (!is_object($player_response->videoDetails)) {
				$output->writeln('Cannot find video details in API response');
				return 1;
			}
			
			$title       = $details->title;
			$description = $details->shortDescription;
			
			$thumbnail_url = 'https://img.youtube.com/vi/' . urlencode($yt_id) . '/0.jpg';
			$thumbnail     = @file_get_contents($thumbnail_url);
			if ($thumbnail === false) {
				$output->writeln('Cannot download thumbnail from ' . $thumbnail_url);
				return 1;
			}
			
			/*
			 * Thumbnail is going to be stored in the managed quasi-uploads
			 * directory
			 */
			
			$thumbnail_store     = Site::GetContentDir() . '/videos/thumbs/' . $video_id . '.jpg';
			$thumbnail_store_dir = dirname($thumbnail_store);
			
			if (!is_dir($thumbnail_store_dir)) {
				if (!mkdir($thumbnail_store_dir, 0, true) && !is_dir($thumbnail_store_dir)) {
					$output->writeln(sprintf('Directory "%s" was not created', $thumbnail_store_dir));
					return 1;
				}
			}
			
			$output->writeln('Storing thumbnail at ' . $thumbnail_store);
			file_put_contents($thumbnail_store, $thumbnail);
			
			$xml = simplexml_load_string('<video></video>');
			$xml->addAttribute('id', $video_id);
			$xml->addChild('type', 'youtube');
			$xml->addChild('thumbnail', $video_id . '.jpg');
			$xml->addChild('group', $group_id);
			$xml->addChild('title', $title);
			$xml->addChild('description', $description);
			$xml->addChild('watch_url', 'https://www.youtube.com/watch?v=' . urlencode($yt_id));
			$xml->addChild('embeddable', '0');
			$xml->addChild('added_time', (new \DateTime())->format(DATE_ATOM));
			$xml->addChild('added_by', $input->getOption('added-by'));
			$xml->addChild(('rel_conference'), $input->getOption('conference'));
			
			$xml_path     = Site::GetDataDir() . '/videos/' . $group_id . '/' . $video_id . '.xml';
			$xml_path_dir = dirname($xml_path);
			
			if (!is_dir($xml_path_dir)) {
				if (!mkdir($xml_path_dir, 0, true) && !is_dir($xml_path_dir)) {
					$output->writeln(sprintf('Directory "%s" was not created', $thumbnail_store_dir));
					return 1;
				}
			}
			
			$output->writeln('Writing XML file to ' . $xml_path);
			
			$xml_data = $xml->asXML();
			if (!is_file($xml_path) || file_get_contents($xml_path) !== $xml_data) {
				file_put_contents($xml_path, $xml_data);
			}
			
			$output->writeln('Video XML added :-)');
			return 0;
		}
	}