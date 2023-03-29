<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>List of Confirmed Reservation</title>
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
<div class="content1"><br /><br />
  <table width="919" border="0" align="center">
    <tr>
      <td width="23" align="center" bgcolor="#cccccc">RID</td>
      <td width="105" align="center" bgcolor="#cccccc">Buyer</td>
      <td width="123" align="center" bgcolor="#cccccc">Address</td>
      <td width="119" align="center" bgcolor="#cccccc">Date Reserved</td>
      <td width="111" align="center" bgcolor="#cccccc">Subdivision</td>
      <td width="64" align="center" bgcolor="#cccccc">Phase</td>
      <td width="65" align="center" bgcolor="#cccccc">Block</td>
      <td width="82" align="center" bgcolor="#cccccc">Lot Number</td>
      <td width="99" align="center" bgcolor="#cccccc">Action</td>
      <td width="86" align="center" bgcolor="#cccccc">Delete</td>
    </tr>
    <?php 
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM reserve where Rstatus='Reserved' ORDER BY reserveid");
if (!$result) 
	{
    die("Query to show fields from table failed");
	}
$rows = MYSQL_NUMROWS($result);

if ($rows == 0) 
	{
	echo '<div style=" color:red; text-align:center;">No Confirmed Lots Found !</div>';
	}
if ($rows > 0) 
	{
	$i=0;
	while ($i<$rows)
		{		
			if(($i%2)==0) 
				{
					$bgcolor ='#FFFFFF';
				}
			else
				{
					$bgcolor ='@C0C0C0';
				}	
			$reserveid = MYSQL_RESULT($result,$i,"reserveid");
			//$userid = MYSQL_RESULT($result,$i,"user_id");
			$date = MYSQL_RESULT($result,$i,"date");
			$buyer = MYSQL_RESULT($result,$i,"buyer");
			$address = MYSQL_RESULT($result,$i,"address");
			$email = MYSQL_RESULT($result,$i,"email");
			$subname = MYSQL_RESULT($result,$i,"subname");
			$phase = MYSQL_RESULT($result,$i,"phase");
			$terms = MYSQL_RESULT($result,$i,"terms");
			$block = MYSQL_RESULT($result,$i,"block");
			$lotno = MYSQL_RESULT($result,$i,"lotno");
?>
    <tr>
      <td align="center"><?php echo $reserveid ?></td>
      <td align="center"><?php echo $buyer ?></td>
      <td align="center"><?php echo $address ?></td>
      <td align="center"><?php echo $date ?></td>
	        <td align="center"><?php echo $subname ?></td>
      <td align="center"><?php echo $phase ?></td>
      <td align="center"><?php echo $block ?></td>
      <td align="center"><?php echo $lotno ?></td>
      <td align="center">
	  <form action="alreadysold.php" method="post">
          <input type="hidden" name="id" value="<?php echo $reserveid; ?>" />
          <input type="hidden" name="subname" value="<?php echo $subname; ?>" />
          <input type="hidden" name="phase" value="<?php echo $phase; ?>" />
          <input type="hidden" name="block" value="<?php echo $block; ?>" />
          <input type="hidden" name="lotno" value="<?php echo $lotno; ?>" />
		  <input type="hidden" name="lotno" value="<?php echo $buyer; ?>" />
	      <input type="submit" name="sold" value="Update" onclick="return confirm('Are you sure you want to Update this Lot from Reserved to Sold? ');" />
	  </form>	  </td>
	  <td align="center">
	  	  <form action="deleteconfirmed.php" method="post">
	<input type="hidden" name="reserveid" value="<?php echo $reserveid; ?>" />
	<input type="hidden" name="subname" value="<?php echo $subname; ?>" />
	<input type="hidden" name="phase" value="<?php echo $phase; ?>" />
	<input type="hidden" name="block" value="<?php echo $block; ?>" />
	<input type="hidden" name="lotno" value="<?php echo $lotno; ?>" />
	  	  <input type="submit" name="Delete" value="Delete" onclick="return confirm('Are you sure you want to delete this Reserved Lot?');"" />
	  	  </form>	  </td>
    </tr>

    <?php 	
$i++;		
	}
	}	
?>
  </table>
  <br />
						<br />
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
