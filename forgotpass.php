
<?php 
include("include/dbconnection.php");

$receiver = $_POST['email'];
$result = mysql_query("SELECT * from `user` WHERE email = '$receiver' ");    
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	
	If ($numberOfRows == 0) 
		{
		echo 'Sorry No Record Found!';
		}
	else if ($numberOfRows > 0) 
		{
		$i=0;
		
			$password = MYSQL_RESULT($result,$i,"password");						
 		}

$subject ="Your Password in Lot Reservation";
$message= "Your Password in Lot Reservation is ".$password." ";
$to=$receiver;
// Your message
$Name = "Lot Reservation"; //senders name 
$email = "admin@yahoo.com.ph"; //senders e-mail adress 
$header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields 

// send email
$sentmail = mail($to,$subject,$message,$header);

// if not found

// if your email succesfully sent

if($sentmail){

echo "Successfully Send";

}

 else {

echo "Cannot send Confirmation link to your e-mail address";

} 

?>
