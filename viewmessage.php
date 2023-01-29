
<?php
	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
 function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
mysql_select_db("reservation", $con);

	
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();	
		header("location: adminreservation.php");
		exit();
	}
	
	

	mysql_select_db("reservation", $con);

// sending query
$result = mysql_query("SELECT * FROM messages ORDER BY subd_id");
if (!$result) 
	{
    die("Query to show fields from table failed");
	}
$rows = MYSQL_NUMROWS($result);

If ($rows == 0) 
	{
	echo '<div style=" color:red; text-align:center;">NO UNREAD MESSAGES !</div>';
	}
else if ($rows > 0) 
	{
	$i=0;
	while ($i<$rows)
		{		
			if(($i%2)==0) 
				{
					$bgcolor ='#FFFFFF';
				}
			else
				{
					$bgcolor ='@C0C0C0';
				}		
			$message_id = MYSQL_RESULT($result,$i,"message_id");
			$email = MYSQL_RESULT($result,$i,"email");
			$content = MYSQL_RESULT($result,$i,"content");
			$status = MYSQL_RESULT($result,$i,"status");
			$date = MYSQL_RESULT($result,$i,"date");
	
                            <td align="center"><?php echo $message_id ?></td>
                            <td align="center"><?php echo $email ?></td>
                            <td align="center"><?php echo $content ?></td>
                            <td align="center"><?php echo $status ?></td>
                            <td align="center"><?php echo $date ?></td>
                            <td align="center"><a href="editsubdivision.php?subid= <?php echo $subid; ?>">

mysql_close($con);	
?>