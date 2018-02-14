<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel='stylesheet' type='text/css' href='http://www.newdawntreatmentcenters.com/css/global.css' />
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Lusitana:400,700'>
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<title>New Dawn Treatment Centers | Admissions</title>

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
	#caption { position: absolute; z-index: 500; color: #fff; font-size: 18px; top: 250px; right: 130px; width: 300px;}
</style>

<!--- Causes an expanding DIV to expand when linked from an external source. --->
<script type="text/javascript">
window.onload = function() {
	var hash = window.location.hash; // would be "#div1" or something
  if(hash != "") {
  	var id = hash.substr(1) + "_BTN"; // get rid of #
		document.getElementById(id).click();
  }
};
</script>
<!--- Causes an expanding DIV to expand when linked to from the same page. --->
<script type="text/javascript">
window.onclick = $(function(){
  $('.info_link').click(function(){
	window.location = $(this).attr('href');
	document.location.reload(true);
  });
});	
</script>
</head>

<!--[if !IE 7]>
<style type="text/css">
#wrap {display:table;height:100%}
</style>
<![endif]-->

<body>
<div id="Wrap">
<?php include("../header.html");?>
<div id="contentWrap">
<?php include("../leftSideBar.html");?>

<div id="MainContent">
<!--<div class="breadcrumbs"><a href="http://www.newdawntreatmentcenters.com/">Home</a> > <a href="http://www.newdawntreatmentcenters.com/admissions">Admissions</a></div>-->

<h1>Admissions</h1>

<h2>Comprehensive Psychological Evaluation and Assessment for all Eating Disordered clients</h2>
<p>Either the Clinical Director or one of our Primary Therapists will perform the psychological evaluation upon your arrival. From there, the clinical recommendations will be made and your treatment options will be discussed. We have professional relationships with the top inpatient programs on the West Coast, and a referral can be made that best fits the needs of our prospective patients when a higher level of care such as hospitalization is appropriate. 
<br /><br />
If you are not sure whether or not you need our help, or what level of care is most appropriate, call us to receive a free, confidential assessment either in person or over the phone – whichever is more convenient for you. 
</p>



<h2>Insurance Benefit Verification</h2>

<p>Additionally, our intake specialists will discuss all relevant fees and ancillary charges with you prior to admission, so that you are completely aware of your potential financial obligation. 
</p>
<p>Whether you have a question about a referral or have additional questions about our programs, we are always available to help. If you would like to schedule a free assessment, please call our toll free admissions and information line at (866) 969-4300 to speak with one of our intake specialists. We will do our best to schedule your intake appointment within 24 to 48 hours of your initial request for treatment.
</p>

<!--<div class="ExpandingDiv">

<h2>Free Initial Assessment</h2>
We provide the initial assessment at no cost, so that you can rely on our treatment counseling. 

<a href="#" class="show_hide" rel="#slidingDiv2"><img src="../images/PlusSign.png" width="113" height="33" alt="Plus Sign"></a>

<div id="slidingDiv2" style="display: none;"><p>
We provide the initial assessment at no cost, so that you can rely on our treatment counseling 
</p>
</div>
</div>-->


<div class="ExpandingDiv">
<a name="Intake"></a>
<h2>Intake Process</h2>
We understand how difficult it can be to finally accept that formal treatment is a necessary stepping stone on the path to recovery.   &nbsp;

<div id="slidingDiv" style="display: none;">In an effort to reduce waiting times and respond as quickly as possible to every person's urgent need be accepted into one of our programs, most Intake appointments, Psychiatric Evaluations and Medical Clearances can be scheduled within 48 hours of the initial request for urgent admission.  
</div>
<a href="#" class="show_hide" rel="#slidingDiv" id="Intake_BTN">Learn More</a>
</div>


<div class="ExpandingDiv">
<a name="fly"></a>

<h2>Fly on us!</h2>
We understand that the decision to enter a treatment program can be filled with much anxiety and apprehension, and we want to make that process as painless as possible.  &nbsp;

<div id="slidingDiv3" style="display: none;">Therefore, if you are flying for your recovery, New Dawn will pay your airfare! Simply complete the Residential Program (30 days) and upon discharge we will either credit your account or, if you are paid in full, write you a check for the full cost of you airfare (up to $500). We will also provide free airport transfers to and from the residential facility. 
</div>
<a href="#" class="show_hide" rel="#slidingDiv3" id="fly_BTN">Learn More</a>
</div>

</div><!--End Main Content-->
<?php include("../rightSideBar.html");?>
</div><!--end Content Wrap-->
</div><!--Wrap-->
<?php include("../footer.html");?>

</body>
</html>