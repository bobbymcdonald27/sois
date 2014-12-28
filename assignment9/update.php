<?php
include('header.php');
include('mysqli_connect.php');

$id = $_POST['id'];
$comment = $_POST['comment'];

//Formulate insert command using form data....allows for someone to update comments
$query = "UPDATE guestbook SET comment='$comment' WHERE id='$id'";


//Run UPDATE query in database
$result = @mysqli_query($dbc, $query);

//Check to see if UPDATE was successful
if ($result) {
echo "Thank you, your comment has been successfully updated to: " . $comment;
} else {
	echo "There was an error! " . mysqli_error($dbc);
}


include('footer.php');
?>