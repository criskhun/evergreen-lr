
<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('include/config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect('localhost','tovi_joebert',"create17");
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db('reservation', $link);
	if(!$db) {
		die("Unable to select database");
	}
	//Sanitize the POST values
	$name = $_POST['name'];
	$bday = $_POST['bday'];
	$address =$_POST['address'];
	$email = $_POST['email'];
	$password =$_POST['password'];
	$gender = $_POST['gender'];

		//Check for duplicate login ID
	if($username != '') {
		$qry = "SELECT * FROM user WHERE username='$username'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'username has already used by another user';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header('location: signup.php');
		exit();
	}

	//Create INSERT query
	$qry = "INSERT INTO user(name,address,gender,bday, email,password )VALUES('$name' , '$address', '$gender', '$bday','$email','$password')";
	
	$result =mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
			header("Location:userlogin.php");
		exit();
	}else {
		die("Query failed");
	}
?>