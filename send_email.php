<?php
require_once 'Swift/lib/swift_required.php';

$transport = Swift_SmtpTransport::newInstance('smtp.live.com', 25)
  ->setUsername('lolteambuildere@hotmail.com')
  ->setPassword('P@$$word123');

$mailer = Swift_Mailer::newInstance($transport);
$message = Swift_Message::newInstance('Wonderful Subject')
  ->setFrom(array('lolteambuilder@hotmail.com' => 'MY NAME'))
  ->setTo(array('eddie81020@gmail.com' => 'YOU'))
  ->setBody('This is the text of the mail send by Swift using SMTP transport.');
//$attachment = Swift_Attachment::newInstance(file_get_contents('path/logo.png'), 'logo.png');  
//$message->attach($attachment);
$numSent = $mailer->send($message);
printf("Sent %d messages\n", $numSent);
?>
