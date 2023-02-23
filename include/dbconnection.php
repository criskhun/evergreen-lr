<?php  
	$conn = mysql_connect('localhost', 'u854000491_lotreservation', 'Letmein#123');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("u854000491_lotreservation", $conn);
?>