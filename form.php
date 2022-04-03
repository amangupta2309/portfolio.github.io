<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from=$email;
$email_subject='New form Submission';
$email_body="User Name: $name.\n".
             "User Email: $email.\n".
             "Subject: $subject.\n".
             "Message: $Message.\n".

$to='amangupta7267699@gmail.com';
$headers="From: $email_from \r\n";
$headers.="Reply-To: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
?>