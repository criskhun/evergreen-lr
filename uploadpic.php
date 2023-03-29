<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>
<script type="text/javascript" src="css/js/prototype.js"></script>
<script type="text/javascript" src="css/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="css/js/lightbox.js"></script>

<link href="css/css/lightbox.css" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
$.validator.setDefaults({
	//submitHandler: function() { alert("submitted!"); }
});

$().ready(function() {	
	// validate signup form on keyup and submit
	$("#signupForm").validate({			
		rules: {
			image: "required"
			},
		messages: {
			image: "Please Select Image First to Proceed"
		}
	});
});
</script>
<style type="text/css">
#signupForm { width: 670px; }
#signupForm label.error {
	margin-left: 40px;
	width: auto;
	font-size:10PX;
	display: inline;
	color:#FF0000;
}
</style>

</head>
<body>
<div class="main">
<div class="header"><img src="img/header1.gif" width="980" height="250" /></div>
<br /><br /><br /><br /><br /><br />
<ul id="nav">
   <li class="top"><a href="admin_index.php" class="top_link"><span>Home</span></a></li>
  <li class="top"><a href="subdivision.php" class="top_link"><span>Subdivision</span></a>
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
<div class="content"><br />
<div style="margin-left:10px;">

  <?php	
require("include/dbconnection.php");
$activityid =$_GET['activityid'];
	$result = mysql_query("SELECT * from `activitylist` WHERE activity_id = '$activityid' ");     
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
		if ($numberOfRows > 0) 
		{
		$i=0;
		
			$name = MYSQL_RESULT($result,$i,"activity_name");
			$id = MYSQL_RESULT($result,$i,"activity_id");
		}	
			else if ($numberOfRows == 0) 
		{
	echo "<div align='center'>";
	echo "<strong>No Picture Found On ".$name."</strong><br>";
		echo "<br>";
	echo "</div>";	
		}
		
	?>
  <h1><?php echo $name; ?></h1>
  <?php 
require("include/dbconnection.php");
$activityid =$_GET['activityid'];
$result = mysql_query("SELECT * FROM activitylist WHERE activity_id='$activityid'  ORDER BY dateuploaded DESC");


while($row = mysql_fetch_array($result))
  {

  echo "<a href='" . $row["filename"] . "' rel='lightbox[roadtrip]'><img style='margin-right:7px;margin-bottom:20px;' width=150 height=150 alt='Unable to View'  src='" . $row["filename"] . "'></a>"; 
  }
?>
  <br />
<br />
<div align="center">
<form action="activity.php" method="post" enctype="multipart/form-data" id="signupForm">
<br /><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload Picture for <?php echo $name; ?></h1>
<br />
<input type="hidden" name="date"  value="<?php echo date("D, M d, Y"); ?>"/>
				<input type="hidden" name="directory"  value="<?php echo $name; ?>"/>
		<input type="hidden" name="id"  value="<?php echo $activityid; ?>"/>
<input type="file" name="image" id="image" class="input"/><br /> <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" class="btn" name="save" value="Upload Picture" />
</form>
</div>
</div>
<br /><br />
	<div style="clear:both"></div>
</div>

<div style="clear:both"></div>
<div class="footer">
Copyright 2023&copy; RMMC Student Development
</div>
</div>
</body>
</html>

