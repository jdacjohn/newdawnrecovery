// JavaScript Document

$(document).ready (function() {
	
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
});
