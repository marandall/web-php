<?php
	
	declare(strict_types=1);
	
	namespace phpweb\UI\Controllers;
	
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class EolController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			// TODO: Implement __invoke() method.
		}
		
		public function renderContent() {
			?>
			
			<table class="standard">
				<thead>
				<tr>
					<th>Branch</th>
					<th colspan="2">Date</th>
					<th>Last Release</th>
					<th>Notes</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach (get_eol_branches() as $major => $branches): ?>
					<?php foreach ($branches as $branch => $detail): ?>
						<?php $eolDate = get_branch_security_eol_date($branch) ?>
						<?php $eolPeriod = format_interval($eolDate, null) ?>
						<tr>
							<td><?php echo htmlspecialchars($branch); ?></td>
							<td>
								<?php echo $eolDate->format('j M Y') ?>
							</td>
							<td>
								<em><?php echo $eolPeriod ?></em>
							</td>
							<td>
								<a href="<?php echo htmlspecialchars($detail['link']); ?>">
									<?php echo htmlspecialchars($detail['version']); ?>
								</a>
							</td>
							<td>
								<?php echo isset($BRANCH_NOTES[$branch]) ? $BRANCH_NOTES[$branch] : ''; ?>
							</td>
						</tr>
					<?php endforeach ?>
				<?php endforeach ?>
				</tbody>
			</table>
			<?php
		}
	}