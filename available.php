<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>List of <?php echo $_GET['status']; ?> Lots</title>
<link href="css/view.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div style="margin:0 auto; width:900px;">	  
<div class="content">
<div align="center" style="width:900px">
<h1>Lot Reservation<br><br>List of Available Lots</h1>
</div>
<table width="860" border="1" bordercolor="#354c07" align="center">
                            <tr>
                              <td width="100" align="center" bgcolor="#a5bc67">Subdivision</td>
                              <td width="100" align="center" bgcolor="#a5bc67">Phase Number</td>
                              <td width="100" align="center" bgcolor="#a5bc67">Block Number</td>
                              <td width="70" align="center" bgcolor="#a5bc67">Lot Number</td>
                              <td width="70" align="center" bgcolor="#a5bc67">Lot Area</td>
                              <td width="70" align="center" bgcolor="#a5bc67">Price/sq.m</td>
                            </tr>
<?php 
include("include/dbconnection.php");
$status=$_GET['status'];
// sending query
$result = mysql_query("SELECT * FROM lot where lotstatus='$status' ORDER BY lot_id");
if (!$result) 
	{
    die("Query to show fields from table failed");
	}
$rows = MYSQL_NUMROWS($result);

If ($rows == 0) 
	{
	echo 'Sorry No Record Found!';
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
			$subdname = MYSQL_RESULT($result,$i,"subdname");
			$phase = MYSQL_RESULT($result,$i,"phase");
			$block = MYSQL_RESULT($result,$i,"block");
			$lotno = MYSQL_RESULT($result,$i,"lotno");
			$lotarea = MYSQL_RESULT($result,$i,"lotarea");
			$price = MYSQL_RESULT($result,$i,"price");
			$lotstatus = MYSQL_RESULT($result,$i,"lotstatus");

		
?>
                            <tr>
                              <td align="center"><?php echo $subdname ?></td>
                              <td align="center"><?php echo $phase ?></td>
                              <td align="center"><?php echo $block ?></td>
                              <td align="center"><?php echo $lotno; ?></td>
                              <td align="center"><?php echo $lotarea; ?></td>
                              <td align="center">&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $price; ?></td>
                            </tr>
                            <?php 	
$i++;		
	}
	}	
?>
      </table>
</div>
</div>
	  
</body>
</html>