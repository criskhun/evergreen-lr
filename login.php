<?php
	session_start();
	
	//Include database connection details
	require_once('include/config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect('localhost','u854000491_lotreservation',"Letmein#123");
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db('u854000491_lotreservation', $link);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$username = clean($_POST['username']);
	$password = clean($_POST['pword']);
	
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username is missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password is missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: admin.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM admin WHERE username='$username' AND adminpass='$password'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$admin = mysql_fetch_assoc($result);
			$_SESSION['id'] = $admin['admin_id'];
			$_SESSION['fname'] = $admin['firstname'];
			$_SESSION['lname'] = $admin['lastname'];
			session_write_close();
			header("Location:admin_index.php");
			exit();
		}else {
			//Login failed
			header("location:failedlogin.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>

