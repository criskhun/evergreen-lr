<?php 
include("include/dbconnection.php");

$receiver = $_POST['email'];
$message = $_POST['message'];
$content=$_POST['content'];
$wrap="".$content. "<br><br><br>" .$message."";

$to=$receiver;
// Your message
$Name = "Lot Reservation"; //senders name 
$email = "dprc_bacolod@yahoo.com.ph"; //senders e-mail adress 
$header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields 

// send email
$sentmail = mail($to,$wrap,$header);

// if not found

// if your email succesfully sent

if($sentmail){

echo "Successfully Send";

}

 else {

echo "Cannot send Confirmation link to your e-mail address";

} 

?>
