<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Tools;
	
	class ReleaseTableRenderer
	{
		public function render(array $releases) {
			?>
			<table class="standard" style="width: 100%">
				<thead>
				<tr>
					<td style="width: 100px; font-weight: bold">Release</td>
					<td style="width: 200px; font-weight: bold">Release Date</td>
					<td style="font-weight: bold">Tags</td>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($releases as $release) { ?>
					<tr>
						<td><a href="<?= htmlspecialchars($release->getUrl()) ?>"><?= htmlspecialchars($release->getVersionId()) ?></a></td>
						<td><?= htmlspecialchars($release->getDate()->format('d M Y')) ?></td>
						<td>
							<?php if (in_array('security', $release->getTags(), true)) { ?>
								<span style="display: inline-block; padding: 5px; background-color: black; color: white; font-size: smaller; border-radius: 5px; padding-left: 5px; padding-right: 5px; line-height: 1">
										security
									</span>
							<?php } ?>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			<?php
		}
	}