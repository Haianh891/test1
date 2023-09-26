<?php
$name = $_POST['name'];
$visitor_emal = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New From Contact!';

$email_body = "User Name: $name.\n";
               "User Email: $visitor_emal.\n";
               "Message: $message .\n";

$to = 'apads8888@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-to: $visitor_emal \r\n";


mail($to,$email_body,$headers);

header("Location: index3.html");
?>