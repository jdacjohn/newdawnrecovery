/*
Created 09/27/09										
Questions/Comments: jorenrapini@gmail.com						
COPYRIGHT NOTICE		
Copyright 2009 Joren Rapini
*/

	

$(document).ready(function(){
	// Place ID's of all required fields here.
	required = ["name", "email", "phone-Sidebar"];
	// If using an ID other than #email or #error then replace it here
	email = $("#email");
//	phone = $("#phone-Sidebar");
//	name = $("#name");
	
//	if (name.val() == 'Name' ) { name.val(""); }
//	if (phone.val() == 'Phone') {phone.val(""); }
	errornotice = $("#error");
	// The text to show up within a field when it is incorrect
	emptyerror = "This field is required.";
	emailerror = "Please enter a valid e-mail.";
	nameerror = "Please enter a valid name.";
	phoneerror = "Please enter a valid phone number.";

	$("#contactform").submit(function(){	
		//Validate required fields
		for (i=0;i<required.length;i++) {
			var input = $('#'+required[i]);
			if ((input.val() == "") || (input.val() == emptyerror)) {
				input.addClass("needsfilled");
				input.val(emptyerror);
				errornotice.fadeIn(750);
			} else {
				input.removeClass("needsfilled");
			}
		}
		// Validate the e-mail.
		if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email.val())) {
			email.addClass("needsfilled");
			email.val(emailerror);
		}

		//if any inputs on the page have the class 'needsfilled' the form will not submit
		if ($(":input").hasClass("needsfilled")) {
			return false;
		} else {
			errornotice.hide();
			return true;
		}
	});
	
	// Clears any fields in the form when the user clicks on them
	$(":input").focus(function(){		
	   if ($(this).hasClass("needsfilled") ) {
			$(this).val("");
			$(this).removeClass("needsfilled");
	   }
	});
});	