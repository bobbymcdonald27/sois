<?php /*This chunk of code connects the database to the website */

DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USER', 'mcdona87_assign8');
DEFINE ('DB_PASSWORD', 'soissois');
DEFINE ('DB_NAME', 'mcdona87_assign8');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Unable to connect to SOIS MySQL server! ' . mysqli_connect_error());

?>
