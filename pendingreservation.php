<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="img/favicon.png" type="image" />
<link rel="shortcut icon" href="img/favicon.png" type="image" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pending Lot Reservation</title>
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
<div class="content1"><br /><br />
   <table width="860" border="0" align="center">
                            <tr>
                              <td width="30" align="center" bgcolor="#cccccc">RID</td>
                              <td width="62" align="center" bgcolor="#cccccc">RCode</td>
                              <td width="130" align="center" bgcolor="#cccccc">Buyer</td>
                              <td width="130" align="center" bgcolor="#cccccc">Address</td>
                              <td width="130" align="center" bgcolor="#cccccc">Date Reserved</td>
                              <td width="130" align="center" bgcolor="#cccccc">Date Today</td>
                              <td width="50" align="center" bgcolor="#cccccc">Requirements</td>
                              <td width="50" align="center" bgcolor="#cccccc">View</td>
                              <td width="50" align="center" bgcolor="#cccccc">Delete</td>
                              <td width="100" align="center" bgcolor="#cccccc">Action</td>
                            </tr>
                            <?php 
include("include/dbconnection.php");

// sending query
$result = mysql_query("SELECT * FROM reserve where Rstatus='Temporarily Reserved' ORDER BY reserveid");
if (!$result) 
	{
    die("Query to show fields from table failed");
	}
$rows = MYSQL_NUMROWS($result);

If ($rows == 0) 
	{
	echo '<div style=" color:red; text-align:center;">No Pending Lot Reservation Found !</div>';
	}
else if ($rows > 0) 
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
			$email = MYSQL_RESULT($result,$i,"email");
			$ccode = MYSQL_RESULT($result,$i,"ccode");
			$buyer = MYSQL_RESULT($result,$i,"buyer");
			$address = MYSQL_RESULT($result,$i,"address");
			$subname = MYSQL_RESULT($result,$i,"subname");
			$phase = MYSQL_RESULT($result,$i,"phase");
			$terms = MYSQL_RESULT($result,$i,"terms");
			$block = MYSQL_RESULT($result,$i,"block");
			$lotno = MYSQL_RESULT($result,$i,"lotno");
			$down = MYSQL_RESULT($result,$i,"downpayment");
			$amort = MYSQL_RESULT($result,$i,"amort");
			$datesubmitted = MYSQL_RESULT($result,$i,"date");
			//$datelapsed=(date("D, M d, Y"))-$datesubmitted;
			
			
		
?>
							
                            <tr>
                              <td height="38" align="center"><?php echo $reserveid ?></td>
                              <td align="center"><?php echo $ccode ?></td>
                              <td align="center"><?php echo $buyer ?></td>
                              <td align="center"><?php echo $address ?></td>
                              <td align="center"><?php echo $datesubmitted ?></td>
                              <td align="center"><?php echo date("M d, Y"); ?></td>
                              <td align="center"><a href="viewreq.php?email=<?php echo $email; ?>"><img src="img/doc.png" border="0"width="25" height="25"/></a></td>
                              <td align="center"><a target="blank" href="viewreservation.php?reserveid= <?php echo $reserveid; ?>"><img src="img/view.png" alt="q"width="25" height="25" border="0"/></td>
                              <td align="center">
							  <form action="deletependingreserve.php" method="post">
	<input type="hidden" name="reserveid" value="<?php echo $reserveid; ?>" />
	<input type="hidden" name="subname" value="<?php echo $subname; ?>" />
	<input type="hidden" name="phase" value="<?php echo $phase; ?>" />
	<input type="hidden" name="block" value="<?php echo $block; ?>" />
	<input type="hidden" name="lotno" value="<?php echo $lotno; ?>" />
	<input type="submit" name="Delete" value="Delete" onclick="return confirm('Are you sure you want to delete Reservation no.<?php echo $reserveid ?>');"  />
</form></td>
<td align="center">
		<form action="confirmreservation.php" method="post">
		  <input type="hidden" name="reserveid" value="<?php echo $reserveid; ?>" />
		  <input type="hidden" name="subname" value="<?php echo $subname; ?>" />
	<input type="hidden" name="phase" value="<?php echo $phase; ?>" />
	<input type="hidden" name="block" value="<?php echo $block; ?>" />
	<input type="hidden" name="lotno" value="<?php echo $lotno; ?>" />
	<input type="hidden" name="buyer" value="<?php echo $buyer; ?>" />
	<input type="hidden" name="email" value="<?php echo $email; ?>" />
	<input type="hidden" name="terms" value="<?php echo $terms; ?>"/>
	<input type="hidden" name="down" value="<?php echo $down; ?>"/>
	<input type="hidden" name="amort" value="<?php echo $amort; ?>"/>
	<input type="hidden" name="date" value="<?php echo date("M d, Y");?>"/>
		<input type="submit" name="Confirm" value="Confirm" onclick="return confirm('Are you sure you want to Confirm Reservation no.<?php echo $reserveid ?>');"/>
		</form>							  </td>
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
<div class="bottommenu"> Terms and Condition | Home | About Us | Contact Us| Developer</div>
<div class="footer">
<!-- Copyright 2023&copy; RMMC Student Development -->
</div>
</div>
</body>
</html>
