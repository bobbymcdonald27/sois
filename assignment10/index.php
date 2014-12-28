<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<!----This is the code for the index page of Assignment 2---->


<title>Assignment 10 Index Page</title> <!------This gives the name to the tab on the browser--->

<style type="text/css"> /* Listed below are the CSS styles for my index page*/



body
		{
			background-color:#A9F5E1;
		}

.tr
		{
			background-color:#B4A28F;
			color:white;
		}
.tableborder
		{
			border-style:inset;
			border: 2px solid black;
		}
.tableheading
		{
			font-size:20px;
			background-color:#666666;
			color:white;
		}

.myname 
		{
			font-size:30px;
			color:#0101DF;
			font-style:italic;
		}
		
.assignment
		{
			font-weight:bold;
			font-size:35px;
			color:#000044;
		}
	
</style>

</head>

<body>

<h1 align = "left" class ="assignment";>Assignment 10</h1> <!---- Here I have the main heading of my page aligned to center---->
<h2 align = "center" class ="myname";>Robert McDonald</h2> <!---this is also a heading, although it will be considered the 2nd heading---->

<table border="1" align="center" class="tableborder";> <!----Declaring that a table is being made--->

<tr> <!----This code is used for creating the table heading, notice the associated classes for styling--->
<th align = "center" colspan="2" class = "tableheading" class="padding";>Assignment 10 Pages:</th> 
</tr>

<tr class="tr";>
<td>Header() Example</td> 
<td>
<a href="headerfunction.php">Click Here to Load</a> <!----A relative link to the headerfunction.php file already uploaded on the server--->
</td>
</tr>

<tr class="tr";>
<td>List() Example</td>
<td>
<a href="list.php">Click Here to Load</a> <!----A relative link to the list.php file already uploaded on the server--->
</td>
</tr>

<tr class="tr";>
<td>Mail() Example 1</td>
<td>
<a href="mail.php">Click Here to Load</a> <!----A relative link to the mail.php file already uploaded on the server--->
</td>
</tr>

<tr class="tr";>
<td>Mail() Example 2</td>
<td>
<a href="mail2.php">Click Here to Load</a> <!----A relative link to the mail2.php file already uploaded on the server--->
</td>
</tr>

<tr class="tr";>
<td>Upload Example</td>
<td>
<a href="upload.php">Click Here to Load</a> <!----A relative link to the upload.php file already uploaded on the server--->
</td>
</tr>

<tr class="tr";>
<td>Uploads</td>
<td>
<a href="http://mcdona87.uwmsois.com/assignment10/uploads/">Click Here to View Uploads</a> <!----A relative link to the uploads.php file already uploaded on the server--->
</td>
</tr>

</table> <!----end table tag--->

</body>
</html> 