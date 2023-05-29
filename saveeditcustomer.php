<?php require("include/dbconnection.php"); 

if(isset($_POST['save'])){
$resid=$_POST['textid'];
$buyer=$_POST['text1'];
$address=$_POST['text2'];
$email=$_POST['text3'];
$subname =$_POST['type'];

			mysql_query("UPDATE reserve Set  buyer='$buyer',address='$address',email='$email', status='$subname' where reserveid='$resid'")
												 																	
				or die(mysql_error()); 
	header("Location:customers.php");
	}else{
	header("Location:cutomers.php");
	}
	
	?>

