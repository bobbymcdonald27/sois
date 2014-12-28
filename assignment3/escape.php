<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
<style>
body 
	{	
		background-image:url('apple.jpg');
		background-position: 30% 20%;
	}
	
.text
	{
		color:white;
	}
</style>


<title>Escape</title>

</head>

<body class="text";>

<?php
/* Below shows how using a \ can allow for quotation marks to be echoed out */
echo "Steve Jobs once said \"My favorite things in life don't cost any money.  It's really clear that the most precious resource we all have is time.\"<br/>";
echo "The escape slash is used when you need to include quotes in text you want echoed out. <br/>";
echo "Using the escape slash tells PHP to ignore the quotes and to include them as regular text <br/>"; 

?>



</body>
</html>