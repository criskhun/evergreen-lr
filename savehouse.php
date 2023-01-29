
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
$subname=clean($_POST['subname']);
$model=clean($_POST['model']);
$type=clean($_POST['type']);
$lotarea=clean($_POST['lotarea']);
$floorarea=clean($_POST['floorarea']);
$price=clean($_POST['price']);
$costprice=$lotarea*$price;
$downpayment=$costprice*.20;
$balance=($costprice)-($downpayment);
$five=$balance/0.243180571;
$seven=$balance/0.0200047141;
$ten=$balance/0.170642299;
$desc=clean($_POST['description']);
 //upload image
 $file=$_FILES['image']['tmp_name'];


	if (!isset($file)) {
	echo "";
	}else{
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}
		if ($image_size=="") {
		
			echo "Select an Image!";
			
		}
		else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"houseimg/" . $_FILES["image"]["name"]);
			
			$houseimg="houseimg/" . $_FILES["image"]["name"];




//Input Validations
	if($model == '') {
		$errmsg_arr[] = 'House Model is  missing';
		$errflag = true;
	}
	if($type == '') {
		$errmsg_arr[] = 'House Type is  missing';
		$errflag = true;
	}
	if($floorarea == '') {
		$errmsg_arr[] = 'Floor Area  is  missing';
		$errflag = true;
	}
	if($lotarea == '') {
		$errmsg_arr[] = 'House Lot Area  is  missing';
		$errflag = true;
	}
	if($price == '') {
		$errmsg_arr[] = 'House Price is missing';
		$errflag = true;
	}
			
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();	
		header("location: addhouse.php");
		exit();
	}
	
	//Create query
	$sql="INSERT INTO house (subdname,model, type,description, lotarea, floorarea,price, costprice,downpayment,balance,five,seven,ten,houseimg) VALUES ('$subname','$model','$type','$desc','$lotarea','$floorarea','$price','$costprice','$downpayment','$balance','$five','$seven','$ten','$houseimg')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
header("location:house.php");
exit();

mysql_close($con);
}
}
?>

