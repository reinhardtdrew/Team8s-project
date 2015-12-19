
<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user']))

{
header("location: profile.php");
}

?>
<!DOCTYPE html>
<style>
form {margin:auto; width:40%; margin-top:15opx:align:right-side;  }
body {background-color:lightgrey }
  h1   {color:black; }
  p    {color:blue; font-family:courier;font-size=95%; }
legend {color:blue; }
</style>

<html>
<head>
<title> <center> TEAM8S HOME SITE </center> </title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="register.php"> <span id="register"> </span> 
	
</head>
<body>
	
<div id="main">
<h1> TEAM8S HOME SITE </h1>
<div id="login">
<div id="regist.html">	
<h3> <i> 
 
<hr>
<br> * Race results </br>
<br> * Qualifying </br>
<br> * loop Data Stats </br>
<br> * Forum </br>
<br> * And MORE !! </br>

<hr> 
</i> </h3>


<br>TEAM8S Login!! </br>
<?echo ?> <br><br><br/>
<form action="" method="post">
<label> <i> UserName : </i> </label>
<input id="name" name="username" placeholder="username" type="text">
<?echo ?> <br><br><br/>
<label> <i> Password : <i> </label>
<input id="password" name="password" placeholder="**********" type="password">
<?echo ?> <br><br/>
	
<input name="submit" type="submit" value=" Login ">
<?echo ?> <br><br/>	

  
	<li class="buttons">
		 
		<input type="button" name="Register" value="Register" onclick="location.href='Regist.php'" />
  </li>

	

<?echo ?> <br/>	
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>
