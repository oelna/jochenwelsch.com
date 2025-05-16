<?php
	require_once(__DIR__.DIRECTORY_SEPARATOR.'config.php');

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?= $site_title ?> - Impressum, Datenschutz, Kontakt</title>

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta name="twitter:title" content="<?= $site_title ?>" />
	<meta property="og:title" content="<?= $site_title ?>" />
	<meta property="og:url" content="<?= PROTOCOL.'://'.DOMAIN ?>" />
	<meta property="og:image" content="<?= PROTOCOL.'://'.DOMAIN ?>/images/preview.png" />

	<link rel="icon" type="image/x-icon" href="/favicon.ico" />

	<link rel="stylesheet" href="https://cloud.typography.com/7706632/6639612/css/fonts.css" />
	<link rel="stylesheet" href="/main.css" />
	<script src="/jochenwelsch.js" defer></script>
</head>
<body>
	<h1><a href="/" rel="home">Jochen Welsch</a></h1>
	<h2>Freischaffender Musiker / Freelance Musician</h2>

	<main>
		<section class="imprint">
			<?php echo $Extra->text(file_get_contents(CONTENT_DIR.DS.'imprint.md')); ?>
		</section>

		<section class="contact">
			<?php echo $Extra->text(file_get_contents(CONTENT_DIR.DS.'contact.md')); ?>
		</section>

		<section class="privacy-policy">
			<?php echo $Extra->text(file_get_contents(CONTENT_DIR.DS.'privacy.md')); ?>
		</section>
	</main>

	<footer>
		<nav class="meta">
			<ul>
				<li><a href="/">Startseite</a></li>
			</ul>
		</nav>
	</footer>
</body>
</html>