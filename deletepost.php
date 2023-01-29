<?php
 session_start();
$commentid=$_GET['commentid'];
include("include/dbconnection.php");
mysql_query("DELETE FROM comment WHERE comment_id= '$commentid' ") or die(mysql_error());
header('location: unreadcomment.php');

?>