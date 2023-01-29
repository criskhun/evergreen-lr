
<?php
//Start session
	session_start();
	include("include/dbconnection.php");
	
$subdname = $_POST['name'];
$location =$_POST['location'];
$city =$_POST['city'];
$postal =$_POST['postal'];

$qry = "INSERT INTO subdivision(subdname, location, city, postal) VALUES('$subdname','$location','$city','$postal')";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: subdivision.php");		
		exit();
	}else {
		die("Query failed");
	}


?>
