<?php
include("include/dbconnection.php");
$comment=$_POST['comment'];
$date=$_POST['date'];
$status='unpost';
mysql_query("INSERT INTO comment(comment,status,date)VALUES('$comment','$status','$date')");
header("Location:user_contactus.php");
?>