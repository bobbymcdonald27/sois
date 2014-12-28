<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title>
<style>body
{
background-color:#47EF47;
}
</style>
</head>

<body> <!--this is the form a user enters info into to submit a comment-->

<form action="leave.php" method="post">


Email: <input type="text" name="email" value="
<?php
//Make email sticky
if (isset($_POST['email'])) {
   echo $_POST['email'];
}

?>

"/> 
<br/>
<?php
//Check to see if a email was entered
if (!isset($_POST['email'])) {
	echo "";
} elseif ($_POST['email'] == "") {
   echo "<strong>Please enter your email!</strong>";
}
?>
<br>
First name: <input type="text" name="fname" value="
<?php
//Make first name sticky
if (isset($_POST['fname'])) {
   echo $_POST['fname'];
}

?>

"/> 
<br/>
<?php
//Check to see if a first name was entered
if (!isset($_POST['fname'])) {
	echo "";
} elseif ($_POST['fname'] == "") {
   echo "<strong>Please enter your first name!</strong>";
}
?>
<br>

Last name: <input type="text" name="lname" value="
<?php
//Make last name sticky
if (isset($_POST['lname'])) {
   echo $_POST['lname'];
}

?>
"/> 
<br/>
<?php
//Check to see if a last name was entered
if (!isset($_POST['lname'])) {
	echo "";
} elseif ($_POST['lname'] == "") {
   echo "<strong>Please enter your last name!</strong>";
}
?>
<br>

Comment: <textarea type="text" name="comment" value="
<?php
//Make comments sticky
if (isset($_POST['comment'])) {
   echo $_POST['comment'];
}

?>
"/> </textarea>
<br/>
<?php
//Check to see if a comment was entered
if (!isset($_POST['comment'])) {
	echo "";
} elseif ($_POST['comment'] == "") {
   echo "<strong>Please enter comments!</strong>";
}
?>
<br>

<input type="submit" value="Submit">

</form>
</form>

</body>
</html>