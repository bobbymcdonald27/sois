<style>

body 
	{	
	background-image:url('confirmationbucks.jpg');
		
		background-repeat:no-repeat;
		background-attachment:fixed;
		background-position:center;
	}


</style>


<?php //including header
include ('header.php');
?>





<?php 
//------------------------------------------------------------------------------------------------
//creating more manageable variables for some variables
$fname = $_REQUEST['firstname'];
$lname = $_REQUEST['lastname'];
$email= $_REQUEST['email'];
$hear = $_REQUEST['hear'];
$sex = $_REQUEST['sex'];
$player =$_REQUEST['player'];
$months =$_REQUEST['months'];
$days =$_REQUEST['days'];
$years =$_REQUEST['years'];
$txtarea =$_REQUEST['txtarea'];



//------------------------------------------------------------------------------------------------
?>

<?php
//------------------------------------------------------------------------------------------------
//defining if the first name field is filled or not
if (isset($_REQUEST['firstname'])){
$fname = $_REQUEST['firstname'];
} else $fname = NULL;


//------------------------------------------------------------------------------------------------
?>
<?php
//------------------------------------------------------------------------------------------------
//defining if the last name field is filled or not
if (isset($_REQUEST['lastname'])){
$lname = $_REQUEST['lastname'];
} else $lname = NULL;

//------------------------------------------------------------------------------------------------
?>

<?php
//------------------------------------------------------------------------------------------------
//defining if the email field is filled or not
if (isset($_REQUEST['email'])){
$email = $_REQUEST['email'];
} else $email = NULL;
//------------------------------------------------------------------------------------------------
?>

<?php
//------------------------------------------------------------------------------------------------
//checking to see if the user entered all the required info, providing feedback to the user.
$fname = $_REQUEST['firstname'];
$lname = $_REQUEST['lastname'];

if (($fname != NULL) && ($lname != NULL)) {
echo "Your answers have been submitted, " . $fname . " " . $lname . "!<br />";
} 

//------------------------------------------------------------------------------------------------
?>

<?php
//------------------------------------------------------------------------------------------------
//defining if the hear menu is filled or not
if (isset($_REQUEST['hear'])){
$email = $_REQUEST['hear'];
} else $hear = NULL;
//------------------------------------------------------------------------------------------------
?>

<?php //providing feedback to the user
if ($hear != NULL) {
echo "We are glad that you heard about us from " . $hear . "!<br / >";
} 
?>



<?php //feedback to user
$email = $_REQUEST['email'];
if ($email != NULL) {
echo "A confirmation of enrollment email has been sent to " . $email . "!<br / >";
} 
?>

<?php //feedback to user
$player = $_REQUEST['player'];
if ($player != NULL) {
echo "We like your choice of " . $player . " as your favorite player.<br />";
}
?>

<?php //and more feedback to the user

if ($sex != NULL) {
echo "You have been entered for the " . $sex . " prize give away!<br / >";
}
?>

<?php
//------------------------------------------------------------------------------------------------
//defining if the months menu is filled or not
if (isset($_REQUEST['months'])){
$months = $_REQUEST['months'];
} else $months = NULL;
//------------------------------------------------------------------------------------------------
?>
<?php
//------------------------------------------------------------------------------------------------
//defining if the days menu is filled or not
if (isset($_REQUEST['days'])){
$days = $_REQUEST['days'];
} else $days = NULL;
//------------------------------------------------------------------------------------------------
?>
<?php
//------------------------------------------------------------------------------------------------
//defining if the year menu is filled or not
if (isset($_REQUEST['years'])){
$years = $_REQUEST['years'];
} else $years = NULL;
//------------------------------------------------------------------------------------------------
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php //adding the footer to the page
include ('footer.php');
?>






