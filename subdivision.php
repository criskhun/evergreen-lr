<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DPRC- List of Subdivision</title>
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
                            <td width="62" align="center" bgcolor="#cccccc">Sub ID</td>
                            <td width="196" align="center" bgcolor="#cccccc">Name</td>
                            <td width="199" align="center" bgcolor="#cccccc">Location</td>
                            <td width="127" align="center" bgcolor="#cccccc">City</td>
                            <td width="96" align="center" bgcolor="#cccccc">Postal Code</td>
                            <td width="64" align="center" bgcolor="#cccccc">Edit</td>
                            <td width="78" align="center" bgcolor="#cccccc">Delete</td>
                          </tr>
                          <?php 
$con = mysql_connect('localhost','u854000491_lotreservation',"Letmein#123");
	if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("u854000491_lotreservation", $con);

// sending query
$result = mysql_query("SELECT * FROM subdivision ORDER BY subd_id");
if (!$result) 
	{
    die("Query to show fields from table failed");
	}
$rows = MYSQL_NUMROWS($result);

If ($rows == 0) 
	{
	echo '<div style=" color:red; text-align:center;">No Subdivision Found !</div>';
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
			$subid = MYSQL_RESULT($result,$i,"subd_id");
			$subdname = MYSQL_RESULT($result,$i,"subdname");
			$location = MYSQL_RESULT($result,$i,"location");
			$city = MYSQL_RESULT($result,$i,"city");
			$postal = MYSQL_RESULT($result,$i,"postal");
		
?>
                          <tr>
                            <td align="center"><?php echo $subid ?></td>
                            <td align="center"><?php echo $subdname ?></td>
                            <td align="center"><?php echo $location ?></td>
                            <td align="center"><?php echo $city ?></td>
                            <td align="center"><?php echo $postal ?></td>
                            <td align="center"><a href="editsubdivision.php?subid= <?php echo $subid; ?>"><img src="img/edit.png" width="25" height="25" border="0"  /></a></td>
                            <td align="center"><a  href="deletesub.php?subid= <?php echo $subid; ?>"><img src="img/cancel.png" height="25" width="25" border="0" onclick="return confirm('Are you sure you want to delete subdivision  <?php echo $subid; ?>');" /></a></td>
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
