<?php
session_start();
?>
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
    <li class="top"><a href="admin_index.php" class="top_link"><span>Home</span></a></li>
  <li class="top"><a href="subdivision.php" class="top_link"><span>Subdivision</span></a>
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
<div class="content1"><br />
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
			$subname = MYSQL_RESULT($result,$i,"subdname");
			$model = MYSQL_RESULT($result,$i,"model");
			$type = MYSQL_RESULT($result,$i,"type");						
			$lotarea = MYSQL_RESULT($result,$i,"lotarea");
			$floorarea = MYSQL_RESULT($result,$i,"floorarea");
			$price = MYSQL_RESULT($result,$i,"price");
			$houseimg = MYSQL_RESULT($result,$i,"houseimg");
			$desc = MYSQL_RESULT($result,$i,"description");
	}
	
	?>
	<center>
	<div class="wrapper"><div class="box2"><img src="<?php echo $houseimg; ?>" height="210" width="245" style="margin-top:20PX;"  align="middle"/><br /></div></div>
		<a href="edithousepic.php?houseid= <?php echo $houseid; ?>">Change House Image</a><br />
		<br />
	<div class="view">
	House Name : &nbsp;	<?php echo $model; ?><br />
	House Type : &nbsp;<?php echo $type; ?><br />
	Description : &nbsp;<?php echo $desc; ?><br />
	Lot Area : &nbsp;<?php echo $lotarea; ?><br />
	Floor Area : &nbsp;<?php echo $floorarea; ?><br />
	Cost Price : &nbsp;<?php echo $price; ?><br />
	<a href="edithouse.php?houseid= <?php echo $houseid; ?>">Edit</a><br />
  <br /> 
  </div>
  <br />
</center>
</div>
  <div style="clear:both"></div>
</div>

<div style="clear:both"></div>
<div class="footer">
Copyright 2023&copy; RMMC Student Development
</div>
</div>
</body>
</html>
