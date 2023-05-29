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
<div class="search-bar">
  <form method="GET" action="">
    <input type="text" name="search" placeholder="Search...">
    <input type="submit" value="Submit">
  </form>
</div>


  <table width="841" border="0" align="center">
    <tr>
      <td width="64" align="center" bgcolor="#cccccc">Name of Customer</td>
      <td width="313" align="center" bgcolor="#cccccc">Address</td>
      <td width="250" align="center" bgcolor="#cccccc">Email</td>
      <td width="132" align="center" bgcolor="#cccccc">Status</td>
      <td width="53" align="center" bgcolor="#cccccc">Edit</td>
    </tr>
	<?php
include("include/dbconnection.php");

$search = isset($_GET['search']) ? $_GET['search'] : '';
$query = "SELECT * FROM reserve WHERE 
          buyer LIKE '%$search%' OR
          address LIKE '%$search%' OR
          email LIKE '%$search%' OR
          status LIKE '%$search%'
          ORDER BY buyer";
$result = mysql_query($query);

if (!$result) {
  die("Query to show fields from table failed");
}

$rows = mysql_num_rows($result);

if ($rows == 0) {
  echo '<div style="color:red; text-align:center;">No Customer(s) exist !</div>';
}

if ($rows > 0) {
  $i = 0;
  while ($i < $rows) {
    if (($i % 2) == 0) {
      $bgcolor = '#FFFFFF';
    } else {
      $bgcolor = '@C0C0C0';
    }
    $resid = mysql_result($result, $i, "reserveid");
    $buyer = mysql_result($result, $i, "buyer");
    $address = mysql_result($result, $i, "address");
    $email = mysql_result($result, $i, "email");
    $status = mysql_result($result, $i, "status");
    ?>
    <tr>
      <td align="center"><?php echo $buyer ?></td>
      <td align="left"><?php echo $address ?></td>
      <td width="132" align="left"><a href="viewcustomer.php?email=<?php echo $email; ?>"><?php echo $email ?></a></td>
      <td align="left"><?php echo $status ?></td>
      <td align="center"><a href="editcustomer.php?reserveid= <?php echo $resid; ?>"><img src="img/edit.png" width="25" height="25" border="0" /></a></td>
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
<!-- Copyright 2023&copy; RMMC Student Development -->
</div>
</div>
</body>
</html>
