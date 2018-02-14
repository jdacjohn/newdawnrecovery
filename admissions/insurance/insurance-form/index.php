<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel='stylesheet' type='text/css' href='http://www.newdawntreatmentcenters.com/css/global.css' />
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Lusitana:400,700'>
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<link rel="stylesheet" type="text/css" href="http://www.newdawntreatmentcenters.com/css/form-style.css" />
<title>New Dawn Treatment Centers | Insurance Verification Form</title>

<!--- jQuery and associated scripts. --->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js' type='text/javascript'></script>
<script src='http://www.newdawntreatmentcenters.com/js/showHide.js' type='text/javascript'></script>
<script src='http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js' type='text/javascript'></script>
<!-- jQuery lightBox plugin -->
<script src='http://www.newdawntreatmentcenters.com/js/jquery.lightbox-0.5.js' type='text/javascript'></script>
<link rel='stylesheet' type='text/css' href='http://www.newdawntreatmentcenters.com/css/jquery.lightbox-0.5.css' media='screen' />
<!--- www.newdawntreatmentcenters.com global JS --->
<script src='http://www.newdawntreatmentcenters.com/js/global.js' type='text/javascript'></script>
<!--Toggle Javascript-->
<script src="http://www.newdawntreatmentcenters.com/js/toggle.js" type="text/javascript"></script>

</head>

<!--[if !IE 7]>
<style type="text/css">
#wrap {display:table;height:100%}
</style>
<![endif]-->

<body>
<div id="Wrap">
<?php include("../../../header.html");?>
<div id="contentWrap">
<?php include("../../../leftSideBar.html");?>

<div id="MainContent">
<!--<div class="breadcrumbs"><a href="http://www.newdawntreatmentcenters.com/">Home</a> > <a href="http://www.newdawntreatmentcenters.com/insuranceform/">Insurance Form</a></div>-->

<h1>Insurance Verification Form</h1>


<h2>General Information </h2>

<form action="InsuranceFormScript.php" method="post" enctype="application/x-www-form-urlencoded" name="Insurance Form" target="_new" class="InsuranceForm" id="InsuranceForm" title="InsuranceForm" lang="en">

<input type="hidden" name="sendto" value="info@newdawnts.com">
<input type="hidden" name="subject" value="Insurance Verification Form">

<div class="formRow">
<span class="formTitle"><label>Name</label></span>
<span class="formField"><input name="name" id="name" type="text" class="formfields" size="30" /></span>
</div>
<div class="formRow">
<span class="formTitle"><label>Relationship to Client</label></span>
<span class="formField"><input name="relationship" id="relationship" type="text" class="formfields" size="30" /></span>
</div>
<div class="formRow">
<span class="formTitle"><label>Email</label></span>
<span class="formField"><input name="email" id="email" type="text" class="formfields" size="30" /></span>
</div>

<div class="formRow">
<span class="formTitle"><label>Phone</label></span>
<span class="formField"><input name="phone" id="phone1" type="text" class="formfields" size="30" /></span>
</div>


<div class="clear"></div>

<h2>Prospective Client Information</h2>

<div class="formRow">
<span class="formTitle"><label>Name</label></span>
<span class="formField"><input name="ClientName" id="ClientName" type="text" class="formfields" size="30" /></span>
</div>
<div class="formRow">
<span class="formTitle"><label>Address 1</label></span>
<span class="formField"><input name="ClientAddress" id="ClientAddress" type="text" class="formfields" size="30" /></span>
</div>
<div class="formRow">
<span class="formTitle"><label>Address 2</label></span>
<span class="formField"><input name="ClientAddress2" id="ClientAddress2" type="text" class="formfields" size="30" /></span>
</div>
<div class="formRow">
<span class="formTitle"><label>City</label></span>
<span class="formField"><input name="ClientCity" id="ClientCity" type="text" class="formfields" size="30" /></span>
</div>
<div class="formRow">
<span class="formTitle"><label>State</label></span>
<span class="formField">
<select name="ClientState" id="ClientState" class="formfields">
<option value="" selected="selected">Select a State</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District Of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
</select></span>
</div>
<div class="formRow">
<span class="formTitle"><label>Zip</label></span>
<span class="formField"><input name="ClientZip" id="ClientZip" type="text" class="formfields" size="30" /></span>
</div>
<div class="formRow">
<span class="formTitle"><label>Date of Birth</label></span>
<span class="formField"><input name="ClientDOB" id="ClientDOB" type="text" class="formfields" size="30" /></span>
</div>

<div class="formRow">
<span class="formTitle"><label>Substance Being Abused</label></span>
<span class="formField"><textarea class="formfields" id="Substance" style="height:100px; width:230px; margin-bottom: 20px;" name="Substance"></textarea></span>
</div>

<div class="formRow">
<span class="formTitle"><label>Services Needed</label></span>
<span class="formField"><select name="Services" id="Services" value="" class="formfields">
	<option value="" selected="selected">Select a Service</option>
<option value="Intervention">Intervention</option>
<option value="Detox">Detox</option>
<option value="Residential">Residential</option>
<option value="Outpatient">Outpatient</option>
<option value="General Recovery">General Recovery</option>
<option value="Eating Disorder">Eating Disorder</option>
</select></span>
</div>

<div class="formRow">
<span class="formTitle"><label>Prior Treatment</label></span>
<span class="formField"><select name="priorTreatment" id="priorTreatment" value="" class="formfields">
	<option value="" selected="selected"></option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select></span>
</div>
<div class="formRow">
<span class="formTitle"><label>Prior Treatment Type</label></span>
<span class="formField"><select name="priorTreatmentType" id="priorTreatmentType" value="" class="formfields">
		<option value="" selected="selected"></option>
<option value="Inpatient">Inpatient</option>
<option value="Outpatient">Outpatient</option>
</select></span>
</div>

<div class="formRow">
<span class="formTitle"><label>Date of Last Treatment</label></span>
<span class="formField"><input name="lastTreatment" id="lastTreatment" type="text" class="formfields" size="30" /></span>
</div>
<div class="formRow">
<span class="formTitle"><label>Medical Complications</label></span>
<span class="formField"><textarea id="complications" name="complications" class="formfields" style="height:100px;width:230px" ></textarea></span>
</div>
<div class="formRow">
<span class="formTitle"><label>Legal Issues</label></span>
<span class="formField"><textarea id="legal" name="legal" class="formfields" style="height:100px;width:230px" ></textarea></span>
</div>
<div class="formRow">
<span class="formTitle"><label>High Risk Behavior/Other Issues</label></span>
<span class="formField"><textarea id="highRisk" name="highRisk" class="formfields" style="height:100px;width:230px" ></textarea></span>
</div>

<div class="clear"></div>

<h2>Type of Treatment Required</h2>

<div class="formRow">
<label>Which type of treatment are you interested in?</label>
<p><input name="EatingDisorderTreatment" id="EatingDisorderTreatment"  type="checkbox" class="formfields" size="30" onclick="javascript:toggle('eating');" />&nbsp;&nbsp;<label id="EatingDisorderTreatment">Eating Disorder</label>&nbsp;&nbsp;
<input name="ChemicalDependencyTreatment" id="ChemicalDependencyTreatment"  type="checkbox" class="formfields" size="30" onclick="javascript:toggle('cdFields');" />&nbsp;&nbsp;<label id="ChemicalDependencyTreatment">Chemical Dependency</label></p>
</div>

<div id="eating" style="display: none">
<h2>Eating Disorder Questions</h2>
<table>
	<tr class="formRow">
		<td class="field_label" valign="top" colspan="2" style="text-align: left !important;">Briefly describe the eating disorder history of the Individual:</td>
	</tr>
	<tr class="formRow">
		<td colspan="2">
			<textarea class="formfields"  name="DescribeEatingD" cols="35" rows="3" id="DescribeEatingD"></textarea>
  </td>
	</tr>
    <!-- -->
	<tr class="formRow">
		<td class="field_label" valign="top" colspan="2" style="text-align: left !important;">What problems has the eating disorder caused the family?</td>
	</tr>
	<tr class="formRow">
		<td colspan="2">
			<textarea class="formfields"  name="problems" cols="35" rows="3" id="problems"></textarea>
  	</td>
	</tr>
    <!-- -->
	<tr class="formRow">
		<td class="field_label" valign="top" colspan="2" style="text-align: left !important;">What kind of help do you think the Individual needs?</td>
	</tr>
	<tr class="formRow">
		<td colspan="2">
			<textarea class="formfields"  name="help" cols="35" rows="3" id="help"></textarea>
    </td>
	</tr>
    <!-- -->
	<tr class="formRow">
		<td class="field_label">Current Medications:</td>
		<td class="field">
			<input class="formfields" id="currentmed"  name="currentmed" type="text" size="35">
    </td>
	</tr>
    <!-- -->
	<tr class="formRow">
		<td class="field_label" valign="top" colspan="2" style="text-align: left !important;">Any prior treatment? If so, where and what level(s) of care?</td>
	</tr>
	<tr class="formRow">
		<td colspan="2">
			<textarea class="formfields"  name="priortreatment" cols="35" rows="3" id="priortreatment"></textarea>
    </td>
	</tr>
    <!-- -->
	<tr class="formRow">
		<td class="field_label" valign="top" colspan="2" style="text-align: left !important;">Any mental health diagnosis (ED, drug addiction, or otherwise)?<br />If yes, when was the diagnosis made?</td>
	</tr>
	<tr class="formRow">
		<td colspan="2">
			<textarea class="formfields"  name="diagnosis" cols="35" rows="3" id="diagnosis"></textarea>
    </td>
	</tr>
	
	<!-- -->
	<tr class="formRow">
		<td class="field_label" valign="top" colspan="2" style="text-align: left !important;">Do you ever eat in secret?</td>
	</tr>
	<tr class="formRow">
		<td colspan="2">
			<textarea class="formfields"  name="secretEating" cols="35" rows="3" id="secretEating"></textarea>
    </td>
	</tr>
    <!-- -->

	<!-- -->
	<tr class="formRow">
		<td class="field_label" valign="top" colspan="2" style="text-align: left !important;">Do you eat when you are upset?</td>
	</tr>
	<tr class="formRow">
		<td colspan="2">
			<textarea class="formfields"  name="upsetEating" cols="35" rows="3" id="upsetEating"></textarea>
    </td>
	</tr>
    <!-- -->

	<tr class="formRow">
		<td class="field_label" valign="top" colspan="2" style="text-align: left !important;">Can you tell when you are full?</td>
	</tr>
	<tr class="formRow">
		<td colspan="2">
			<textarea class="formfields"  name="fullEating" cols="35" rows="3" id="fullEating"></textarea>
    </td>
	</tr>
    <!-- -->
	
	<tr class="formRow">
		<td class="field_label" valign="top" colspan="2" style="text-align: left !important;">How did you hear about New Dawn Recovery Centers?</td>
	</tr>
	<tr class="formRow">
		<td colspan="2">
			<textarea class="formfields"  name="reference" cols="35" rows="3" id="reference"></textarea>
    </td>
	</tr>
		
  <!-- -->
  
	<tr class="formRow">
		<td class="field_label" valign="top" colspan="2" style="text-align: left !important;">Other Comments:</td>
	</tr>
	<tr class="formRow">
		<td colspan="2">
			<textarea class="formfields"  name="comments" cols="35" rows="3" id="comments"></textarea>
    </td>
	</tr>
</table>
</div> <!--- End Eating Disorder Questions --->

<div id="cdFields" style="display:none">
<h2>Chemical Dependency Questions</h2>
<table>
	<tr class="formRow">
		<td class="field_label">Primary Drug:</td>
		<td class="field">
			<input class="formfields"  name="drug1" type="text" size="35">
    </td>
	</tr>
  <tr class="formRow">
   	<td class="field_label" style="background: #f7fbff !important;">Last Used:</td>
		<td class="field">
			<input class="formfields"  name="drug1_used" type="text" size="35">
    </td>
	</tr>
  <tr class="formRow">
   	<td class="field_label" style="background: #f7fbff !important;">Amount:</td>
		<td class="field">
			<input class="formfields"  name="drug1_amount" type="text" size="35">
    </td>
	</tr>
  <tr class="formRow">
  	<td class="field_label" style="background: #f7fbff !important;">Method:</td>
		<td class="field">
			<select class="formfields" name="drug1_method" id="drug1_method">
				<option value="default" selected="selected">-Select One-</option>
				<option value="Orally">Orally</option>
				<option value="Smoked">Smoked</option>
				<option value="Snorted">Snorted</option>
				<option value="Intravenous">Intravenous</option>
				<option value="Other">Other/Unsure</option>
      </select>
    </td>
	</tr>

	<tr class="formRow">
		<td class="field_label">Other Drug:</td>
		<td class="field">
			<input class="formfields"  name="drug2" type="text" size="35">
    </td>
	</tr>
	<tr class="formRow">
		<td class="field_label" style="background: #f7fbff !important;">Last Used:</td>
		<td class="field">
			<input class="formfields"  name="drug2_used" type="text" size="35">
    </td>
	</tr>
	<tr class="formRow">
		<td class="field_label" style="background: #f7fbff !important;">Amount:</td>
		<td class="field">
			<input class="formfields"  name="drug2_amount" type="text" size="35">
    </td>
	</tr>
	<tr class="formRow">
		<td class="field_label" style="background: #f7fbff !important;">Method:</td>
		<td class="field">
			<select class="formfields" name="drug2_method" id="drug2_method">
				<option value="default" selected="selected">-Select One-</option>
				<option value="Orally">Orally</option>
				<option value="Smoked">Smoked</option>
				<option value="Snorted">Snorted</option>
				<option value="Intravenous">Intravenous</option>
				<option value="Other">Other/Unsure</option>
      </select>
    </td>
	</tr>

	<tr class="formRow">
		<td class="field_label" valign="top" colspan="2" style="text-align: left !important;">Briefly describe the drug history of the addict:</td>
	</tr>
	<tr class="formRow">
		<td colspan="2">
		 <textarea class="formfields" name="drugHistory" cols="35" rows="3" id="desc1"></textarea>
  	</td>
	</tr>
  <!-- -->
	<tr class="formRow">
		<td class="field_label" valign="top" colspan="2" style="text-align: left !important;">What problems has addiction caused the addict?</td>
	</tr>
	<tr class="formRow">
		<td colspan="2">
			<textarea class="formfields" name="individualProblems" cols="35" rows="3" id="desc2"></textarea>
    </td>
	</tr>
  <!-- -->
	<tr class="formRow">
		<td class="field_label" valign="top" colspan="2" style="text-align: left !important;">What problems has addiction caused the family?</td>
	</tr>
	<tr class="formRow">
		<td colspan="2">
			 <textarea class="formfields" name="familyProblems" cols="35" rows="3" id="desc3"></textarea>
    </td>
	</tr>
  <!-- -->
	
  <tr class="formRow">
		<td class="field_label" valign="top" colspan="2" style="text-align: left !important;">What kind of help do you think the addict needs? </td>
	</tr>
	<tr class="formRow">
		<td colspan="2">
	 		<textarea class="formfields" name="cd_help" cols="35" rows="3" id="desc4"></textarea>
    </td>
	</tr>

  <!-- -->
	<tr class="formRow">
		<td class="field_label">Current Medications:</td>
		<td class="field">
			<input class="formfields"  name="cd_currentmed" type="text" size="35">
    </td>
	</tr>

	<tr class="formRow">
		<td class="field_label">Other Comments:</td>
		<td class="field">
	 		<textarea class="formfields" name="cd_comments" cols="35" rows="3" id="comments"></textarea>
    </td>
	</tr>
</table>
<!--End Chemical Dependency Questions-->
</div>

<h2>Preferred method(s) of Payment</h2>
<table>
	<tr class="formRow">
		<td class="field_label" valign="top" colspan="2" style="text-align: left !important;">(Select one or more)</td>
	</tr>
	<tr class="formRow">
		<td class="field_label" valign="top" >&nbsp;</td>
		<td class="field">
			<input class="formfields"   type="checkbox" name="paymentmethod1" id="paymentmethod1" value="Private insurance" onclick="javascript:toggle('insFields');" /> Private insurance<br />
			<input class="formfields"   type="checkbox" name="paymentmethod2" id="paymentmethod2" value="Self-pay" /> Self-pay<br />
			<input class="formfields"   type="checkbox" name="paymentmethod3" id="paymentmethod3" value="Need financing" /> Need financing
    </td>
	</tr>
  <!-- END PAYMENT QUESTIONS -->
</table>

<div id="insFields" style="display:none">
<h2>Client Insurance Information</h2>

<div class="formRow">
<span class="formTitle"><label>Insurance Company</label></span>
<span class="formField"><input name="InsuranceCompany" id="InsuranceCompany" type="text" class="formfields" size="30" /></span>
</div>
<div class="formRow">
<span class="formTitle"><label>Benefit Phone #:</label></span>
<span class="formField"><input name="InsurancePhone" id="InsurancePhone" type="text" class="formfields" size="30" /></span>
</div>
<div class="formRow">
<span class="formTitle"><label>Insurance ID#</label></span>
<span class="formField"><input name="InsuranceID" id="InsuranceID" type="text" class="formfields" size="30" /></span>
</div>
<div class="formRow">
<span class="formTitle"><label>Group #:</label></span>
<span class="formField"><input name="InsuranceGroup" id="InsuranceGroup" type="text" class="formfields" size="30" /></span>
</div>
<div class="formRow">
<span class="formTitle"><label>Any Other Numbers on Cards</label></span>
<span class="formField"><input name="InsuranceOtherNumbers" id="InsuranceOtherNumbers" type="text" class="formfields" size="30" /></span>
</div>
<div class="formRow">
<span class="formTitle"><label>How Did You Hear About Us?</label></span>
<span class="formField">
	<select name="ReferredBy" id="ReferredBy" value="" class="formfields">
		<option value="" selected="selected"></option>
		<option value="SearchEngine">Search Engine</option>
		<option value="Friend">Friend</option>
		<option value="Doctor">Doctor</option>
		<option value="Other">Other</option>
	</select></span>
</div>
</div>


<div style="margin:auto; width:120px;">
<input type="image" src="http://www.newdawntreatmentcenters.com/images/Submit_Btn.png" width="116" height="31">
</div>

</form>
<!-- FORM CONTENT -->

</div><!--End Main Content-->
<?php include("../../../rightSideBar.html");?>
</div><!--end Content Wrap-->
</div><!--Wrap-->
<?php include("../../../footer.html");?>

</body>
</html>