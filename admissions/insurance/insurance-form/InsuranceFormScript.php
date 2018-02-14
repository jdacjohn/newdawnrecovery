<?php
$to = $_POST['sendto'] ;
$from = $_POST['email'] ;
$Name = $_POST['name'] ;
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
$fields{"EatingDisorderTreatment"} = "EatingDisorderTreatment";
$fields{"ChemicalDependenceTreatment"} = "ChemicalDependencyTreatment";
// Eating Disorder Fields
$fields{"DescribeEatingD"} = "DescribeEatingD";
$fields{"problems"} = "problems";
$fields{"help"} = "help";
$fields{"currentmed"} = "currentmed";
$fields{"priorTreatment"} = "priorTreatment";
$fields{"diagnosis"} = "diagnosis";
$fields{"secretEating"} = "secretEating";
$fields{"upsetEating"} = "upsetEating";
$fields{"fullEating"} = "fullEating";
$fields{"reference"} = "reference";
$fields{"comments"} = "comments";
// Chemical Dependency Fields
$fields{"drug1"} = "drug1";
$fields{"drug2"} = "drug2";
$fields{"drug1_used"} = "drug1_used";
$fields{"drug2_used"} = "drug2_used";
$fields{"drug1_amount"} = "drug1_amount";
$fields{"drug2_amount"} = "drug2_amount";
$fields{"drug1_method"} = "drug1_method";
$fields{"drug2_method"} = "drug2_method";
$fields{"drugHistory"} = "drugHistory";
$fields{"individualProblems"} = "individualProblems";
$fields{"familyProblems"} = "familyProblems";
$fields{"cd_help"} = "cd_help";
$fields{"cd_currentmed"} = "cd_currentmed";
$fields{"cd_comments"} = "cd_comments";
// Payment Info Fields
$fields{"paymentmethod1"} = "Private Insurance";
$fields{"paymentmethod2"} = "Self-Pay";
$fields{"paymentmethod3"} = "Need Financing";
$fields{"InsuranceCompany"} = "InsuranceCompany";
$fields{"InsurancePhone"} = "InsurancePhone";
$fields{"InsuranceID"} = "InsuranceID";
$fields{"InsuranceGroup"} = "InsuranceGroup";
$fields{"InsuranceOtherNumbers"} = "InsuranceOtherNumbers";
$fields{"ReferredBy"} = "ReferredBy";

$body = "Someone has submitted an Insurance Verification Form from the New Dawn Treatment Centers website:\n\n"; foreach($fields as $a => $b){ $body .= sprintf("%20s: %s\n",$b,$_POST[$a]); }

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
{header( "Location: http://www.newdawntreatmentcenters.com/admissions/insurance/insurance-form/InsuranceFormThankYou.php" );}
else
{print "We encountered an error sending your mail, please notify info@goddessdesignonline.com"; }
}
}
?>

