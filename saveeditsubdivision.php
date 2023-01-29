<?php require("include/dbconnection.php"); 


if(isset($_POST['save'])){
$subid=$_POST['subid'];
$subname=$_POST['subname'];
$location=$_POST['location'];
$city=$_POST['city'];
$postal=$_POST['postal'];
mysql_query("UPDATE  subdivision Set  subdname='$subname',location='$location',city='$city',postal='$postal' where subd_id='$subid'")
												 																	
				or die(mysql_error()); 
	header("Location:subdivision.php");
	}else{
	header("Location:subdivision.php");
	}
	?>

