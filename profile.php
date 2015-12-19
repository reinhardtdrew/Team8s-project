<style>

table, tr, td  {border: 3.5px olive solid; color: blue }

</style>

<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>TEAM8S Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">

  <i> <b>UPDATED RESULTS !!
<?echo ?> <br><br/>	
<?echo ?> <br><br/>

Hey!!

<?php echo$login_session; ?> </i></b> </b>
<b id="welcome">  Welcome to TEAM8S webSite!!
<?echo ?> <br><br><br/>

<?php 
print "MANUFACTURER STANDINGS";
print " ";
print "<table>";


print "<tr> <td> Manufactures </td> <td> Points </td> <td> Points Behind Leader </td> <td> Rank </td> <td> Wins </td> </tr>";
print "</table>";
?>
<?echo ?> <br><br><br/>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>
