
<?php
include("include/dbconnection.php");

$email=$_POST['email'];
$content=$_POST['content'];
$date=$_POST['date'];
$status='unread';
mysql_query("INSERT INTO message(email,content,status,date) VALUES('$email','$content','$status','$date')");
mysql_close($con);
header("Location:sendsuccess.php");
?> 
