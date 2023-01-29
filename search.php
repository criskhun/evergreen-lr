<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search Result</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>
</head>
<body>
<div class="main">
<div class="header"><img src="img/header1.gif" width="980" height="250" /></div>
<br /><br /><br /><br /><br /><br />
<ul id="nav">
  <li class="top"><a href="index.php" class="top_link"><span>Home</span></a></li>
  <li class="top"><a href="update.php" class="top_link"><span>Location Map</span></a></li>
  <li class="top"><a href="profile.php" class="top_link"><span>Profile</span></a></li>
  <li class="top"><a href="amenities.php" class="top_link"><span>Amenities</span></a></li>
  <li class="top"><a href="modelhouse.php" class="top_link"><span>Model Houses</span></a></li>
  <li class="top"><a href="contactus.php" class="top_link"><span>Contact Us</span></a></li>
  <li class="top"><a href="userlogin.php" class="top_link"><span>Customer Login</span></a></li>
</ul>
<div class="content">
<div class="sideleft"><br />
<div class="sidenav"> 
  <form action="search.php" method="post">
  <h1>Property Finder:</h1>
				<center>
				<select name="range" style="width:200px" class="input">
                  <option>Select Price Range</option>
				  <option value="1">Php 100,000 - Php 200,000</option>
				  <option value="2">Php 200,000 - Php 300,000</option>
				  <option value="3">Php 300,000 - Php 400,000</option>
				  <option value="4">Php 400,000 - Php 500,000</option>
				  <option value="5">Php 500,000 - Php 600,000</option>
				  <option value="6">Php 600,000 - Php 700,000</option>
				  <option value="7">Php 700,000 - Php 800,000</option>
				  <option value="8">Php 800,000 - Php 900,000</option>
				  <option value="9">Php 900,000 - Php 1M</option>
				  <option value="10">Php 1M - Above</option>
                </select>
				<br />
                  <br />
                  <select name="category" style="width:200px" class="input">
                    <option>Select Category </option>
                    <option value="house">House</option>
                    <option value="lot">Lot</option>
                  </select>		  
                  <br />
                  <br />
                  <br />
                  <input type="submit" name="search" value="Search"  class="btn"/>
		  </center>
      </form><br><br /></div>
	  <a href="signup.php"><br />
    </a>
	<br />
	<br />
<div class="sidenav">
        <div align="center"><nr><br />
          <h1>DPRC Office:</h1>
          Room 101 Mancel Building<br />
          25th Lacson Street<br />
          Bacolod City<br />
          <h1>Email Address:</h1>
          dprc_bacolod@yahoo.com.ph<br />
          <h1>Telephone Numbers:</h1>
          (034)709-14-86<br />
          (034)433-76-87<br />
          <br />
        </div>
      </div>	</div>
	  <br />
<div class="insidecontent"><br/>
<?php
	require ("include/dbconnection.php");
		$range=$_POST['range'];
	if (isset($_POST['search'])){
		if ($range=="Select Price Range"){
			echo "<font size=4 color=red>Select Price Range and Category First to Proceed!!!</font>"; 
			}
		else if ($_POST['range']=="Select Category") {
			echo "<font size=4 color=red>Select Price Range and Category First to Proceed!!!</font>"; 
			}
		}
	if ($_POST['category']=="house" and $range=='1') {
$result = mysql_query("SELECT * FROM house WHERE costprice<200000 and costprice>=100000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	    <img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' />
	    <div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['costprice'],2); ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 2ndhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='2') {
$result = mysql_query("SELECT * FROM house WHERE costprice<300000 and costprice>=200000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 3rdhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='3') {
$result = mysql_query("SELECT * FROM house WHERE costprice<400000 and costprice>=300000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 4thhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='4') {
$result = mysql_query("SELECT * FROM house WHERE costprice<500000 and costprice>=400000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 5thhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='5') {
$result = mysql_query("SELECT * FROM house WHERE costprice<600000 and costprice>=500000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 6thhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='6') {
$result = mysql_query("SELECT * FROM house WHERE costprice<700000 and costprice>=600000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 7thhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='7') {
$result = mysql_query("SELECT * FROM house WHERE costprice<800000 and costprice>=700000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 8thhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='8') {
$result = mysql_query("SELECT * FROM house WHERE costprice<900000 and costprice>=800000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 9thhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='9') {
$result = mysql_query("SELECT * FROM house WHERE costprice<1000000 and costprice>=900000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>
<!-- 10thhouse -->
<?php 
	if ($_POST['category']=="house" and $range=='10') {
$result = mysql_query("SELECT * FROM house WHERE costprice>=1000000 ORDER BY house_id");
	//qry = mysql_query("SELECT * FROM house WHERE no LIKE '%".$_REQUEST['search']."%'");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
	?>
	  <div class="search">
	<img src="<?php echo $row['houseimg']; ?>"width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
	<div class="searchresult">
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	House Type: <?php echo $row['type']; ?><br />
	House Model: <?php echo $row['model']; ?><br />
	Description: <?php echo $row['description']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	House Floor Area: <?php echo $row['floorarea']; ?><br />
	Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['price']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo $row['costprice']; ?><br />
    <a href="qoutation.php?houseid= <?php echo $row['house_id']; ?>">Get Qoutation</a>
	</div>
	</div><br />	
		  <?php
		  }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}
	}
?>



<!-- 1st-->
<?php
	if ($_REQUEST['category']=="lot" and $range=="1" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<200000 and tcp>=100000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
<!--	    <a href="update.php"><img src="img/signage.png" alt='Unable to View' width=180 height=150 border="0" style='margin-left: 17px; margin-top: 27px;' /></a>
-->	    <div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: 17px; margin-top: 27px;" /></a>';
	}

	?>

	<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h6></div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 2nd -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="2" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<300000 and tcp>=200000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
<!--	<img src="img/signage.png" width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
-->	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -200px; margin-top: -130px;" /></a>';
	}

	?>
	<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h6></div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 3rd -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="3" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<400000 and tcp>=300000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
<!--	<img src="img/signage.png" width=180 height=150 alt='Unable to View' style='margin-left: 17px; margin-top: 27px;' >
-->	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
	<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -200px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: 17px; margin-top: 27px;" /></a>';
	}

	?>
    <?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
</h6>
</div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 4th -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="4" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<500000 and tcp>=400000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: 17px; margin-top: 27px;" /></a>';
	}

	?>
		<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h6></div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 5th -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="5" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<600000 and tcp>=500000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: 17px; margin-top: 27px;" /></a>';
	}

	?>
		<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h6></div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 6th -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="6" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<700000 and tcp>=600000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: 17px; margin-top: 27px;" /></a>';
	}

	?>
<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h6></div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 7th -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="7" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<800000 and tcp>=700000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: 17px; margin-top: 27px;" /></a>';
	}

	?>
		<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h6></div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 8th -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="8" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<900000 and tcp>=800000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: 17px; margin-top: 27px;" /></a>';
	}

	?>
		<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h6></div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 9th -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="9" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp<1000000 and tcp>=900000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: 17px; margin-top: 27px;" /></a>';
	}

	?>
		<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h6></div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
<!-- 10th -->
<?php 
	if ($_REQUEST['category']=="lot" and $range=="10" ){
$result = mysql_query("SELECT * FROM lot WHERE tcp>=1000000 ORDER BY lot_id");
	 if (mysql_num_rows($result)>0){
	 while($row=mysql_fetch_array($result))
		  {
		  $status=$row['lotstatus'];
		  ?>
	  <div class="search">
	<div class="searchresult"><h6>
	Subdivision Name: <?php echo $row['subdname']; ?><br />
	Phase No.: <?php echo $row['phase']; ?><br />
	Block No.: <?php echo $row['block']; ?><br />
	Lot No.: <?php echo $row['lotno']; ?><br />
	Lot Area: <?php echo $row['lotarea']; ?><br />
	Lot Class: <?php echo $row['class']; ?><br />
	Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['price'],2); ?><br />
	Total Cost Price:&nbsp;<font color="#FF0000"> Php</font>&nbsp; <?php echo number_format($row['tcp'],2); ?><br />
				<?php
	if ($row['phase']=="1-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="1-B"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase1B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
	else if ($row['phase']=="2-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase2A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="2-B"){
	    echo '<a href="phase2B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
	}
	else if ($row['phase']=="3-A"){
		echo '<div style=" margin-left:-100px;"';
	    echo '<a href="phase3A.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: -90px; margin-top: -130px;" /></a>';
		echo '</div>';
	}
		else if ($row['phase']=="3-B"){
	    echo '<a href="phase3B.php"><img src="img/signage.png" alt="Unable to View" width=180 height=150 border="0" style="margin-left: 17px; margin-top: 27px;" /></a>';
	}

	?>
		<?php
	if ($status=='Available'){
	echo '<div style="">';
	echo '<form action="directreservation.php" method="post">';
	echo '<input type="hidden" name="subname" value="'.$row['subdname'].'">';
	echo '<input type="hidden" name="phase" value="'.$row['phase'].'">';
	echo '<input type="hidden" name="block" value="'.$row['block'].'">';
	echo '<input type="hidden" name="lotno" value="'.$row['lotno'].'">';
	echo '<input type="hidden" name="lotarea" value="'.$row['lotarea'].'">';
	echo '<input type="hidden" name="price" value="'.$row['price'].'">';
	echo '<br>';
	echo '<input type="submit" name="direct" value="Reserve Now" />';
	echo '</form>';
	echo '</div>';
	}
	else{
	echo '<br>';
	echo '<font color="red">Lot is Not Available for Reservation</font>';
	}
	 
	?>
	</h6></div><br />
	</div><br /><br />	
		 <?php }
		}
		else 
		{
			echo "<font size=4 color=red>No Records Found!!</font>"; 
		}	
	}
?>
</div>

<div style="clear:both"></div>
</div>

<div style="clear:both"></div>
<div class="bottommenu"> Terms and Condition | Home | About Us | Contact Us| Developer</div>
<div class="footer">
Copyright 2023&copy; RMMC Student Development
</div>
</div>
</body>
</html>