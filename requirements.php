<?php 
session_start();
include("include/dbconnection.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>
<style>
a{ color:#99ccff;}
</style>
</head>
<body>
<div class="main">
<div class="header"><img src="img/header1.gif" width="980" height="250" /></div>
<br /><br /><br /><br /><br /><br />
<ul id="nav">
  <li class="top"><a href="user_index.php" class="top_link"><span>Home</span></a></li>
  <li class="top"><a href="user_updates.php" class="top_link"><span>Location Map</span></a></li>
  <li class="top"><a href="userprofile.php" class="top_link"><span>Profile</span></a></li>
<!--   <li class="top"><a href="user_ameneties.php" class="top_link"><span>Amenities</span></a></li> -->
  <li class="top"><a href="user_modelhouses.php" class="top_link"><span>Model Houses</span></a></li>
  <li class="top"><a href="requirements.php" class="top_link"><span>Requirements</span></a></li>
  <li class="top"><a href="user_contactus.php" class="top_link"><span>Contact Us</span></a></li>
  <li class="top"><a href="payment.php" class="top_link"><span>Payment</span></a></li>
  <li class="top"><a href="userpage.php" class="top_link"><span>Go Back</span></a></li>
  <li class="top"><a href="userlogout.php" class="top_link"><span>Logout</span></a></li>
</ul>
<div class="content">
  <div class="req" align="center"> <br />
 <a href="uploadtinno.php"><img src="img/tin.png"/></a>
	<?php	
  $result = mysql_query("SELECT * FROM `tincard` WHERE email='".$_SESSION['email'] ."' ");
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	if ($numberOfRows > 0) 
		{
		$i=0;
			$tincard = MYSQL_RESULT($result,$i,"filename");						
	
	echo '<img src="img/check.png" alt="Unable to View" >';
		}
	?>
 <br /><br />
 <a href="upload2x2.php" ><img src="img/2x2.png"/></a>
 	<?php	
  $result = mysql_query("SELECT * FROM `picture` WHERE email='".$_SESSION['email'] ."' ");
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	if ($numberOfRows > 0) 
		{
		$i=0;
			$pix = MYSQL_RESULT($result,$i,"filename");						
	
	echo '<img src="img/check.png" alt="Unable to View" >';
		}
	?>

 <br /><br />
 <a href="cedula.php"><img src="img/comtax.png"/></a>
 	<?php	
  $result = mysql_query("SELECT * FROM `cedula` WHERE email='".$_SESSION['email'] ."' ");
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	if ($numberOfRows > 0) 
		{
		$i=0;
			$cedula = MYSQL_RESULT($result,$i,"filename");						
	
	echo '<img src="img/check.png" alt="Unable to View" >';
		}
	?>

 <br /><br />
 <a href="billingstat.php"><img src="img/bill.png"/></a>
  	<?php	
  $result = mysql_query("SELECT * FROM `billingstatement` WHERE email='".$_SESSION['email'] ."' ");
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	if ($numberOfRows > 0) 
		{
		$i=0;
			$bill = MYSQL_RESULT($result,$i,"filename");						
	
	echo '<img src="img/check.png" alt="Unable to View" >';
		}
	?>

 <br /><br />
 <a href="validid.php"><img src="img/id.png"/></a>
   	<?php	
  $result = mysql_query("SELECT * FROM `validid` WHERE email='".$_SESSION['email'] ."' ");
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	if ($numberOfRows > 0) 
		{
		$i=0;
			$validid = MYSQL_RESULT($result,$i,"filename");						
	
	echo '<img src="img/check.png" alt="Unable to View" >';
		}
	?>

 <br /><br />
 <a href="birth_marriage.php"><img src="img/marriage.png"/></a>
   	<?php	
  $result = mysql_query("SELECT * FROM `birth_marriage` WHERE email='".$_SESSION['email'] ."' ");
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	if ($numberOfRows > 0) 
		{
		$i=0;
			$marriage = MYSQL_RESULT($result,$i,"filename");						
	
	echo '<img src="img/check.png" alt="Unable to View" >';
		}
	?>

 <br /><br />
 <a href="birthcert.php"><img src="img/birth.png"/></a>
   	<?php	
  $result = mysql_query("SELECT * FROM `birthcert` WHERE email='".$_SESSION['email'] ."' ");
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	if ($numberOfRows > 0) 
		{
		$i=0;
			$birth = MYSQL_RESULT($result,$i,"filename");						
	
	echo '<img src="img/check.png" alt="Unable to View" >';
		}
	?>

 <br />

 <br />
  </div>
  <br />
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
