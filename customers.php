<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
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
  			<ul class="sub">
				<li><a href="createevent.php" class="fly">Create Events</a></li>
			</ul>
  </li>
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
      <th width="64" align="center" bgcolor="#cccccc">Name of Customer</th>
      <th width="313" align="center" bgcolor="#cccccc">Address</th>
      <th width="250" align="center" bgcolor="#cccccc">Email</th>
      <th width="132" align="center" bgcolor="#cccccc">Status</th>
      <th width="132" align="center" bgcolor="#cccccc">Action</th>
    </tr>
	<?php
include("include/dbconnection.php");

$search = isset($_GET['search']) ? $_GET['search'] : '';
$query = "SELECT buyer, address, email, Rstatus FROM reserve WHERE 
          buyer LIKE '%$search%' OR
          address LIKE '%$search%' OR
          email LIKE '%$search%' OR
          Rstatus LIKE '%$search%'
          ORDER BY buyer";
$result = mysqli_query($connection, $query);

if (!$result) {
  die("Query to show fields from table failed");
}

$rows = mysqli_num_rows($result);

if ($rows == 0) {
  echo '<div style="color:red; text-align:center;">No Customer(s) exist !</div>';
} else {
  while ($row = mysqli_fetch_assoc($result)) {
    $buyer = $row['buyer'];
    $address = $row['address'];
    $email = $row['email'];
    $status = $row['Rstatus'];
    ?>
    <tr>
      <td align="center"><?php echo $buyer ?></td>
      <td align="left"><?php echo $address ?></td>
      <td align="left"><a href="viewcustomer.php?email=<?php echo $email; ?>"><?php echo $email ?></a></td>
      <td align="left"><?php echo $status ?></td>
      <td align="center">
        <a href="editcustomer.php?email=<?php echo $email; ?>">Edit</a> |
        <a href="deletecustomer.php?email=<?php echo $email; ?>" onclick="return confirm('Are you sure you want to delete this customer?')">Delete</a>
      </td>
    </tr>
    <?php
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
</div>
</div>
</body>
</html>
