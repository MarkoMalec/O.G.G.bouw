<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$formcontent="From: $name \n Message: $message";

$recipient = "goran@oggrenovaties.nl";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Bedankt, je bericht is succesvol verzonden";

?>