<?php
require_once("include/auth.php");
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contact Us</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script src="css/stuHover.js" type="text/javascript"></script>
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
			},
			content: "required"
		},
		messages: {
			email: "Please enter a valid email address",
			content: "Don't leave this area Empty"
				}
	});
});
</script>
<style type="text/css">
#signupForm { width: 670px; }
#signupForm label.error {
	margin-left: 5px;
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
  <li class="top"><a href="user_index.php" class="top_link"><span>Home</span></a></li>
  <li class="top"><a href="userprofile.php" class="top_link"><span>Profile</span></a></li>
  <li class="top"><a href="user_updates.php" class="top_link"><span>Location Map</span></a></li>
<!--   <li class="top"><a href="user_ameneties.php" class="top_link"><span>Amenities</span></a></li> -->
  <li class="top"><a href="user_modelhouses.php" class="top_link"><span>Model Houses</span></a></li>
  <li class="top"><a href="requirements.php" class="top_link"><span>Requirements</span></a></li>
  <li class="top"><a href="user_contactus.php" class="top_link"><span>Contact Us</span></a></li>
  <li class="top"><a href="userlogout.php" class="top_link"><span>Logout</span></a></li>
</ul>
<div class="content">
<div class="sideleft"><br />
  <div class="sidenav">
    <div align="center">
      <h1>Evergreen Office:</h1>
      Room 101 Mancel Building<br />
      25th Lacson Street<br />
      General Santos City<br />
      <h1>Email Address:</h1>
      admin@yahoo.com.ph<br />
      <h1>Telephone Numbers:</h1>
      (034)709-14-86<br />
      (034)433-76-87<br />
      <br />
    </div>
  </div>
  <div class="sidenav">
    <div align="center">
      <h1>Comments</h1>
	  <form action="comment.php" method="post">
<input type="hidden" name="date"  value="<?php echo date("D, M d, Y"); ?>"/>
	<textarea cols="5" rows="5" class="input7" name="comment"></textarea>
	    <br />
	    <br />
	  <input type="submit" name="post" value="Submit Comment" class="btn" />
	  </form>
      <br />
      <br />
	  
    </div>
  </div>
<br /></div>
<div class="insidecontent"><br />
<form action="user_sendmessage.php" method="post" id="signupForm"> 
Email Address:<br /><br />
<input type="text" name="email" id="email" class="input3"  value="<?php echo $_SESSION['email']; ?>"/>
<br /><br />
Message:<br /><br />
<textarea name="content" id="content" cols="10" rows="25" class="input3"></textarea>
<br /><br />
<input type="submit" name="Send" value="Send Message" class="btn2" />
<br/>
<br />
</form>
</div>

<div style="clear:both"></div>
</div>

<div style="clear:both"></div>
<div class="bottommenu"> <a href="#">Terms and Condition</a> | <a href="user_index.php">Home</a> | <a href="userprofile.php">About Us</a> | <a href="user_contactus.php">Contact Us</a>|<a href="#"> Developer</a></div>
<div class="footer">
<!-- Copyright 2023&copy; RMMC Student Development -->
</div>
</div>
</body>
</html>
