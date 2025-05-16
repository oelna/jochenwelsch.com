<?php
	require_once(__DIR__.DIRECTORY_SEPARATOR.'config.php');

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?= $site_title ?> - Delta-Apparillo - N’nR Delta Trio</title>

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta name="twitter:title" content="<?= $site_title ?> - Delta-Apparillo" />
	<meta property="og:title" content="<?= $site_title ?> - Delta-Apparillo" />
	<meta property="og:url" content="<?= PROTOCOL.'://'.DOMAIN ?>" />
	<meta property="og:image" content="<?= PROTOCOL.'://'.DOMAIN ?>/images/badge_deltaapparillo.jpg" />

	<link rel="icon" type="image/x-icon" href="/favicon.ico" />

	<link rel="stylesheet" href="https://cloud.typography.com/7706632/6639612/css/fonts.css" />
	<link rel="stylesheet" href="/main.css" />
	<script src="/jochenwelsch.js" defer></script>
</head>
<body>
	<h1><a href="/" rel="home">Jochen Welsch</a></h1>
	<h2>Freischaffender Musiker / Freelance Musician</h2>

	<main>
		<section class="delta-intro">
			<?php echo $Extra->text(file_get_contents(CONTENT_DIR.DS.'deltaapparillo_intro.md')); ?>
		</section>

		<section class="nnr-intro">
			<?php echo $Extra->text(file_get_contents(CONTENT_DIR.DS.'nnr_intro.md')); ?>
		</section>

		<section class="contact">
			<?php echo $Extra->text(file_get_contents(CONTENT_DIR.DS.'deltaapparillo_contact.md')); ?>
		</section>
	</main>

	<footer>
		<nav class="meta">
			<ul>
				<li><a href="/impressum/">Impressum</a></li>
				<li><a href="/impressum/">Datenschutz</a></li>
				<li><a href="/impressum/">Bildnachweise</a></li>
				<li><a href="/impressum/">Kontakt</a></li>
			</ul>
		</nav>
	</footer>
</body>
</html>