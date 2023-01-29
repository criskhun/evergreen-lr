<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="img/favicon.png" type="image" />
<link rel="shortcut icon" href="img/favicon.png" type="image" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/view.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<body>
<div class="main">
<img src="img/dprc.png" alt="logo" width="100"  height="100" align="middle" style="margin-left: 0px;"/>
      <div style="margin-top: -107px; margin-left: 103px; font-weight:bold; font-size:30px; width:500px;"> Lot Reservation
	   </div>
	<div style="margin-top: -1px; margin-left: 103px;width:400px; font-size:11px; text-align:center">25th Lascon Street (In front of ABS- CBN Station),Brgy. Manadalagan, Bacolod City<br />
	Tel.No.(034)433-76-87, (034) 709-14-86</div>
	

	<br />

	<?php require("include/dbconnection.php") ?>
	<?php	
	$reserveid =$_GET['reserveid'];
	
	$result = mysql_query("SELECT * from `reserve` WHERE reserveid = '$reserveid' ");     
  
  

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
		
			$reserveid = MYSQL_RESULT($result,$i,"reserveid");						
			$buyer = MYSQL_RESULT($result,$i,"buyer");
			$spouse = MYSQL_RESULT($result,$i,"spouse");
			$address = MYSQL_RESULT($result,$i,"address");						
			$status = MYSQL_RESULT($result,$i,"status");
			$gender = MYSQL_RESULT($result,$i,"gender");
			$tax = MYSQL_RESULT($result,$i,"tax");
			$bday = MYSQL_RESULT($result,$i,"bday");						
			$sss = MYSQL_RESULT($result,$i,"sss");
			$mobile = MYSQL_RESULT($result,$i,"mobile");
			$email = MYSQL_RESULT($result,$i,"email");						
			$subname = MYSQL_RESULT($result,$i,"subname");
			//$location = MYSQL_RESULT($result,$i,"location");
			$phase = MYSQL_RESULT($result,$i,"phase");
			$block = MYSQL_RESULT($result,$i,"block");	
			$lotno = MYSQL_RESULT($result,$i,"lotno");						
			$area = MYSQL_RESULT($result,$i,"area");
			$price = MYSQL_RESULT($result,$i,"price");
			$ccode = MYSQL_RESULT($result,$i,"ccode");	
			$date = MYSQL_RESULT($result,$i,"date");
			$terms = MYSQL_RESULT($result,$i,"terms");	
			$reqdown = MYSQL_RESULT($result,$i,"discount");
			$downpayment = MYSQL_RESULT($result,$i,"downpayment");
			$amortbal = MYSQL_RESULT($result,$i,"amortbal");
			$amort = MYSQL_RESULT($result,$i,"amort");
	}
	
	?>
	<br />
	<div class="content">
	<table width="712" align="center" border="0">
	<tr>
	<td><strong>Reservation Date:</strong></td>
	<td><?php echo $date ; ?></td>
		<td><strong>Reservation Code:</strong></td>
	<td><?php echo $ccode ; ?></td>

	</tr>
	</table><br />
	<table width="712" align="center" border="0">
	<tr>
	<td align="center" style="font-weight:bold" bgcolor="#a5bc67">Personal Information</td>
	</tr>
	</table>
	<table width="712" align="center" border="0">
	<tr>
	<td width="352" style="font-weight:bold">Name:</td>
	<td width="344"><?php echo $buyer ; ?> </td>
	</tr>
	
	<tr>
	<td width="352" style="font-weight:bold">Address:</td>
	<td width="344"><?php echo $address ; ?> </td>
	</tr>
	<tr>
	<td width="352" style="font-weight:bold">Email Address:</td>
	<td width="344"><?php echo $email ; ?> </td>
	</tr>
	<tr>
	<td width="352" style="font-weight:bold">Contact Number:</td>
	<td width="344"><?php echo $mobile ; ?> </td>
	</tr>
	</table> 
	<br />
	<table width="712" align="center" border="0">
	<tr>
	<td align="center" style="font-weight:bold" bgcolor="#a5bc67">Reservation Information</td>
	</tr>
	</table>
	<table width="712" align="center" border="0">
	<tr>
	<td width="352" style="font-weight:bold">Subdivision Name:</td>
	<td width="344"><?php echo $subname ; ?> </td>
	</tr>
	<tr>
	<td width="352" style="font-weight:bold">Phase:</td>
	<td width="344"><?php echo $phase ; ?> </td>
	</tr>
	<tr>
	<td width="352" style="font-weight:bold">Block:</td>
	<td width="344"><?php echo $block ; ?> </td>
	</tr>
	<tr>
	<td width="352" style="font-weight:bold">Lot Number:</td>
	<td width="344"><?php echo $lotno ; ?> </td>
	</tr>
	<tr>
	<td width="352" style="font-weight:bold">Area/sq.m:</td>
	<td width="344"><?php echo $area ; ?> </td>
	</tr>
	<tr>
	<td width="352" style="font-weight:bold">Price/sq.m::</td>
	<td width="344">&nbsp;<font color="#FF0000"> Php</font>&nbsp;<?php echo number_format($price,2) ; ?> </td>
	</tr>
	</table>
	<br />
	<table width="712" align="center" border="0">
	<tr>
	<td align="center" style="font-weight:bold" bgcolor="#a5bc67">Price and Mode of Payment</td>
	</tr>
	</table>
	<table width="712" align="center" border="0">
	<tr>
	<td width="352" style="font-weight:bold">Terms of Payment:</td>
	<td width="344"><?php echo $terms ; ?> </td>
	</tr>
	<tr>
	<td width="352" style="font-weight:bold">Required Downpayment:</td>
	<td width="344">&nbsp;<font color="#FF0000"> Php</font>&nbsp;<?php echo number_format($reqdown,2) ; ?> </td>
	</tr>
	<tr>
	<td width="352" style="font-weight:bold">Downpayment Balance:</td>
	<td width="344">&nbsp;<font color="#FF0000"> Php</font>&nbsp;<?php echo number_format($amortbal,2) ; ?> </td>
	</tr>
	<tr>
	<td width="352" style="font-weight:bold">Montly Amortization:</td>
	<td width="344">&nbsp;<font color="#FF0000"> Php</font>&nbsp;<?php echo number_format($amort,2) ; ?> </td>
	</tr>
	<tr>
	<td width="352" style="font-weight:bold">Amortization Balance:</td>
	<td width="344">&nbsp;<font color="#FF0000"> Php</font>&nbsp;<?php echo number_format($amortbal,2) ; ?> </td>
	</tr>
	</table><br /><br />
	<div align="center">
<form action="confirmreservation.php" method="post">
	<input type="hidden" name="reserveid" value="<?php echo $reserveid; ?>" />
	<input type="hidden" name="subname" value="<?php echo $subname; ?>" />
	<input type="hidden" name="phase" value="<?php echo $phase; ?>" />
	<input type="hidden" name="block" value="<?php echo $block; ?>" />
	<input type="hidden" name="lotno" value="<?php echo $lotno; ?>" />
	<input type="hidden" name="buyer" value="<?php echo $buyer; ?>" />
	<input type="hidden" name="email" value="<?php echo $email; ?>" />
	<input type="hidden" name="terms" value="<?php echo $terms; ?>"/>
	<input type="hidden" name="down" value="<?php echo $downpayment; ?>"/>
	<input type="hidden" name="amort" value="<?php echo $amort; ?>"/>
	<input type="hidden" name="date" value="<?php echo date("M d, Y");?>"/>
    <input type="submit" name="Confirm" value="Confirm Reservation" onclick="return confirm('Are you sure you want to Confirm this Reservation?');""/>
</form>
	</div>
</div>
	
	
	
	
</div>
</body>
</html>
