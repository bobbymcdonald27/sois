<?php 
include("header.php");
// please modify header file name on line 3
if (isset($_POST['submitted'])) {
	include("sqlConnect.php");
	//require_once ('mysql_connect.php');
	$errors = array(); 

	if (empty($_POST['firstName'])) {
		$errors[] = 'Please enter your first name.';
		} 
	else {
		$firstName = mysql_real_escape_string($_POST['firstName']);
		}

	if (empty($_POST['lastName'])) {
		$errors[] = 'Please enter your last name.';
		} 
	else {
		$lastName = mysql_real_escape_string($_POST['lastName']);
		}

	if (empty($_POST['email'])) {
		$errors[] = 'Please enter your email address.';
		} 
	else {
		$email = mysql_real_escape_string($_POST['email']);
		}
	

	if (!empty($_POST['password1']) && !empty($_POST['password2'])) {
		if ($_POST['password1'] != $_POST['password2']) {
			$errors[] = 'Your passwords do not match.';
		} 
		else {
			$password = mysql_real_escape_string($_POST['password1']);
		}
	} 
	else {
		$errors[] = 'Please create a password.';
	}

	if (empty($errors)) { 
		$query = "SELECT user_id FROM users WHERE email='$email'";
		$result = mysql_query($query);
		if (mysql_num_rows($result) == 0) { 
			$query = "INSERT INTO users (fname, lname, email, password, regi_date) 
			VALUES ('$firstName', '$lastName', '$email',SHA1('$password'), NOW() )";		
			$result = @mysql_query ($query);
			if ($result) { 
				echo "<p>Thank you for registering. Please login to register attendees.</p>";
				echo "<a href=login.php>Login</a>";
				exit();
			} else { 
				$errors[] = 'We were unable to register you. Please try again. '; 
				$errors[] = mysql_error(); 
			}

		} else { 
			$errors[] = 'This email address has been previously registered.';
		}

	} 

	mysql_close(); 

} else { 
	$errors = NULL;
} 

if (!empty($errors)) {
	echo '<h1>Error!</h1>
	<p>An error has occurred:<br />';
	foreach ($errors as $msg) { 
		echo "$msg<br />";
	}
	echo '</p>';
	echo '<p>Please try again.</p>';
}

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
<h2>User Registration</h2>
<br/><br/>
<h3>Please enter the following information to register an account with our site!</h3>
<br/><br/>
<form action="register.php" method="post">
	<p>First Name: <input type="text" name="firstName" size="15" maxlength="15" 
	                value="<?php echo $_POST['firstName']; ?>" /></p>
	<p>Last Name: <input type="text" name="lastName" size="15" maxlength="30" 
					value="<?php echo $_POST['lastName']; ?>" /></p>
	<p>Email Address: <input type="text" name="email" size="20" maxlength="40" 
					value="<?php echo $_POST['email']; ?>"  /> </p>
	<p>Password: <input type="password" name="password1" size="10" maxlength="20" /></p>
	<p>Confirm Password: <input type="password" name="password2" size="10" maxlength="20" /></p>
	<p><input type="submit" name="submit" value="Register" /></p>
	<input type="hidden" name="submitted" value="TRUE" />
</form>
</div>
<?php
// Please modify the footer file name below:
//include("footer.php");
?>
