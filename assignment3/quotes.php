<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
<style>
body 
	{	
		background-image:url('yellow.jpg');
	}
</style>


<title>Quotes</title>

</head>

<body>

<?php
/* Double quotes will allow for a variable to pass through and be interpreted, while single quotes are taken literally  */
$name = "Bobby";
echo "My name is $name. (double quotes)<br/>";
echo 'My name is $name. (single quotes) <br/>';


echo "Because the first line was coded with double quotes, the variable was passed and the value echoed out. <br/>";
echo "Since the second line was coded with single quotes, it is read and printed exactly as is.";

?>



</body>
</html>