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
  <li class="top"><a href="update.php" class="top_link"><span>Location Map</span></a></li>
  <li class="top"><a href="profile.php" class="top_link"><span>Profile</span></a></li>
   <!-- <li class="top"><a href="amenities.php" class="top_link"><span>Amenities</span></a></li> -->
    <!-- <li class="top"><a href="modelhouse.php" class="top_link"><span>Model Houses</span></a></li> -->
  <li class="top"><a href="contactus.php" class="top_link"><span>Contact Us</span></a></li>
  <li class="top"><a href="userlogin.php" class="top_link"><span>Customer Login</span></a></li>
</ul>
<div class="content">
<div class="sideleft"><br />
  <div class="sidenav">
    <div align="center">
      <nr>
      <br />
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
  <br />
  <div class="sidenav">
    <div align="center">

      <h1>Comments<br />
--------------------------------	  </h1>
      <?php
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM comment WHERE status='posted'  ORDER BY date DESC");


while($row = mysql_fetch_array($result))
  {
   echo '<div style=" text-align:left; margin-left:10px;">';
  echo "" . $row["comment"] . "<br><br>";
 echo '</div>';
  }
?>
      <br />

    </div>
	<br />
  </div>
  <br />
</div>
<div class="insidecontent"><br />
<form action="message.php" method="post" id="signupForm"> 
Email Address:<br /><br />
<input type="text" name="email" id="email" class="input4" />
<br />
<BR />	
Message:<br /><br />
<textarea name="content" id="content" cols="10" rows="25" class="input4"></textarea>
<br />
<br />
<input type="hidden" name="date"  value="<?php echo date("D, M d, Y"); ?>"/>
<input type="submit" name="Send" value="Send Message" class="btn2" />
</form>

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
