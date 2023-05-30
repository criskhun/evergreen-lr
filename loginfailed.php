<?php
	//Start session
	session_start();
	unset($_SESSION['id']);
	unset($_SESSION['name']);
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
<div class="main">
<div class="header"><img src="img/header1.gif" width="980" height="250" /></div>
<br /><br /><br /><br /><br /><br />
<ul id="nav">
  <li class="top"><a href="index.php" class="top_link"><span>Home</span></a></li>
  <li class="top"><a href="profile.php" class="top_link"><span>Profile</span></a></li>
  <li class="top"><a href="update.php" class="top_link"><span>Updates</span></a></li>
  <li class="top"><a href="amenities.php" class="top_link"><span>Ameneties</span></a></li>
    <!-- <li class="top"><a href="modelhouse.php" class="top_link"><span>Model Houses</span></a></li> -->
  <li class="top"><a href="contactus.php" class="top_link"><span>Contact Us</span></a></li>
  <li class="top"><a href="userlogin.php" class="top_link"><span>Customer Login</span></a></li>
</ul>
<div class="content"><br /><br />
<div align="center">
  <h8>Login Failed..<br />
    Incorrect Username or Password..<br />Try Again...</h8></div><br />
<form action="loginuser.php" method="post">
<table width="340" height="140" border="0" align="center">
  <tr>
    <td width="87">Email Address: </td>
    <td width="243"><input type="text" name="email" class="input" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" class="input" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><p>
      <input type="submit" name="register" value="Log-In"  class="btn1"/>
    </p>
  </tr>
</table>
</form>
<div align="center">
<br /><br /></div>

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

