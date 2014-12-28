<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
<style>
body 
	{	
	background-image:url('background.jpg');
		
		background-repeat:no-repeat;
		background-attachment:fixed;
		background-position:center;
	}
	
.text 
	{
		color:white;
	}
	
</style>
<title>Bucks Fan Club</title>

</head>
<?php
include ('header.php');
?>

<h1 class="text">Milwaukee Bucks Fan Club</h1>
<h2 class="text">Register Here!</h2>

<body class="text">

<form action="
<?php
//All fields must be filled out to get to the confirmation page
if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['hear'])
 && !empty($_POST['txtarea'])  && !empty($_POST['player']) && !empty($_POST['days']) && !empty($_POST['years']) && !empty($_POST['months'])
) {
	echo "confirmation.php";
} else {
echo "bucksfanform.php";
}

?>
" method="post">



<legend>Please fill in the following info:</legend>

First name: <input type="text" name="firstname" value="
<?php
//Make first name sticky
if (isset($_POST['firstname'])) {
   echo $_POST['firstname'];
}

?>
"/> <br/>
<?php
//Check to see if a first name was entered
if (!isset($_POST['firstname'])) {
	echo "";
} elseif ($_POST['firstname'] == "") {
   echo "<strong>Please enter your first name!</strong>";
}
?> <br/>

Last name: <input type="text" name="lastname" value="
<?php
//Make last name sticky
if (isset($_POST['lastname'])) {
   echo $_POST['lastname'];
}
?>"/> <br />
<?php
//Check to see if a last name was entered
if (!isset($_POST['lastname'])) {
	echo "";
} elseif ($_POST['lastname'] == "") {
   echo "<strong>Please enter your last name!</strong>";
}
?>
<br>
Email: <input type="email" name="email" value="
<?php
//Make email sticky
if (isset($_POST['email'])) {
   echo $_POST['email'];
}
?>
"/> <br/>
<?php
//Check to see if an email was entered
if (!isset($_POST['email'])) {
	echo "";
} elseif ($_POST['email'] == "") {
   echo "<strong>Please enter your email!</strong>";
}
?> 

<br/>

<?php
echo '<input type="radio" name="sex" value="male"';
if ($_POST['sex'] =='male') echo 'checked="checked"'; else echo '';
echo '/>Male | <input type="radio" name="sex" value="female"';
if ($_POST['sex'] =='female') echo 'checked="checked"'; else echo '';
echo '/>Female'
?>

<br>


<?php
//Check to see if a sex was chosen
if (isset($_POST['sex'])) {
	echo "";
} elseif ($_POST['sex'] == NULL) {
   echo "<strong>Please enter your gender!</strong>";
}
?> 


<br />
How did you hear about the Bucks Fan Club?
<br />

<?php

$hear = array(0=> '','Friend', 'Website', 'Email', 'Other');

//Check to see if drop down item was selected
if ($_POST['hear'] != "") {
	echo "";
} elseif ($_POST['hear'] == "") {
   echo "<br /><strong>Please select an option!</strong>";
}

//Build how did you hear about us drop down menu
echo '<select name="hear">';

if (!isset($_POST['hear'])) {
	
	foreach ($hear as $key => $value) {
		echo "<option value=\"$value\">$value</option>\n";
	}
} elseif (isset($_POST['hear'])) {
	echo "<option value=\"" . $_POST['hear'] . "\">" . $_POST['hear'] . "</option>\n";
	foreach ($hear as $key => $value) {
		echo "<option value=\"$value\">$value</option>\n";
	}
}
echo '</select>';
 ?>
  
<br>

<strong>Please briefly describe why the Milwaukee Bucks are your favorite team: </strong><br>

<textarea rows="6" cols="30" name="txtarea">
<?php 
if (isset($_POST['txtarea'])) { echo $_POST['txtarea'];
} //Textarea made sticky
?>
</textarea>

<?php
//Check to see if textarea was filled
if ($_POST['txtarea'] == "") {
   echo "<br /><strong>Please tell us why the Bucks are your favorite!</strong>";
}
?>
<br>


Please select your birthday: 
</br>
Month: 
<?php
$months = array(0=> '', 'January', 'February', 'March', 'April', 'May',
'June', 'July', 'August', 'September',
'October', 'November', 'December');

$days = range (0, 31);
$years = range (1940, 2014);


//Check to see if month was selected
if ($_POST['months'] != "") {
	echo "";
} elseif ($_POST['months'] == "") {
   echo "<br /><strong>Please select a month!</strong>";
}

//Build month drop down menu
echo '<select name="months">';

if (!isset($_POST['months'])) {
	
	foreach ($months as $key => $value) {
		echo "<option value=\"$value\">$value</option>\n";
	}
} elseif (isset($_POST['months'])) {
	echo "<option value=\"" . $_POST['months'] . "\">" . $_POST['months'] . "</option>\n";
	foreach ($months as $key => $value) {
		echo "<option value=\"$value\">$value</option>\n";
	}
}
	
echo '</select>';

echo "</br> Day: ";

//Check to see if day was selected
if ($_POST['days'] != "0") {
	echo "";
} elseif ($_POST['days'] == "0") {
   echo "<br /><strong>Please select a day!</strong>";
}

//Build days drop down menu
echo '<select name="days">';

if (!isset($_POST['days'])) {
	
	foreach ($days as $key => $value) {
		echo "<option value=\"$value\">$value</option>\n";
	}
} elseif (isset($_POST['days'])) {
	echo "<option value=\"" . $_POST['days'] . "\">" . $_POST['days'] . "</option>\n";
	foreach ($days as $key => $value) {
		echo "<option value=\"$value\">$value</option>\n";
	}
}
	
echo '</select>'; 

 
echo "</br> Year: ";
//Check to see if year was selected
if ($_POST['years'] != "1940") {
	echo "";
} elseif ($_POST['years'] == "1940") {
   echo "<br /><strong>Please select a year!</strong>";
}

//Build years drop down menu
echo '<select name="years">';

if (!isset($_POST['years'])) {
	
	foreach ($years as $key => $value) {
		echo "<option value=\"$value\">$value</option>\n";
	}
} elseif (isset($_POST['years'])) {
	echo "<option value=\"" . $_POST['years'] . "\">" . $_POST['years'] . "</option>\n";
	foreach ($years as $key => $value) {
		echo "<option value=\"$value\">$value</option>\n";
	}
}
	
echo '</select>'; 


?>
 
<br /><br/>

Please select your favorite player on the Bucks:
<?php
echo '<input type="checkbox" name="player" value="Sanders"';
if ($_POST['player'] =='Sanders') echo 'checked="checked"'; else echo '';
echo '/>Larry Sanders';

echo '<input type="checkbox" name="player" value="Knight"';
if ($_POST['player'] =='Knight') echo 'checked="checked"'; else echo '';
echo '/>Brandon Knight';

echo '<input type="checkbox" name="player" value="Giannis"';
if ($_POST['player'] =='Giannis') echo 'checked="checked"'; else echo '';
echo '/>Giannis Antetokounmpo';

echo '<input type="checkbox" name="player" value="Other"';
if ($_POST['player'] =='Other') echo 'checked="checked"'; else echo '';
echo '/>Other';
?>



<br>


<?php
//Check to see if a player was chosen
if (isset($_POST['player'])) {
	echo "";
} elseif ($_POST['player'] == NULL) {
   echo "Please select your favorite Buck!<br/>";
}
?> 





<button type="submit">Submit</button>
<!---button type="reset">Clear Form Contents</button>*--not sure if I want this yet---> 


</form>
<br>
<br>
</body>
<?php 
include ('footer.php');
?>
</html>