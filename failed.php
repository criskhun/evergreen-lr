<?php session_start();?>
<?php
$phase=$_REQUEST['phase'];
$block=$_REQUEST['block'];
$lotno=$_REQUEST['lotno'];
$subname=$_REQUEST['subname'];
$lotarea=$_REQUEST['lotarea'];
$price=$_REQUEST['price'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">

<script src="css/stuHover.js" type="text/javascript"></script>
</head>
<body>
<div class="main">
<div class="header"><img src="img/header1.gif" width="980" height="250" /></div>
<br /><br /><br /><br /><br /><br />
<ul id="nav">
  <li class="top"><a href="index.php" class="top_link"><span>Home</span></a></li>
  <li class="top"><a href="profile.php" class="top_link"><span>Profile</span></a></li>
  <li class="top"><a href="#" class="top_link"><span>Updates</span></a></li>
  <li class="top"><a href="amenities.php" class="top_link"><span>Ameneties</span></a></li>
    <!-- <li class="top"><a href="modelhouse.php" class="top_link"><span>Model Houses</span></a></li> -->
  <li class="top"><a href="#" class="top_link"><span>Contact Us</span></a></li>
</ul>
<div class="content">

<div align="center">
<br />
	<h8>Sorry, you have provided an invalid security code </h8>
	<br />
	
	<br />
	<h8><a href="directreservation.php">Back</a></h8>
	<br />
	<br />
</div><br /><br />
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
