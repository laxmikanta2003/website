<?php
$name=$_POST['name'];
$visitor=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from = 'http:/laxmikanta2003.github.io/website/';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";
$to ='bapu.laxxmikanta2003@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>
