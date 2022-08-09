<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject= $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@yurwebsite.com';

$email_subject = 'New form submission';

$email_body = "user Name: $name. \n".
"user email: $visitor_email. \n".
"Subject: $subject. \n". 
"user message: $message. \n";

$to = 'mussaddiqfaheem@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "$reply-to: $Visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: Contact.html");


?>