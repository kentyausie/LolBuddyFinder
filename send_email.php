<?php
require_once 'lib/swift_required.php';
 
// Create the mail transport configuration
$transport = Swift_MailTransport::newInstance('smtp.live.com', 25);
 
// Create the message
$message = Swift_Message::newInstance();
$message->setTo(array(
  "eddie81020@gmail.com" => "Eddie",
  "eddie81020@gmail.com" => "eddie"
));
$message->setSubject("This email is sent using Swift Mailer");
$message->setBody("You're our best client ever.");
$message->setFrom("lolteamfinder@hotmail.com", "ABC");
 
// Send the email
$mailer = Swift_Mailer::newInstance($transport);
$mailer->send($message);
