window.onload = function() {
  twemoji.parse(document.body, {
      base: 'plugins/twemoji/assets/',
	  /* change both 'svg' to 'png' if you want to use PNGs instead */
      folder: 'svg',
      ext: '.svg'
  });
}
