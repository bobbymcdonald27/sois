<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Assignment 4 Example</title>
</head>

<body>
<?php

$months = array (0 => 'Month', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

?>


<form action="
<?php
/*Checks to see if the first and last name fields have data. If data is set in fileds, take them to the
thanks.php. Else if user is missing data take them back to the form to fix errors. */
if ( ($_POST['fname'] != NULL) && ($_POST['lname'] != NULL)) {
	echo "thanks.php";
	} else {
	echo "phpform.php";
	}
?>
" method="post">




<?php
//Check to see if a first name was enetered
if (!isset($_POST['fname'])) {
	echo "";
} elseif ($_POST['fname'] == "") {
   echo "<br /><strong>Please enter your first name!</strong> <br />";
}
?>
First Name: <input name="fname" type="text" size="20" value="
<?php
//Make first name sticky
if (isset($_POST['fname'])) {
   echo $_POST['fname'];
}
?>"
/> <br />




<?php
//Check to see if a last name was enetered
if (!isset($_POST['lname'])) {
	echo "";
} elseif ($_POST['lname'] == "") {
   echo "<br /><strong>Please enter your last name!</strong> <br />";
}
?>
Last Name: <input name="lname" type="text" size="20" value="
<?php
//Make last name sticky
if (isset($_POST['lname'])) {
   echo $_POST['lname'];
}
?>" /> <br /><br />

<?php
//Check to see if month was selected
if ($_POST['month'] != "Month") {
	echo "";
} elseif ($_POST['month'] == "Month") {
   echo "<br /><strong>Please select a Month!</strong>";
}

//Build month drop down menu
echo '<select name="month">';

if (!isset($_POST['month'])) {
	
	foreach ($months as $key => $value) {
		echo "<option value=\"$value\">$value</option>\n";
	}
} elseif (isset($_POST['month'])) {
	echo "<option value=\"" . $_POST['month'] . "\">" . $_POST['month'] . "</option>\n";
	foreach ($months as $key => $value) {
		echo "<option value=\"$value\">$value</option>\n";
	}
}
	
echo '</select>';
?>
<br />

<input type="submit" name="submit" value="Check Form & Submit" />
</form>

</body>
</html>