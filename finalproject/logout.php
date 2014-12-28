<?php 

session_start(); 


if (!isset($_SESSION['email'])) {
	header("Location: index.php");
	exit(); 
} else { 
	$_SESSION = array(); 
	session_destroy(); 
}


echo "<h1>Logged Out!</h1>
<p>You are now logged out!</p>
<p><br /><br /></p>";

//include ('footer.php');
?>
