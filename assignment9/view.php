<?php

include('mysqli_connect.php');

//This is our SELECT query
$query = "SELECT * FROM guestbook";

//This issues our command to the database server
$results = @mysqli_query($dbc, $query);

echo "These are all of the users in our database <br />";

//This takes the query and loads it into an array and outputs the results
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
	echo "ID: " . $row['id'] . " | First Name: " . $row['fname'] . " | Last Name: " . $row['lname'] . " | Comments: " . $row['comment'] . "<br />";
}
?>