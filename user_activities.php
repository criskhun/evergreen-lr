<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Company Activities</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>
<!--
lightbox
<script type="text/javascript" src="css/js/prototype.js"></script>
<script type="text/javascript" src="css/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="css/js/lightbox.js"></script>

<link href="css/css/lightbox.css" rel="stylesheet" type="text/css" />-->

<script type="text/javascript" src="highslide/highslide-full.js" ></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css"/>
<script type="text/javascript">
	hs.graphicsDir = '../highslide/graphics/';
	hs.align = 'center';
	hs.transitions = ['expand', 'crossfade'];
	hs.outlineType = 'rounded-white';
	hs.fadeInOut = true;
	hs.dimmingOpacity = 0.75;

	// define the restraining box
	hs.useBox = true;
	hs.width = 640;
	hs.height = 480;

	// Add the controlbar
	hs.addSlideshow({
		//slideshowGroup: 'group1',
		interval: 5000,
		repeat: false,
		useControls: true,
		fixedControls: 'fit',
		overlayOptions: {
			opacity: 1,
			position: 'bottom center',
			hideOnMouseOut: true
		}
	});
</script>

</head>
<body>
<div class="main">
<div class="header"><img src="img/header.png" width="980" height="150" /></div>
<ul id="nav">
  <li class="top"><a href="user_index.php" class="top_link"><span>Home</span></a></li>
  <li class="top"><a href="userprofile.php" class="top_link"><span>Profile</span></a></li>
  <li class="top"><a href="user_updates.php" class="top_link"><span>Location Map</span></a></li>
<!--   <li class="top"><a href="user_ameneties.php" class="top_link"><span>Amenities</span></a></li> -->
  <li class="top"><a href="user_modelhouses.php" class="top_link"><span>Model Houses</span></a></li>
  <li class="top"><a href="requirements.php" class="top_link"><span>Requirements</span></a></li>
  <li class="top"><a href="user_contactus.php" class="top_link"><span>Contact Us</span></a></li>
  <li class="top"><a href="userlogout.php" class="top_link"><span>Logout</span></a></li>
</ul>
<div class="content">
<div class="sideleft"><br />
    <div class="sidenav"><br />
        <h1><u>Activities</u></h1>
        <?php 
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM activity  ORDER BY datemake")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<h1><a href=activities.php?activityid='.$row['activity_id'].'>'.$row['activity_name'] . '</a></h1>'; 
        } 
?>
        <br />
    </div>
    <br />
  </div>
<br />
<div class="insidecontent">
	<?php	
require("include/dbconnection.php");
$activityid =$_GET['activityid'];
	$result = mysql_query("SELECT * from `activitylist` WHERE activity_id = '$activityid' ");     
	if (!$result) 
		{
		die("Query to show fields from table failed");
		}
	$numberOfRows = MYSQL_NUMROWS($result);
	
	If ($numberOfRows == 0) 
		{
		//echo 'Sorry No Record Found!';
		}
	else if ($numberOfRows > 0) 
		{
		$i=0;
		
			$name = MYSQL_RESULT($result,$i,"activity_name");
		}			
	?>				
<h1> <?php echo $name; ?></h1>
<?php 
require("include/dbconnection.php");
$activityid =$_GET['activityid'];
$result = mysql_query("SELECT * FROM activitylist WHERE activity_id='$activityid'  ORDER BY dateuploaded DESC");


while($row = mysql_fetch_array($result))
  {
	echo "<a href='" . $row["filename"] . "' class='highslide' onclick='return hs.expand(this)'>";
	echo "<img src='" . $row["filename"] . "' width=150 height=150>";
  //echo "<a href='" . $row["filename"] . "' rel='lightbox[roadtrip]'><img style='margin-right:7px;margin-bottom:20px;' width=150 height=150 alt='Unable to View'  src='" . $row["filename"] . "'></a>";
 
  }

?>
<br /><br />
</div>
	<div style="clear:both"></div>
</div>

<div style="clear:both"></div>
<div class="bottommenu"> <a href="#">Terms and Condition</a> | <a href="user_index.php">Home</a> | <a href="userprofile.php">About Us</a> | <a href="user_contactus.php">Contact Us</a>|<a href="#"> Developer</a></div>
<div class="footer">
Copyright 2023&copy; RMMC Student Development
</div>
</div>
</body>
</html>

