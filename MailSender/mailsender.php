<?php
require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', '465' , 'ssl'))
  ->setUsername('your emails')
  ->setPassword('your password')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message($_POST["subject"]))
  ->setFrom(["your email"])
  ->setTo([$_POST["email"]])
  ->setBody($_POST["message"])
  ;

// Send the message
$result = $mailer->send($message);
?>