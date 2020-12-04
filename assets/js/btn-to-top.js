jQuery(document).ready(function () {
	var btn = $('.btn-to-top');

	$(window).scroll(function () {
		if ($(window).scrollTop() > 300) {
			btn.addClass('show');
		} else {
			btn.removeClass('show');
		}
	});

	$(window).resize(function () {
		if ($(document).width() > 480) {
			btn.on('click', function (e) {
				e.preventDefault();
				$('html, body').animate({ scrollTop: 0 }, '300');
			});
		}
	});
});

