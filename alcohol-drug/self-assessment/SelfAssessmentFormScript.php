<?php
//$to = $_REQUEST['sendto'] ;
//$from = $_REQUEST['email'] ;
//$Name = $_REQUEST['fname'] ;
//$headers = "From: $from";
//$subject = "New Dawn Treatment Centers - Chemical Dependency Assessment Form";

$fields = array();
//$fields{"fname"} = "First Name";
//$fields{"lname"} = "Last Name";
//$fields{"email"} = "Email Address";
//$fields{"state"} = "State";

//$fields{"phone"} = "Phone";
//$fields{"phonetype"} = "Phone Type";

//$fields{"about"} = "Inquiring About";
//$fields{"age"} = "Age of addict";
//$fields{"ifname"} = "Individual's First Name";
//$fields{"ilname"} = "Individual's Last Name";
//$fields{"istate"} = "Individual's State";

//$fields{"drug1"} = "Primary Drug";
//$fields{"drug1_used"} = "Last Used";
//$fields{"drug1_amount"} = "Amount";
//$fields{"drug1_method"} = "Method";

//$fields{"drug2"} = "Other Drug";
//$fields{"drug2_used"} = "Last Used";
//$fields{"drug2_amount"} = "Amount";
//$fields{"drug2_method"} = "Method";


//$fields{"paymentmethod"} = "Preferred method(s) of payment";

//$fields{"drugHistory"} = "Drug history of the addict";
//$fields{"individualProblems"} = "What problems has addiction caused the addict?";


//$fields{"familyProblems"} = "What problems had addiction caused the family?";
//$fields{"help"} = "What kind of help do you think the addict needs?";
//$fields{"currentmed"} = "Current Medications";
//$fields{"comments"} = "Other Comments";

$fields{"selfassess_01"} = "1. How often have you tried to cut down on your drinking or using?";
$fields{"selfassess_02"} = "2. How often have you been annoyed when confronted about your drinking or using?";
$fields{"selfassess_03"} = "3. How often have you felt guilty because of your drinking or using?";
$fields{"selfassess_04"} = "4. How often have you had something to drink or used first thing in the morning?";
$fields{"selfassess_05"} = "5. How often has your drinking or using caused you problems with family or friends?";
$fields{"selfassess_06"} = "6. How often does your spouse/parents/significant other complain about your using or drinking?";
$fields{"selfassess_07"} = "7. How often have you ever felt sick when you've stopped drinking or using?";
$fields{"selfassess_08"} = "8. How often are you preoccupied with drinking or using, thinking of it while you're doing other things, on the job, etc.?";
$fields{"selfassess_09"} = "9. How often do you wonder if you have a drug or alcohol problem?";

$often = 0;
$sometimes = 0;
$rarely = 0;
$never = 0;

foreach ($fields as $rname => $answer) {
	if ($_POST[$rname] == 'Often') { $often += 1; }
	if ($_POST[$rname] == 'Sometimes') { $sometimes += 1; }
	if ($_POST[$rname] == 'Rarely') { $rarely += 1; }
	if ($_POST[$rname] == 'Never') { $never += 1; }
	
}



//$body = "Someone has submitted the Chemical Dependency Assessment form from the New Dawn Treatment Centers website:\n\n"; foreach($fields as $a => $b){ $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

//$headers2 = "From: noreply@newdawnts.com";
//$subject2 = "New Dawn Treatment Centers - Chemical Dependency Assessment form";
//$autoreply = "Thank you for submitting the Chemical Dependency Assessment form. We have received your form via email and will be in touch shortly. ";

//if($from == '') {print "You have not entered an Email, please go back and try again";}
//else {
//if($Name == '') {print "You have not entered a Name, please go back and try again";}
//else {
//$send = mail($to, $subject, $body, $headers);
//$send2 = mail($from, $subject2, $autoreply, $headers2);
//if($send)
//{header( "Location: http://192.168.1.197/newdawntreatmentcenters.com/testSite/alcoholdrug/selfassessment/SelfAssessmentFormThankYou.php?a=" . $often . "&b=" . $sometimes . "&c=" . $rarely . "&d=" . $never);}
{header( "Location: http://www.newdawntreatmentcenters.com/alcohol-drug/self-assessment/SelfAssessmentFormThankYou.php?a=" . $often . "&b=" . $sometimes . "&c=" . $rarely . "&d=" . $never);}
//else
//{print "We encountered an error sending your mail, please notify info@goddessdesignonline.com"; }
//}
//}
?>

