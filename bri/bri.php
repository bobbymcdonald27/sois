<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Multidimensional Arrays</title>
</head>
<body>

<p>Some North American States, Provinces, and Territories:</p>

<?php
$myArray=array("Mexico", "United States", "Canada");
sort($myArray);

$mexico=array("YU - Yucatan", "BC - Baja California", "OA - Oaxaca");


?>
<?php
echo "Mexico";

sort($mexico);

?>

<?php
$cars=array("Volvo","BMW","Toyota");
sort($cars);
?>
<!--<h2>$myArray[1]</h2>
<ul>
	<li>MD - Maryland</li>
	<li>IL - Illinois</li>
	<li>PA - Pennsylvania</li>
	<li>IA - Iowa</li>
</ul>

<h2>$myArray[2]</h2>
<ul>
	<li>QC - Quebec</li>
	<li>AB - Alberta</li>
	<li>NT - Northwest Territories</li>
	<li>YT - Yukon</li>
	<li>PE - Prince Edward Island</li>
</ul>
-->
</body>
</html>