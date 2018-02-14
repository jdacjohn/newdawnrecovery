/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Global Javascript functions used by www.newdawnts.org
// Author:			John Arnold, www.jdacsolutions.com
// Created: 		12/19/2012
// Created For:	www.goddessdesignonline.com
// Description:	This file contains the following scripts which are used extensively throughout the site:
//
//			$('#SlideShow').cycle() 				- Handles slideshow transitions on pages with slideshows.
//			$(window).scroll() 							- Handles scrolling sidebar behavior
//			$('show_hide').showHide()				- Handles expanding and collapsing DIVS for pages with lengthy content.
//			$('.toolTip').tipTip()					- Handles elegant tooltips.
//			$('#various1').fancybox()				- Handles the FancyBox for the leftsidebar link
//			$('#gallery a').lightBox()			- Handles gallery images on /aboutus/staff/sacramento
//			$('#fancy-results').fancybox() 	- Handles the FancyBox for self assessment results.
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Slideshow function call for http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js 
$(function() {
	$('#SlideShow').cycle({
		fx: 'fade',
		timeout: 2000, // milliseconds between slide transitions (0 to disable auto advance) 
		speed:         4000,  // speed of the transition (any valid fx speed value) 
		speedIn:       null,  // speed of the 'in' transition 
		speedOut:      null,  // speed of the 'out' transition
		easeIn:        null,  // easing for "in" transition 
		easeOut:       null,  // easing for "out" transition 
		easing:        null,  // easing method for both in and out transitions
		before: function() {
			$('#caption').html(this.alt);
		}
	});
});

$(function() {
	$('#gallery a').lightBox();
});

$(document).ready(function(){
	
	// Scrolling Sidebar function.
	var rTop = $('#RightSideBar').offset().top - parseFloat($('#RightSideBar').css('margin-top').replace(/auto/, 0));
	var lTop = $('#LeftSideBar').offset().top - parseFloat($('#LeftSideBar').css('margin-top').replace(/auto/, 0));
	$(window).scroll(function (event) {
    // what the y position of the scroll is
    var y = $(this).scrollTop();
		var lHeight = $('#LeftSideBar').innerHeight();
		var rHeight = $('#RightSideBar').innerHeight();
		var mHeight = $('#MainContent').innerHeight();
		var hHeight = $('#header').innerHeight();
		var nHeight = $('#nav').innerHeight();
		var cWrapHeight = $('#contentWrap').innerHeight();
		var slideShowHeight = $('#SlideShow').innerHeight();
		var fHeight = $('#footer').innerHeight();
		var docHeight = hHeight + nHeight + cWrapHeight;
		var maxRightScroll = docHeight - fHeight - rHeight;
		var maxLeftScroll = docHeight - fHeight - lHeight;
		var topScrollStop = hHeight + nHeight + slideShowHeight;
    
		// Right Scroll Bar
		if (maxRightScroll > topScrollStop) {
			if (y > rTop){
				// Only add the fixed class if y is also less than maxLeftScroll
		  	if (y < maxRightScroll){
					$('#RightSideBar').addClass('fixed');
					$('#RightSideBar').css("top",0);
				} else {
					// otherwise remove the fixed class
					$('#RightSideBar').removeClass('fixed');
		  		$('#RightSideBar').css("top",maxRightScroll - rTop);
				}
			} else {
				$('#RightSideBar').removeClass('fixed');
		  	$('#RightSideBar').css("top",0);
			}
	  } // End Left Scroll Bar

    // Left Scroll Bar
		if (maxLeftScroll > topScrollStop) {
			if (y > lTop){
				// Only add the fixed class if y is also less than maxLeftScroll
		  	if (y < maxLeftScroll){
					$('#LeftSideBar').addClass('fixed');
					$('#LeftSideBar').css("top",0);
				} else {
					// otherwise remove the fixed class
					$('#LeftSideBar').removeClass('fixed');
		  		$('#LeftSideBar').css("top",maxLeftScroll - lTop);
				}
			} else {
				$('#LeftSideBar').removeClass('fixed');
		  	$('#LeftSideBar').css("top",0);
			}
	  } // End Left Scroll Bar
  }); // End $(window).scroll()

	// Tool Tips
	$('.toolTip').tipTip({ arrow: false, defaultPosition: "left", attribute: "tTitle" });
	
	// Fancybox for LeftSideBar.html
	$("#various1").fancybox({
			'titlePosition'		: 'inside',
			'transitionIn'		: 'none',
			'transitionOut'		: 'none'
	});
	$("#various2").fancybox({
			'titlePosition'		: 'inside',
			'transitionIn'		: 'none',
			'transitionOut'		: 'none'
	});

	// Fancybox for Self-Assessment results.
	$("#fancy-results").fancybox({
			'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'width'						: 600,
			'padding'					: 5,
			'titleShow'				: false
	});

	// ShowHide function for Expanding/Collapsing DIVS
	$('.show_hide').showHide({
		speed: 500, // speed you want the toggle to happen
		easing: '', // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
		changeText: 1, // if you dont want the button text to change, set this to 0
		showImage: '../images/PlusSign.png',// the button text to show when a div is closed
		hideImage: '../images/MinusSign.png', // the button text to show when a div is open
		showText: 'Learn More',
		hideText: 'Close'
	}); // End .showHide()


	// Contact Form validation.
	$("#contactform").submit(function(){	

	// Place ID's of all required fields here.
	required = ["name", "email", "phone-Sidebar", "disorderChecked"];
	// If using an ID other than #email or #error then replace it here
	email = $("#email");
	phone = $("#phone-Sidebar");
	$name = $("#name");
	
	if ($("#phone-Sidebar").val() == 'Phone') { $("#phone-Sidebar").val(""); }
	if ($("#name").val() == "Name") { $("#name").val(""); }
	errornotice = $("#error");
	// The text to show up within a field when it is incorrect

	emptyerror = "This field is required.";
	emailerror = "Please enter a valid E-Mail.";
	nameerror = "Please enter a valid Name.";
	phoneerror = "Please enter a valid Phone No.";
	

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

		if ($("#name").val() == emptyerror ) { 
			$("#name").addClass("needsfilled");
			$("#name").val(nameerror); 
		}

		if ($("#phone-Sidebar").val() == emptyerror ) { 
			$("#phone-Sidebar").addClass("needsfilled");
			$("#phone-Sidebar").val(phoneerror); 
		}
		if (!/^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$/.test($("#phone-Sidebar").val())) {
			$("#phone-Sidebar").addClass("needsfilled");
			$("#phone-Sidebar").val(phoneerror); 
		}

		if ($("#disorderChecked").val() == emptyerror ) { 
			$("#disorderChecked").addClass("needsfilled");
			$("#disorderChecked").val(""); 
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
	}); // End Contact Form Validation

}); // End document.ready()

	



