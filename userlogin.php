<?php
	//Start session
	session_start();
	unset($_SESSION['id']);
	unset($_SESSION['fname']);
	unset($_SESSION['lname']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="img/favicon.png" type="image" />
<link rel="shortcut icon" href="img/favicon.png" type="image" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Customer Log-in</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>

<script src="lib/jquery.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>

<script type="text/javascript">
$.validator.setDefaults({
	//submitHandler: function() { alert("submitted!"); }
});

$().ready(function() {	
	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
			email: {
				required: true,
				email: true
			}
		},
		messages: {
			email: "Please enter a valid email address"
		}
	});
});
</script>
<style type="text/css">
#signupForm { width: 100%; }
#signupForm label.error {
	margin-left: 40px;
	width: auto;
	font-size:10PX;
	display: inline;
	color:#FF0000;
}
</style>

</head>
<body>
<div class="main">
<div class="header"><img src="img/header1.gif" width="980" height="250" /></div>
<br /><br /><br /><br /><br /><br />
<ul id="nav">
  <li class="top"><a href="index.php" class="top_link"><span>Home</span></a></li>
  <li class="top"><a href="update.php" class="top_link"><span>Location Map</span></a></li>
  <li class="top"><a href="profile.php" class="top_link"><span>Profile</span></a></li>
   <!-- <li class="top"><a href="amenities.php" class="top_link"><span>Amenities</span></a></li> -->
  <li class="top"><a href="modelhouse.php" class="top_link"><span>Model Houses</span></a></li>
  <li class="top"><a href="contactus.php" class="top_link"><span>Contact Us</span></a></li>
  <li class="top"><a href="userlogin.php" class="top_link"><span>Customer Login</span></a></li>
</ul>
<div class="content"><br /><br />
<form action="loginuser.php" method="post" id="signupForm">
  <table width="388" height="193" border="0" align="center">
    <tr>
      <td width="123">Email Address:</td>
      <td width="255" align="center"><input type="text" name="email" class="input" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td align="center"><input type="password" name="password" class="input" /></td>
    </tr>
    <tr>
      <td></td>
      <td align="center">
        <div style="display: flex; justify-content: center;">
          <input type="submit" name="register" value="Log-In" class="btn1" />
          <input type="submit" name="register2" value="Sign-Up" class="btn1" />
        </div>
      </td>
    </tr>
    <tr>
      <td></td>
      <td align="center"><a href="forgot.php">Forgot Password?</a></td>
    </tr>
  </table>
</form>



<div align="center">
 <?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<br><font color="red"><br>',$msg,'</font></br>'; 
		}
		unset($_SESSION['ERRMSG_ARR']);
	}
?><br /><br /></div>

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

