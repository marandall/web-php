<?php
	
	use phpweb\Config\Site;
	use phpweb\Data\Languages;
	
// -*- C++ -*-
// Compress all pages, if ext/zlib is available on the mirror
	ini_set("zlib.output_compression", 1);

// See http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.9
// for cache control header descriptions (used in many places on the site).
	
	/* Fix Silly Same Origin Policies */
	if (isset($_SERVER["HTTP_ORIGIN"])) {
		$host = parse_url($_SERVER["HTTP_ORIGIN"]);
		if (strncmp(strrev($host["host"]), strrev("php.net"), strlen("php.net")) != 0) {
			if ($host["host"] != $_SERVER["SERVER_NAME"]) {
				exit(10);
			}
		}
		if (isset($host["port"])) {
			$hostname = $host["host"] . ":" . $host["port"];
		}
		else {
			$hostname = $host["host"];
		}
		
		header("Access-Control-Allow-Origin: http://$hostname");
		if (isset($_SERVER["HTTP_ACCESS_CONTROL_REQUEST_HEADERS"])) {
			$headers = $_SERVER["HTTP_ACCESS_CONTROL_REQUEST_HEADERS"];
			$headers = str_replace(["\r", "\n", "\0"], "", $headers);
			header("Access-Control-Allow-Headers: $headers");
		}
	}
	/* Clickjacking workaround. Nothing should be in a frame so it could technically be 'deny'
	 * but it doesn't make any difference anyway */
	header("X-Frame-Options: SAMEORIGIN");

// Be 100% sure the timezone is set
	if (ini_get("date.timezone") === "" && function_exists("date_default_timezone_set")) {
		date_default_timezone_set("UTC");
	}
	
	
	/* Compatibility with the PHP webserver.. */
	if (!isset($_SERVER["SERVER_ADDR"])) {
		$_SERVER["SERVER_ADDR"] = "127.0.0.1";
	}

// As of PHP 5.3.0 multibyte sequence errors are no longer
// silent. Prior to that version this bitfield does not exist
// so define it to prevent notices on older versions
	if (!defined("ENT_IGNORE")) {
		define("ENT_IGNORE", 0);
	}

// Prevent cross site scripting problems
	unset($RSIDEBAR_DATA);
	unset($SIDEBAR_DATA);
	unset($SEARCH_BASE);
	unset($LANG);
	unset($COUNTRY);
	unset($ONLOAD);
	unset($MYPHPNET);
	unset($LAST_UPDATED);

// Site details (mirror site information)
	include __DIR__ . '/site.inc';

// Choose language used for translated parts
	include __DIR__ . '/langchooser.inc';

// Common layout functions
	include __DIR__ . '/layout.inc';

// -----------------------------------------------------------------------------


// Get or set preferred language code
	function myphpnet_language($langcode = FALSE) {
		global $MYPHPNET;
		
		// Set language code
		if ($langcode && isset(Languages::ACTIVE[$langcode])) {
			$MYPHPNET[0] = $langcode;
		}
		// Return code or FALSE
        elseif (isset($MYPHPNET[0]) && $MYPHPNET[0]) {
			return $MYPHPNET[0];
		}
		return false;
	}
	
	define("MYPHPNET_URL_NONE", FALSE);
	define("MYPHPNET_URL_FUNC", 'quickref');
	define("MYPHPNET_URL_MANUAL", 'manual');

// Set URL search fallback preference
	function myphpnet_urlsearch($type = FALSE) {
		global $MYPHPNET;
		
		// Set type if specified and if correct
		if ($type && in_array($type, [MYPHPNET_URL_FUNC, MYPHPNET_URL_MANUAL])) {
			$MYPHPNET[1] = $type;
		}
		
		// Return code or NONE
        elseif (isset($MYPHPNET[1]) && !empty($MYPHPNET[1])) {
			return $MYPHPNET[1];
		}
		else {
			return MYPHPNET_URL_NONE;
		}
	}
	
	function myphpnet_showug($enable = null) {
		global $MYPHPNET;
		
		if (isset($_GET["showug"])) {
			$enable = true;
		}
		
		if ($enable !== null) {
			$MYPHPNET[3] = $enable;
		}
		
		if (isset($MYPHPNET[3])) {
			return $MYPHPNET[3];
		}
		
		if ($_SERVER["REQUEST_TIME"] % 10) {
			return true;
		}
		
		return false;
	}


