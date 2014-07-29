$(document).ready(function() {
	//
	// hide the main logo on start up
	//
	$(".header img[role='mainLogo']").click(function() {
		if($(this).attr('src') == './closedLogo.png') {
			$(this).attr('src', './Logo.png');
		} else {
			$(this).attr('src', './closedLogo.png');
		}
	})
});
