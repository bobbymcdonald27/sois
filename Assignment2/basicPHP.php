<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<title>Basic PHP Page</title> <!----this will be what shows up on the tab in the browser---->

</head>

<?php

/* Here is a comment for the php variables that I have listed on the next few lines.
This comment can be on multiple lines due to the fact that the notes are between a forward slash & * as well as being followed by an * and forward slash. */

//variables defined by the dollar sign

$first = "Robert"; 
$last = "McDonald";
$intro = "My name is ";

echo $intro . $first . " " . $last . "."; //using the contraction operator, the period, we are able to tie together variables displayed by echo command.
?>

<br>

<?php

//I'm just messing around with some variables to prove that they can be used for mathematical applications.

$w = "8";
$h = "5";
$d = "5";
$paycheck = $w * $h * $d;

echo "A typical work week with school will pay out about " . "$" . $paycheck . "."; //This displays the text followed by the solution to the $paycheck calculation.

?>

<br>

<body>

<!---Below is some  text using HTML. This is how to comment out when using HTML--->

This is just some regular text, not using PHP.

<br>

<?php
//Below lies some text that will be shown using the echo command, which does the exact same thing as the print command.

echo "I am also text! However, I am special because I am using PHP!</br>";
print "Although you cannot see this unless looking at the code, this text is displayed with the print command instead of the echo command."

?>

<br>

<img src="smiley.jpg" height="100" width="100" title="Smiley Face"/> <!----I don't know why I put this in here, I guess I just wanted to make sure I was able to--->

</body>

</html>