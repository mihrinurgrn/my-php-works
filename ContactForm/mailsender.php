<?php
require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', '465' , 'ssl'))
  ->setUsername('your email')
  ->setPassword('your password')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);


//Create a body
$body= "Gönderenin adı soyadı: ".$_POST["firstname"].$_POST["lastname"].

"<br/>Gönderenin mail adresi: ".$_POST["email"].

"<br/>Gönderenin mesajı: ".$_POST["message"];




// Create a message
$message = (new Swift_Message("İletişim formundan mesaj"))
  ->setFrom(["your email"])
  ->setTo(["your email"])
  ->setBody($body, "text/html")
  
  ;

// Send the message
$result = $mailer->send($message);
?>