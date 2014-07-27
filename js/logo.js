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
	$("#slider").click(function() {
		if($(this).attr('src') == './img/arrowDown.png') {
			$(this).attr('src', './img/arrowUp');
			$('.header').stop().animate({"margin-top": "0"});
			$(".header img[role='mainLogo']").stop().fadeIn();
		} else {
			$(this).attr('src', './img/arrowDown.png');
			$(".header img[role='mainLogo']").stop().fadeOut();
			$('.header').stop().animate({"margin-top": "-218px"});
		}
	})
});
