<?php
 session_start();
$id=$_GET['id'];
include("include/dbconnection.php");

mysql_query("DELETE FROM message WHERE message_id= '$id' ") or die(mysql_error());
header('location: viewmessage2.php');

?>