<?php
session_start();
	
	//Include database connection details
	include("include/dbconnection.php");
	//Sanitize the POST values
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	//Create query
	$qry="SELECT * FROM user WHERE email='$email' AND password='$password'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$user = mysql_fetch_assoc($result);
			$_SESSION['id'] = $user['user_id'];
			$_SESSION['name'] = $user['name'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['address'] = $user['address'];
			$_SESSION['gender'] = $user['gender'];
			$_SESSION['bday'] = $user['bday'];

			session_write_close();
			header("Location:userpage.php");
			exit();
		}else {
			//Login failed
			header("Location:loginfailed.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>

