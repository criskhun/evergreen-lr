<?php
require_once("include/auth.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DPRC- Edit House</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>
</head>
<body>
<input type="hidden" name="adminID" value="<?php echo $_SESSION['id'];?>" />
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
<div class="content"><br /> 
<form method="post" action="saveeditcustomer.php">

	<?php require("include/dbconnection.php") ?>
	<?php	
      $resid = mysql_result($result, $i, "reserveid");
	    $buyer = mysql_result($result, $i, "buyer");
      $address = mysql_result($result, $i, "address");
      $email = mysql_result($result, $i, "email");
      $status = mysql_result($result, $i, "status");
	
	$result = mysql_query("SELECT reserveid, buyer, address, email, status FROM reserve WHERE reserveid = '$resid' ");     
  
  

	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	
	If ($numberOfRows == 0) 
		{
		//echo 'Sorry No Record Found!';
		}
	else if ($numberOfRows > 0) 
		{
		$i=0;
		$resid = mysql_result($result, $i, "reserveid");
    $buyer = mysql_result($result, $i, "buyer");
    $address = mysql_result($result, $i, "address");
    $email = mysql_result($result, $i, "email");
    $status = mysql_result($result, $i, "status");
	}
	
	?>
	<br />
	<table width="516" border="0" align="center">
  <tr>
        <td width="71">ID</td>
        <td width="288"><input name="textid" type="text" class="input" value="<?php echo $resid; ?>" /></td>
      </tr>
      <tr>
        <td width="71">Buyer</td>
        <td width="288"><input name="text1" type="text" class="input" value="<?php echo $buyer; ?>" /></td>
      </tr>
      <tr>
        <td width="71">Address</td>
        <td width="288"><input name="text2" type="text" class="input" value="<?php echo $address; ?>" /></td>
      </tr>
      </tr>
      <tr>
        <td>Email</td>
        <td><input name="text3" type="text" class="input" value="<?php echo $email; ?>" /></td>
      </tr>
      <tr>
      <td>Status</td>
      <td><select name="type"  id="statusis" style="width: 220px; margin-left:27px; " class="input">
		<option>Select Status</option>
		<option selected="selected"><?php echo $status ?></option>
		<option>single</option>
    <option>married</option>
    <option>widowed</option>
		</select>
		</td>
      </tr>
    </table>
	<br />
	<br />
<div align="center">
<input type="submit" name="save" id="save" value=" Save " class="btn" />
<input type="submit" name="cmdcancel" id="cmdcancel" class="btn" value="Cancel" />   
</div>
</form>
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
