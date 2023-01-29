
<?php
session_start();
include("include/dbconnection.php");
if( isset($_POST['submit'])) {
	if( $_SESSION['ccode'] == $_POST['ccode'] && !empty($_SESSION['ccode'] ) ) {
		unset($_SESSION['ccode']);
		//start of saving code
$date=$_POST['date'];
$buyer=$_POST['buyer'];
$status=$_POST['status'];
$spouse=$_POST['spouse'];
$gender=$_POST['gender'];
$tax=$_POST['tax'];
$address=$_POST['address'];
$sss=$_POST['sss'];
$bday=$_POST['bday'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$subname=$_POST['subname'];
$phase=$_POST['phase'];
$block=$_POST['block'];
$lotno=$_POST['lotno'];
$lotarea=$_POST['lotarea'];
$price=$_POST['price'];
$terms=$_POST['terms'];
$totalprice=$_POST['costprice'];
$discount=$_POST['discount'];
$downbal=$_POST['downbal'];
$amortbal=$_POST['amortbal'];
$amort=$_POST['amort'];
$Rstatus="Temporarily Reserved";
$ccode=$_POST['ccode'];
	if($email!='')
	{
		$result = mysql_query("SELECT * FROM `user` WHERE email='$email' ");
		if (!$result) 
		{
		die("Query to show fields from table failed");
		}
		$numberOfRows = MYSQL_NUMROWS($result);
		if($numberOfRows > 0)
			{
				$qry="INSERT INTO reserve (date, buyer, spouse, address, status, gender, tax, bday, sss, mobile, email, subname, phase, block,lotno, area, price, terms, downpayment, discount, amortbal, amort,ccode,Rstatus) VALUES ('$date','$buyer','$spouse','$address','$status','$gender','$tax','$bday','$sss','$mobile','$email','$subname', '$phase', '$block', '$lotno', '$lotarea', '$price', '$terms', '$discount', '$discount','$amortbal', '$amort','$ccode','$Rstatus')";
				mysql_query("UPDATE lot SET lotstatus = 'Temporarily Reserved' WHERE phase='$phase' and block='$block' and lotno='$lotno'");
				
					$result = @mysql_query($qry) ;
	
				//Check whether the query was successful or not
				if($result) {
					header("location: reservationsuccess.php");		
					exit();
					}else {
					die("Query failed");
	}
	
			}
		else if($numberOfRows == 0)
			{
				$sql="INSERT INTO user(name,address,gender,bday,email,password)VALUES('$buyer','$address','$gender','$bday','$email','$password')";
	$qry="INSERT INTO reserve (date, buyer, spouse, address, status, gender, tax, bday, sss, mobile, email, subname, phase, block,lotno, area, price, terms, downpayment, discount, amortbal, amort,ccode,Rstatus) VALUES ('$date','$buyer','$spouse','$address','$status','$gender','$tax','$bday','$sss','$mobile','$email','$subname', '$phase', '$block', '$lotno', '$lotarea', '$price', '$terms', '$discount', '$discount','$amortbal', '$amort','$ccode','$Rstatus')";
				mysql_query("UPDATE lot SET lotstatus = 'Temporarily Reserved' WHERE phase='$phase' and block='$block' and lotno='$lotno'");
				$result = @mysql_query($qry) and @mysql_query($sql) ;
	
				//Check whether the query was successful or not
				if($result) {
					header("location: reservationsuccess.php");		
				exit();
				}else {
					die("Query failed");
				}
			
			}

			

	
	}//end of save code
		
   } else {
   header("location: failed.php");		
		// Insert your code for showing an error message here
		//echo 'Sorry, you have provided an invalid security code';
//catchpa code cont.
}
}
else
{
}

?>