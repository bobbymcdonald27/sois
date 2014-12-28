<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>Leave info</title>
<h1>Please submit your info to our database!</h1>
</head>

<body>

<?php //this code is for inserting user entries into the database
include ('header.php');
include ('mysqli_connect.php');
include ('form.php');


$comment = $_POST['comment'];

$query = "INSERT INTO blog (comment) VALUES ('$comment')";

$result = @mysqli_query($dbc, $query);

if ($result) {
echo "Thank you " . $fname . " your info has been submitted.";
} else {
	echo "Uh-oh! Something went wrong! " . mysqli_error($dbc);
	}
include ('footer.php');
?>

</body>
</html>
