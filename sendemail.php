<?php
require("/home/ubuntu/webpages/sitemagic/base/PHPMailer/src/PHPMailer.php");
require("/home/ubuntu/webpages/sitemagic/base/PHPMailer/src/SMTP.php");
require("/home/ubuntu/webpages/sitemagic/base/PHPMailer/src/Exception.php");
// Include PHPMailer library files
//require('/home/ubuntu/webpages/sitemagic/base/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer\PHPMailer\PHPMailer();; // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->IsHTML(true);
$mail->Username = "hankeringwinni@gmail.com";
$mail->Password = "SlashASDF!@#$$20";
$mail->SetFrom(@trim(stripslashes($_POST['email']))); 
$mail->Subject = @trim(stripslashes($_POST['subject'])); 
$mail->Body = @trim(stripslashes($_POST['message'])) . " from " . @trim(stripslashes($_POST['email']));
$mail->AddAddress("rayyu@luxurai.com");
/*
$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 
 */
if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }

 die;
