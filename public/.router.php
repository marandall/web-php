<?php
	
	use FastRoute\Dispatcher;
	use phpweb\Config\Site;
	use phpweb\Controllers\ControllerInterface;
	use phpweb\Controllers\Middleware\Runner as RunnerAlias;
	use phpweb\Framework\Request;
	use phpweb\Framework\Visitor;
	use phpweb\Services\Builder\ServiceLoader;
	
	require_once __DIR__ . '/../lib/include.php';
	
	$_SERVER["SERVER_ADDR"] = $_SERVER["HTTP_HOST"];
	
	$filename  = isset($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : $_SERVER["SCRIPT_NAME"];
	$afilename = $_SERVER["DOCUMENT_ROOT"] . $filename;
	$afilename = realpath($afilename);
	$len       = strlen($_SERVER["DOCUMENT_ROOT"]);
	
	
	if (isset($_SERVER['HTTP_HOST'])) {
		Site::$BaseUrl = ($_SERVER['REQUEST_SCHEME'] ?? (($_SERVER['SECURE'] ?? 'off') === 'on' ? 'https' : 'http')) . '://' . $_SERVER['HTTP_HOST'];
	}
	else {
		Site::$BaseUrl = substr($_SERVER['STATIC_ROOT'], 0, -1);
	}
	
	$redirects = [
		'/mailing-lists.php'      => '/community/lists/',
		'/unsub.php'              => '/community/lists/unsubscribe.php',
		'/download-logos.php'     => '/downloads/logos.php',
		'/downloads.php'          => '/downloads/',
		'/supported-versions.php' => '/versions/supported.php',
		'/security/'              => '/manual/en/security.php',
		'/build-setup.php'        => '/developers/tools/build-setup',
		'/git.php'                => '/developers/git/',
		'/releases/feed.php'      => '/versions/api/supported.atom',
		'/releases/active.php'    => '/versions/api/supported.json',
	];
	
	$routes = [
		'/'                                                                   => \phpweb\Controllers\IndexController::class,
		
		/* there are several static files which live in the root, all get passed through the same controller  */
		'/crossdomain.xml'                                                    => \phpweb\Controllers\StaticRootAssetController::class,
		'/robots.txt'                                                         => \phpweb\Controllers\StaticRootAssetController::class,
		'/favicon.ico'                                                        => \phpweb\Controllers\StaticRootAssetController::class,
		'/opensearch.xml'                                                     => \phpweb\Controllers\StaticRootAssetController::class,
		
		/* moar */
		'/docs.php'                                                           => \phpweb\Controllers\DocsController::class,
		'/security-note.php'                                                  => \phpweb\Controllers\SecurityNoteController::class,
		'/supported-versions.php'                                             => \phpweb\Controllers\Versions\SupportedVersionsController::class,
		'/support.php'                                                        => \phpweb\Controllers\SupportController::class,
		'/software.php'                                                       => \phpweb\Controllers\SoftwareController::class,
		'/sites.php'                                                          => \phpweb\Controllers\About\SitesController::class,
		'/thanks.php'                                                         => \phpweb\Controllers\ThanksController::class,
		'/get-involved.php'                                                   => \phpweb\Controllers\Developers\GetInvolvedController::class,
		'/elephpant.php'                                                      => \phpweb\Controllers\ElephpantController::class,
		
		/* everything in distribution gets redirected to main website */
		'/distributions/{path}'                                               => \phpweb\Controllers\DistroRedirectController::class,
		
		/* about pages */
		'/about/privacy.php'                                                  => \phpweb\Controllers\About\PrivacyController::class,
		'/about/copyright.php'                                                => \phpweb\Controllers\About\ContactController::class,
		'/about/credits.php'                                                  => \phpweb\Controllers\About\CopyrightController::class,
		'/about/contact.php'                                                  => \phpweb\Controllers\About\ContactController::class,
		'/about/sitemap.php'                                                  => \phpweb\Controllers\About\SitemapController::class,
		'/about/sitemap.xml'                                                  => \phpweb\Controllers\About\SitemapXMLController::class,
		
		/* developers */
		'/developers/'                                                        => \phpweb\Controllers\Developers\GetInvolvedController::class,
		'/developers/tools/build-setup'                                       => \phpweb\Controllers\Developers\Tools\BuildSetupController::class,
		'/developers/git/'                                                    => \phpweb\Controllers\Developers\Git\GitController::class,
		'/developers/git/register'                                            => \phpweb\Controllers\Developers\Git\RegisterGitAccountController::class,
		
		/* community + developers section */
		'/community/'                                                         => \phpweb\Controllers\Developers\GetInvolvedController::class,
		'/community/events/calendar'                                          => \phpweb\Controllers\Community\Events\CalendarController::class,
		'/community/events/submit'                                            => \phpweb\Controllers\Community\Events\SubmitEventController::class,
		'/community/conferences/'                                             => \phpweb\Controllers\Community\Conferences\ConferencesIndexController::class,
		'/community/conferences/archive'                                      => \phpweb\Controllers\Community\Conferences\ConferencesArchiveController::class,
		'/community/conferences/{conference}/'                                => \phpweb\Controllers\Community\Conferences\Conference\ConferenceIndexController::class,
		'/community/videos/'                                                  => \phpweb\Controllers\Community\Videos\VideosIndexController::class,
		'/community/lists/'                                                   => \phpweb\Controllers\Community\Lists\MailingListsIndexController::class,
		'/community/lists/unsubscribe'                                        => \phpweb\Controllers\Community\Lists\UnsubscribeController::class,
		
		/* search terms */
		'/search/search.php'                                                  => \phpweb\Controllers\Search\SearchController::class,
		'/search/manual.php'                                                  => \phpweb\Controllers\Search\SearchManualController::class,
		
		/* manual data */
		'/manual/help-translate.php'                                          => \phpweb\Controllers\Manual\HelpTranslateController::class,
		'/manual/php4.php'                                                    => \phpweb\Controllers\Manual\PHP4ManualArchiveController::class,
		'/manual/php3.php'                                                    => \phpweb\Controllers\Manual\PHP3ManualArchiveController::class,
		'/manual/en/{manual_path}.php'                                        => \phpweb\Controllers\Manual\En\EnglishManualRouter::class,
		
		/* release information */
		'/versions/'                                                          => \phpweb\Controllers\Versions\VersionsIndexController::class,
		'/versions/{major:\d+}.{minor:\d+}.{patch}/'                          => \phpweb\Controllers\Versions\Releases\ReleaseController::class,
		'/versions/{major:\d+}.{minor:\d+}.{patch}/install/windows-downloads' => \phpweb\Controllers\Versions\Releases\Install\WindowsDownloadsController::class,
		'/versions/{major:\d+}.{minor:\d+}/'                                  => \phpweb\Controllers\Versions\Branches\BranchController::class,
		'/versions/{major:\d+}.{minor:\d+}/changelog'                         => \phpweb\Controllers\Versions\Branches\BranchChangelogController::class,
		'/versions/{major:\d+}.{minor:\d+}/install/'                          => \phpweb\Controllers\Versions\Branches\Install\BranchInstallController::class,
		'/versions/{major:\d+}.{minor:\d+}/install/ubuntu_ppa'                => \phpweb\Controllers\Versions\Branches\Install\InstallBranchFromPPAController::class,
		'/versions/{major:\d+}.{minor:\d+}/install/iis'                       => \phpweb\Controllers\Versions\Branches\Install\InstallBranchWindowsIISController::class,
		'/versions/{major:\d+}.{minor:\d+}/install/docker'                    => \phpweb\Controllers\Versions\Branches\Install\InstallBranchDockerController::class,
		'/versions/{major:\d+}.{minor:\d+}/install/source'                    => \phpweb\Controllers\Versions\Branches\Install\InstallBranchSourceController::class,
		'/versions/{major:\d+}.{minor:\d+}/api/releases.{format}'             => \phpweb\Controllers\Versions\Branches\BranchAtomFeedController::class,
		'/versions/supported.php'                                             => \phpweb\Controllers\Versions\SupportedVersionsController::class,
		'/versions/eol.php'                                                   => \phpweb\Controllers\Versions\EOLController::class,
		'/versions/api/supported.{format}'                                    => \phpweb\Controllers\Versions\API\SupportedReleaseFeedController::class,
		'/versions/api/releases.{format}'                                     => \phpweb\Controllers\Versions\API\AllReleasesFeedController::class,
		'/versions/api/supported_chart.svg'                                   => \phpweb\Controllers\Versions\API\SupportedVersionGraphController::class,
		
		/* misc security that should probably be put in an archive */
		'/security/crypt_blowfish.php'                                        => \phpweb\Controllers\Security\BlowfishArchiveController::class,
		
		/* general downloads */
		'/downloads/'                                                         => \phpweb\Controllers\Downloads\DownloadsIndexController::class,
		'/downloads/logos'                                                    => \phpweb\Controllers\Downloads\LogosController::class,
		'/downloads/gpg-keys'                                                 => \phpweb\Controllers\Downloads\GpgKeysController::class,
		
		
		/* licensing */
		'/license/'                                                           => \phpweb\Controllers\License\LicenseIndexController::class,
		'/license/contrib-guidelines-code.php'                                => \phpweb\Controllers\License\ContributorGuidelinesController::class,
		'/license/distrib-guidelines-code'                                    => \phpweb\Controllers\License\DistributionGuidelinesController::class,
	
	];
	
	$dispatcher = FastRoute\simpleDispatcher(
		static function (\FastRoute\RouteCollector $r) use ($routes) {
			foreach ($routes as $uri => $class_id) {
				$r->addRoute(['GET', 'POST'], $uri, $class_id);
			}
		}
	);
	
	$uri = $_SERVER['REQUEST_URI'] ?? '';
	if (false !== $pos = strpos($uri, '?')) {
		$uri = substr($uri, 0, $pos);
	}
	$uri = rawurldecode($uri);
	
	/*
	 * There are several redirects which exist because this is a major redesign of
	 * the URI structure.
	 */
	
	$redirect = $redirects[$uri] ?? null;
	if ($redirect !== null) {
		header('location: ' . Site::$BaseUrl . $redirect);
		exit();
	}
	
	$services = ServiceLoader::load();
	
	try {
		$handler = null;
		$route   = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'] ?? 'GET', $uri);
		
		if ($route[0] === Dispatcher::NOT_FOUND) {
			if (strpos($uri, '/static/') === 0) {
				if (strncmp($_SERVER["DOCUMENT_ROOT"], $afilename, $len) == 0) {
					if (file_exists($afilename)) {
						/* This could be an image or whatever, so don't try to compress it */
						ini_set("zlib.output_compression", 0);
						return false;
					}
				}
			}
			
			$handler = new \phpweb\Controllers\NotFoundController();
		}
		else if ($route[0] === Dispatcher::METHOD_NOT_ALLOWED) {
			$handler = new \phpweb\Controllers\NotFoundController();
		}
		else {
			$class_id = $route[1];
			if ($services->has($class_id)) {
				$handler = $services->get($class_id);
			}
			else if (class_exists($class_id)) {
				$handler = new $class_id();
			}
			else {
				die('class ' . $route[1] . ' does not exist');
			}
		}
		
		/*
		 * If the handler exposes ControllerInterface, then it contains a middleware list that
		 * we are going to want to process first
		 */
		if ($handler instanceof ControllerInterface) {
			$middlewares = [];
			foreach ($handler->load() as $mw) {
				if (is_string($mw)) {
					$middlewares[] = $services->get($mw);
				}
				else {
					$middlewares[] = $mw;
				}
			}
			
			$handler = new RunnerAlias($middlewares);
		}
		
		$visitor = new Visitor($_COOKIE);
		$request = new Request(
			$_SERVER['REQUEST_URI'],
			$_GET,
			$_POST,
			$_SERVER,
			$_COOKIE,
			$route[2] ?? [],
			$visitor
		);
		
		$response = $handler($request, null);
		$response->write();
	}
	catch (\Throwable $ex) {
		die((string)$ex);
	}
	
	exit();
	