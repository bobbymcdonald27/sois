<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
<style>
body 
	{	
		background-image:url('mathback.jpg');
	}
	
</style>

<title>Math</title>

</head>

<body>
<?php

echo "The addition operator (+) does exactly what you would think it would do, adds numbers together.<br/>
The subtraction operator (-) does exactly what you would think it would do, subtracts numbers.<br/>
The multiplication operator (*) does exactly what you would think it would do, multiplies numbers.<br/>
The division operator (/) does exactly what you would think it would do, divides numbers.<br/>
The modulus operator (%) is a little more difficult to grasp, however.  It outputs the remainder of one number divided by another.<br/>";

echo "<br/>";

echo "Addition: 300 + 100 = <br/>"; /*using the plus symbol to perform addition*/
$add = 300 + 100;
echo $add;
echo "<br/>";

echo "Subtraction: 300 - 100 = <br/>";/*using the minus symbol to perform subtraction*/
$sub = 300 - 100;
echo $sub;
echo "<br/>";

echo "Multiplication: 300 * 100 = <br/>";/*using the asterisk symbol to perform multiplication*/
$mult = 300 * 100;
echo $mult;
echo "<br/>";

echo "Division: 300 / 100 = <br/>";/*using the forward slash symbol to perform division*/
$divi = 300 / 100;
echo $divi;
echo "<br/>";

/*using the percent symbol to perform the modulus operator*/
/*the modulus operator outputs the remainder from two numbers being divided*/
echo "Modulus : 31 % 2 = <br/>"; /* 2 goes into 31 --'15 times'-- that gives you 30.  However, the modulus operator will output '1' because that's what is left over*/
$mod = 31 % 2;
echo $mod;
echo "<br/>";

?>
</body>

</html>