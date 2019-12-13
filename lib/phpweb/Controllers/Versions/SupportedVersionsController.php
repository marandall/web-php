<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers\Versions;
	
	use phpweb\Data\Branches\Branches;
	use phpweb\Data\StabilityEnum;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Tools\Formatting;
	use phpweb\UI\Templates\PHPWebTemplate;
	
	class SupportedVersionsController extends PHPWebTemplate
	{
		public function __invoke(Request $request): Response {
			$this->setPageTitle('Supported Versions');
			$this->setActivePage('docs');
			return $this->render([$this, 'renderContents']);
		}
		
		private function formatInterval(\DateTime $time, \DateTime $when) {
		    return Formatting::FormatInterval($time, $when);
        }
		
		public function renderContents() {
			?>
            <p>
                Each release branch of PHP is fully supported for two years from its initial
                stable release. During this period, bugs and security issues that have been
                reported are fixed and are released in regular point releases.
            </p>

            <p>
                After this two year period of active support, each branch is then supported
                for an additional year for critical security issues only. Releases during
                this period are made on an as-needed basis: there may be multiple point
                releases, or none, depending on the number of reports.
            </p>

            <p>
                Once the three years of support are completed, the branch reaches its end of
                life and is no longer supported. <a href="./eol.php">A table of end of life
                    branches is available.</a>
            </p>

            <h3>Currently Supported Versions</h3>

            <table class="standard">
                <thead>
                <tr>
                    <th>Branch</th>
                    <th colspan="2">Initial Release</th>
                    <th colspan="2">Active Support Until</th>
                    <th colspan="2">Security Support Until</th>
                </tr>
                </thead>
                <tbody>
				
				<?php
                    $now = new \DateTime();
					foreach (Branches::GetBranches() as $branch) {
						$stability = $branch->getStability();
						if (!\in_array($stability, [StabilityEnum::STABLE, StabilityEnum::SECURITY], true)) {
							continue;
						}
						
						$first_release = $branch->getInitialRelease();
						$latest_release    = $branch->getLatestRelease();
						
						$initial = $first_release ? $first_release->getDate() : new \DateTime();
						$until   = $first_release ? $first_release->getDate()->add(new \DateInterval('P2Y')) : new \DateTime();
						$eol     = $branch->getEolSecurityDate();
						
						?>
                        <tr class="<?php echo $stability ?>">
                            <td>
                                <a href="<?= htmlspecialchars($branch->getUrl()) ?>">
									<?= htmlspecialchars($branch->getBranchId()) ?></a>
                            </td>
                            <td><?php echo htmlspecialchars($initial->format('j M Y')) ?></td>
                            <td class="collapse-phone"><em><?php echo htmlspecialchars(
										$this->formatInterval($initial, $now)
									) ?></em></td>
                            <td><?php echo htmlspecialchars($until->format('j M Y')) ?></td>
                            <td class="collapse-phone">
                                <em><?= htmlspecialchars(
			                            $this->formatInterval($until, $now)
									) ?></em>
                            </td>
                            <td><?php echo htmlspecialchars($eol->format('j M Y')) ?></td>
                            <td class="collapse-phone"><em><?php echo htmlspecialchars(
			                            $this->formatInterval($eol, $now)
									) ?></em></td>
                        </tr>
						<?php
					}
				?>
                </tbody>
            </table>

            <p>
                Or, visualised as a calendar:
            </p>
			
            <img src="./api/unsupported_chart.svg" />

            <h4>Key</h4>

            <table class="standard">
                <tr class="stable">
                    <td>Active support</td>
                    <td>
                        A release that is being actively supported. Reported bugs and security
                        issues are fixed and regular point releases are made.
                    </td>
                </tr>
                <tr class="security">
                    <td>Security fixes only</td>
                    <td>
                        A release that is supported for critical security issues only. Releases
                        are only made on an as-needed basis.
                    </td>
                </tr>
                <tr class="eol">
                    <td>End of life</td>
                    <td>
                        A release that is no longer supported. Users of this release should
                        upgrade as soon as possible, as they may be exposed to unpatched security
                        vulnerabilities.
                    </td>
                </tr>
            </table>
			<?php
		}
	}