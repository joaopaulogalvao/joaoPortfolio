<?php

// if(isset($_POST['c_name'])){

//     $res['sendstatus'] = 1;
//     $res['message'] = 'Form Submission Succesful';
//     echo json_encode($res);
// }


$recipient="jpgalves1@gmail.com";
$subject="Form to email message";
$c_name=$_POST["c_name"];
$c_email=$_POST["c_email"];
$c_message=$_POST["c_message"];

$mailBody="Name: $c_name\nEmail: $c_email\n\n$c_message";

mail($recipient, $subject, $mailBody, "From: $sender <$c_email>");

// $thankYou="<p>Thank you! Your message has been sent.</p>";



?>
