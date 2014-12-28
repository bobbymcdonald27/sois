<?php

$to = 'mcdona87@uwm.edu'; //designates who it is going to send to
$subject = 'Hello this is assignment 10!'; //subject line
$body = 'Dear user, your email quota is near capacity! Please follow this very shady link to increase space before all hope is lost and your info is compromised!!!!!'; 
//^$body allows you to create the actual bulk of the message you wish to send
$from = 'From: thisdefinitelyisspam@uwm.edu'; //who is sending the email

$mail = mail($to, $subject, $body, $from); //mail function including all the variables

?>