<?php
require_once("include/auth.php");
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DPRC- Location Map</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>

<script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
<script type="text/javascript">

hs.graphicsDir = 'highslide/graphics/';
hs.outlineType = 'rounded-white';
hs.outlineWhileAnimating = true;
hs.wrapperClassName = 'draggable-header';

</script>

</head>
<body>
<div class="main">
<div class="header"><img src="img/header1.gif" width="980" height="250" /></div>
<br /><br /><br /><br /><br /><br />
<ul id="nav">
   <li class="top"><a href="user_index.php" class="top_link"><span>Home</span></a></li>
  <li class="top"><a href="user_updates.php" class="top_link"><span>Location Map</span></a></li>
  <li class="top"><a href="userprofile.php" class="top_link"><span>Profile</span></a></li>
<!--   <li class="top"><a href="user_ameneties.php" class="top_link"><span>Amenities</span></a></li> -->
  <li class="top"><a href="user_modelhouses.php" class="top_link"><span>Model Houses</span></a></li>
  <li class="top"><a href="requirements.php" class="top_link"><span>Requirements</span></a></li>
  <li class="top"><a href="user_contactus.php" class="top_link"><span>Contact Us</span></a></li>
  <li class="top"><a href="payment.php" class="top_link"><span>Payment</span></a></li>
  <li class="top"><a href="userpage.php" class="top_link"><span>Go Back</span></a></li>
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
  <div class="insidecontent"><br /><br />
  <div align="center"><h1>Click on Subdivision Phases to view...</h1></div>
    <div align="center"><img src="img/1.png" width="600" height="600" border="0" usemap="#Map" />
      <map name="Map" id="Map">
        <area title="Phase 1-A" shape="poly" coords="81,243,82,252,95,264,93,276,71,324,66,337,68,344,107,356,162,378,172,390,168,427,153,496,139,524,101,509,53,491,46,492,63,354,72,284,76,245"  href="user_phase1a.php" onclick="return hs.htmlExpand(this, { objectType: 'ajax'} )" />
		
        <area shape="poly" coords="83,242,90,256,103,269,74,335,146,363,179,301,208,358,268,321,223,225,180,176,166,178" href="user_phase2a.php" onclick="return hs.htmlExpand(this, { objectType: 'ajax'} )" />
		
        <area shape="poly" coords="256,333,303,333,333,348,366,398,332,437,227,394,213,368"  href="user_phase2b.php" onclick="return hs.htmlExpand(this, { objectType: 'ajax'} )" />
		
        <area shape="poly" coords="367,449,354,468,461,512,475,462,483,464,494,409,483,399,449,431,423,455,409,458,388,459,376,455" href="user_phase2b.php" onclick="return hs.htmlExpand(this, { objectType: 'ajax'} )" />
		
        <area shape="poly" coords="519,294,569,69,501,76,465,103,450,127,428,237,484,263,489,256,498,213,525,219,511,291" href="user_phase3b.php" onclick="return hs.htmlExpand(this, { objectType: 'ajax'} )" />
		
        <area shape="poly" coords="575,42,570,61,503,70,465,94,439,156,421,243,490,273,504,221,519,228,506,293,519,302,496,402,481,395,417,450,387,452,355,427,367,409,389,424,408,426,424,417,388,346,403,256,425,130,459,80,498,53" href="user_phase3a.php" onclick="return hs.htmlExpand(this, { objectType: 'ajax'} )" />
		
        <area shape="poly" coords="162,531,233,560,236,545,262,554,310,448,349,462,364,441,349,425,335,440,223,399,209,376,193,388,166,485,160,512" href="user_phase1b.php" onclick="return hs.htmlExpand(this, { objectType: 'ajax'} )" />
      </map>
    </div>



<div>
</div>
	</div>
<br />
<div style="clear:both"></div>
</div>

<div style="clear:both"></div>
<div class="bottommenu"> <a href="#">Terms and Condition</a> | <a href="user_index.php">Home</a> | <a href="userprofile.php">About Us</a> | <a href="user_contactus.php">Contact Us</a>| <a href="#">Developer</a></div>
<div class="footer">
<!-- Copyright 2023&copy; RMMC Student Development -->
</div>
</div>
</body>
</html>
