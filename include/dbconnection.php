<?php  
	$conn = mysql_connect('localhost', 'u398623434_reservation', 'Letmein#123');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("u398623434_reservation", $conn);
?>