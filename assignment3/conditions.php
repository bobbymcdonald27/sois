<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<style>
body 
	{	
		background-image:url('blue.jpg');
	}
	
.text
	{
		color:white;
	}
</style>
<title>Conditions</title>
</head>
<body class ="text";>
<?php
echo "This if/else example will check the condition to see if it is true, the correct output will be displayed accordingly. <br/>";
$var1= 100;
$var2= 200;
$total = $var1 + $var2;

echo "Here is the first example of an if/else condition: <br/>";

//If the $total is greater than 500, the first echo statement will be shown, ELSE, the second echo statement will be echoed.
if ($total > 500) 
	{
	echo "Variable 1 + Variable 2 do not add up to be more than 500 :(";
	} 

else 
	{
	echo "Variable 1 and Variable 2 add up to be less than 500!";
	}
echo "<br/>";
echo "<hr>";
echo "<br/>";
	
?>


<?php
$var1= 1;
$var2= 2;
$total = $var1 + $var2;

echo "This if/else example will check the condition to see if the total is even or odd. <br/>";
echo "Here is the second example of an if/else condition: <br/>";
//This if/else statement will use the modulus operator to see if the $total is an even or odd number

//1+2=3.  3/2 gives a remainder, which is not equal to 0.  Therefore, the condition is not true.  The second echo will output.
if ($total % 2 == 0) //if 2 goes into the $total without having a remainder, it will equal 0, thus this condition is true and even.
	{
  echo "The total of the two variables is an even number.";
	}
//if 2 does not go into the $total without having a remainder, it will not equal 0, thus the total will be an odd number.
else 
	{
  echo "The total of the two variables is an odd number.";
	}
	
echo "<br/>";
echo "<hr>";
echo "<br/>";
	
?>

<?php
$num = 27;
//this case does just as an if/else statement would, just takes less time to write out
switch ($num)
{
	case 20;
		echo "num = 20";
	break;

	case 30;
		echo "num = 30";
	break;

	case 27;
		echo "Finally, after going through all those cases, we have a winner! The number is 27.";
	break;
}

echo "<br/>";
echo "<hr>";
echo "<br/>";

?>

<?php
$num = 900;

echo "Here is a case example using greater and less than signs: <br/>";
//Here is just an extra example I wanted to try with greater and less than signs.
switch ($num)
{
	case $num < 100;
		echo "num = 20";
	break;

	case $num > 700;
		echo "The number is not less than 100, it is not equal to 200, it is greater than 700! Wooooh! The number was 900!";
	break;

	case $num = 200;
		echo "Finally, after going through all those cases, we have a winner! The number is 900.";
	break;
}
?>



</body>

</html>