<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
include('header.php');
include('mysqli_connect.php');
include('footer.php');
?>
<!--Form where a user would update their comments-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update</title>
<style>body
{
background-color:#47EF47;
}</style>
</head>

<body>
Comment update form: <br /><br />

<form action="
<?php
/*Checks to see if the first and last name fields have data. If data is set in fileds, take them to the
thanks.php. Else if user is missing data take them back to the form to fix errors. */
if ( ($_POST['id'] != NULL) && ($_POST['comment'] != NULL)) {
	echo "update.php";
	} else {
	echo "updateform.php";
	}
?>
" method="post">


ID: <input type="text" name="id" value="
<?php
//Make email sticky
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


New Comment: <input type="text" name="comment" value="
<?php
//Make comment sticky
if (isset($_POST['comment'])) {
   echo $_POST['comment'];
}

?>
"/> 
<br/>

<?php
//Check to see if a comment was entered
if (!isset($_POST['comment'])) {
	echo "";
} elseif ($_POST['comment'] == "") {
   echo "<strong>Please enter your comment!</strong>";
}
?>
<br>

<br/>

<input type="submit" value="Submit">

</form>


</body>
</html>