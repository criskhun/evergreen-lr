<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>
<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>

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
<div class="content"><br /> 
<form method="post" action="saveeditsubdivision.php">

	<?php require("include/dbconnection.php") ?>
	<?php	
	$subid =$_GET['subid'];
	
	$result = mysql_query("SELECT * from `subdivision` WHERE subd_id = '$subid' ");     
  
  

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
		
			$subid = MYSQL_RESULT($result,$i,"subd_id");						
			$subname = MYSQL_RESULT($result,$i,"subdname");
			$location = MYSQL_RESULT($result,$i,"location");
			$city = MYSQL_RESULT($result,$i,"city");						
			$postal = MYSQL_RESULT($result,$i,"postal");
	}
	
	?>
	<br />
<table width="466" border="0" align="center">
  <tr>
    <td width="130">Subdivision ID </td>
    <td width="376"><input name="subid" type="text" class="input" value="<?php echo $subid; ?>" /></td>
  </tr>
  <tr>
    <td> Name </td>
    <td><input name="subname" type="text" class="input" value="<?php echo $subname; ?>" /></td>
  </tr>
  <tr>
    <td>Location</td>
    <td><input name="location" type="text" class="input" value="<?php echo $location; ?>" /></td>
  </tr>
  <tr>
    <td>City</td>
    <td><input name="city" type="text"  class="input"value="<?php echo $city; ?>" /></td>
  </tr>
  <tr>
    <td>Postal Code </td>
    <td><input name="postal" type="text" class="input" value="<?php echo $postal; ?>" onkeypress="return isNumberKey(event)" />
    <input type="hidden" name="subid2"  value="<?php echo $subid; ?>"/></td>
  </tr>
</table>
<br /><br />
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
Copyright 2023&copy; RMMC Student Development
</div>
</div>
</body>
</html>
