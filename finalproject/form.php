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