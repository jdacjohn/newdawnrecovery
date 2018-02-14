<?php
$to = $_REQUEST['sendto'] ;
$from = $_REQUEST['email'] ;
$Name = $_REQUEST['name'] ;
$phone = $_REQUEST['phone-Sidebar'];
$headers = "From: $from";
$subject = "New Dawn Treatment Centers Contact Form";

$fields = array();
$fields{"name"} = "name";
$fields{"message"} = "message";
$fields{"brochure"} = "brochure";
$fields{"email"} = "email";
$fields{"phone-Sidebar"} = "Phone";
$fields{"eatingDisorder"} = "Eating Disorder";
$fields{"chemicalDependency"} = "Chemical Dependency";
$body = "Someone has emailed you from the New Dawn Treatment Centers website:\n\n"; foreach($fields as $a => $b){ $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

$headers2 = "From: noreply@newdawnts.com";
$subject2 = "New Dawn Treatment Centers Contact Form";
$autoreply = "Thank you for connecting with us at New Dawn Treatment Centers. We have received your email and we appreciate your feedback. If you emailed us with a question, we will
return your email within 24 hours during the business week.";

if($from == '' || $from == 'E-Mail') {print "You have not entered an Email, please go back and try again";}
else {
if($Name == '' || $Name == 'Name') {print "You have not entered a Name, please go back and try again";}
else {
$send = mail($to, $subject, $body, $headers);
$send2 = mail($from, $subject2, $autoreply, $headers2);
if($send)
{header( "Location: http://www.newdawntreatmentcenters.com/contact_thankyou.php" );}
else
{print "We encountered an error sending your mail, please notify info@goddessdesignonline.com"; }
}
}
?>

