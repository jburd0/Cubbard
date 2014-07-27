$(document).ready(function() {
	//
	// hide the main logo on start up
	//
	$(".header img[role='mainLogo']").hide().click(function() {
		if($(this).attr('src') == './closedLogo.png') {
			$(this).attr('src', './Logo.png');
		} else {
			$(this).attr('src', './closedLogo.png');
		}
	});
	//
	// expand the header div and fade in the main logo
	//
	$('.header').hover(function() {
		$(this).stop().animate({"margin-top": "0"});
		$(".header img[role='mainLogo']").stop().fadeIn();
	},
	function() {
		$(".header img[role='mainLogo']").stop().fadeOut();
		$(this).stop().animate({"margin-top": "-218px"});
	})

});
