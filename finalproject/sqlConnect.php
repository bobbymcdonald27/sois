<?php 
 
$dbc = @mysql_connect ("localhost", "imconley_admin", "440Final")
OR die ('Could not connect to MySQL: ' . mysql_error());

@mysql_select_db("imconley_blog")
or die ('Could not select the database: ' . mysql_error());

?>