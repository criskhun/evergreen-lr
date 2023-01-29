<?php
 session_start();
$subid=$_GET['subid'];
include("include/dbconnection.php");
mysql_query("DELETE FROM subdivision WHERE subd_id= '$subid' ") or die(mysql_error());
header('location:subdivision.php');

?>