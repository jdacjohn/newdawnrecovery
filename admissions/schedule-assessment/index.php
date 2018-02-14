<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel='stylesheet' type='text/css' href='http://www.newdawntreatmentcenters.com/css/global.css' />
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Lusitana:400,700'>
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<link rel="stylesheet" type="text/css" href="http://www.newdawntreatmentcenters.com/css/form-style.css" />
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

<h2>Schedule a Tentative Assessment</h2>
<p>If you would like to schedule a tentative assessment time, please fill out the form below. We will be in contact with you shortly.</p>


<form action="Schedule-AssessmentFormScript.php" method="post" enctype="application/x-www-form-urlencoded" name="ScheduleAssessment" target="_new" class="ScheduleAssessment" id="ScheduleAssessment" title="ScheduleAssessment" lang="en">

<input name="sendto" type="hidden" value="info@newdawnts.com">

<input type="hidden" name="subject" value="Schedule Assessment Form">
<h3 class="formTitle">Contact Info</h3>
<div class="formRow">
<span class="formTitle"><label>Name</label></span>
<span class="formField"><input name="name" id="name" type="text" class="formfields" size="30" /></span>
</div>
<div class="formRow">
<span class="formTitle"><label>Contact Email</label></span>
<span class="formField"><input name="email" id="email" type="text" class="formfields" size="30" /></span>
</div>

<div class="formRow">
<span class="formTitle"><label>Contact Phone</label></span>
<span class="formField"><input name="phone" id="phone1" type="text" class="formfields" size="30" /></span>
</div>

<h3 class="formTitle">Possible Time</h3>

<div class="formRow">
<span class="formTitle"><label>Day of the Week</label></span>
<span class="formField"><select name="DayOfWeek" id="DayOfWeek" value="" class="formfields" style="width:130px;">
<option value="" selected="selected"></option>
<option value="Monday">Monday</option>
<option value="Tuesday">Tuesday</option>
<option value="Wednesday">Wednesday</option>
<option value="Thursday">Thursday</option>
<option value="Friday">Friday</option>
</select></span>
</div>
<div class="formRow">
<span class="formTitle"><label>Time</label></span>
<span class="formField"><select name="Time" id="Time" value="" class="formfields" style="width:130px;">
<option value="" selected="selected"></option>
<option value="9">9:00am</option>
<option value="9">9:30am</option>
<option value="9">10:00am</option>
<option value="9">10:30am</option>
<option value="9">11:00am</option>
<option value="9">11:30am</option>
<option value="9">12:00pm</option>
<option value="9">12:30pm</option>
<option value="9">1:00pm</option>
<option value="9">1:30pm</option>
<option value="9">2:00pm</option>
<option value="9">2:30pm</option>
<option value="9">3:00pm</option>
<option value="9">3:30pm</option>
<option value="9">4:00pm</option>
</select></span>
</div>
<div class="formRow">
<span class="formTitle"><label>Program</label></span>
<span class="formField"><select name="Program" id="Program" value="" class="formfields" style="width:130px;">
<option value="" selected="selected"></option>
<option value="Adult CD">Adult CD</option>
<option value="Adolescent CD">Adolescent CD</option>
<option value="Sacramento ED">Sacramento ED</option>
<option value="Bay Area ED">Bay Area ED</option>
</select></span>
</div>
<span style="font-size:12px; margin-left:20px;"><strong>PLEASE NOTE:</strong> These times are tentative. We will call you to establish an appointment.</span>
<br />

<p align="center"><input type="image" src="http://www.newdawntreatmentcenters.com/images/Submit_Btn.png" width="116" height="31"></p>

</form>

</div><!--End Main Content-->
<?php include("../../rightSideBar.html");?>
</div><!--end Content Wrap-->
</div><!--Wrap-->
<?php include("../../footer.html");?>

</body>
</html>