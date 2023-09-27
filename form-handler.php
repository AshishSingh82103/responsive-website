<?php 
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwesite.com';
$email_subject = "New Form Submission";
$email_body = "User Name: $name.\n".
                 "User Email: $visitor_email.\n". 
                 "User Subject: $subject.\n". 
                 "User Message: $message.\n";
 
$to = 'singhashish82103@gmail.com';
$headers = "From:$email_from \r\n";
$headers .= "Reply-To $vistor_email r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");                 
?>