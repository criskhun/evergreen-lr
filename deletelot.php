<?php
 session_start();
$lotid=$_GET['lotid'];
include("include/dbconnection.php");

mysql_query("DELETE FROM lot WHERE lot_id= '$lotid' ") or die(mysql_error());
header('location: lot.php');

?>