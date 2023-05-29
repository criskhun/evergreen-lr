<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="img/favicon.png" type="image" />
<link rel="shortcut icon" href="img/favicon.png" type="image" />

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
  <li class="top"><a href="adminreservation.php" class="top_link"><span>Reservation</span></a></li>
  <!-- <li class="top"><a href="events.php" class="top_link"><span>Company Events</span></a> -->
  			<ul class="sub">
			<li><a href="createevent.php" class="fly">Create Events</a></li>
			</ul></li>
  <li class="top"><a href="logout.php" class="top_link"><span>Logout</span></a></li>

</ul>
<br />
<br />
<div align="center"><a href="pendingpayments.php"><h1>Back</h1></a></div>
<?php require("include/dbconnection.php") ?>
<br /><br />

	<!--Payments -->
	<?php	
	$email =$_GET['email'];
	
	//$result = mysql_query("SELECT * from `reserve` WHERE reserveid = '$reserveid' ");     
  $result = mysql_query("SELECT * FROM `payment` WHERE email='$email' ");
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	if ($numberOfRows > 0) 
		{
		$i=0;
			$email = MYSQL_RESULT($result,$i,"email");						
			$payment = MYSQL_RESULT($result,$i,"filename");						
			$dateuploaded5 = MYSQL_RESULT($result,$i,"dateuploaded");
	
	echo "<div align='center'>";
	echo "<strong>Uploaded Copy of Payments</strong><br>";
	echo "<img src=".$payment." width=180 height=150 alt='Unable to View' ><br />";
	echo "<a href='download.php?file=".$payment."'>Download File</a>";
	echo "<br><br>";
		}
		else if ($numberOfRows == 0) 
		{
	echo "<div align='center'>";
	echo "<strong>Uploaded Copy of Payments</strong><br>";
		echo 'Sorry No Record Found!<br>';
		echo "<br>";
	echo "</div>";	
		}
	?>

</div>	
</body>
</html>
