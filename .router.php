<?php
	
	use phpweb\Config\Site;
	use phpweb\Framework\Request;
	use phpweb\Framework\Response;
	use phpweb\Framework\Visitor;
	
	require_once __DIR__ . '/include/prepend.inc';
	
	$_SERVER["SERVER_ADDR"] = $_SERVER["HTTP_HOST"];
	
	$filename  = isset($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : $_SERVER["SCRIPT_NAME"];
	$afilename = $_SERVER["DOCUMENT_ROOT"] . $filename;
	$afilename = realpath($afilename);
	$len       = strlen($_SERVER["DOCUMENT_ROOT"]);
	
	Site::$BaseUrl = $_SERVER['STATIC_ROOT'];
	
	$redirects = [
		'/mailing-lists.php' => '/lists/',
		'/unsub.php'         => '/lists/unsubscribe.php',
	];
	
	$routes = [
		'/contact.php'                         => \phpweb\UI\Controllers\ContactController::class,
		'/copyright.php'                       => \phpweb\UI\Controllers\CopyrightController::class,
		'/credits.php'                         => \phpweb\UI\Controllers\CreditsController::class,
		'/docs.php'                            => \phpweb\UI\Controllers\DocsController::class,
		'/git.php'                             => \phpweb\UI\Controllers\GitController::class,
		'/gpg-keys.php'                        => \phpweb\UI\Controllers\GpgKeysController::class,
		'/privacy.php'                         => \phpweb\UI\Controllers\PrivacyController::class,
		'/security-note.php'                   => \phpweb\UI\Controllers\SecurityNoteController::class,
		'/supported-versions.php'              => \phpweb\UI\Controllers\SupportedVersionsController::class,
		'/sitemap.php'                         => \phpweb\UI\Controllers\SitemapController::class,
		'/support.php'                         => \phpweb\UI\Controllers\SupportController::class,
		'/software.php'                        => \phpweb\UI\Controllers\SoftwareController::class,
		'/sites.php'                           => \phpweb\UI\Controllers\SitesController::class,
		'/thanks.php'                          => \phpweb\UI\Controllers\ThanksController::class,
		'/get-involved.php'                    => \phpweb\UI\Controllers\GetInvolvedController::class,
		'/elephpant.php'                       => \phpweb\UI\Controllers\ElephpantController::class,
		
		/* mailing list */
		'/lists/'                              => \phpweb\UI\Controllers\Lists\MailingListsIndexController::class,
		'/lists/unsubscribe.php'               => \phpweb\UI\Controllers\Lists\UnsubscribeController::class,
		
		/* licensing */
		'/license/'                            => \phpweb\UI\Controllers\License\LicenseIndexController::class,
		'/license/contrib-guidelines-code.php' => \phpweb\UI\Controllers\License\ContributorGuidelinesController::class,
		'/license/distrib-guidelines-code'     => \phpweb\UI\Controllers\License\DistributionGuidelinesController::class,
	];
	
	$request_uri = $_SERVER['REQUEST_URI'] ?? '';
	
	$visitor = new Visitor($_COOKIE);
	$request = new Request(
		$request_uri,
		$_GET,
		$_POST,
		$_SERVER,
		$visitor
	);
	
	$class_id = $routes[$request_uri] ?? null;
	if ($class_id !== null) {
		/** @var Response $response */
		$response = (new $class_id)($request);
		$response->write();
		return;
	}
	
	if (strncmp($_SERVER["DOCUMENT_ROOT"], $afilename, $len) == 0) {
		if (file_exists($afilename)) {
			/* This could be an image or whatever, so don't try to compress it */
			ini_set("zlib.output_compression", 0);
			return false;
		}
		
		die('about to error');
	}
	
	
	include_once "error.php";
