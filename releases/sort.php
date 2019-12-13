<?php
	
	$base = __DIR__;
	
	foreach (scandir($base) as $file) {
		if (substr($file, -4) !== '.php') {
			continue;
		}
		
		$path = $base . DIRECTORY_SEPARATOR . $file;
		
		$contents = file_get_contents($path);
		$contents = str_replace('<?php site_footer(); ?>', '', $contents);
		
		$eo_php = strpos($contents, '?>');
		if ($eo_php !== false) {
			$contents = substr($contents, $eo_php + 2);
		}
		
		$ver      = explode('_', substr($file, 0, strpos($file, '.php')));
		$major    = (int)($ver[0] ?? 0);
		$minor    = (int)($ver[1] ?? 0);
		$revision = (int)($ver[2] ?? 0);
		
		$dir = __DIR__ . '/../include/data/releases/' . $major . '/' . $major . '_' . $minor;
		@mkdir($dir, 0, true);
		
		file_put_contents($dir . '/' . str_replace('.php', '.html', $file), $contents);
	}

