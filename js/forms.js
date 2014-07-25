// functions relating to forms and input field

$(document).ready(function() {
	//
	// disable form submit by setting 'formValid' bool to false
	//
	var formValid = false;
	//
	// function to make 'value' attr to behave as 'placeholder'
	// store the value for each input as 'value'
	//
	$('input').each(function() {
		$(this).data('value', $(this).val());
	});

	//
	// set value to '' triggered by the focus event
	//
	$('input').focus(function() {
		if($(this).val() == $(this).data('value')) {
			$(this).val('');
		}
	});
	$('.required').blur(function() {
		if($(this).val() == '') {
			$(this).css({"border" : "1px solid #c35151", "background-color" : "#e8bfbf"});
			$(this).val($(this).data('value'));
			// return a false value
			$(this).data('isSet', false);
		} else {
			if($(this).val() == $(this).data('value')) {
			// return a false value
			$(this).data('isSet', false);
			} else {
			// form is complete 
			$(this).data('isSet', true);
			}
		}
		//
		// fetch array containing required input elements
		//
		var totalEmpty = 0;
		$(".required").each(function() {
			if($(this).data('isSet') == false) {
				// increment counter?
				totalEmpty++;
			}
		});
//		$(".header").after("<p>" + totalEmpty + "</p>");
		//
		// if there are any empty input fields empty
		// keep form button disabled
		//
		if(totalEmpty == 0) {
			formValid = true;
		} else {
			formValid = false;
		}
//		$(".header").after("<p>" + formValid + "</p>");
		//
		// if the form is completed, allow the form to be submit
		//
		if(!formValid) {
			$("form[name='sign-up'] input[type='submit']").prop('disabled', true);
		} else {
			$("form[name='sign-up'] input[type='submit']").prop('disabled', false);
		}
	});
	if(!formValid) {
		$("form[name='sign-up'] input[type='submit']").prop('disabled', true);
	}
});
