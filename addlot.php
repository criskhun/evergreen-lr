<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add New Lot</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>
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
			phase: "required",
			block: "required",
			lotno: "required",
			lotarea: "required",
			class: "required",
			price: "required"
			},
		messages: {
			phase: "Please enter phase number",
			block: "Please enter block number",
			lotno: "Please enter lot number",
			lotarea: "Please enter lot area",
			class: "Please enter lot class",
			price: "Please enter lot price"
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
  <li class="top"><a href="events.php" class="top_link"><span>Company Events</span></a>
  			<ul class="sub">
			<li><a href="createevent.php" class="fly">Create Events</a></li>
			</ul></li>
  <li class="top"><a href="logout.php" class="top_link"><span>Logout</span></a></li>

</ul>
<div class="content">
<div class="insidecontent"><br /><br />
<form name="save" action="savelot.php" method="post" id="signupForm">
  <table width="386" height="301"> 
    <tr>
      <td>Subdivision:</td>
      <td width="293">
        <select name="subname" id="subname" style="width:225px" class="input" >
          <option value="-1">Select Subdivision</option>
          <?php
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM subdivision  ORDER BY subdname ASC")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<option value="' . $row['subdname'] . '">' . $row['subdname'] . '<br></option>'; 
        } 
?>
        </select></td>
    </tr>
	<tr>
	    <td width="81">Phase:</td>
      <td width="293"><select name="phase" id="phase" style="width:225px" class="input" >
          <option value="-1">Select Phase</option>
          <?php
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM phase  ORDER BY phase ASC")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<option value="' . $row['phase'] . '">' . $row['phase'] . '<br></option>'; 
        } 
?>
        </select></td>
	</tr>
	
    <tr>
      <td width="81">Block</td>
      <td width="293"><input name="block" id="block" type="text" class="input" onkeypress="return isNumberKey(event)" /></td>
    </tr>
	<tr>
	    <td width="81">Lot Number:</td>
        <td width="293"><input name="lotno" id="lotno" type="text" class="input" onkeypress="return isNumberKey(event)"/></td>
	</tr>
    <tr>
	<tr>
	    <td width="81">Class:</td>
        <td width="293"><input name="class" id="class" type="text" class="input"/></td>
	</tr>
    <tr>
      <td>Lot Area:</td>
      <td><input name="lotarea" id="lotarea" type="text" class="input" onkeypress="return isNumberKey(event)"/></td>
	</tr>
	<tr>
      <td>Price:</td>
      <td><input name="price" id="price" type="text" class="input" onkeypress="return isNumberKey(event)"/></td>
	</tr>
		<tr>
	    <td width="81">Lot Status:</td>
        <td width="293"><select name="lotstatus" style="width:225px" class="input">
		<option>Select Lot Status</option>
		<option>Available</option>
		<option>Reserved</option>
		<option>Sold</option>
		</select></td>
		</tr>

	<tr>
      <td >Remarks:</td>
      <td><textarea name="remarks" cols="30" rows="5" class="input"></textarea></td>
    </tr>
  </table><br />
  <div style="margin-left:100px;"><input type="submit" name="save" value="Save" class="btn1" onclick="return validateR();" /></div>
</form><br />

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
