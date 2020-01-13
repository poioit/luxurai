<?php
require("./sitemagic/base/swiftmailer/lib/swift_required.php");
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 25))
    ->setUsername('hankeringwinni')->setPassword('Poioit20012009');

$mailer = new Swift_Mailer($transport);

$message = new Swift_Message('Test Subject');
$messgae->setFrom(['hankeringwinni@gmail.com' => 'Sender name']);
$message->addTo('poioit@luxurai.com','receiver name');
$message->setBody('This is a test mail.');

$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 
$to   		= 'poioit@luxurai.com';//replace with your email

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

if( $mailer->send($message))
    echo 1;
else
{
    echo phpversion();
    echo 0;
}
die;
