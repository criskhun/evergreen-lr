<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Birth Cert/Marriage Con Upload</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">

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
			image: "required"
			},
		messages: {
			image: "Please Select Image First to Proceed"
		}
	});
});
</script>
<style type="text/css">
#signupForm { width: 670px; }
#signupForm label.error {
	width: auto;
	font-size:10PX;
	display:list-item;
	/*display: inline;*/
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
  <li class="top"><a href="user_updates.php" class="top_link"><span>Updates</span></a></li>
  <li class="top"><a href="user_ameneties.php" class="top_link"><span>Ameneties</span></a></li>
  <li class="top"><a href="user_modelhouses.php" class="top_link"><span>Model Houses</span></a></li>
  <li class="top"><a href="requirements.php" class="top_link"><span>Requirements</span></a></li>
  <li class="top"><a href="user_contactus.php" class="top_link"><span>Contact Us</span></a></li>
  <li class="top"><a href="userlogout.php" class="top_link"><span>Logout</span></a></li>
</ul>
<div class="content">

<div align="center">
<br />

	<form  action="save3rdcopy.php"method="post" enctype="multipart/form-data" id="signupForm">
		<input type="hidden" name="userid" value="<?php echo $_SESSION['id']; ?>" />
		<input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>" />
		<input type="hidden" name="buyer" value="<?php echo $_SESSION['name']; ?>" />
		<input type="hidden" name="date"  value="<?php echo date("D, M d, Y"); ?>"/>
<br />
<div align="center">
  <h8>Second Page of Marriage Contract has been Successfully Uploaded
  <br />
  <br />
  Upload Third Page of Marriage Contract</h8>
</div><br />
File Name:
    <input type="file" name="image" id="image"> <br /><br />
	<input name="submit" type="submit" class="btn" value="Upload" />
	<a href="requirements.php">
	<input name="submit2" type="button" class="btn" value="Back" />
	</a>
	</form>
<br/><br/>
</div>
  <div style="clear:both"></div>
</div>

<div style="clear:both"></div>
<div class="bottommenu"> Terms and Condition | Home | About Us | Contact Us| Developer</div>
<div class="footer">

</div>
</div>
</body>
</html>
