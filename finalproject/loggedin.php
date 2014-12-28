<?php
session_start(); 
// please modify the header file name:
if (!isset($_SESSION['email'])){
	echo "<h1>Please login</h1>";
} else {
	echo "<div class=\"page\"><header><a class=\"logo\" href=\"#\"> </a></header><nav> <a href=\"index.php\"> Home</a><a href=\"register.php\"> Registration</a><a href=\"#\"> ********</a><a href=\"login.php\"> Login</a></nav>";
	echo"<br/><br/><br/><br/>";
	echo "<h1>Logged In!</h1><p>You are now logged in " . $_SESSION['fname'] ." " .  $_SESSION['lname'] ."!</p>
	<p>You are now able to post comments.</p>
	";
} 
// please modify the footer file name:
//include ('footer.php'); 
?>
<?php
include ("form.php");
include("header.php");
?>
