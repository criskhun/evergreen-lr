<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DPRC- Specific Lot</title>
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
   <!-- <li class="top"><a href="amenities.php" class="top_link"><span>Amenities</span></a></li> -->
    <!-- <li class="top"><a href="modelhouse.php" class="top_link"><span>Model Houses</span></a></li> -->
  <li class="top"><a href="contactus.php" class="top_link"><span>Contact Us</span></a></li>
  <li class="top"><a href="userlogin.php" class="top_link"><span>Customer Login</span></a></li>
</ul>
<div class="content"><br /> 


	<?php require("include/dbconnection.php") ?>
	<?php	

	$lotid =$_GET['lotid'];	
	$result = mysql_query("SELECT * from `lot` WHERE lot_id = '$lotid' ");     
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
		
			$lotid = MYSQL_RESULT($result,$i,"lot_id");	
			$subname = MYSQL_RESULT($result,$i,"subdname");
			$phase = MYSQL_RESULT($result,$i,"phase");
			$block = MYSQL_RESULT($result,$i,"block");	
			$lotno = MYSQL_RESULT($result,$i,"lotno");	
			$lotarea = MYSQL_RESULT($result,$i,"lotarea");
			$price = MYSQL_RESULT($result,$i,"price");
			$status = MYSQL_RESULT($result,$i,"lotstatus");	
		}
		
	?>
	<div class="search1"><img src="img/signage.png" height="210" width="245" style="margin-top:10PX; margin-left:10px; margin-bottom:10px;"/></div>
	<br /><br />
	<div class="searchresult1">
	Subdivision Name: &nbsp;<strong><?php echo $subname; ?></strong><br />
	phase Number:&nbsp; <strong><?php echo $phase; ?></strong><br />
	Block Number:&nbsp; <strong><?php echo $block; ?></strong><br />
	Lot Number:&nbsp;<strong><?php echo $lotno; ?></strong><br />
	Lot Area: &nbsp;<strong><?php echo $lotarea; ?></strong><br />
	Price/sq.m: &nbsp;Php &nbsp;<strong><?php echo  number_format($price,2); ?></strong><br />
	<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$subname.'">';
	echo '<input type="hidden" name="phase" value="'.$phase.'">';
	echo '<input type="hidden" name="block" value="'.$block.'">';
	echo '<input type="hidden" name="lotno" value="'.$lotno.'">';
	echo '<input type="hidden" name="lotarea" value="'.$lotarea.'">';
	echo '<input type="hidden" name="price" value="'.$price.'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation...Select Another Lot...</font>';
	echo '<br><br><h8><marquee behavior="alternate">See Available Lot Suggestions Below</marquee></h8>';
	}
	 
	?>
<br />
  </div>
	<br /><br />
	<br /><br /><br /><br /><br />
	
	<div  class="insideleft">
	<?php 
	
	
	require("include/dbconnection.php");
		$avail='Available';
$result = mysql_query("SELECT * FROM lot WHERE phase='$phase' and lotstatus='$avail' ORDER BY RAND() LIMIT 2");
while($row = mysql_fetch_array($result))
		  {
	if ($status!="Available"){
	echo '<div class="search2"><img src="img/signage.png" height="150" width="`150" style="margin-top:10PX; margin-left:10px; margin-bottom:10px;"/>';
	echo '<div class="searchresult2">';
	echo 'Subdivision Name:'.$row['subdname'].'<br>';
	echo 'Phase Number:'.$row['phase'].'<br>';
	echo 'Block Number:'.$row['block'].'<br>';
	echo 'Lot Number:'.$row['lotno'].'<br>';
	echo 'Lot Area:'.$row['lotarea'].'<br>';
	echo 'Price sq.m:'.number_format($row['price'],2).'<br>';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$subname.'">';
	echo '<input type="hidden" name="phase" value="'.$phase.'">';
	echo '<input type="hidden" name="block" value="'.$block.'">';
	echo '<input type="hidden" name="lotno" value="'.$lotno.'">';
	echo '<input type="hidden" name="lotarea" value="'.$lotarea.'">';
	echo '<input type="hidden" name="price" value="'.number_format($price,2).'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div><br></div><br /><br />';
	}
	}
	?>
</div>
<div class="insideright">	
	<?php 
	require("include/dbconnection.php");
	$avail='Available';
$result = mysql_query("SELECT * FROM lot WHERE phase='$phase' and lotstatus='$avail' ORDER BY RAND() LIMIT 2");
while($row = mysql_fetch_array($result))
		  {
	if ($status!="Available"){
	echo '<div class="search2"><img src="img/signage.png" height="150" width="`150" style="margin-top:10PX; margin-left:10px; margin-bottom:10px;"/>';
	echo '<div class="searchresult2">';
	echo 'Subdivision Name:'.$row['subdname'].'<br>';
	echo 'Phase Number:'.$row['phase'].'<br>';
	echo 'Block Number:'.$row['block'].'<br>';
	echo 'Lot Number:'.$row['lotno'].'<br>';
	echo 'Lot Area:'.$row['lotarea'].'<br>';
	echo 'Price sq.m:'.number_format($row['price'],2).'<br>';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$subname.'">';
	echo '<input type="hidden" name="phase" value="'.$phase.'">';
	echo '<input type="hidden" name="block" value="'.$block.'">';
	echo '<input type="hidden" name="lotno" value="'.$lotno.'">';
	echo '<input type="hidden" name="lotarea" value="'.$lotarea.'">';
	echo '<input type="hidden" name="price" value="'.number_format($price,2).'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div><br></div><br /><br />';
	}
	}
	?>	</div>
	<div style="clear:both"></div>
<div align="center">
*Note:<br />
Price may change without prior notice
</div>
<div align="center"></div>
<br /><br />
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
