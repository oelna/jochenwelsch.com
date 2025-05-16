<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	DEFINE('ROOT', __DIR__);
	DEFINE('DOMAIN', $_SERVER['HTTP_HOST']);
	DEFINE('PROTOCOL', stripos($_SERVER['SERVER_PROTOCOL'], 'https') === 0 ? 'https' : 'http');
	DEFINE('DS', DIRECTORY_SEPARATOR);
	DEFINE('CONTENT_DIR', ROOT.DS.'content');

	require(ROOT.DS.'lib'.DS.'Parsedown.php');
	require(ROOT.DS.'lib'.DS.'ParsedownExtra.php');
	$Extra = new ParsedownExtra();

	$site_title = 'Jochen Welsch';
	