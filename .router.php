<?php
	
	use FastRoute\Dispatcher;
	use phpweb\Config\Site;
	use phpweb\Framework\Request;
	use phpweb\Framework\Visitor;
	
	require_once __DIR__ . '/include/prepend.inc';
	require_once __DIR__ . '/include/fastroute/functions.php';
	
	$_SERVER["SERVER_ADDR"] = $_SERVER["HTTP_HOST"];
	
	$filename  = isset($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : $_SERVER["SCRIPT_NAME"];
	$afilename = $_SERVER["DOCUMENT_ROOT"] . $filename;
	$afilename = realpath($afilename);
	$len       = strlen($_SERVER["DOCUMENT_ROOT"]);
	
	Site::$BaseUrl = $_SERVER['STATIC_ROOT'];
	
	$redirects = [
		'/mailing-lists.php'      => '/lists/',
		'/unsub.php'              => '/lists/unsubscribe.php',
		'/download-logos.php'     => '/downloads/logos.php',
		'/downloads.php'          => '/downloads/',
		'/supported-versions.php' => '/versions/supported.php',
		'/security/'              => '/manual/en/security.php',
	];
	
	$routes = [
		'/contact.php'                                                 => \phpweb\UI\Controllers\ContactController::class,
		'/copyright.php'                                               => \phpweb\UI\Controllers\CopyrightController::class,
		'/credits.php'                                                 => \phpweb\UI\Controllers\CreditsController::class,
		'/docs.php'                                                    => \phpweb\UI\Controllers\DocsController::class,
		'/git.php'                                                     => \phpweb\UI\Controllers\GitController::class,
		'/gpg-keys.php'                                                => \phpweb\UI\Controllers\GpgKeysController::class,
		'/privacy.php'                                                 => \phpweb\UI\Controllers\PrivacyController::class,
		'/security-note.php'                                           => \phpweb\UI\Controllers\SecurityNoteController::class,
		'/supported-versions.php'                                      => \phpweb\UI\Controllers\Versions\SupportedVersionsController::class,
		'/sitemap.php'                                                 => \phpweb\UI\Controllers\SitemapController::class,
		'/support.php'                                                 => \phpweb\UI\Controllers\SupportController::class,
		'/software.php'                                                => \phpweb\UI\Controllers\SoftwareController::class,
		'/sites.php'                                                   => \phpweb\UI\Controllers\SitesController::class,
		'/thanks.php'                                                  => \phpweb\UI\Controllers\ThanksController::class,
		'/get-involved.php'                                            => \phpweb\UI\Controllers\GetInvolvedController::class,
		'/elephpant.php'                                               => \phpweb\UI\Controllers\ElephpantController::class,
		
		/* release information */
		'/versions/{major:\d+}.{minor:\d+}.{patch}/'                   => \phpweb\UI\Controllers\Versions\Releases\ReleaseController::class,
		'/versions/{major:\d+}.{minor:\d+}.{patch}/install/ubuntu_ppa' => \phpweb\UI\Controllers\Versions\Releases\Install\InstallReleaseFromPPAController::class,
		'/versions/{major:\d+}.{minor:\d+}/'                           => \phpweb\UI\Controllers\Versions\Branches\BranchController::class,
		'/versions/{major:\d+}.{minor:\d+}/changelog'                  => \phpweb\UI\Controllers\Versions\Branches\BranchChangelogController::class,
		'/versions/{major:\d+}.{minor:\d+}/install/ubuntu_ppa'         => \phpweb\UI\Controllers\Versions\Branches\Install\InstallBranchFromPPAController::class,
		'/versions/supported.php'                                      => \phpweb\UI\Controllers\Versions\SupportedVersionsController::class,
		
		/* misc security that should probably be put in an archive */
		'/security/crypt_blowfish.php'                                 => \phpweb\UI\Controllers\Security\BlowfishArchiveController::class,
		
		/* general downloads */
		'/downloads/'                                                  => \phpweb\UI\Controllers\Downloads\DownloadsIndexController::class,
		'/downloads/logos.php'                                         => \phpweb\UI\Controllers\Downloads\LogosController::class,
		
		/* mailing list */
		'/lists/'                                                      => \phpweb\UI\Controllers\Lists\MailingListsIndexController::class,
		'/lists/unsubscribe.php'                                       => \phpweb\UI\Controllers\Lists\UnsubscribeController::class,
		
		/* licensing */
		'/license/'                                                    => \phpweb\UI\Controllers\License\LicenseIndexController::class,
		'/license/contrib-guidelines-code.php'                         => \phpweb\UI\Controllers\License\ContributorGuidelinesController::class,
		'/license/distrib-guidelines-code'                             => \phpweb\UI\Controllers\License\DistributionGuidelinesController::class,
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
	
	$handler = null;
	$route   = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'] ?? 'GET', $uri);
	
	if ($route[0] === Dispatcher::NOT_FOUND) {
		if (strncmp($_SERVER["DOCUMENT_ROOT"], $afilename, $len) == 0) {
			if (file_exists($afilename)) {
				/* This could be an image or whatever, so don't try to compress it */
				ini_set("zlib.output_compression", 0);
				return false;
			}
		}
		
		$handler = new \phpweb\UI\Controllers\NotFoundController();
	}
	else if ($route[0] === Dispatcher::METHOD_NOT_ALLOWED) {
		$handler = new \phpweb\UI\Controllers\NotFoundController();
	}
	else {
		if (class_exists($route[1])) {
			$handler = new $route[1]();
		}
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
	
	$response = $handler($request);
	$response->write();
	
	exit();
	
	include_once "error.php";
