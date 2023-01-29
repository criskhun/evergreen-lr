<?php
 session_start();
 include("include/dbconnection.php");
$id=$_GET['activityid'];

mysql_query("DELETE FROM activitylist WHERE activity_id= '$id' ") or die(mysql_error());

?>