<?php
//$to = $_REQUEST['sendto'] ;
$to = $_REQUEST['john@jdacsolutions.com'] ;
$from = $_REQUEST['email'] ;
$Name = $_REQUEST['fname'] ;
$headers = "From: $from";
$subject = "New Dawn Treatment Centers - Eating Disorder Assessment Form";

$fields = array();
$fields{"fname"} = "First Name";
$fields{"lname"} = "Last Name";
$fields{"email"} = "Email";
$fields{"state"} = "State";
$fields{"phone"} = "Phone";
$fields{"phonetype"} = "Phone Type";


$fields{"about"} = "Inquiring About";
$fields{"age"} = "Age of Individual";
$fields{"ifname"} = "Individual's First Name";
$fields{"ilname"} = "Individual's Last Name";
$fields{"icity"} = "Individual's City";
$fields{"istate"} = "Individual's State";

$fields{"DescribeEatingD"} = "Briefly describe the eating disorder history of the Individual";
$fields{"problems"} = "What problems has the eating disorder caused the family?";
$fields{"help"} = "What kind of help do you think the Individual needs?";

$fields{"currentmed"} = "Current Medications";
$fields{"priortreatment"} = "Any prior treatment? If so, where and what level(s) of care?";
$fields{"diagnosis"} = "Any mental health diagnosis (ED, drug addiction, or otherwise)?<br />If yes, when was the diagnosis made?";

$fields{"secretEating"} = "Do you ever eat in secret?";
$fields{"upsetEating"} = "Do you eat when you are upset?";
$fields{"fullEating"} = "Can you tell when you are full?";

$fields{"reference"} = "How did you hear about New Dawn Recovery Centers?";
$fields{"comments"} = "Other Comments";
$fields{"paymentmethod"} = "Preferred method(s) of payment";

$fields{"selfassess_01"} = "1. Am terrified about being overweight";
$fields{"selfassess_02"} = "2. Avoid eating when I am hungry";
$fields{"selfassess_03"} = "3. Find myself preoccupied with food";
$fields{"selfassess_04"} = "4. Have gone on eating binges where I feel that I may not be able to stop";
$fields{"selfassess_05"} = "5. Cut my food into small pieces";
$fields{"selfassess_06"} = "6. Aware of the calorie content of foods that I eat";
$fields{"selfassess_07"} = "7. Particularly avoid foods with high carbohydrate content";
$fields{"selfassess_08"} = "8. Feel that others would prefer if I ate more";
$fields{"selfassess_09"} = "9. Vomit after I have eaten";
$fields{"selfassess_10"} = "10. Feel extremely guilty after eating";
$fields{"selfassess_11"} = "11. Am preoccupied with a desire to be thinner";
$fields{"selfassess_12"} = "12. Am preoccupied with the thought of having fat on my body";
$fields{"selfassess_13"} = "13. Take longer than others to eat my meals";
$fields{"selfassess_14"} = "14. Avoid foods with sugar in them";
$fields{"selfassess_15"} = "15. Feel that food controls my life";
$fields{"selfassess_16"} = "16. Display self control around food";
$fields{"selfassess_17"} = "17. Feel that others pressure me to eat";
$fields{"selfassess_18"} = "18. Give too much time and thought to food";
$fields{"selfassess_19"} = "19. Feel uncomfortable after eating sweets";
$fields{"selfassess_20"} = "20. Engage in dieting behavior";
$fields{"selfassess_21"} = "21. Like my stomach to be empty";
$fields{"selfassess_22"} = "22. Have the impulse to vomit after meals";





$body = "Someone has submitted the Eating Disorder Assessment Form from the New Dawn Treatment Centers website:\n\n"; foreach($fields as $a => $b){ $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

$headers2 = "From: noreply@newdawnts.com";
$subject2 = "New Dawn Treatment Centers - Eating Disorder Assessment Form";
$autoreply = "Thank you for submitting the Eating Disorder Assessment Form. We have received your form via email and will be in touch shortly. ";

if($from == '') {print "You have not entered an Email, please go back and try again";}
else {
if($Name == '') {print "You have not entered a Name, please go back and try again";}
else {
$send = mail($to, $subject, $body, $headers);
$send2 = mail($from, $subject2, $autoreply, $headers2);
if($send)
{header( "Location: http://www.newdawnts.org/eatingdisorders/selfassessment/SelfAssessmentFormThankYou.php" );}
else
{print "We encountered an error sending your mail, please notify info@goddessdesignonline.com"; }
}
}
?>

