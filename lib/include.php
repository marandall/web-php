<?php

	require_once __DIR__ . '/vendor/autoload.php';
	
	/* this file gets dropped in the non-commited complied section so needs to be force-included */
	require_once __DIR__ . '/../data/compiled/service-list.php';
	
	/* required eval for changelogs */
	require_once __DIR__ . '/../include/changelogs.inc';
	
	/* all pages and consoles in utc */
	date_default_timezone_set("UTC");