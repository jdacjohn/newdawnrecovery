<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel='stylesheet' type='text/css' href='http://www.newdawntreatmentcenters.com/css/global.css' />
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Lusitana:400,700'>
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<title>New Dawn Treatment Centers | Eating Disorder Therapies</title>

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

<h1>Eating Disorder Therapies</h1>

<!--Supervised Meals-->

<div class="ExpandingDiv">
<img src="../../images/Therapies-SupervisedMeals.jpg" align="right" class="therapies-img"/>

<h2>Supervised Meals</h2>
We understand that your meal group experience is a critical part of the eating disorder recovery process.   &nbsp;

<div id="slidingDiv6" style="display: none;">We also understand that it is common to fear the meal/snack component of the program. Similar to process group, we explore coping skills that ease any distressing thoughts and feelings that may emerge around eating. We help you overcome fear of any and all foods while providing support in taking food risks and increasing your comfort with eating and sharing a meal experience.
</div>
<a href="#" class="show_hide" rel="#slidingDiv6">Learn More</a>
</div>

<!--Body Image-->

<div class="ExpandingDiv">
<img src="../../images/Therapies_body-image.jpg" align="right" class="therapies-img"/>

<h2>Body Image</h2>
Body image is how we feel about and perceive the aesthetics of our own body, as well as how we imagine others perceive us.  &nbsp;

<div id="slidingDiv8" style="display: none;">In line with self-acceptance, learning to accept and cherish our own unique bodies empowers us towards a life of recovery.  
</div>
<a href="#" class="show_hide" rel="#slidingDiv8">Learn More</a>
</div>


<!--Yoga-->
<a name="SUP"></a>
<div class="ExpandingDiv">
<img src="../../images/Therapies_sup-yoga.jpg" align="right" class="therapies-img" width="150" height="98"/>

<h2>SUP  Yoga (Sausalito) </h2>
The goal of yoga is to unite the mind, body and spirit where one can find harmony and heal themselves.  &nbsp;

<div id="slidingDiv10" style="display: none;">In SUP Yoga, all of the traditional yoga techniques are incorporated exchanging the yoga mat for a stand up paddleboard out on the water. Participants learn to adapt to the motion of the board developing balance and mindfulness.
</div>
<a href="#" class="show_hide" rel="#slidingDiv10" id="SUP_BTN">Learn More</a>
</div>

<!--Holistic Nutrition-->

<div class="ExpandingDiv">
<img src="../../images/Therapies_HolisticNutrition.jpg" align="right" class="therapies-img"/>

<h2>Holistic Nutrition</h2>
The quality of our food can influence our moods, thoughts and actions. <br/> &nbsp;

<div id="slidingDiv12" style="display: none;">Food not only provides the energy needed to function throughout our day but it is responsible for restoring our bodies' daily wear and tear. Incorporating natural and organic foods can increase the nutrients that are essential to produce the natural chemicals that keep our bodies in balance. Using a non-dieting, holistic approach our Registered Dieticians help restore eating behaviors to ensure a safe and healthy normalization of body weight.
</div>
<a href="#" class="show_hide" rel="#slidingDiv12">Learn More</a>
</div>



<!--Organic Foods-->


<div class="ExpandingDiv">
<img src="../../images/Therapies_organicfoods.jpg" align="right"  class="therapies-img" width="150" height="100"/>

<h2>Organic Foods</h2>
Our Eating Disorder Residential program provides a 4 week menu cycle that incorporates a wide variety of dishes prepared by our in-house chef.  &nbsp;

<div id="slidingDiv14" style="display: none;">
Patient meal plans are customized by our Registered Dietitians to meet their unique nutritional needs. The use of fresh organic ingredients and exposure to a wide variety of foods, along with cooking classes and meal outings, provides patients with a foundation from which to draw long after treatment has ended.
</div>
<a href="#" class="show_hide" rel="#slidingDiv14">Learn More</a>
</div>

<br />

</div><!--End Main Content-->
<?php include("../../rightSideBar.html");?>
</div><!--end Content Wrap-->
</div><!--Wrap-->
<?php include("../../footer.html");?>

</body>
</html>