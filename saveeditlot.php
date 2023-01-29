<?php require("include/dbconnection.php"); 

if(isset($_POST['save'])){
$lotid=$_POST['lotid'];
$subname =$_POST['subname'];
$phase =$_POST['phase'];
$block =$_POST['block'];
$lotarea =$_POST['lotarea'];
$class =$_POST['class'];
$price =$_POST['price'];
$remarks =$_POST['remarks'];
$lotstatus =$_POST['lotstatus'];
$lotno =$_POST['lotno'];
$tcp=$lotarea*$price;

			mysql_query("UPDATE  lot Set  subdname='$subname',phase='$phase',block='$block',lotarea='$lotarea',class='$class',price='$price',tcp='$tcp',lotstatus='$lotstatus',remarks='$remarks' where lot_id='$lotid'")
												 																	
				or die(mysql_error()); 
	header("Location:lot.php");
	}else{
	header("Location:lot.php");
	}
	
	?>

