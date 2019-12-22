<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Services\TextFormatting;
	
	use League\HTMLToMarkdown\HtmlConverter;
	use phpweb\Services\Builder\InjectableService;
	use phpweb\Services\Builder\PublicService;
	
	class HtmlToMarkdownConverter implements PublicService, InjectableService
	{
		public function parse(string $html): string {
			$converter = new HtmlConverter(['strip_tags' => true, 'hard_break' => true]);
			return stripslashes($converter->convert($html));
		}
	}