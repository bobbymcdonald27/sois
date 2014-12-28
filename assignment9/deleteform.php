<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
include('header.php');
include('mysqli_connect.php');
include('footer.php');
?>
<!--Form for deleting a user and that users' entry-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete</title>
<style>body
{
background-color:#47EF47;
}</style>
</head>

<body>
Comment Delete Form: <br /><br />

<form action="
<?php
/*Checks to see if the first and last name fields have data. If data is set in fileds, take them to the
thanks.php. Else if user is missing data take them back to the form to fix errors. */
if ( ($_POST['fname'] != NULL) && ($_POST['id'] != NULL)) {
	echo "delete.php";
	} else {
	echo "deleteform.php";
	}
?>

" method="post">

What is your name?: <input name="fname" type="text" size="20" value="
<?php
//Make fname sticky
if (isset($_POST['fname'])) {
   echo $_POST['fname'];
}
?>
"/> 
<br/>

<?php
//Check to see if an fname was entered
if (!isset($_POST['fname'])) {
	echo "";
} elseif ($_POST['fname'] == "") {
   echo "<strong>Please enter your first name!</strong>";
}
?>
<br>

Which user ID do you wish to have deleted?: <input name="id" type="text" size="20" value="
<?php
//Make id sticky
if (isset($_POST['id'])) {
   echo $_POST['id'];
}
?>
"/> 
<br/>

<?php
//Check to see if an id was entered
if (!isset($_POST['id'])) {
	echo "";
} elseif ($_POST['id'] == "") {
   echo "<strong>Please enter your id!</strong>";
}
?>
<br>
<br />

<input type="submit" name="submit" value="Submit" />
</form>

</body>
</html>