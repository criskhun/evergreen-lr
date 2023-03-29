<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DPRC- List of Houses</title>
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
                            <table width="860" border="0" align="center">
                            <tr>
                              <td width="55" align="center" bgcolor="#cccccc">ID</td>
                              <td width="100" align="center" bgcolor="#CCCCCC">Subdivision</td>
                              <td width="104" align="center" bgcolor="#cccccc">Model</td>
                              <td width="76" align="center" bgcolor="#cccccc">Type</td>
                              <td width="104" align="center" bgcolor="#cccccc">Lot Area</td>
                              <td width="89" align="center" bgcolor="#cccccc">Floor Area</td>
                              <td width="97" align="center" bgcolor="#CCCCCC">Price/sq.m</td>
                              <td width="53" align="center" bgcolor="#cccccc">Edit</td>
                              <td width="54" align="center" bgcolor="#cccccc">View</td>
                              <td width="86" align="center" bgcolor="#cccccc">Delete</td>
                            </tr>
                            <?php 
$con = mysql_connect('localhost','u854000491_lotreservation',"Letmein#123");
	if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("u854000491_lotreservation", $con);

// sending query
$result = mysql_query("SELECT * FROM house ORDER BY house_id");
if (!$result) 
	{
    die("Query to show fields from table failed");
	}
$rows = MYSQL_NUMROWS($result);

If ($rows == 0) 
	{
	echo 'No Available House!';
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
			$houseid = MYSQL_RESULT($result,$i,"house_id");
			$subname = MYSQL_RESULT($result,$i,"subdname");			
			$model = MYSQL_RESULT($result,$i,"model");
			$type = MYSQL_RESULT($result,$i,"type");
			$floorarea = MYSQL_RESULT($result,$i,"floorarea");
			$price = MYSQL_RESULT($result,$i,"price");
			$lotarea = MYSQL_RESULT($result,$i,"lotarea");

		
?>
                            <tr>
                              <td align="center"><?php echo $houseid; ?></td>
                              <td align="center"><?php echo $subname; ?></td>
                              <td align="center"><?php echo $model; ?></td>
                              <td align="center"><?php echo $type; ?></td>
                              <td align="center"><?php echo $lotarea; ?></td>
                              <td align="center"><?php echo $floorarea; ?></td>
                              <td align="center"><?php echo number_format($price,2); ?></td>
                              <td align="center"><a href="edithouse.php?houseid= <?php echo $houseid; ?>"><img src="img/edit.png" width="25" height="25" border="0" /></a></td>
                              <td align="center"><a href="viewhouse.php?houseid= <?php echo $houseid; ?>"><img src="img/view.png" alt="q"width="25" height="25" border="0"/></a></td>
                              <td align="center"><a  href="deletehouse.php?houseid= <?php echo $houseid; ?>"><img src="img/cancel.png" onclick="return confirm('Are you sure you want to delete a house no. <?php echo $houseid ?>:<?php echo $model ?>');" width="25" height="25" border="0"/></td>
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
Copyright 2023&copy; RMMC Student Development
</div>
</div>
</body>
</html>
