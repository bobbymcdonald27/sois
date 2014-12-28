<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
<style>
body 
	{	
		background-image:url('bucks.jpg');
	}
	
.text 
	{
		color:white;
	}
	
</style>
<title>Form</title>

</head>
<h1 class="text">Milwaukee Bucks Fan Club</h1>

<body class="text">


<form name="input" action="html_form_action.asp" method="get">



First name: <input type="text" name="firstname"><br>
Last name: <input type="text" name="lastname"><br>

<input type="radio" name="sex" value="male">Male<br>
<input type="radio" name="sex" value="female">Female<br>

Select your favorite team:

<select>
  <option value="blank"></option>
  <option value="team">Milwaukee Bucks</option>
  <option value="team1">Milwaukee Bucks!</option>
  <option value="team2">Milwaukee Bucks!!</option>
  <option value="team3">Milwaukee Bucks!!!</option>
</select>
<br>
<button type="button" onclick="alert('#GoBucks')">Submit</button>

</form>

</body>

</html>