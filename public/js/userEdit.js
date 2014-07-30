$(document).ready(function() {
	$('.field-trigger').click(function() {
		var enable = $(this).attr('for');
		event.preventDefault();
		$("input[name='" + enable + "-edit']").prop('disabled', false);
	})
});
			
