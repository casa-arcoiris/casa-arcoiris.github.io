window.addEventListener("scroll", function(){var header = document.querySelector("header"); header.classList.toggle("sticky", window.scrollY > 0);})

var onloadCallback = function() {
	grecaptcha.render('recaptcha', {
		'sitekey' : '6LeeM6EgAAAAAB3kmI47hig8I5gOFEDjeqU5-xI9'
	});
};