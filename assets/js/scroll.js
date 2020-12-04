$(document).ready(function () {
	$(window).resize(function () {
		if ($(document).width() > 480) {
			$("a.nav__link").on("click", function (e) {
				e.preventDefault();
				var anchor = $(this).attr('href');
				$('html, body').stop().animate({
					scrollTop: $(anchor).offset().top - 0
				}, 800);
			});
		}
	});
});
