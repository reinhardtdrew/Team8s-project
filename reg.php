
 
<?php
$con = mysql_connect("localhost","carlos","%12345");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("team8s", $con);
 
$sql="INSERT INTO login (username, firstname, lastname, password)
VALUES
('$_POST[username]','$_POST[firstname]','$_POST[lastname]','$_POST[password]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "WELCOME TO TEAM8S";

	
//echo "Now you are a member and you can login";
mysql_close($con)
?>
<?echo ?> <br><br/>	
<?echo ?> <br/>	
<?echo ?> <br> Now you are a member and you can login <br/>	
<?echo ?> <br><br/>	


<li class="buttons">
		<!-- <input type="submit" name="login" value="Log me in" />  -->
		<input type="button" name="Login" value="Login" onclick="location.href='team8s.php'" />
  </li>