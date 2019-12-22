<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Services\TextFormatting;
	
	use League\CommonMark\CommonMarkConverter;
	use phpweb\Services\Builder\InjectableService;
	use phpweb\Services\Builder\PublicService;
	
	class TextFormatter implements PublicService, InjectableService
	{
		public function format(string $input): string {
			$cm = new CommonMarkConverter(
				[
					'html_input'         => 'escape',
					'allow_unsafe_links' => false,
					'enable_em'          => true,
				]
			);
			
			return $cm->convertToHtml($input);
		}
	}