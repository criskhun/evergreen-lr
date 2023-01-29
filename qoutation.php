<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search Results</title>
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
  <li class="top"><a href="update.php" class="top_link"><span>Location Map</span></a></li>
  <li class="top"><a href="profile.php" class="top_link"><span>Profile</span></a></li>
  <li class="top"><a href="amenities.php" class="top_link"><span>Amenities</span></a></li>
  <li class="top"><a href="modelhouse.php" class="top_link"><span>Model Houses</span></a></li>
  <li class="top"><a href="contactus.php" class="top_link"><span>Contact Us</span></a></li>
  <li class="top"><a href="userlogin.php" class="top_link"><span>Customer Login</span></a></li>
</ul>
<div class="content"><br /> 

	<?php require("include/dbconnection.php") ?>
	<?php	
	$houseid =$_GET['houseid'];
	
	$result = mysql_query("SELECT * from `house` WHERE house_id = '$houseid' ");     
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
		
			$houseid = MYSQL_RESULT($result,$i,"house_id");	
			$houseimg = MYSQL_RESULT($result,$i,"houseimg");						
			$subname = MYSQL_RESULT($result,$i,"subdname");
			$model = MYSQL_RESULT($result,$i,"model");
			$type = MYSQL_RESULT($result,$i,"type");						
			$lotarea = MYSQL_RESULT($result,$i,"lotarea");
			$floorarea = MYSQL_RESULT($result,$i,"floorarea");
			$price = MYSQL_RESULT($result,$i,"price");
			$costprice = MYSQL_RESULT($result,$i,"costprice");
			$downpayment = MYSQL_RESULT($result,$i,"downpayment");
			$five = MYSQL_RESULT($result,$i,"five");
			$seven = MYSQL_RESULT($result,$i,"seven");
			$ten = MYSQL_RESULT($result,$i,"ten");
	}
	
	?>
	<div class="search1"><img src="<?php echo $houseimg; ?>" height="210" width="245" style="margin-top:10PX; margin-left:10px; margin-bottom:10px;"/></div><br /><br />
	<div class="searchresult1">
	Subdivision Name: &nbsp; <?php echo $subname; ?><br />
	House Model: &nbsp; <?php echo $model; ?><br />
	House Type: &nbsp; <?php echo $type; ?><br />
	Lot Area: &nbsp; <?php echo $lotarea; ?><br />
	Floor Area: &nbsp; <?php echo $floorarea; ?><br />
	Reservation Fee: Php 10,000.00<br />
	Price/sq.m&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($price,2); ?><br />
	Downpayment:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($downpayment,2); ?><br />
	<strong>Montly Amortization:</strong><br />
	5 years: &nbsp;<font color="#FF0000"> Php</font>&nbsp;<?php echo number_format($five,2); ?><br />
	7 years: &nbsp;<font color="#FF0000"> Php</font>&nbsp;<?php echo number_format($seven,2); ?><br />
	10 years:&nbsp;<font color="#FF0000"> Php</font>&nbsp;<?php echo number_format($ten,2); ?><br />
	</div>
	<br /><br />
	<br />
*Note:<br />
Price may change without prior notice

<div align="center"></div>
<br /><br />
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
