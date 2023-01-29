<?php
require_once("include/auth.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add New  House</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>

<script src="lib/jquery.js" type="text/javascript"></script>
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
			model: "required",
			lotarea: "required",
			floorarea: "required",
			price: "required",
			description: "required",
			image: "required"
			},
		messages: {
			model: "Please enter House Model",
			floorarea: "Please enter Floor Area",
			lotarea: "Please enter lot area",
			description: "Please enter House Description",
			price: "Please enter lot price"
			image: "Please Select Image Firts to Proceed"
		}
	});
});
</script>
<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>

<style type="text/css">
#signupForm { width:0 auto; }
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
  <li class="top"><a href="events.php" class="top_link"><span>Company Events</span></a>
  			<ul class="sub">
			<li><a href="createevent.php" class="fly">Create Events</a></li>
			</ul></li>
  <li class="top"><a href="logout.php" class="top_link"><span>Logout</span></a></li>
</ul>
<div class="content">
<div class="content1"><br /><br />
	<form action="savehouse.php" method="post" enctype="multipart/form-data" id="signupForm" name="signupForm">
  <table width="491" height="319" border="0" align="center">
    <tr>
      <td width="154" height="32">Name of Subdivision</td>
      <td width="327"><select name="subname" style="width:220px; margin-left:30px;" class="input">
        <option>Select Subdivision</option>
        <?php
include("include/dbconnection.php");

$result = mysql_query("SELECT * FROM subdivision  ORDER BY subdname ASC")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<option>' . $row['subdname'] . '<br></option>'; 
        } 
?>
      </select>    </tr>
	<tr>
     <td width="154" height="32">House Model</td>
     <td width="327"><input type="text" name="model" id="model" class="input"/></td>
	 </tr>
	 <tr>
       <td width="154" height="32" >Type</td>
       <td width="327"><select name="type" style="width:220px; margin-left:30px;" class="input">
                                <option>Select House Type</option>
                                <option>2 Storey</option>
                                <option>Bungalow</option>
                            </select>		</td>
	 </tr>
	<tr>
     <td width="154" height="32">Description</td>
     <td width="327"><input type="text" name="description" id="description" class="input"/></td>
	</tr>
	<tr>
    <td width="154">Lot Area</td>
    <td width="327"><input type="text" name="lotarea" id="lotarea" class="input"  onkeypress="return isNumberKey(event)"/></td>
	</tr>
    <tr>
      <td>Floor Area </td>
      <td><input type="text" name="floorarea" id="floorarea" class="input"  onkeypress="return isNumberKey(event)"/></td>
    </tr>
	<tr>
      <td>Price</td>
      <td><input type="text" name="price" id="price" class="input" /></td>
	</tr>
	<tr>
      <td>Picture</td>
      <td><input type="file" name="image" id="image" class="input"/></td>
	</tr>
	<tr>
	<td height="10"></td>
	<td height="10"></td>
	</tr>
		<tr>
      <td></td>
      <td><input type="submit" name="save" value="Upload and Save" class="btn1" /></td>
		</tr>
  </table>
  </form>
  <div class="error">
    <?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<br><font color="red"><br>',$msg,'</font></br>'; 
		}
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
  </div>
	
	
						<br />
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
