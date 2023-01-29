<?php
include("include/dbconnection.php");
$reserveid=$_POST['id'];
$subname=$_POST['subname'];
$phase=$_POST['phase'];
$block=$_POST['block'];
$lotno=$_POST['lotno'];
$buyer=$_POST['buyer'];
mysql_query("UPDATE reserve SET Rstatus = 'Sold' WHERE reserveid='$reserveid'");
mysql_query("UPDATE lot SET lotstatus = 'Sold' and soldto='$buyer' WHERE phase='$phase' and block='$block' and lotno='$lotno'");
header('Location:confirmed.php');
?> 
