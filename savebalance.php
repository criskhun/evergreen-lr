<?php
	//Start session
	session_start();
	include("include/dbconnection.php");
	
$subname = $_POST['subname'];
$phase = $_POST['phase'];
$block =$_POST['block'];
$lotarea =$_POST['lotarea'];
$class =$_POST['class'];
$price =$_POST['price'];
$remarks =$_POST['remarks'];
$lotstatus =$_POST['lotstatus'];
$lotno =$_POST['lotno'];
$tcp=$lotarea*$price;

	$qry = "INSERT INTO lot(subdname,phase, block,lotno, lotarea,class, price,tcp,lotstatus, remarks) VALUES('$subname','$phase','$block','$lotno','$lotarea','$class','$price','$tcp','$lotstatus', '$remarks')";
	$result =mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: addlot.php");
		exit();
	}else {
		die("Query failed");
	}
?>
