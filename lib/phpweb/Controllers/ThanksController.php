<?php
	
	declare(strict_types=1);
	
	namespace phpweb\Controllers;
	
	use phpweb\Controllers\Middleware\UiInjector;
	use phpweb\Data\Countries;
	use phpweb\Data\Mirrors;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\UI\Templates\FreshTemplate;
	
	class ThanksController implements ControllerInterface
	{
		public function load(): array {
			return [
				UiInjector::class,
				$this,
			];
		}
		
		public function __invoke(Request $request, ?callable $next): Response {
			return $request
				->get(FreshTemplate::class)
				->setPageTitle('Thanks To')
				->render([$this, 'renderContents']);
		}
		
		public function renderContents() {
		    ?>
            <ul>
                <li>
                    <a href="http://www.easydns.com/?V=698570efeb62a6e2">easyDNS</a>
                    provides DNS services for the PHP domains.
                </li>

                <li>
                    <a href="https://www.myrasecurity.com/ddos-protection/">DDoS protection by Myra Security</a>, along with hosting
                    www.php.net and git.php.net for us.
                </li>

                <li>
                    <a href="http://www.streamservice.nl">Stream Service</a>
                    provides servers and bandwidth for svn.php.net, gtk.php.net, people.php.net
                    and europe.rsync.php.net.
                </li>

                <li>
                    <a href="http://www.directi.com/">Directi</a> provides
                    IP address to country lookup information.
                </li>

                <li>
                    <a href="https://www.digitalocean.com/">DigitalOcean</a> provides
                    VMs for a number of PHP services.
                </li>

                <li>
                    <a href="http://promote.pair.com/direct.pl?php.net">pair Networks</a>
                    provides the servers and bandwidth for PEAR, PECL and mailing list services.
                </li>

                <li>
                    <a href="http://www.rackspace.com/">Rackspace</a> provides
                    the server and bandwidth for various php.net services.
                </li>

                <li>
                    <a href="http://www.servercentral.net/">Server Central</a> provides
                    a box and connection which runs various services and sites for php.net
                </li>

                <li>
                    <a href="http://www.spry.com/">Spry VPS Hosting</a> provides a server and
                    bandwidth for various php.net services.
                </li>

                <li>
                    <a href="http://www.osuosl.org/">OSU Open Source Lab</a> provides a server and
                    bandwidth for various php.net services.
                </li>

                <li>
                    <a href="http://www.nexcess.net/">NEXCESS.NET</a> provides a server and bandwidth
                    for various php.net services.
                </li>

                <li>
                    <a href="http://www.eukhost.com/">EUKhost</a> provides a server and bandwidth
                    for various php.net services.
                </li>

                <li>
                    <a href="https://duocast.nl/">Duocast</a> provides the
                    servers and bandwidth used for buildbot testing and various windows based servers.
                </li>

                <li>
                    <a href="http://www.redpill-linpro.com">Redpill Linpro</a> provides managed servers and bandwidth for various php.net services.
                </li>

                <li>
                    <a href="http://krystal.co.uk">Krystal.co.uk</a> provides a server and bandwidth
                    for the ci.qa.php.net build and quality assurance infrastructure.
                </li>

                <li>
                    <a href="http://servergrove.com/">ServerGrove</a> provides managed servers and bandwidth for various php.net services.
                </li>

                <li>
                    <a href="https://www.bauer-kirch.de/">Bauer + Kirch GmbH</a> provides us with SSL certificates and
                    a server and bandwidth for the php.net monitoring infrastructure.
                </li>

                <li>
                    <a href="https://www.appveyor.com/">AppVeyor</a> provides continuous integration for Windows builds of PHP.
                </li>

                <li>
                    <a href="https://www.travis-ci.org/">Travis CI</a> provides continuous integration for builds of PHP.
                </li>

            </ul>

            <h1>Thanks Emeritus</h1>

            <p>
                Special 'legacy' thanks go to the people and companies who have helped
                us in our past.
            </p>
            <ul>
                <li>
                    <a href="http://www.yahoo.com/">Yahoo! Inc.</a> provided us with many many
                    terabytes of bandwidth and hosting for www.php.net, and svn.php.net and git.php.net
                    for many years.
                </li>

                <li>
                    <a href="http://www.synacor.com">Synacor</a> provided us with many
                    terabytes of bandwidth and hosting for www.php.net and others for
                    many years.
                </li>

                <li>
                    <a href="http://www.vasoftware.com">VA Software Corp.</a> helped us
                    by donating a server and resources to enable us to build manuals
                    and distribute our content via rsync.
                </li>
            </ul>

            <p>
                And special thanks to all the companies who donated server space and
                bandwidth to host our historical international array of mirror sites.
            </p>

            <ul>
				<?php
					$last_country = '';
					foreach (Mirrors::GetHistoricalMirrors() as $m) {
						?>
                        <li><?php echo Countries::COUNTRIES_BY_ALPHA_3[$m[0]]; ?>: <a href='<?php echo $m[3]; ?>'><?php echo $m[2]; ?></a></li>
						<?php
					}
				?>
            </ul>

            <p>PHP.net is very grateful for all their support.</p>
			<?php
		}
	}
	