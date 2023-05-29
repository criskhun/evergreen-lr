<?php
 session_start();
 
include("include/dbconnection.php");
$picid=$_POST['pictureid'];


mysql_query(" UPDATE payment SET statu = 'deleted' WHERE pictureid= '$picid'");
//mysql_query("UPDATE lot SET lotstatus = 'Temporarily Reserved' WHERE phase='$phase' and block='$block' and lotno='$lotno'");

//mysql_query("UPDATE lot SET lotstatus = 'Available' WHERE subname='$subname' and phase='$phase' and block='$block' and lotno='$lotno'") ;
header('location: pendingpayments.php');

?>