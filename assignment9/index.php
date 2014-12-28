<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<h1 align="center">Welcome!</h1>

<?php
include ('header.php');
include ('mysqli_connect.php');
include ('footer.php');




//This is the SELECT query
$query = "SELECT * FROM guestbook";

//This issues our command to the database server
$results = @mysqli_query($dbc, $query);

echo "<table border='1'>
<tr>
<th>ID: </th>
<th>First Name: </th>
<th>Last Name: </th>
<th>Comment: </th>
<th>Date: </th>
</tr>";

//Array output into a table
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
	echo "<tr>";
	echo "<td>" . $row['id'] . "</td>";
	echo "<td>" . $row['fname'] . "</td>";
	echo "<td>" . $row['lname'] . "</td>";
	echo "<td>" . $row['comment'] . "</td>";
	echo "<td>" . $row['date'] . "</td>";
	echo " <td> <a href=\"" .  "http://mcdona87.uwmsois.com/assignment9/getdelete.php" . "?id=" . $row['id'] . "\" > Delete Comment </a> </td>";
	echo " <td> <a href=\"" .  "http://mcdona87.uwmsois.com/assignment9/getupdate.php" . "?id=" . $row['id'] . "\" > Update Comment </a> </td>";

}

echo "</table>";
include ('footer.php');

?>
<?php
$comment = mysqli_real_escape_string($dbc, trim($_POST['comment']));

	if ($_POST['comment'] != NULL) {
	$query = "UPDATE guestbook SET comment='$comment' WHERE id='".$_GET['id']. "'";
	$result = mysqli_query($dbc, $query);
	}
	
	if (isset($_GET['id'])) {
	//This is our SELECT query
	$query = "SELECT * FROM guestbook WHERE id='".$_GET['id']. "'";
	//This issues our command to the database server
	$results = mysqli_query($dbc, $query);
	//Load query results into array
	$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
	}
	
?>


<title>Guestbook</title> 

<style type="text/css"> 
body
{
background-color:#47EF47;
}


	
</style>

</head>

<body>


</body>
</html> 