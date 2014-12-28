<?php
include('header.php');
include('mysqli_connect.php');

$comment = mysqli_real_escape_string($dbc, trim($_POST['comment']));

	if ($_POST['comment'] != NULL) {
	$query = "DELETE guestbook SET comment='' WHERE id='".$_GET['id']. "'";
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
Delete comments associated with ID #: <br />
<input type="text" name="id" value="
<?php
//Pull id from DB
echo $row['id'];
?>

"/>

<br /><br />
<input type="submit" name="submit" value="Submit" />
</form>

