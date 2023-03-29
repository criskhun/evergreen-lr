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
  <li class="top"><a href="adminreservation.php" class="top_link"><span>Reservation</span></a></li>
  <!-- <li class="top"><a href="events.php" class="top_link"><span>Company Events</span></a> -->
  			<ul class="sub">
			<li><a href="createevent.php" class="fly">Create Events</a></li>
			</ul></li>
  <li class="top"><a href="logout.php" class="top_link"><span>Logout</span></a></li>

</ul>
<div class="content"><br />
<form method="post" action="reply.php">

	<?php require("include/dbconnection.php") ?>
	<?php
	$message_id =$_GET['message_id'];


$result = mysql_query("SELECT * FROM message WHERE  message_id ='$message_id' ");

echo "<br />";
while($row = mysql_fetch_array($result))
  {
  		echo '<div align="center" style=" font-family:Arial;">';
		echo 'Sender:<br>';
  		echo '<input type="text" name="reciever" class="input4" value="'.$row['email'].'"><br>';
		echo 'Message<br>';
		echo'<textarea cols="25" rows="25" class="input4">'. $row['content'] .' </textarea>';
		echo '</div>';
  }

?>
	</p></td>
    <td width="243" colspan="2">
    <br />
		<br />
<div align="center"> 
<input type="submit" name="save" id="save" value=" Reply " class="btn" />
<a href="viewmessage2.php"><input type="button" name="back" value="Back" class="btn" /></a>
</div>
</form>
<br /><br />
  <div style="clear:both"></div>
</div>

<div style="clear:both"></div>
<div class="footer">
Copyright 2023&copy; RMMC Student Development
</div>
</div>
</body>
</html>
