<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Customer Registration</title>
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
			bday: "required",
			name: "required",
			username: {
				required: true,
				minlength: 2
			},
			password: {
				required: true,
				minlength: 6
			},
			confirm_password: {
				required: true,
				minlength: 6,
				equalTo: "#password"
			},
			confirm_email: {
				required: true,
				minlength: 6,
				equalTo: "#email"
			},
			email: {
				required: true,
				email: true
			},
			address: {
				required: true
			},
			agree: "required"
			},
			content: {
			 	 required:true,
				 content: true
		},
		messages: {
			bday: "Please enter date of birth (numbers only)",
			name: "Please enter your Complete Name",
			username: {
				required: "Please enter a username",
				minlength: "Your username must consist of at least 6 characters"
			},
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 6 characters long"
			},
			confirm_password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 6 characters long",
				equalTo: "Please enter the same password as above"
			},
			confirm_email: {
				required: "Please provide a valid Email Address",
				equalTo: "Please enter the same Email Address as above"
			},
			email: "Please enter a valid email address",
			address: "Please enter your address"
		}
	});
});
</script>
<style type="text/css">
#signupForm { width: 100%; margin:0 auto }
#signupForm label.error {
	margin-left: 40px;
	width: auto;
	font-size:10PX;
	display: inline;
	color:#FF0000;
}
</style>
<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>


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
  <li class="top"><a href="modelhouse.php" class="top_link"><span>Model Houses</span></a></li>
  <li class="top"><a href="#" class="top_link"><span>Contact Us</span></a></li>
</ul>
<div class="content">
  <div class="content1"><br />
<form action="register.php" method="post" id="signupForm">
<table width="748" height="314" border="0" align="center">
  <tr>
    <td width="212">Complete Name: </td>
    <td width="526"><input type="text" name="name" class="input" id="name" style=" text-transform:capitalize"/></td>
  </tr>
    <tr>
      <td>Date of Birth (mm-dd-yyyy):</td>
	  <td><input type="text" name="bday" id="bday" class="input" onkeypress="return isNumberKey(event)" /></td>
    <tr>
    <td>Gender </td>
    <td><select name="gender" id="gender" style="width: 220px; margin-left:27px;" class="input">
	<option> Select Gender</option>
	<option> Male</option>
	<option> Female</option>
	</select></td>
  </tr>
  <tr>
    <td>Complete Address</td>
    <td><input type="text" name="address" class="input" /></td>
  </tr>
  <tr>
    <td>Email Address</td>
    <td><input type="text" name="email" id="email" class="input" /></td>
  </tr>
  <tr>
    <td>Confirm Email Address</td>
    <td><input type="text" name="confirm_email" id="confirm_email" class="input" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" id="password" class="input" /></td>
  </tr>
  <tr>
    <td>Confrim Password </td>
    <td><input type="password" name="confirm_password" id="confirm_password" class="input" /></td>
  </tr>
  <tr>
    <td height="5"></td>
    <td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="register" value="Register"  class="btn1"/></td>
  </tr>
</table>
</form>
<div align="center">
  <?php 
	  if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<font color="red"><br><br>',$msg,'</font></br>'; 
		}
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
  <br />
<br /></div>
</div>

<div style="clear:both"></div>
</div>

<div style="clear:both"></div>
<div class="bottommenu"> Terms and Condition | Home | About Us | Contact Us| Developer</div>
<div class="footer">
Copyright 2023&copy; RMMC Student Development
</div>
</div>
</body>
</html>
