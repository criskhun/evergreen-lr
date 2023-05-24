<?php
require_once("include/auth.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lot Reservation</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>
<script src="css/jquery-1.3.2.js" type="text/javascript"></script>
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
			tax: "required",
			buyer: "required",
			address: "required",
			sss: "required",
			mobile: "required",
			ccode: {
				required: true,
				equalTo: "#code"
			},
			email: {
				required: true,
				email: true
			},
			agree: "required"
			},
		messages: {
			tax: "Please enter TIN number",
			buyer: "Please enter Buyers' Name",
			address: "Please enter Buyers' Address",
			sss: "Please enter SSS/GSIS number",
			mobile: "Please enter Contact Number",
			ccode: {
				required: "Please provide a password",
				equalTo: "Please enter the same confirmation code as above"
			},
			email: "Please enter a valid email address",
			agree:"Accept Terms and Condtion"
		}
	});
});
</script>
<style type="text/css">
#signupForm { width: 980px; margin:0 auto; }
#signupForm label.error {
	margin-left: 10px;
	width: auto;
	font-size:10PX;
	display: inline;
	color:#192841
}
</style>

<script language="Javascript" type="text/javascript">
function DisplayLocation (locationPair) 
	{
	 var loc = locationPair.split('|');
  	//var payamount = document.getElementById('payamount').value; // (user input pay amount student pay for course)
	 document.getElementById('location').value = loc[1]; //(display course fee when item is selected)
	}
	
/*(A)*/
	function DisplayTerms (TermPair) 
	{
	 var terms = TermPair.split('|');
  	//var payamount = document.getElementById('payamount').value; // (user input pay amount student pay for course)
	 document.getElementById('term1').value = terms[1]; //(display course fee when item is selected)
	}


	function CalculateFee ()
	 {
	  var area = document.getElementById('area').value;//para sa inputfield nga area
	  var price = document.getElementById('price').value;//para sa inputfield nga price
	  //computation of costprice
	  var costprice = (area*1) * (price*1);//calculate price and area
	  document.getElementById('cost').value = costprice; //automatic display when calculate button is pressed
	  

	  var reqdownpayment=(costprice*1)*0.20;//calculate reqd downpayment
	  document.getElementById('reqdown').value = reqdownpayment; //automatic display when calculate button is pressed
	  
	  var balance=(costprice*1)-(reqdownpayment*1);//downpayment balance
	  document.getElementById('downbal').value = balance; //para sa downpayment balance
	  document.getElementById('amortbal1').value = balance; //para sa amortization balance
	  
	 var termss = document.getElementById('term1').value;//para kuhaon ang value sg terms of payment
	 var monthlyamortization=(balance*1)*(termss*1);
	 var result= Math.round(monthlyamortization*100)/100;
	 document.getElementById('amort').value=result;

	}
function result()
{
var phase=document.getElementById('phase').value;
var block=document.getElementById('block').value;
var lot=document.getElementById('lot').value;
$.ajax({
		type: "POST",
		data: ({phase: phase,block: block,lot: lot}),
		url:"result.php",
		success: function(response) {
		
		$(".result").html(response);
		
		
		}
		
		});

}
</script>
<style type="text/css">
<!--
.style4 {font-size: x-large}
.style2 {color: #000000}
-->
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
  <li class="top"><a href="adminreservation.php" class="top_link"><span>Reservation</span></a></li>
  <!-- <li class="top"><a href="events.php" class="top_link"><span>Company Events</span></a> -->
  			<ul class="sub">
			<li><a href="createevent.php" class="fly">Create Events</a></li>
			</ul></li>
  <li class="top"><a href="logout.php" class="top_link"><span>Logout</span></a></li>
</ul>
<div class="content">
  <div class="content"><BR />
<form action="saveadminreservation.php" method="post" id="signupForm">

  <table width="727" height="59" border="0" align="center">
    <tr>
      <td width="125" align="right">Date:</td>
      <td width="159"><input type="text" name="date"  value="<?php echo date("D, M d, Y"); ?>"/></td>
      <?php
			  include('include/dbconnection.php');
				$sql = mysql_query("SELECT * FROM reserve ORDER BY reserveid desc LIMIT 1") or die (mysql_error());
				
				WHILE($row = mysql_fetch_array($sql)){
					$reserveid =  $row['reserveid'] + 1;
				} 
				
				
				?>
      <td width="176" align="right">BDO Savings Account No.:</td>
      <td width="144"><input type="text" name="bdo_acct" value="335-0038-454"/></td>
    </tr>
    <tr>
      <td align="right">Reservation No.:</td>
      <td><input type="text" name="reserveid" value="<?php echo "DPRC-0000" . $reserveid ?>" /></td>
      <td align="right">Reservation Fee:</td>
      <td><input type="text" name="reserve_fee"  value="Php 5,000.00"/>
          <input type="hidden" name="reserve" id="Rfee"  value="5000"/></td>
    </tr>
  </table>
  <Br />
  <h1>Personal Information</h1>
  <table width="727" height="59" border="0" align="center">
    <tr>
      <td width="120" align="right" >Buyer:</td>
      <td width="207"><input type="text" name="buyer" id="buyer" class="input1" /></td>
      <td width="121" align="right">Status:</td>
      <td width="158"><select name="status" class="input1" style="width: 170px; margin-left:18px;">
        <option> Select Status</option>
        <option> Single</option>
        <option> Married</option>
      </select></td>
    </tr>
    <tr>
      <td align="right">Spouse:</td>
      <td><input type="text" name="spouse" class="input1" /></td>
      <td align="right">TAX I.D. No.:</td>
      <td><input type="text" name="tax" id="tax" class="input1" /></td>
    </tr>
    <tr>
      <td align="right" >Address:</td>
      <td><input type="text" name="address" id="address"  class="input1"/></td>
      <td align="right" >SSS/GSIS No.:</td>
      <td><input type="text" name="sss" id="sss" class="input1" /></td>
    </tr>
    <tr>
      <td width="120" align="right">Birthday:</td>
      <td width="207">&nbsp;&nbsp;
        <select name="month" class="input6">
          <option> month</option>
          <option> Jan</option>
          <option> Feb</option>
          <option> Mar</option>
          <option> Apr</option>
          <option> May</option>
          <option> June</option>
          <option> Juky</option>
          <option> Aug</option>
          <option> Sep</option>
          <option> Oct</option>
          <option> Nov</option>
          <option> Dec</option>
        </select>
          <select name="day" class="input2">
            <option>day</option>
            <?PHP $day =  1; for ($i = 1; $i <= 31; $i++) {echo "<option>$day</option>"; $day++;} ?>
          </select>
          <select name="year" class="input2">
            <option>Year</option>
            <?PHP $year = date("Y"); for ($i = 1930; $i <= date("Y"); $i++) {echo "<option>$year</option>"; $year--;} ?>
          </select>      </td>
      <td align="right" >Gender</td>
      <td><select name="gender" class="input1" style="width: 170px; margin-left:18px;">
        <option>Select Gender</option>
        <option>Male</option>
        <option>Female</option>
      </select></td>
    </tr>
    <tr>
      <td align="right">Email:</td>
      <td><input type="text" name="email" id="email" class="input1" /></td>
      <td align="right">Tel.No./Mobile No.:</td>
      <td><input type="text" name="mobile" id="mobile"  class="input1"/></td>
    </tr>
  </table>
  <br />  <h1>Subdivision and Lot Information</h1>

  <table width="727" height="59" border="0" align="center">
    <tr>
      <td width="172" align="right">Subdivision:</td>
      <td width="310"><select name="subname" style="width: 170px; margin-left:18px;" class="input1">
        <option>Select Subdivision</option>
        <?php
include("include/dbconnection.php");//run the query

$result = mysql_query("SELECT * FROM subdivision  ORDER BY subdname ASC")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<option value="|'.$row['location'].'">' . $row['subdname'] . '<br></option>'; 
 			}
			
			?>
      </select></td>
      <td width="191" align="right">Location: </td>
      <td width="286"><select name="location" style="width: 170px; margin-left:18px;" class="input1">
          <option>Select Location</option>
          <?php
include("include/dbconnection.php");//run the query

$result = mysql_query("SELECT * FROM subdivision  ORDER BY location ASC")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<option>' . $row['location'] .','. $row['city'] . '<br></option>'; 
 			}
			
			?>
      </select></td>
    </tr>
    <tr>
      <td width="172" align="right">Phase:</td>
      <td width="310"><select name="phase" id="phase"  style="width: 170px; margin-left:18px;" class="input1">
        <option>Phase No.</option>
        <?php
include("include/dbconnection.php");//run the query

$result = mysql_query("SELECT * FROM lot  WHERE lotstatus='Available'   ORDER BY lot_id ASC")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<option>' . $row['phase'] . '<br></option>'; 
 			}
			?>
      </select></td>
      <td width="191" align="right">Block:</td>
      <td width="286"><select id="block" name="block" style="width: 170px; margin-left:18px;" class="input1">
        <option>BLock No.</option>
        <?php
include("include/dbconnection.php");//run the query

$result = mysql_query("SELECT * FROM lot WHERE lotstatus='Available'  ORDER BY lot_id ASC")  
        or die (mysql_error());  
     	
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<option>' . $row['block'] . '<br></option>'; 
 			}
			?>
      </select></td>
	      </tr>
		<tr>
		<td width="172" align="right">Lot Number:</td>
      <td width="310"><select id="lot" name="lotno" style="width: 170px; margin-left:18px;" class="input1">
        <option>Lot No.</option>
        <?php
include("include/dbconnection.php");//run the query

$result = mysql_query("SELECT * FROM lot WHERE lotstatus='Available'  ORDER BY lot_id ASC")  
        or die (mysql_error());  
     	
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<option>' . $row['lotno'] . '<br></option>'; 
 			}
			?>
      </select></td>
	  <td></td>
	  <td><div style=" margin-left:10px; margin-top:5px;">
	    <input type="button" name="button" value="Check Lot Availability" style="margin-right:0px" class="btn" onclick="result()"/>
	  </div></td>
		</tr>
	</table>
	<div class="result"></div>
<!--	<table width="639" align="center">
    <tr>
      <td width="103" align="right">Area(sq.m.):</td>
      <td width="211"><input type="text" name="area" id="area" class="input1" /></td>
      <td width="113" align="right">Price/sq.m:</td>
      <td width="192"><input type="text" name="price" id="price" class="input1"/></td>
    </tr>
  </table>
-->  <br />  <h1>Price and Mode of Payment</h1>
  <table width="727" height="59" border="0" align="center">
    <tr>
      <td width="169" align="right">Terms(years):</td>
      <td width="314"><select name="terms" id="terms" onchange="DisplayTerms(this.value)" style="width: 170px; margin-left:18px;" class="input1">
        <option value="|0">Select Terms</option>
        <option value="5yrs|0.243180571">5 years</option>
        <option value="7yrs|0.0200047141">7 years</option>
        <option value="10yrs|0.170642299">10 years</option>
      </select></td>
      <input type="hidden" name="term1" id="term1" />
      <td width="192" align="right">Total Price:</td>
      <td width="286"><input type="text" name="costprice" id="cost" readonly="" value="0" class="input1"/></td>
    </tr>
    <tr>
      <td align="right">Req'd Downpayment:</td>
      <td><input type="text" name="discount"  id="reqdown" readonly="" class="input1"/></td>
      <td align="right">Downpayment Bal:</td>
      <td><input type="text" name="downbal" id="downbal" readonly="" class="input1" /></td>
    </tr>
    <tr>
      <td align="right">Amortization:</td>
      <td><input type="text" name="amort" id="amort" readonly="" class="input1"/></td>
      <td align="right">Amortization Bal:</td>
      <td><input type="text" name="amortbal" id="amortbal1" readonly="" class="input1"/></td>
    </tr>
    <tr>
      <td align="right"></td>
      <td></td>
      <td align="right"></td>
      <td><div style=" margin-left:15px; margin-top:5px;"><input type="button" name="Button" value="Calculate Payment" onclick="CalculateFee()"  class="btn"/></div></td>
    </tr>
  </table>
  
  <?php	
$string = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$code = "";
for($i=0; $i<8; $i++){
$y = rand(0,strlen($string)-1);
$code .= $string[$y];
}
?>
<table width="284" height="165" align="center">
<tr>
<td align="center">Confirmation Code </td>
</tr>
<tr>
<td><input type="text" name="code" id="code" value="<?php echo $code; ?>" class="input5" /></td>
</tr>
<td align="center">Input Confirmation Code Here:</td>
</tr>
<tr>
<td><input type="text" class="input5" id="ccode" name="ccode" /></td>
</tr>
  </table>
  <div align="center">
  Agree Terms and Condition &nbsp;<input name="agree" id="agree" type="checkbox" value="checkbox" />
  </div><br />
	  <br />
  <table width="400" height="10" border="0" align="center">
    <tr>
      <td align="center"><input type="submit" name="reserve2" value="Reserve Now" class="btn" /></td>
      <td align="center"><input type="submit" name="reset" value="Reset" class="btn" /></td>
    </tr>
  </table>
  
  </form>
  </div>
<BR /><BR />
<div style="clear:both"></div>
</div>

<div style="clear:both"></div>
<div class="bottommenu"> Terms and Condition | Home | About Us | Contact Us| Developer</div>
<div class="footer">
/* Copyright 2023&copy; RMMC Student Development */
</div>
</div>
</body>
</html>
