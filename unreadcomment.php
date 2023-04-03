<?php
require_once("include/auth.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> List of Activities</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>

</head>
<body>
<input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>" />
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

<br /><br />
   <table width="860" border="0" align="center">
                            <tr>
                              <td width="697" align="left" bgcolor="#cccccc"><strong>Comment</strong></td>
                              <td width="64" align="center" bgcolor="#cccccc">Post</td>
                              <td width="85" align="center" bgcolor="#cccccc">Delete</td>
                            </tr>
                            <?php 
include("include/dbconnection.php");

// sending query
$result = mysql_query("SELECT * FROM comment WHERE status='unpost' ORDER BY date");
if (!$result) 
	{
    die("Query to show fields from table failed");
	}
$rows = MYSQL_NUMROWS($result);

If ($rows == 0) 
	{
	echo '<div style=" color:red; text-align:center;">No Comments Found !</div>';
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
			$comment = MYSQL_RESULT($result,$i,"comment");
			$comment_id = MYSQL_RESULT($result,$i,"comment_id");
		
?>
                            <tr>
                              <td><?php echo $comment ?></td>
                              <td align="center">
							  <form action="posted.php" method="post">
								  <input type="hidden" name="comment_id" value="<?php echo $comment_id; ?>" />
								  <input type="submit" name="post" value="Post" />
							  </form>
							  
							  
							  </td>
                              <td align="center"><a href="deletepost.php?commentid=<?php echo $comment_id; ?>"><img src="img/cancel.png" width="25" height="25" border="0" onclick="return confirm('Are you sure you want to delete a comment no.<?php echo $comment_id; ?>');"/></a></td>
                            </tr>
                            <?php 	
$i++;		
	}
	}	
?>
      </table>




<br />
<br />

<div style="clear:both"></div>
</div>

<div style="clear:both"></div>
<div class="footer">
<!-- Copyright 2023&copy; RMMC Student Development -->
</div>
</div>
</body>
</html>
