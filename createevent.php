<?php
//require_once("include/auth.php");
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
<div class="sideleft"><br />
    <div class="sidenav"><br />
        <h1><u>Activities</u></h1>
        <?php 
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM activity  ORDER BY datemake")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<h1><a href=uploadpic.php?activityid='.$row['activity_id'].'>'.$row['activity_name'] . '</a></h1>'; 
        } 
?>
        <br />
    </div>
    <br />
  </div>
  <div class="insidecontent">
  <div align="center">
	<h1>Make Directory on Company Activities and Events</h1>
	<form  method="POST" action="createDir.php">
			<input type="hidden" name="date"  value="<?php echo date("D, M d, Y"); ?>"/>
	Enter a Folder Name:<br /><br />
	<input type="text" value="" name="dirName" class="input4"  style="text-align:center"/>
	<br />
	<br />
	<br />
	<input type="submit" name="create" value="Create Directory" class="btn"/>
	</form>
	<br />
	</div>
    </div>
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
