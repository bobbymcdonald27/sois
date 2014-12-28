<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Site</title>
<?php
include("header.php")
?>
</head>
<div class="page">
<header>
<a class="logo" href="#"> </a>
</header>

<article>
<h1>Welcome to our blog!</h1>
<p>Please feel free to comment on any of the posts!</p>
</article>

<div class="promo_container">  
<div class="content">
<h3>Some random content!</h3>

This is where some cool content could go.
<?php
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) 
{
	echo "<tr>";
	echo "<td>" . $row['comment'] . "</td>";

}

echo "</table>";



echo "<table border='1'>
<tr>
<th>Post</th>

</tr>";

?>
<br/>
</p>
</div>

</div>

<nav> 
<a href="index.php"> Home</a>
<a href="register.php"> Registration</a>
<a href="#"> ********</a>
<a href="login.php"> Login</a>
</nav>

</div>
</body>
</html>