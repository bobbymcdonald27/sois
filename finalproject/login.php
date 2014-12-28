<?php
include ('leave.php')

if (isset($_POST['submitted'])) {
	require_once ('sqlConnect.php'); 
	$errors = array(); 
	if (empty($_POST['email'])) {
		$errors[] = 'Please enter your email address.';
	} else {
		$e = mysql_real_escape_string(trim($_POST['email']));
	}
	if (empty($_POST['password'])) {
		$errors[] = 'Please enter your password.';
	} else {
		$p = mysql_real_escape_string($_POST['password']);
	}
	if (empty($errors)) { 
		$query = "SELECT * FROM users WHERE email='$e' AND password=SHA1('$p')"; 
		$result = @mysql_query ($query); 
		$row = mysql_fetch_array ($result, MYSQL_NUM);
		if ($row) { 
			session_start(); 
			$_SESSION['user_id'] = $row[0];
			$_SESSION['fname'] = $row[1];
			$_SESSION['lname'] = $row[2];
			$_SESSION['email'] = $row[3]; 
			
		
			header("Location:loggedin.php");
			exit();
		} else { 
			$errors[] = 'The email address and password entered do not match those on file.'; 
		}
	} 
	mysql_close(); 
} else { 
	$errors = NULL;
} 
$page_title = 'Login';
if (!empty($errors)) { 
	echo '<h1 id="mainhead">There was an error.</h1>
	<p class="error">The following error(s) occurred:<br />';
	foreach ($errors as $msg) { 
		echo " - $msg<br />\n";
	}
	echo '</p><p>Please try again.</p>';
}



?>
<?php
include("header.php");
?>
<div class="page">
<header>
<a class="logo" href="#"> </a>
</header>
<nav> 
<a href="index.php"> Home</a>
<a href="register.php"> Registration</a>
<a href="#"> ********</a>
<a href="login.php"> Login</a>
</nav>
<br/><br/><br/><br/>
<h3>Please, login here.</h3>
<form action="login.php" method="post">
<p>Email Address: <input type="text" name="email" size="20" maxlength="40" /> </p>
<p>Password: <input type="password" name="password" size="20" maxlength="20" /></p>
<p><input type="submit" name="submit" value="Login" /></p>
<input type="hidden" name="submitted" value="TRUE" />
</form>
</div>

<?php
//include ('footer.php');
?>
