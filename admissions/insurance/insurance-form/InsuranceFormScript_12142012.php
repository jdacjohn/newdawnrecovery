<?php
$to = $_REQUEST['sendto'] ;
$from = $_REQUEST['email'] ;
$Name = $_REQUEST['name'] ;
$headers = "From: $from";
$subject = "New Dawn Treatment Centers Insurance Form";

$fields = array();
$fields{"name"} = "name";
$fields{"relationship"} = "relationship";
$fields{"email"} = "email";
$fields{"phone"} = "phone";
$fields{"ClientName"} = "ClientName";
$fields{"ClientAddress"} = "ClientAddress";
$fields{"ClientAddress2"} = "ClientAddress2";
$fields{"ClientCity"} = "ClientCity";
$fields{"ClientState"} = "ClientState";
$fields{"ClientZip"} = "ClientZip";
$fields{"ClientDOB"} = "ClientDOB";
$fields{"Substance"} = "Substance";
$fields{"Services"} = "Services";
$fields{"priorTreatment"} = "priorTreatment";
$fields{"priorTreatmentType"} = "priorTreatmentType";
$fields{"lastTreatment"} = "lastTreatment";
$fields{"complications"} = "complications";
$fields{"legal"} = "legal";
$fields{"highRisk"} = "highRisk";
$fields{"InsuranceCompany"} = "InsuranceCompany";
$fields{"InsurancePhone"} = "InsurancePhone";
$fields{"InsuranceID"} = "InsuranceID";
$fields{"InsuranceGroup"} = "InsuranceGroup";
$fields{"InsuranceOtherNumbers"} = "InsuranceOtherNumbers";
$fields{"ReferredBy"} = "ReferredBy";

$body = "Someone has submitted an Insurance Verification Form from the New Dawn Treatment Centers website:\n\n"; foreach($fields as $a => $b){ $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

$headers2 = "From: noreply@newdawnts.com";
$subject2 = "New Dawn Treatment Centers Insurance Verification Form";
$autoreply = "Thank you for submitting an Insurance Verification Form. We have received your form via email and will be in touch shortly. ";

if($from == '') {print "You have not entered an Email, please go back and try again";}
else {
if($Name == '') {print "You have not entered a Name, please go back and try again";}
else {
$send = mail($to, $subject, $body, $headers);
$send2 = mail($from, $subject2, $autoreply, $headers2);
if($send)
{header( "Location: http://www.newdawnts.org/admissions/insurance/insurance-form/InsuranceFormThankYou.php" );}
else
{print "We encountered an error sending your mail, please notify info@goddessdesignonline.com"; }
}
}
?>

