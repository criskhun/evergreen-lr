<?php
	//Start session
	session_start();
	include("include/dbconnection.php");
	
$buyer = $_POST['subname'];
$baldate = $_POST['baldate'];
$baldesc =$_POST['baldesc'];
$amount =$_POST['price'];


	$qry = "INSERT INTO balance(buyer,balance,baldesc,amount) VALUES('$buyer','$baldate','$baldesc','$amount')";
	$result =mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: addbalance.php");
		exit();
	}else {
		die("Query failed");
	}
?>
