<?php
 session_start();
 
include("include/dbconnection.php");
$reserveid=$_POST['reserveid'];

$subname=$_POST['subname'];
$phase=$_POST['phase'];
$block=$_POST['block'];
$lotno=$_POST['lotno'];

//mysql_query("DELETE FROM reserve WHERE reserveid= '$reserveid' ");
mysql_query(" UPDATE reserve SET Rstatus = 'deleted' WHERE reserveid= '$reserveid'");
//mysql_query("UPDATE lot SET lotstatus = 'Temporarily Reserved' WHERE phase='$phase' and block='$block' and lotno='$lotno'");
mysql_query("UPDATE lot SET lotstatus = 'Available' WHERE subdname='$subname' and phase='$phase' and block='$block' and lotno='$lotno'");

//mysql_query("UPDATE lot SET lotstatus = 'Available' WHERE subname='$subname' and phase='$phase' and block='$block' and lotno='$lotno'") ;
header('location: confirmed.php');

?>