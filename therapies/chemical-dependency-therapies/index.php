<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel='stylesheet' type='text/css' href='http://www.newdawntreatmentcenters.com/css/global.css' />
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Lusitana:400,700'>
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<title>New Dawn Treatment Centers | Chemical Dependency Therapies</title>

<!--- jQuery and associated scripts. --->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js' type='text/javascript'></script>
<script src='http://www.newdawntreatmentcenters.com/js/showHide.js' type='text/javascript'></script>
<script src='http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js' type='text/javascript'></script>
<!-- jQuery lightBox plugin -->
<script src='http://www.newdawntreatmentcenters.com/js/jquery.lightbox-0.5.js' type='text/javascript'></script>
<link rel='stylesheet' type='text/css' href='http://www.newdawntreatmentcenters.com/css/jquery.lightbox-0.5.css' media='screen' />
<!--- www.newdawntreatmentcenters.com global JS --->
<script src='http://www.newdawntreatmentcenters.com/js/global.js' type='text/javascript'></script>

<!--- Automatically expands DIVS when linked to from header on external pages. --->
<script type="text/javascript">
window.onload = function() {
	var hash = window.location.hash; // would be "#div1" or something
	if(hash != "") {
		var id = hash.substr(1) + "_BTN"; // get rid of #
		document.getElementById(id).click();
  }
};
</script>
<!--- Automatically expands DIVS when linked to from header on same page. --->
<script type="text/javascript">
window.onclick = $(function(){
  $('.info_link').click(function(){
	window.location = $(this).attr('href');
	document.location.reload(true);
  });
});	
</script>

<style>
	#caption { position: absolute; z-index: 500; color: #fff; font-size: 18px; top: 250px; right: 130px; width: 300px;}
</style>

</head>
<!--[if !IE 7]>
<style type="text/css">
#wrap {display:table;height:100%}
</style>
<![endif]-->

<body>
<div id="Wrap">
<?php include("../../header.html");?>
<div id="contentWrap">
<?php include("../../leftSideBar.html");?>

<div id="MainContent">
<!--<div class="breadcrumbs"><a href="http://www.newdawntreatmentcenters.com/index.php">Home</a> > <a href="http://www.newdawntreatmentcenters.com/therapies/">Therapies</a></div>-->

<h1>Chemical Dependency Therapies</h1>

<div class="ExpandingDiv">
<img src="../../images/Therapies_life-coach.jpg" align="right"  class="therapies-img" />

<h2>Life Coach</h2>

Facilitated by Heather Duzan, CPCC, clients develop wisdom around their personal values and self-esteem. 

<div id="slidingDiv15" style="display: none;">
Through the cultivation of awareness and process, program participants explore setting satisfying and realistic goals for a well balanced life style.
</div>
<a href="#" class="show_hide" rel="#slidingDiv15">Learn More</a>
</div>


<div class="ExpandingDiv">
<img src="../../images/Therapies_nutrition.jpg" align="right"  class="therapies-img" />

<h2>Peak Recovery Nutrition and Life Style</h2>

This series addresses the concept of the "addicted brain" and how our nutrition can either adversely or positively affect sobriety. 

<div id="slidingDiv16" style="display: none;">
Nutritional deficiencies that can occur due to the over-consumption of alcohol and drugs have a direct effect on mood, cravings, as well as other health problems. Good nutrition helps recovery participants re-build the body and lessen the experience of withdrawal symptoms. 
</div>
<a href="#" class="show_hide" rel="#slidingDiv16">Learn More</a>
</div>


<div class="ExpandingDiv">
<img src="../../images/Therapies_yoga.jpg" align="right"  class="therapies-img" width="150" height="100" />

<h2>Yoga</h2>

Throughout the many stages of recovery, yoga can serve as a tool to re-establish the body-mind connection that is lost or distorted by addiction. 
<div id="slidingDiv17" style="display: none;">
Yoga provides an outlet to handle the complex emotions triggered by life's stressors through breath, movement and poses that release natural endorphins to the body.  

</div>
<a href="#" class="show_hide" rel="#slidingDiv17">Learn More</a> 
</div>


<div class="ExpandingDiv">
<img src="../../images/Therapies_Thai-Chi.jpg" align="right"  class="therapies-img" height="100" width="150" />

<h2>Tai Chi</h2>
Tai Chi consists of a series of gentle, slow, rhythmic exercises and movements matched with mindful breathing.

<div id="slidingDiv18" style="display: none;">
 Tai Chi creates a quiet, peaceful space for clients to think and prioritize their own health and psychological well-being.
</div>
<a href="#" class="show_hide" rel="#slidingDiv18">Learn More</a>
</div>


<div class="ExpandingDiv">
<img src="../../images/Therapies_mindfulness.jpg" align="right"  class="therapies-img" />

<h2>Mindfulness group</h2>
The practice of Mindfulness focuses on helping participants identify their values, develop the skills they need to live in the present moment, and learn to relate their emotional experiences in a way that allows for increasing participation in valued activities. 

<div id="slidingDiv19" style="display: none;">
In the context of addiction, this might mean becoming aware of triggers that increase craving and choosing to do something else, which in turn weakens the craving response.
</div>
<a href="#" class="show_hide" rel="#slidingDiv19">Learn More</a>
</div>
 
</div><!--End Main Content-->
<? include("../../rightSideBar.html");?>
</div><!--end Content Wrap-->
</div><!--Wrap-->
<?php include("../../footer.html");?>

</body>
</html>