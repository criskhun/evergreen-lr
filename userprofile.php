<?php
require_once("include/auth.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>
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
  <li class="top"><a href="userlogout.php" class="top_link"><span>Logout</span></a></li>
</ul>
<div class="content">
<div class="sideleft"><br />
  <div class="sidenav">
    <form action="user_search.php" method="post">
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
    </form>
    <br />
    <br />
  </div>
 <div class="sidenav">
        <div align="center">
          <nr>
          <br />
          <h1>Evergreen Office:</h1>
          Room 101 Mancel Building<br />
          25th Lacson Street<br />
          General Santos City<br />
          <h1>Email Address:</h1>
          admin@yahoo.com.ph<br />
          <h1>Telephone Numbers:</h1>
          (034)709-14-86<br />
          (034)433-76-87<br />
          <br />
        </div>
    </div>
    <br />
	<h3><a href="img/form1.pdf" target="_blank">Download Reservation Form</a></h3>
	<br />
</div>
<div class="insidecontent"><br />
  <p align="center"><img src="img/clubhouse1.png" width="500" height="250"/><br /> </p>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; General Santos City is rapidly growing area, with commercial and residential  establishments rapidly sprouting all over the palce. The increase in  employment has also elleviated the lifestyle of the people. Therefore,  the nedd for more decent areas or subdivision is also in demand.<br />
      <br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The National Government, in its Medium- term Development Plan  2000-2010 has emphasized the need for the quality housing project.  Answering this call, the <strong>Dynamic Property and Realty Corporation</strong> backed by Dynamic Builders and Construction Company Incorporated. The  permiere in construction industry in South Cotabato ventured into real estate  development and its envisioned also to be the one of the leading  subdivision developer in South Cotabato.<br /><BR /><br />
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
