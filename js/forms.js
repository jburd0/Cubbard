// ****************************************************** //
// ** This is the Garren Ijames form validation script ** //
// ************** 2014 Cubbard productions ************** //
// ****************************************************** //

$(document).ready(function() {
	//
	// disable form submit by setting 'formValid' bool to false
	//
	var formValid = false;
	$("form[name='sign-up'] input[type='submit']").click(function(event) {
		event.preventDefault();
	});	
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
		if($(this).val() == '' || $(this).val() == $(this).data('value')) {
			$(this).css({"border" : "2px solid #c35151", "background-color" : "#e8bfbf"});
			$(this).val($(this).data('value'));
			// return a false value
			$(this).data('isSet', false);
		} else {
			// form is complete 
			$(this).data('isSet', true);
			$(this).css({"border" : "2px solid #666666", "background-color" : "white"});
		}
		//
		// we assume all fields are empty or not filled out correctly
		// then for every input field that IS filled out correctly,
		// we deincrement the integer variable 'totalEmpty' 
		//
		var totalEmpty = 5;
		var totalFull = 0; 
		$(".required").each(function() {
			if($(this).data('isSet') == true) {
				// increment counter?
				totalEmpty--;
				totalFull++;
			}
		});
		//
		// the following line is for developmental purposes only
		//	$(".header").after("<p>" + totalEmpty + ", " + totalFull + "</p>");
		//
		// if there are any empty input fields empty
		// keep form button disabled
		// enable if and only if, the total amount of empty fields equals zero
		// and the total amount of completed fields equals five
		//
		if(totalEmpty == 0 | totalFull == 5) {
			formValid = true;
		} else {
			formValid = false;
		}
		//
		// the follow line is for developmental purposes only
		//	$(".header").after("<p>" + formValid + "</p>");
		//
		// if the form is completed, allow the form to be submit
		//
		if(!formValid) {
			$("form[name='sign-up'] input[type='submit']").click(function(event) {
				event.preventDefault();
			});
		} else {
			$("form[name='sign-up'] input[type='submit']").unbind('click');
		}
	});
});
