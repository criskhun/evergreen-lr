<?php
require_once("include/auth.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DPRC_ Edit Lot</title>
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
<form method="post" action="saveeditlot.php">

	<?php require("include/dbconnection.php") ?>
	<?php	
	$lotid =$_GET['lotid'];
	
	$result = mysql_query("SELECT * from `lot` WHERE lot_id = '$lotid' ");     
  
  

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
		$lotid = MYSQL_RESULT($result,$i,"lot_id");
			$phase = MYSQL_RESULT($result,$i,"phase");
			$block = MYSQL_RESULT($result,$i,"block");
			$lotarea = MYSQL_RESULT($result,$i,"lotarea");
			$class = MYSQL_RESULT($result,$i,"class");
			$price = MYSQL_RESULT($result,$i,"price");
			$lotno = MYSQL_RESULT($result,$i,"lotno");
			$lotstatus = MYSQL_RESULT($result,$i,"lotstatus");
			$subname=mysql_result($result,$i,"subdname");
			$remarks = MYSQL_RESULT($result,$i,"remarks");
	}
	
	?>
	<br />
	<table width="516" border="0" align="center">
	<tr>
	<td>Lot ID</td>
	<td> <input type="text" name="lot" value="<?php echo $lotid; ?>" class="input"></td>
	</tr>
      <tr>
        <td>Subdivision</td>
        <td><select name="subname"  id="select" style="width: 220px; margin-left:27px;" class="input" >
          <option>Select Subdivision</option>
          <?php 
				$result = mysql_query("SELECT * FROM subdivision   ORDER BY subdname ASC")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) {
            echo '<option selected="selected">' . $row['subdname'] . '<br></option>'; 
        } 
?>
        </select></td>
      </tr>
      <tr>
        <td>Phase</td>
        <td>
		<select name="phase"  id="select" style="width: 220px; margin-left:27px;" class="input" >
          <option>Select Phase</option>
          <?php 
				$result = mysql_query("SELECT * FROM phase   ORDER BY phase ASC")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) {
            echo '<option selected="selected">' . $row['phase'] . '<br></option>'; 
        } 
?>
        </select>
		</td>
      </tr>
      <tr>
        <td>Block</td>
        <td><input name="block" type="text" class="input" value="<?php echo $block; ?>" /></td>
      </tr>
	  <tr>
        <td>Lot Number</td>
        <td><input name="lotno" type="text" class="input" value="<?php echo $lotno; ?>" /></td>
      </tr>
	  <tr>
        <td>Lot Class</td>
        <td><input name="class" type="text" class="input" value="<?php echo $class; ?>" /></td>
      </tr>		  
      <tr>
        <td>Lot Area</td>
        <td><input name="lotarea" type="text" class="input" value="<?php echo $lotarea; ?>" />        </td>
      </tr>
      <tr>
        <td>Price/sq.m</td>
        <td><input name="price" type="text" class="input" value="<?php echo $price; ?>" />      </tr>
	  <tr>
	    <td width="81">Lot Status:</td>
        <td width="293"><select name="lotstatus" style="width:225px" class="input">
		<option>Select Lot Status</option>
		<option selected="selected"><?php echo $lotstatus; ?></option>
		<option>Available</option>
		<option>Reserved</option>
		<option>Sold</option>
		</select></td>
		</tr>
<tr>
        <td>Remarks</td>
        <td><input name="remarks" type="text" class="input" value="<?php echo $remarks; ?>" />
          <input type="hidden" name="lotid"  value="<?php echo $lotid; ?>"/></td>
      </tr>    </table>
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
Copyright 2023&copy; RMMC Student Development
</div>
</div>
</body>
</html>
