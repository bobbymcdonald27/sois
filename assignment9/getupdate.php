<?php
include('header.php');
include('mysqli_connect.php');

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

<form action="<?php echo basename(__FILE__) . '?id=' . $row['id'];  ?>" method="post">
Please update the comments: <br />
<textarea name="comment" cols="40" rows="5">
<?php
//Pull Comment from DB
echo $row['comment'];
?>
</textarea>

<br /><br />
<input type="submit" name="submit" value="Submit" />
</form>

