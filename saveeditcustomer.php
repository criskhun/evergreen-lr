<?php require("include/dbconnection.php"); 

if(isset($_POST['save'])){

$buyer=$_POST['text1'];
$address=$_POST['text2'];
$email=$_POST['text3'];

			mysql_query("UPDATE reserve Set  buyer='$buyer',address='$address',email='$email' where reserveid='$houseid'")
												 																	
				or die(mysql_error()); 
	header("Location:customers.php");
	}else{
	header("Location:cutomers.php");
	}
	
	?>

