<?php
$to = $_REQUEST['sendto'] ;
$from = $_REQUEST['email'] ;
$Name = $_REQUEST['name'] ;
$headers = "From: $from";
$subject = "New Dawn Treatment Centers - Schedule a tentative assessment time";

$fields = array();
$fields{"name"} = "name";
$fields{"email"} = "email";
$fields{"phone"} = "phone";

$fields{"DayOfWeek"} = "DayOfWeek";
$fields{"Time"} = "Time";
$fields{"Program"} = "Program";


$body = "Someone has submitted the form to schedule a tentative assessmet time from the New Dawn Treatment Centers website:\n\n"; foreach($fields as $a => $b){ $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

$headers2 = "From: noreply@newdawnts.com";
$subject2 = "New Dawn Treatment Centers Insurance Verification Form";
$autoreply = "Thank you for submitting the form to schedule a tentative assessment time. We have received your form via email and will be in touch shortly. ";

if($from == '') {print "You have not entered an Email, please go back and try again";}
else {
if($Name == '') {print "You have not entered a Name, please go back and try again";}
else {
$send = mail($to, $subject, $body, $headers);
$send2 = mail($from, $subject2, $autoreply, $headers2);
if($send)
{header( "Location: http://www.newdawnts.org/admissions/schedule-assessment/ScheduleAssessmentFormThankYou.php" );}
else
{print "We encountered an error sending your mail, please notify info@goddessdesignonline.com"; }
}
}
?>

