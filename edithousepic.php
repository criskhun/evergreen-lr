<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit House Picture</title>
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
  <li class="top"><a href="adminreservation.php" class="top_link"><span>Reservation</span></a></li>
  <li class="top"><a href="events.php" class="top_link"><span>Company Events</span></a>
  			<ul class="sub">
			<li><a href="createevent.php" class="fly">Create Events</a></li>
			</ul></li>
  <li class="top"><a href="logout.php" class="top_link"><span>Logout</span></a></li>

</ul>
<div class="content">
<div class="content1"><br />
  <?php require("include/dbconnection.php") ?>
  <center>
    <h1>Upload New House Image</h1>

	<form method="post" enctype="multipart/form-data">
File Name:
    <input type="file" name="image"> <br /><br />
    <input type="submit" value="Upload" class="btn">
</form>

	<p>
	  <?php
	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);
	$houseid=$_GET['houseid'];
	
		if ($image_size==FALSE) {
		
			echo "<font color='#FF0000'>Select an Image</font>";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"houseimg/" . $_FILES["image"]["name"]);
			$location="houseimg/" . $_FILES["image"]["name"];
			if(!$update=mysql_query("UPDATE house SET houseimg = '$location' WHERE house_id='$houseid'" ))
			 {
				echo mysql_error();
				}
				header("location:viewhouse.php?houseid=".$houseid."");
			exit();
			}
			}


?>
	  <br />
	    <br />
	  <br />
    </p>
  </center>
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
