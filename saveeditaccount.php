<?php require("include/dbconnection.php"); 

if(isset($_POST['save'])){
$adminid=$_POST['admin'];
$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$username =$_POST['username'];
$adminpass =$_POST['adminpass'];
$adminpass =$_POST['email'];
			mysql_query("UPDATE  admin Set  firstname='$firstname',lastname='$lastname',username='$username',adminpass='$adminpass',email='$email' where admin_id='$adminid'")
												 																	
				or die(mysql_error()); 
	header("Location:admin_index.php");
	}else{
	header("Location:admin_index.php");
	}
	
	?>

