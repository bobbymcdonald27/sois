<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
<style>
body 
	{	
		background-image:url('white.jpg');
	}
</style>


<title>Predefined</title>

</head>
<body>

<?php # Script 1.5 - predefined.php
// Shorthand variables for the predefined
$port = $_SERVER['REMOTE_PORT']; //The port being used on the user's machine to communicate with the web server
$servername = $_SERVER['SERVER_NAME']; //The name of the server host under which the current script is executing
$ip = $_SERVER['REMOTE_ADDR']; //The IP address from which the user is viewing the current page

echo "Predefined variables are used to quickly gather useful information, here are few examples: <br/><br/>";


// Print the port being used to communicate with the web server
echo "<p>The port being used is:<br /><b>$port</b>.</p>\n";

// Print the server host name for the current script
echo "<p>The server host name is:<br /><b>$servername</b></p>\n";

// The IP address of the person document is:
echo "<p>This is the IP address for which you are using to view this page:<br /><b>$ip</b>.</p>\n";

?>



</body>
</html>