<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
       <li class="top"><a href="user_index.php" class="top_link"><span>Home</span></a></li>
  <li class="top"><a href="user_updates.php" class="top_link"><span>Location Map</span></a></li>
  <li class="top"><a href="userprofile.php" class="top_link"><span>Profile</span></a></li>
<!--   <li class="top"><a href="user_ameneties.php" class="top_link"><span>Amenities</span></a></li> -->
  <li class="top"><a href="user_modelhouses.php" class="top_link"><span>Model Houses</span></a></li>
  <li class="top"><a href="requirements.php" class="top_link"><span>Requirements</span></a></li>
  <li class="top"><a href="user_contactus.php" class="top_link"><span>Contact Us</span></a></li>
  <li class="top"><a href="userlogout.php" class="top_link"><span>Logout</span></a></li>

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
	Subdivision Name: &nbsp; <?php echo $subname; ?><br />
	phase Number:&nbsp; <?php echo $phase; ?><br />
	Block Number:&nbsp; <?php echo $block; ?><br />
	Lot Number:&nbsp; <?php echo $lotno; ?><br />
	Lot Area: &nbsp; <?php echo $lotarea; ?><br />
	Price/sq.m: &nbsp;Php &nbsp;<?php echo $price; ?><br />
	<form action="user_directreservation.php" method="post">
	<input type="hidden" name="subname"  value="<?php echo $subname; ?>"/>
	<input type="hidden" name="phase"  value="<?php echo $phase; ?>"/>
	<input type="hidden" name="block"  value="<?php echo $block; ?>"/>
	<input type="hidden" name="lotno"  value="<?php echo $lotno; ?>"/>
	<input type="hidden" name="lotarea"  value="<?php echo $lotarea; ?>"/>
	<input type="hidden" name="price"  value="<?php echo $price; ?>"/>	
	<input type="submit" name="direct" value="Reserve Now" />
	</form>
	<br />
  </div>
	<br /><br />
	<br /><br /><br /><br />
*Note:<br />
Price may change without prior notice

<div align="center"></div>
<br /><br />
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
