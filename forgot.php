<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['id']);
	unset($_SESSION['firstname']);
	unset($_SESSION['lastname']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Forgot Password</title>
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
			email: "required"
			},
		messages: {
		email: "Please enter a valid email address"		
		}
	});
});
</script>
<style type="text/css">
#signupForm { margin:0 auto }
#signupForm label.error {
	width: auto;
	font-size:10PX;
	display:list-item;
	/*display: inline;*/
	color:#192841
}
</style>
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
</ul>

<div class="content">
<br />
<form action="forgotpass.php" method="post"  id="signupForm">
  <table width="428" height="140" border="0" align="center"> 
    <tr>
      <td width="146">Email Address </td>
      <td width="272"><input type="text" name="email" id="email" class="input" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center"><input type="submit" name="register" value="Send Password to my Email"  class="btn"/></td>
    </tr>
  </table>
</form>
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

