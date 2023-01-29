<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("include/dbconnection.php");
$subname=$_POST['subname']; 
$phase=$_POST['phase']; 
$block=$_POST['block'];
$lot=$_POST['lot'];
$result = mysql_query("SELECT * FROM lot WHERE subdname='$subname' AND phase='$phase' AND block='$block' AND lotno='$lot'");  
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	if ($numberOfRows > 0) 
		{
		$i=0;
			$lotid = MYSQL_RESULT($result,$i,"lot_id");
			$phase = MYSQL_RESULT($result,$i,"phase");
			$block = MYSQL_RESULT($result,$i,"block");
			$lotarea = MYSQL_RESULT($result,$i,"lotarea");
			$class = MYSQL_RESULT($result,$i,"class");
			$price = MYSQL_RESULT($result,$i,"price");
			$lotno = MYSQL_RESULT($result,$i,"lotno");
			$subname= MYSQL_RESULT($result,$i,"subdname");
			$status = MYSQL_RESULT($result,$i,"lotstatus");
	
echo '<table width="822" border="0" align="center">';
echo "<tr>";
echo '<td width="53" align="center" bgcolor="#cccccc"> Lot ID</td>';
echo '<td width="138" align="center" bgcolor="#cccccc"> Subdivision</td>';
echo '<td width="112" align="center" bgcolor="#cccccc"> Phase</td>';
echo '<td width="115" align="center" bgcolor="#cccccc"> Block</td>';
echo '<td width="82" align="center" bgcolor="#cccccc"> Lot No</td>';
echo '<td width="82" align="center" bgcolor="#cccccc"> Lot Class</td>';
echo '<td width="78" align="center" bgcolor="#cccccc"> Area</td>';
echo '<td width="100" align="center" bgcolor="#cccccc"> Price</td>';
echo '<td width="70" align="center" bgcolor="#cccccc"> Status</td>';
echo '<td width="66" align="center" bgcolor="#cccccc"> Edit</td>';
echo '<td width="70" align="center" bgcolor="#cccccc"> Delete</td>';
echo '<td width="100" align="center" bgcolor="#cccccc"> Reserve</td>';
echo '</tr>';
echo '<tr>';
echo '<td width="53" align="center">'.$lotid.'</td>';
echo '<td width="53" align="center" > '.$subname.'</td>';
echo '<td width="53" align="center" >'.$phase.'</td>';
echo '<td width="53" align="center" > '.$block.'</td>';
echo '<td width="53" align="center" > '.$lotno.'</td>';
echo '<td width="53" align="center" > '.$class.'</td>';
echo '<td width="53" align="center" > '.$lotarea.'</td>';
echo '<td width="100" align="center">Php&nbsp; '.$price.'</td>';
echo '<td width="53" align="center"> '.$status.'</td>';
?>
      <td width="66" align="center" ><a href="editlot.php?lotid= <?php echo $lotid; ?>"><img src="img/edit.png" width="25" height="25" border="0" /></a></h6></td>
      <td width="70" align="center" ><a href="deletelot.php?lotid= <?php echo $lotid; ?>"><img src="img/cancel.png"onclick="return confirm('Are you sure you want to delete a lot no. <?php echo $lotid ?>');" width="25" height="25" border="0" /></a></td>
      <td width="66" align="center" >
	<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="admin_directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$subname.'">';
	echo '<input type="hidden" name="phase" value="'.$phase.'">';
	echo '<input type="hidden" name="block" value="'.$block.'">';
	echo '<input type="hidden" name="lotno" value="'.$lotno.'">';
	echo '<input type="hidden" name="lotarea" value="'.$lotarea.'">';
	echo '<input type="hidden" name="price" value="'.$price.'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve this lot" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Not Available for Reservation</font>';
	}
	 
	?>
		  </td>
<?php 
echo '</tr>';
echo '<table>';
		}
		else if ($numberOfRows == 0) 
		{
		echo "<div align='center'>";
	echo "<font color='#FF0000'>Please Select Fields First or No equivalent Phase, Block and Lot Number.</font>";
	echo "</div>";
		}
	?>
</body>
</html>
