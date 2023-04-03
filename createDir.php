<?php
/**********************
File: createDir.php
Author: Frost
Website: http://www.slunked.com
***********************/
// set our absolute path to the directories will be created in:
$path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
 
 
if (isset($_POST['create'])) {
	$date=$_POST['date'];
	$directory=$_POST['dirName'];
	// Grab our form Data
	$dirName = isset($_POST['dirName'])?$_POST['dirName']:false;
 
	// first validate the value:
	if ($dirName !== false) {
		// We have a valid directory:
		if (!is_dir($path . $dirName)) {
			// We are good to create this directory:
			if (mkdir($path . $dirName, 0775)) {
				$success = "Your directory has been created succesfully!<br /><br />";
				include("include/dbconnection.php");
					$sql="INSERT INTO activity (activity_name,datemake) VALUES ('$dirName','$date')";
						if (!mysql_query($sql))
							  {
							  die('Error: ' . mysql_error());
							  }
							  ?>
							  <?php
require_once("include/auth.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
			image: "required"
			},
		messages: {
			image: "Please Select Image Firts to Proceed"
		}
	});
});
</script>
<style type="text/css">
#signupForm { width: 670px; }
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
<div class="header"><img src="img/header1.gif" width="980" height="250" /></div>
<br /><br /><br /><br /><br /><br />
<div class="content">
<div class="sideleft"><br />
<div class="sidenav">
	<div class="left">
	<br />
	<a href="editaccount.php">Edit Account </a><br />
	<br />
	  <?php
		include("include/dbconnection.php");
		$result = mysql_query("SELECT * FROM reserve WHERE Rstatus='Temporarily Reserved' ORDER BY date ASC");
		$rows = mysql_numrows($result);	
		echo '<font size="2" color="black"><b>' . $rows. '</b></font>';
	 ?>
	  <a href="pendingreservation.php">Pending Reservation</a> <br />
	  <br />
	  <a href="adminreservation.php">Create New Reservation</a>	  
	  <br /><br />
	  <a href="confirmed.php">Confirmed Reservation</a>	  </div>
	<br />
</div>
	  <br />
</div>
<div class="insidecontent">
<div align="center">
<form action="activity.php" method="post" enctype="multipart/form-data" id="signupForm">
<br /><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload Another Picture for <?php echo $dirName; ?></h1>
<br />
	  <?php
		include("include/dbconnection.php");
		$id=$_POST['dirName'];
	$result = mysql_query("SELECT * from `activity` WHERE activity_name = '$id' ");     
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	
	If ($numberOfRows == 0) 
		{
		//echo 'Sorry No Record Found!';
		}
	else if ($numberOfRows > 0) 
		{
		$i=0;
		
			$activityid = MYSQL_RESULT($result,$i,"activity_id");
		}			
	 ?>



		<input type="hidden" name="date"  value="<?php echo date("D, M d, Y"); ?>"/>
		<input type="hidden" name="directory"  value="<?php echo $dirName; ?>"/>
		<input type="hidden" name="id"  value="<?php echo $activityid; ?>"/>
<input type="file" name="image" class="input"/><br /> <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" class="btn" name="save"  id="image" value="Upload Picture" />
</form>
</div>
</div>
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

							  <?php
							  
							exit();
			}else {
				$error = "Unable to create dir {$dirName}.";
			}
		}else {
			$error = "Directory {$dirName} already exists.";
				header("Location:createevent.php");
		}
	}else {
		// Invalid data, htmlenttie them incase < > were used.
		$dirName = htmlentities($dirName);
		$error = "You have invalid values in {$dirName}.";

	}
}
?>
