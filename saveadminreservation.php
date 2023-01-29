
<?php
	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
 function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
mysql_select_db("reservation", $con);

	//Sanitize the POST values
$date=clean($_POST['date']);
$buyer=clean($_POST['buyer']);
$status=clean($_POST['status']);
$spouse=clean($_POST['spouse']);
$gender=clean($_POST['gender']);
$tax=clean($_POST['tax']);
$address=clean($_POST['address']);
$sss=clean($_POST['sss']);
$month=clean($_POST['month']);
$day=clean($_POST['day']);
$year=clean($_POST['year']);
$bday= $month."-".$day."-".$year;
$gender=clean($_POST['gender']);
$email=clean($_POST['email']);
$mobile=clean($_POST['mobile']);
$subname=clean($_POST['subname']);
$location=clean($_POST['location']);
$phase=clean($_POST['phase']);
$block=clean($_POST['block']);
$lotno=clean($_POST['lotno']);
$area=clean($_POST['area']);
$price=clean($_POST['price']);
$terms=clean($_POST['terms']);
$totalprice=clean($_POST['totalprice']);
$downpayment=clean($_POST['downpayment']);
$discount=clean($_POST['discount']);
$downbal=clean($_POST['downbal']);
$amortbal=clean($_POST['amortbal']);
$amort=clean($_POST['amort']);
$code=clean($_POST['code']);
$ccode=clean($_POST['ccode']);

$condition=$_POST['condition'];
$Rstatus="Temporarily Reserved";
//Input Validations
	if($buyer == '') {
		$errmsg_arr[] = 'Buyer Name is  missing';
		$errflag = true;
	}
	if($address == '') {
		$errmsg_arr[] = 'Address is  missing';
		$errflag = true;
	}
	if($email == '') {
		$errmsg_arr[] = 'Email Address is  missing';
		$errflag = true;
	}
	if($tax == '') {
		$errmsg_arr[] = 'Tax Number is  missing';
		$errflag = true;
	}
	if($sss == '') {
		$errmsg_arr[] = 'SSS Number is  missing';
		$errflag = true;
	}
	if($mobile == '') {
		$errmsg_arr[] = 'Mobile/Tel.No is missing';
		$errflag = true;
	}
if($ccode == '') {
		$errmsg_arr[] = 'Confirmation Code is Missing';
		$errflag = true;
	}
	if($code != $ccode)   {
		$errmsg_arr[] = 'Confirmation Code do not match';
		$errflag = true;
	}
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();	
		header("location: adminreservation.php");
		exit();
	}
	
	//Create query
	$sql="INSERT INTO reserve (date, buyer, spouse, address, status, gender, tax, bday, sss, mobile, email, subname, location, phase, block,lotno, area, price, terms, downpayment, discount, amortbal, amort, ccode, Rstatus) VALUES ('$date','$buyer','$spouse','$address','$status','$gender','$tax','$bday','$sss','$mobile','$email','$subname', '$location', '$phase', '$block', '$lotno', '$area', '$price', '$terms', '$downpayment', '$discount','$amortbal', '$amort', '$ccode','$Rstatus')";
mysql_query("UPDATE lot SET lotstatus = 'Temporarily Reserved' WHERE phase='$phase' and block='$block' and lotno='$lotno'");
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
header("location:adminreservationsuccess.php");

exit();

mysql_close($con);
?>