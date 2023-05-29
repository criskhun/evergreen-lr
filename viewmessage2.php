<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>View Message</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>
</head>
<body>
<div class="main">
<div class="header"><img src="img/header1.gif" width="980" height="250" /></div>
<br /><br /><br /><br /><br /><br />
<ul id="nav">
   <li class="top"><a href="admin_index.php" class="top_link"><span>Home</span></a></li>
  <!-- <li class="top"><a href="subdivision.php" class="top_link"><span>Subdivision</span></a> -->
  	  			<ul class="sub">
			<li><a href="addsub.php" class="fly">Add Subdivision</a></li>
			</ul>
  </li>
  <li class="top"><a href="lot.php" class="top_link"><span>Lot</span></a>
  	  			<ul class="sub">
			<li><a href="addlot.php" class="fly">Add Lot</a></li>
			</ul>
  </li>
  <li class="top"><a href="house.php" class="top_link"><span>House</span></a>
  			<ul class="sub">
			<li><a href="addhouse.php" class="fly">Add House</a></li>
			</ul>
  </li>
  <li class="top"><a href="report.php" class="top_link"><span>Reports</span></a></li>
  <!-- <li class="top"><a href="events.php" class="top_link"><span>Company Events</span></a> -->
  			<ul class="sub">
			<li><a href="createevent.php" class="fly">Create Events</a></li>
			</ul></li>
  <li class="top"><a href="logout.php" class="top_link"><span>Logout</span></a></li>

</ul>
<div class="content">
<div class="content1"><br /><br />
                          <?php 
include("include/dbconnection.php");						  
$result = mysql_query("SELECT * FROM message ORDER BY date");
if (!$result) 
	{
    die("Query to show fields from table failed");
	}
$rows = MYSQL_NUMROWS($result);

If ($rows == 0) 
	{
	echo '<div style="color:#192841; text-align:center;">No Unread Messages !</div>';
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
		
?>
<div class="message"><br />
<div class="insidemsg">
Sender: <input type="text" name="email" value="<?php echo $email; ?>" style="margin-left:3px;"  class="input9"/><br />
Message:<br /><textarea cols="100" rows="1" style="margin-left:60px; margin-top:-12px;" class="input8"><?php echo $content; ?></textarea>
<div class="action">
<form action="reply.php" method="post">
<input type="hidden" name="email" value="<?php echo $email; ?>"/>
<input type="hidden" name="id" value="<?php echo $message_id; ?>"/>
<input type="hidden" name="content" value="<?php echo $content; ?>"/>
<input type="submit" value="Reply" />
<a  href="deletemsg.php?id= <?php echo $message_id; ?>"><input type="button" value="Delete" /></a>
</form>
</div>

</div><br />
</div>
<br />
<?php 	
$i++;		
	}
	}	
?>
                        </table>
						<br />
						<br />
</div>
  <div style="clear:both"></div>
</div>

<div style="clear:both"></div>
<div class="footer">
<!-- Copyright 2023&copy; RMMC Student Development -->
</div>
</div>
</body>
</html>
