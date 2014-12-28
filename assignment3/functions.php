<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
<style>
body 
	{	
		background-image:url('green.jpg');
	}
	
.text
	{
		color:white;
	}
</style>

<title>Functions</title>

</head>

<body class= "text";>

<?php
echo "This user defined function will list some student names and then automatically add this course we are in.<br/><br/>";
//This user defined function called thisCOURSE will take the students name ($sname) and echo it out while including this course we are in.
function thisCOURSE($sname)
{
echo "$sname is in 440 Web Application Development.<br>";
}

thisCOURSE("Bobby");
thisCOURSE("Steven");
thisCOURSE("Tim");
thisCOURSE("John");
thisCOURSE("Mary");

echo "<br/>";
echo "<hr>";
echo "<br/>";

?>


<?php
// explode example for a built in function.  Will break apart (explode) a string into different defined strings.
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);

echo 'The original string $pizza has a value of: <br/>';
echo "$pizza <br/><br/>";
echo "The function 'explode' takes the string pizza and breaks it down into the smaller string pieces as designated. <br/>";
echo "$pieces[0]<br/>"; //individual piece1
echo "$pieces[1]<br/>"; //individual piece2
echo "$pieces[2]<br/>"; //individual piece3
echo "$pieces[3]<br/><br/>"; //individual piece4 

echo "As you can see above, the explode function broke down the string value of piece1 piece2 piece3 piece4 piece5 piece6 into individual strings.";
?>



</body>

</html>