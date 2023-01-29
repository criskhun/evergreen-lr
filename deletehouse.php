<?php
 session_start();
$houseid=$_GET['houseid'];
include("include/dbconnection.php");

mysql_query("DELETE FROM house WHERE house_id= '$houseid' ") or die(mysql_error());
header('location: house.php');

?>