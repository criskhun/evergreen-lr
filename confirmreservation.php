<?php
 include("include/dbconnection.php");

$reserveid=$_POST['reserveid'];

$subname=$_POST['subname'];
$email=$_POST['email'];
$phase=$_POST['phase'];
$block=$_POST['block'];
$lotno=$_POST['lotno'];
$buyer=$_POST['buyer'];
$email=$_POST['email'];
$terms=$_POST['terms'];
$down=$_POST['down'];
$amort=$_POST['amort'];
$date=$_POST['date'];


mysql_query("UPDATE reserve SET Rstatus = 'Reserved 'WHERE reserveid='$reserveid'");
mysql_query("UPDATE lot SET lotstatus = 'Reserved' WHERE subdname='$subname' and phase='$phase' and block='$block' and lotno='$lotno'");
mysql_query("UPDATE lot SET soldto = '$buyer' WHERE subdname='$subname' and phase='$phase' and block='$block' and lotno='$lotno'");
//header('Location:pendingreservation.php');
?> 
<?php require_once("include/auth.php");?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Send Confirmation</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>

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
			message: "required"
		},
		messages: {
			email: "Please enter a valid email address",
			message: "Don't leave this area Empty"
				}
	});
});
</script>
<style type="text/css">
#signupForm { width: 100%; margin:0 auto; }
#signupForm label.error {
	margin-left:5px;
	width: 100%;
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
<div class="content">
<div class="content1"><br /><br />
<form action="sendconfirmationmsg.php" method="post" id="signupForm">
<div align="center">
Receiver:<br /> <br />
<input type="text" name="email" class="input4" style="text-align:center"  value="<?php echo $email; ?>"/>
<br />
<br />
Subject:<br /><br />
<input type="text" name="subject" class="input4" style="text-align:center" value="Reservation Confirmation" />
<br />
<br />
Message:<br /><br />
<textarea name="message" id="message" cols="10" rows="10" class="input4">
You have Successfully Reserved a Lot in <?php echo $subname; ?> Subdivision 
located at Phase <?php echo $phase; ?>, Lot Number <?php echo $lotno; ?>.
The company will wait for the Required Downpayment amounted to Php <?php echo number_format($down,2); ?> inclusive for 3 months 
and have a Monthly Amortization amounted to Php <?php echo number_format($amort,2); ?> inclusive of <?php echo $terms; ?> of payment.
Thank you and Good Day!...
</textarea>
<br />
<br />
<input type="submit" name="send" value="Send Confirmation Message"  class="btn"/>
</div>
</form>
  <br />
						<br />
</div>
  <div style="clear:both"></div>
</div>

<div style="clear:both"></div>
<div class="footer">
<!-- Copyright 2023&copy; RMMC Student Development -->
</div>
</div>
</body>
</html>
