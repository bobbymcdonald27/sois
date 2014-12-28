<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
<style>
body 
	{	
		background-image:url('packers.jpg');
	}
	
.text
	{
		color:white;
	}
</style>

<title>Constant</title>

</head>

<body class= "text";>
<?php
echo "A constant is used to store information or a value, they cannot be changed. They use the define() function, instead of =.<br/>";
echo "A variable can be changed and this is what makes them different.<br/><br/>";
echo "Constant defined for my home town: <br/>";
define ('HOMETOWN', 'Green Bay');/*HOMETOWN pulls in what I have defined as my home town "Green Bay," this will never change and therefore can be defined as a constant*/
echo "I was born and raised in " . HOMETOWN . ".";

echo "<br/><br/>";
echo "Constant defined for my UWM ePanther, which should not ever change: <br/>";
define ('EPANTHER', 'mcdona87'); /*EPANTHER pulls in my defined constant, mcdona87, this is my ePanther username and will not change.*/
echo "Hello, Robert! <br/>";
echo "Your ePanther username for the duration of your stay at UWM is: " . EPANTHER . ".";
?>
</body>

</html>