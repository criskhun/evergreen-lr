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
			subname: "required",
			baldesc: "required",
			price: "required"
			},
		messages: {
			subname: "Please select buyer name",
			baldesc: "Please select description",
			price: "Please enter price",
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
	color:#192841
}
</style>

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
<div class="insidecontent"><br /><br />
<form name="save" action="savebalance.php" method="post" id="signupForm">
  <table width="386" height="301"> 
    <tr>
      <td>Buyer Name:</td>
      <td width="293">
        <select name="subname" id="subname" style="width:225px" class="input" >
          <option value="-1">Select Buyer</option>
          <?php
include("include/dbconnection.php");
$result = mysql_query("SELECT buyer FROM reserve ORDER BY buyer ASC")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<option value="' . $row['buyer'] . '">' . $row['buyer'] . '<br></option>'; 
        } 
?>
        </select></td>
    </tr>
	<td width="293"><input name="baldate" id="baldate" type="hidden" class="input" value="<?php echo date("D, M d, Y"); ?>"/></td>
	<tr>
	    <td width="81">Balance Desc:</td>
        <td width="293"><select name="baldesc" id="baldesc" style="width:225px" class="input">
		<option>Select Lot Status</option>
		<option>Downpayment</option>
		<option>Monthly Installment Payment</option>
		<option>Remaining Balance</option>
		</select></td>
	</tr>
	<tr>
      <td>Amount:</td>
      <td><input name="price" id="price" type="text" class="input" onkeypress="return isNumberKey(event)"/></td>
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
<!-- Copyright 2023&copy; RMMC Student Development -->
</div>
</div>
</body>
</html>
