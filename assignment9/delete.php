<?php
include('header.php');
include('mysqli_connect.php');

$fname = $_POST['fname'];
$id = $_POST['id'];
$comment = $_POST['comment'];

//Using the DELETE command
$query = "DELETE FROM guestbook WHERE id='$id'";


//Run DELETE query in database
$result = @mysqli_query($dbc, $query);

//Check to see if DELETE was successful
if ($result) {
echo "Thank you, " . $fname . ", user ID number " . $id . " has been deleted.";
} else {
	echo "There was an error! " . mysqli_error($dbc);
}


include('footer.php');
?>