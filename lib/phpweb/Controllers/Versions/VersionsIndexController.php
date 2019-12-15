<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions;
	
	use phpweb\Data\Branches\Branch;
	use phpweb\Data\Branches\BranchRepository;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Services;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class VersionsIndexController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$this->setPageTitle('Version History');
			return $this->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			$branches = Services::get(BranchRepository::class)->all();
			usort($branches, function(Branch $b, Branch $a) {
				return ($a->getMajorVer() - $b->getMajorVer())
					?: ($b->getMinorVer() - $b->getMinorVer());
			});
			
			?>
			This is the human-readable index of every version of PHP. There are also various APIs available
			to allow you to read the data programmatically such as <a href="api/releases.atom" target="_blank">releases.atom</a>
			and <a href="api/supported.atom" target="_blank">supported.atom</a>.
			<?php
			
			foreach ($branches as $branch) {
				?>
                <h2>PHP <?= htmlspecialchars($branch->getBranchId()) ?></h2>
				<p>
					For more information about PHP <?= htmlspecialchars($branch->getBranchId()) ?> please see
					the <a href="<?= htmlspecialchars($branch->getUrl()) ?>"><?= htmlspecialchars($branch->getBranchId()) ?> Branch Page</a>.
				</p>
                <table class="standard" style="width: 100%">
                    <thead>
                    <tr>
                        <td style="width: 100px; font-weight: bold">Release</td>
                        <td style="width: 200px; font-weight: bold">Release Date</td>
	                    <td style="font-weight: bold">Tags</td>
                    </tr>
                    </thead>
                    <tbody>
					<?php foreach (array_reverse($branch->getReleasesByVersion()) as $release) { ?>
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
	}