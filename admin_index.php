<?php
require_once("include/auth.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="img/favicon.png" type="image" />
<link rel="shortcut icon" href="img/favicon.png" type="image" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome Administrator &nbsp;<?php echo $_SESSION['fname'];?>&nbsp;<?php echo $_SESSION['lname'];?></title>
<?php  echo $_SESSION['id'];?>
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
<div class="sidenav">
	<div class="left">
	<br />
	<a href="editaccount.php">Edit Account </a><br />
	<br />
	<?php
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM message WHERE status='unread' ORDER BY date DESC");
$rows = mysql_numrows($result);	
echo '<font size="2" color="black"><b>' . $rows. '</b></font>';
?>
	<a href="viewmessage2.php">Message/s</a>	<br />
	<br />

<?php
include("include/dbconnection.php");

$result = mysql_query("SELECT * FROM comment WHERE status='unpost' ORDER BY date DESC");
$rows = mysql_numrows($result);	
echo '<font size="2" color="black"><b>' . $rows. '</b></font>';
?>
	<a href="unreadcomment.php">Comment/s</a> <br />
	<br />
	<?php
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM reserve WHERE Rstatus='Temporarily Reserved' ORDER BY date ASC");
$rows = mysql_numrows($result);	
echo '<font size="2" color="black"><b>' . $rows. '</b></font>';
?>
	<a href="pendingreservation.php">Pending Reservation</a> <br />
	  <br />

	  <a href="confirmed.php">Confirmed Reservation</a>	<br />
	  <br />
	  <a href="customers.php">Customer(s)</a><br /><br />	
	  <a href="#">Billing</a><br /><br />    </div>
	<br />
</div>
	  <br />
</div>
<div class="insidecontent">
  <div align="center">
	  <h1>WELCOME!<br /><br />     <input type="hidden" name="adminID" value="<?php echo $_SESSION['id'];?>" /></p>

	  Administrator <br />
	  </h1>
	    <h9><div style=" text-decoration:underline"><?php echo $_SESSION['fname'];?>&nbsp;<?php echo $_SESSION['lname'];?></div>
	    </h9>
	  <br /><br />
    </div>

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
