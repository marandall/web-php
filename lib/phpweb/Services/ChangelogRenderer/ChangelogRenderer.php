<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Services\ChangelogRenderer;
	
	use phpweb\Data\Release\ChangedModule;
	use phpweb\Services\Builder\InjectableService;
	use phpweb\Services\TextFormatting\TextFormatter;
	
	class ChangelogRenderer implements InjectableService
	{
		private TextFormatter $formatter;
		
		public function __construct(TextFormatter $formatter) {
			$this->formatter = $formatter;
		}
		
		/**
		 * @param ChangedModule[] $modules
		 */
		public function render(array $modules) {
			$lines = ['<ul>'];
			foreach ($modules as $module_id => $module) {
				$lines[] = '<li><span style="font-weight: bold">' . htmlspecialchars($module_id) . '</span>';
				$lines[] = '<ul>';
				
				foreach ($module->getChanges() as $change) {
					$refs = [];
					
					foreach ($change->getReferences() as $ref_data) {
						$ref_type = $ref_data->getType();
						$ref_value = $ref_data->getValue();
						
						if ($ref_type === 'bugfix') {
							$bug_id = (int)$ref_value;
							$refs[] = sprintf('<a href="https://bugs.php.net/%d" target="_blank" style="display: inline-block; padding: 2px; background-color: darkgreen; color: white; border-radius: 3px; padding-left: 4px; padding-right: 4px; font-size: smaller; margin-right: 5px; ">Fix %d</a>', $bug_id, $bug_id);
						}
						else if ($ref_type === 'cve') {
							$cve_id = $ref_value;
							$refs[] = sprintf('<a href="https://cve.mitre.org/cgi-bin/cvename.cgi?name=%s" target="_blank" style="display: inline-block; padding: 2px; background-color: red; color: white; border-radius: 3px; padding-left: 4px; padding-right: 4px; font-size: smaller; margin-right: 5px">%s</a>', htmlspecialchars($cve_id), htmlspecialchars($cve_id));
						}
					}
					
					$lines[] = '<li style="margin-bottom: 3px">' . implode('', $refs) . ' ' . htmlspecialchars($change->getDescription()) . '</li>';
				}
				
				$lines[] = '</ul>';
			}
			$lines[] = '<ul>';
			echo implode("\n", $lines);
		}
	}