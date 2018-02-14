<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel='stylesheet' type='text/css' href='http://www.newdawntreatmentcenters.com/css/global.css' />
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Lusitana:400,700'>
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<link rel="stylesheet" type="text/css" href="http://www.newdawntreatmentcenters.com/css/form-style.css" />
<link rel="stylesheet" type="text/css" href="http://www.newdawntreatmentcenters.com/css/hbc_core.css" />
<title>New Dawn Treatment Centers</title>

<!--- jQuery and associated scripts. --->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js' type='text/javascript'></script>
<script src='http://www.newdawntreatmentcenters.com/js/showHide.js' type='text/javascript'></script>
<script src='http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js' type='text/javascript'></script>
<!-- jQuery lightBox plugin -->
<script src='http://www.newdawntreatmentcenters.com/js/jquery.lightbox-0.5.js' type='text/javascript'></script>
<link rel='stylesheet' type='text/css' href='http://www.newdawntreatmentcenters.com/css/jquery.lightbox-0.5.css' media='screen' />
<!--- www.newdawntreatmentcenters.com global JS --->
<script src='http://www.newdawntreatmentcenters.com/js/global.js' type='text/javascript'></script>
<script src="http://www.newdawntreatmentcenters.com/js/hbc_core.js" type="text/javascript"></script>

<script type="text/javascript">
window.onload = function() {
		document.getElementById("fancy-results").click();
};
</script>

<style>
 #fancybox-outer {
      background: #CABEB1;
    }
 #fancybox-inner {
 			background: #fff;
    }
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

<h2>Thank You.</h2>	

<a id="fancy-results" href="#assess-results">&nbsp;</a>
<div style="display:none">

<div id="assess-results" style="padding: 5px;">

<section id="wrapper">
<h2>Thank you for submitting the Eating Disorder Assement form.</h2>	
<strong>You indicated the following frequencies in your answers:</strong>
	<ul id="ed_chart">
  	<li title="<?php print($_GET['a']); ?>" class="red">
    	<span class="label">Often</span>
    	<span class="bar"></span>
      <span class="count"></span>
    </li>
  	<li title="<?php print($_GET['b']); ?>" class="blue">
    	<span class="label">Sometimes</span>
    	<span class="bar"></span>
      <span class="count"></span>
    </li>
  	<li title="<?php print($_GET['c']); ?>" class="yellow">
    	<span class="label">Rarely</span>
    	<span class="bar"></span>
      <span class="count"></span>
    </li>
  	<li title="<?php print($_GET['d']); ?>" class="orange">
    	<span class="label">Never</span>
    	<span class="bar"></span>
      <span class="count"></span>
    </li>
  </ul>

If you answered <strong>“often”</strong> or <strong>“sometimes”</strong> to any of these questions, you may have an eating disorder. 
For a professional evaluation by one of our licensed therapists, call us 24/7 to <strong><span style="text-decoration:underline">schedule 
a free confidential assessment</span>. <span style="color:#eba85d">866.969.4300</span></strong>.
</section>
</div> <!--- End DIV assess results. --->

</div> <!--- End blank DIV --->

</div><!--End Main Content-->
<?php include("../../rightSideBar.html");?>
</div><!--end Content Wrap-->
</div><!--Wrap-->
<?php include("../../footer.html");?>

</body>
</html>