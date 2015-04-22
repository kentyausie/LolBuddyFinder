<?php

$url = 'https://api.sendgrid.com/';
 $user = 'azure_d340c6977566f9e81343beb2c8a64e11@azure.com';
 $pass = 'bLIZOvxl31me82y'; 

 $params = array(
      'api_user' => $user,
      'api_key' => $pass,
      'to' => 'eddie81020@gmail.com',
      'subject' => 'testing from curl',
      'html' => 'testing body',
      'text' => 'testing body',
      'from' => 'lolteambuilder@hotmail.com',
   );
echo $url;
 $request = $url.'api/mail.send.json';

 // Generate curl request
 $session = curl_init($request);

 // Tell curl to use HTTP POST
 curl_setopt ($session, CURLOPT_POST, true);
echo "STEP2";
 // Tell curl that this is the body of the POST
 curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

 // Tell curl not to return headers, but do return the response
 curl_setopt($session, CURLOPT_HEADER, false);
 curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
echo "STEP3";
 // obtain response
 $response = curl_exec($session);
 curl_close($session);
echo "STEP4";
 // print everything out
 print_r($response);
