<?php
require_once 'Swift/lib/swift_required.php';

 $transport = Swift_SmtpTransport::newInstance('smtp.sendgrid.net', 25);
        
         $username = 'yoursendgridusername';
         $password = 'yourpassword';
 // This is your From email address
 $from = array('lolteambuilder@hotmail.com' => 'Name To Appear');
 // Email recipients
 $to = array(
       'eddie81020@gmail.com'=>'Destination 1 Name',
       'eddie81020@gmail.com'=>'Destination 2 Name'
 );
 $text = "Hi!\nHow are you?\n";
 $html = "<html>
       <head></head>
       <body>
           <p>Hi!<br>
               How are you?<br>
           </p>
       </body>
       </html>";
 
        $transport->setUsername($username);
        $transport->setPassword($password);
        $swift = Swift_Mailer::newInstance($transport);

        // Create a message (subject)
        $message = new Swift_Message($subject);

        // attach the body of the email
        $message->setFrom($from);
        $message->setBody($html, 'text/html');
        $message->setTo($to);
        $message->addPart($text, 'text/plain');

        // send message
        if ($recipients = $swift->send($message, $failures))
        {              
          // This will let us know how many users received this message
          echo 'Message sent out to '.$recipients.' users';exit;
        }
         // something went wrong =(
 else
 {
     echo "Something went wrong - ";
     print_r($failures);
 }
?>
