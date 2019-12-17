<?php

	/**
	 * This file builds certain configuration files which cannot be
	 * done using the standard command mechanism as they may have connections
	 * which have not yet been resolved.
	 *
	 * This file should be called as part of the build process
	 */
	
	use phpweb\Services\Builder\ServiceDetector;
	
	require_once __DIR__ . '/../lib/vendor/autoload.php';
	
	(new ServiceDetector())->compile();