<?php
	require_once(__DIR__.DIRECTORY_SEPARATOR.'config.php');
	DEFINE('NL', "<br />");

	$parent_dir = dirname(ROOT);

	$beta_dir = ROOT;
	$live_dir = $parent_dir.DS.'jochenwelsch.com';

	echo('copy: '.$beta_dir.NL);
	echo('to: '.$live_dir.NL.NL);

	if($live_dir == $parent_dir) {
		echo('error: calling from live directory not allowed!'.NL);
		die();
	}

	if(is_writable($parent_dir)) {
		if(file_exists($live_dir) && is_dir($live_dir)) {
			echo('removed old directory and contents.'.NL);

			system("rm -rf --preserve-root ".escapeshellarg($live_dir));
		}
		
		shell_exec("cp -r $beta_dir $live_dir");
		if(is_dir($live_dir)) {
			echo('created '.$live_dir.' and contents!'.NL);
			echo(date('d.m.Y H:i:s', filemtime($live_dir)));
		}
	} else {
		echo('error: '.$parent_dir.' is not writable!'.NL);
		die();
	}