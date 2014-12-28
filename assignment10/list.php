<?php //listing all variables
$address = array("Milwaukee","Wisconsin","Farwell");

list($city, $state, $street) = $address;
echo "I live in: $city, $state on $street.";
?>

<br>


<?php //two out of the three variables
$address = array("Milwaukee","Wisconsin","Farwell");

list($city, , $street) = $address;
echo "The city I live in is " . $city . " and I live on " . $street . " Avenue!";
?>

<br>


<?php //just the last variable
$address = array("Milwaukee","Wisconsin","Farwell");

list(, , $street) = $address;
echo "The street I live on is " . $street;
?>