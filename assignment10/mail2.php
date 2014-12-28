<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$to = 'mcdona87@uwm.edu';
$subject = $_POST['subject'];
$body = $_POST['body'];
$from = "From: " . $_POST['from'];

//mail function
$mail = mail($to, $subject, $body, $from);

echo "Your email has been sent!";

}

?>

<form action="<?php echo basename(__FILE__);  ?>" method="post"> 
Please enter your email: <input name="from" type="text" size="50" value=""/> 
<br/ >Please leave a subject line: <input name="subject" type="text" size="40" value=""/> 
<br /><br />
Please enter the body of your email: <br />
<textarea name="body" cols="40" rows="10">
</textarea>

<br /><br />
<input type="submit" name="submit" value="Submit" />
</form>