<?php
require_once("include/auth.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>
</head>
<body>
<input type="hidden" name="adminID" value="<?php echo $_SESSION['id'];?>" />
<div class="main">
<div class="header"><img src="img/header1.gif" width="980" height="250" /></div>
<br /><br /><br /><br /><br /><br />
<ul id="nav">
    <li class="top"><a href="admin_index.php" class="top_link"><span>Home</span></a></li>
  <!-- <li class="top"><a href="subdivision.php" class="top_link"><span>Subdivision</span></a> -->
  	  			<ul class="sub">
			<li><a href="addsub.php" class="fly">Add Subdivision</a></li>
			</ul>
  </li>
  <li class="top"><a href="lot.php" class="top_link"><span>Lot</span></a>
  	  			<ul class="sub">
			<li><a href="addlot.php" class="fly">Add Lot</a></li>
			</ul>
  </li>
  <li class="top"><a href="house.php" class="top_link"><span>House</span></a>
  			<ul class="sub">
			<li><a href="addhouse.php" class="fly">Add House</a></li>
			</ul>
  </li>
  <li class="top"><a href="report.php" class="top_link"><span>Reports</span></a></li>
  <!-- <li class="top"><a href="events.php" class="top_link"><span>Company Events</span></a> -->
  			<ul class="sub">
			<li><a href="createevent.php" class="fly">Create Events</a></li>
			</ul></li>
  <li class="top"><a href="logout.php" class="top_link"><span>Logout</span></a></li>

</ul>
<div class="content"><br /> 
<form method="post" action="saveeditaccount.php">

	<?php require("include/dbconnection.php") ?>
	<?php		
	$result = mysql_query("SELECT * from `admin` WHERE admin_id = '".$_SESSION['id'] ."' ");     
  
  

	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	
	If ($numberOfRows == 0) 
		{
		//echo 'Sorry No Record Found!';
		}
	else if ($numberOfRows > 0) 
		{
		$i=0;
		$adminid = MYSQL_RESULT($result,$i,"admin_id");
			$firstname = MYSQL_RESULT($result,$i,"firstname");
			$lastname = MYSQL_RESULT($result,$i,"lastname");
			$username = MYSQL_RESULT($result,$i,"username");
			$email= MYSQL_RESULT($result,$i,"email");
			$adminpass = MYSQL_RESULT($result,$i,"adminpass");
	}
	
	?>
	<br />
	<table width="516" border="0" align="center">
	<tr>
	<td>First Name </td>
	<td> <input type="text" name="firstname" value="<?php echo $firstname; ?>" class="input"></td>
	</tr>
      <tr>
        <td>Last Name </td>
        <td><input name="lastname" type="text" class="input" value="<?php echo $lastname; ?>" /></td>
      </tr>
	  <tr>
        <td>Email Address </td>
        <td><input name="email" type="text" class="input" value="<?php echo $email; ?>" /></td>
      </tr>
      <tr>
        <td>Username</td>
        <td><input name="username" type="text" class="input" value="<?php echo $username; ?>" /></td>
      </tr>
	  <tr>
        <td>Password</td>
        <td><input name="adminpass" type="password" class="input" value="<?php echo $adminpass; ?>" /></td>
      </tr> 
	  <tr>
        <td>Repeat Password</td>
        <td><input name="cpass" type="password" class="input"/>
          <input type="hidden" name="admin" value="<?php echo $_SESSION['id'];?>" /></td>
      </tr>   
	   </table>
	<br />
	<br />
<div align="center">
<input type="submit" name="save" id="save" value=" Save " class="btn" />
<input type="submit" name="cmdcancel" id="cmdcancel" class="btn" value="Cancel" />   
</div>
</form>
<br /><br />
  <div style="clear:both"></div>
</div>

<div style="clear:both"></div>
<div class="bottommenu"> Terms and Condition | Home | About Us | Contact Us| Developer</div>
<div class="footer">
<!-- Copyright 2023&copy; RMMC Student Development -->
</div>
</div>
</body>
</html>
