<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<head>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
</head>
<body>
<?php 
include("include/dbconnection.php");
$phase=$_POST['phase']; 
$block=$_POST['block'];
$lot=$_POST['lot'];
$result = mysql_query("SELECT * FROM lot WHERE phase='$phase' AND block='$block' AND lotno='$lot'");  
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	if ($numberOfRows > 0) 
		{
		$i=0;
			$lotarea = MYSQL_RESULT($result,$i,"lotarea");						
			$price = MYSQL_RESULT($result,$i,"price");						
	
echo "<table>";
echo "<tr>";
echo "<td>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Area (sq/m)";
echo "</td>";
echo '<td>';
//echo $lotarea;
echo'<input type="text" name="area" id="area" class="input1" readonly="" value="'. $lotarea .'">'; 
//echo '<input type="text" name="area" id="area" class="input1" readonly=""  value='.$lotarea'/>';
echo "</td>";
echo "<td>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price(sq/m)";
echo "</td>";
echo "<td>";
//echo $price;
echo'<input type="text" name="price" id="price" class="input1" readonly="" value="'. $price .'">'; 
//echo " <input type='text' name='price' id='area' class='input1' readonly='' value=".$price" />";
echo "</td>";
echo "</tr>";
echo "</table>";
		}
		else if ($numberOfRows == 0) 
		{
		echo "<div align='center'>";
	echo "<font color='#FF0000'>No equivalent Phase, Block and Lot Number. Check Lot Details First</font>";
	echo "</div>";
		}
	?>
</body>
</html>