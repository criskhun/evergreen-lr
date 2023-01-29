<?php
include("include/dbconnection.php");
$subname=$_POST['subname'];
$result = mysql_query("SELECT * FROM subdivision  WHERE subdname='$subname' subdname ASC");  
?>