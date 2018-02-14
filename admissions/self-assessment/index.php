<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="../../css/global.css" />
<link rel="stylesheet" type="text/css" href="../../css/form-style.css" />

<link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
<title>New Dawn Treatment Centers | Admissions | Self Assessment</title>

<!--- jQuery and associated scripts. --->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js' type='text/javascript'></script>
<script src='http://www.newdawntreatmentcenters.com/js/showHide.js' type='text/javascript'></script>
<script src='http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js' type='text/javascript'></script>
<!-- jQuery lightBox plugin -->
<script src='http://www.newdawntreatmentcenters.com/js/jquery.lightbox-0.5.js' type='text/javascript'></script>
<link rel='stylesheet' type='text/css' href='http://www.newdawntreatmentcenters.com/css/jquery.lightbox-0.5.css' media='screen' />
<!--- www.newdawntreatmentcenters.com global JS --->
<script src='http://www.newdawntreatmentcenters.com/js/global.js' type='text/javascript'></script>

<style>
#caption { position: absolute; z-index: 500; color: #fff; font-size: 18px; top: 250px; right: 130px; width: 300px;}</style>
<!--[if !IE 7]>
<style type="text/css">
#wrap {display:table;height:100%}
</style>
<![endif]-->
</head>


<body>
<div id="Wrap">

<?php include("../../header.html");?>


<div id="contentWrap">




<?php include("../../leftSideBar.html");?>


<div id="MainContent">
<!--<div class="breadcrumbs"><a href="http://www.newdawntreatmentcenters.com/">Home</a> > <a href="http://www.newdawntreatmentcenters.com/admissions">Admissions</a> > <a href="http://www.newdawntreatmentcenters.com/admissions/selfassessment/">Self Assessment</a></div>-->

<h1>Self Assessment</h1>


<div style="padding-bottom:3px;">
<h2>Eating Disorders</h2>
<p> <strong>Confused about whether you have an eating disorder?</strong><br />
Take a few moments to fill out our quick self-assessment. <p><a href="http://www.newdawntreatmentcenters.com/eating-disorders/self-assessment/"><img src="../../images/EDAssessment_Btn.png" width="275" height="29" alt="Eating Disorder Assessment Form"></a></p></p>

<hr>
</div>
<div style="padding-bottom:3px;">
<h2>Alcohol &amp; Drugs</h2>
<p><strong>Confused about whether you have a problem with alcohol or drugs?</strong> <br />
Take a few moments to fill out our quick self-assessment. <p><a href="http://www.newdawntreatmentcenters.com/alcohol-drug/self-assessment/"><img src="../../images/CDAssessment_Btn.png" width="313" height="30" alt="Chemical Dependency Assessment Form"></a></p></p>

</div>






<!-- expanding div FORM -->
<script type="text/javascript">

$(document).ready(function(){


$('.show_hide').showHide({
speed: 500, // speed you want the toggle to happen
easing: '', // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
changeText: 1, // if you dont want the button text to change, set this to 0
showImage: '../../images/PlusSign.png',// the button text to show when a div is closed
hideImage: '../../images/MinusSign.png' // the button text to show when a div is open

});

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

</script>






</div><!--End Main Content-->


<?php include("../../rightSideBar.html");?>



</div><!--end Content Wrap-->

</div><!--Wrap-->
<?php include("../../footer.html");?>


</body>
</html>