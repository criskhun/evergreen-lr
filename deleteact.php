<?php
 session_start();
$activity_id=$_GET['activityid'];
include("include/dbconnection.php");
mysql_query("DELETE FROM activity WHERE activity_id= '$activity_id' ") or die(mysql_error());
mysql_query("DELETE FROM activitylist WHERE activity_id= '$activity_id' ") or die(mysql_error());
header('location: house.php');

?>