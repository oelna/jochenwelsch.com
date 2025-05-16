
// try to fix the old pretty URLs, redirect to new static pages
if (document.querySelector('html').classList.contains('error')) {
	const loc = window.location.pathname.replace(/^\/+|\/+$/g, '').toLowerCase();

	if (loc == 'impressum') {
		window.location.replace(window.location.origin + '/imprint.html');
	} else if (loc == 'delta-apparillo') {
		window.location.replace(window.location.origin + '/delta-apparillo.html');
	}
}
