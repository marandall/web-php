<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions;
	
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Controllers\Middleware\UiReleasesMiddleware;
	use phpweb\Data\Branches\Branches;
	use phpweb\Data\StabilityEnum;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Tools\Formatting;
	use phpweb\UI\Templates\FreshTemplate;
	
	class EOLController implements ControllerInterface
	{
		public function load(): array {
		    return [
		        UiInjector::class,
                UiReleasesMiddleware::class,
                $this
            ];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
		    return $request
                ->get(FreshTemplate::class)
                ->setPageTitle('Unsupported / End-of-Life Branches')
                ->setActivePage('docs')
                ->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
			// Notes for specific branches can be added here, and will appear in the table.
			$BRANCH_NOTES = [
				'7.1' => '<a href="/manual/migration72">A guide is available for migrating from PHP 7.1 to 7.2.</a>',
				'7.0' => '<a href="/manual/migration71">A guide is available for migrating from PHP 7.0 to 7.1.</a>',
				'5.6' => '<a href="/manual/migration70">A guide is available for migrating from PHP 5.6 to 7.0.</a>',
				'5.5' => '<a href="/manual/migration56">A guide is available for migrating from PHP 5.5 to 5.6.</a>',
				'5.4' => '<a href="/manual/migration55">A guide is available for migrating from PHP 5.4 to 5.5.</a>',
				'5.3' => '<a href="/manual/migration54">A guide is available for migrating from PHP 5.3 to 5.4.</a>',
				'5.2' => '<a href="/manual/migration53">A guide is available for migrating from PHP 5.2 to 5.3.</a>',
				'5.1' => '<a href="/manual/migration52">A guide is available for migrating from PHP 5.1 to 5.2.</a>',
				'5.0' => '<a href="/manual/migration51">A guide is available for migrating from PHP 5.0 to 5.1.</a>',
				'4.4' => '<a href="/manual/migration5">A guide is available for migrating from PHP 4 to PHP 5.0.</a><br>The end of life for PHP 4.4 also marks the end of life for PHP 4 as a whole.',
			];
			
			?>
            <p>
                This page lists the end of life date for each unsupported branch of PHP.
                <br /><br />
                
                If you are using these releases, you are <strong>strongly</strong> urged to upgrade to
                <a href="./supported.php">a current version</a>, as using older versions
                may expose you to security vulnerabilities and bugs that have been fixed in
                more recent versions of PHP.
            </p>

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
				<?php
					foreach (Branches::GetBranches() as $branch) {
						if ($branch->getStability() !== StabilityEnum::UNSUPPORTED) {
							continue;
						}
						
						$branch_id = $branch->getBranchId();
						
						$eol        = $branch->getEolSecurityDate();
						$eol_period = Formatting::FormatInterval($eol, new \DateTime());
						
						$last_release = $branch->getLatestRelease();
						
						?>
                        <tr>
                            <td>
                                <a href="<?= $branch->getUrl() ?>"><?= htmlspecialchars($branch_id) ?></a>
                            <td>
								<?= htmlspecialchars($eol->format('j M Y')) ?>
                            </td>
                            <td>
                                <em><?= htmlspecialchars($eol_period) ?></em>
                            </td>
                            <td>
                                <a href="<?= htmlspecialchars($last_release->getUrl()) ?>">
									<?= htmlspecialchars($last_release->getVersionId()) ?>
                                </a>
                            </td>
                            <td>
								<?= $BRANCH_NOTES[$branch_id] ?? '' ?>
                            </td>
                        </tr>
						<?php
					}
				?>
                </tbody>
            </table>
			<?php
		}
	}