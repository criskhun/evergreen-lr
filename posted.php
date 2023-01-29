<?php
 include("include/dbconnection.php");
 
$commentid=$_POST['comment_id'];
mysql_query("UPDATE comment SET status = 'posted' WHERE comment_id='$commentid'");


header('location: unreadcomment.php');

?>