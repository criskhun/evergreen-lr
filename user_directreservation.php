<?php 

session_start();
include("include/dbconnection.php");
$phase=$_REQUEST['phase'];
$block=$_REQUEST['block'];
$lotno=$_REQUEST['lotno'];
$subname=$_REQUEST['subname'];
$lotarea=$_REQUEST['lotarea'];
$price=$_REQUEST['price'];

$errors = '';
if(isset($_POST['submit']))
{
	if(empty($_SESSION['ccode'] ) ||
	  strcasecmp($_SESSION['ccode'], $_POST['ccode']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$errors .="\n \t The captcha code does not match!";
	}
	
	if(empty($errors))
	{
		//start of saving code
			$date=$_POST['date'];
			$buyer=$_POST['buyer'];
			$status=$_POST['status'];
			$spouse=$_POST['spouse'];
			$gender=$_POST['gender'];
			$tax=$_POST['tax'];
			$address=$_POST['address'];
			$sss=$_POST['sss'];
			$bday=$_POST['bday'];
			$gender=$_POST['gender'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$subname=$_POST['subname'];
			$phase=$_POST['phase'];
			$block=$_POST['block'];
			$lotno=$_POST['lotno'];
			$area=$_POST['area'];
			$price=$_POST['price'];
			$terms=$_POST['terms'];
			$totalprice=$_POST['costprice'];
			$discount=$_POST['discount'];
			$downbal=$_POST['downbal'];
			$amortbal=$_POST['amortbal'];
			$amort=$_POST['amort'];
			$Rstatus="Temporarily Reserved";
			$ccode=$_POST['ccode'];	
	
	$qry="INSERT INTO reserve (date, buyer, spouse, address, status, gender, tax, bday, sss, mobile, email, subname, phase, block,lotno, area, price, terms, downpayment, discount, amortbal, amort,ccode,Rstatus) VALUES ('$date','$buyer','$spouse','$address','$status','$gender','$tax','$bday','$sss','$mobile','$email','$subname', '$phase', '$block', '$lotno', '$area', '$price', '$terms', '$discount', '$discount','$amortbal', '$amort','$ccode','$Rstatus')";
				mysql_query("UPDATE lot SET lotstatus = 'Temporarily Reserved' WHERE phase='$phase' and block='$block' and lotno='$lotno'");
				$result = @mysql_query($qry) ;
	
				//Check whether the query was successful or not
				if($result) {
					header("location: user_directsuccess.php");		
				exit();
				}else {
					die("Query failed");
				}
				$date=$_POST['date'];
			$buyer=$_POST['buyer'];
			$status=$_POST['status'];
			$spouse=$_POST['spouse'];
			$gender=$_POST['gender'];
			$tax=$_POST['tax'];
			$address=$_POST['address'];
			$sss=$_POST['sss'];
			$bday=$_POST['bday'];
			$gender=$_POST['gender'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$subname=$_POST['subname'];
			$phase=$_POST['phase'];
			$block=$_POST['block'];
			$lotno=$_POST['lotno'];
			$area=$_POST['area'];
			$price=$_POST['price'];
			$terms=$_POST['terms'];
			$totalprice=$_POST['costprice'];
			$discount=$_POST['discount'];
			$downbal=$_POST['downbal'];
			$amortbal=$_POST['amortbal'];
			$amort=$_POST['amort'];
			$Rstatus="Temporarily Reserved";
			$ccode=$_POST['ccode'];	
	
	$qry="INSERT INTO reserve (date, buyer, spouse, address, status, gender, tax, bday, sss, mobile, email, subname, phase, block,lotno, area, price, terms, downpayment, discount, amortbal, amort,ccode,Rstatus) VALUES ('$date','$buyer','$spouse','$address','$status','$gender','$tax','$bday','$sss','$mobile','$email','$subname', '$phase', '$block', '$lotno', '$area', '$price', '$terms', '$discount', '$discount','$amortbal', '$amort','$ccode','$Rstatus')";
				mysql_query("UPDATE lot SET lotstatus = 'Temporarily Reserved' WHERE phase='$phase' and block='$block' and lotno='$lotno'");
				$result = @mysql_query($qry) ;
	
				//Check whether the query was successful or not
				if($result) {
					header("location: user_directsuccess.php");		
				exit();
				}else {
					die("Query failed");
				}
					
		
	}//end of save code
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lot Reservation</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>

<script type="text/javascript" src="js/jquery.maskedinput-1.0.js"></script>
<script type="text/javascript"  src="js/ui.core.js"></script>
<script type="text/javascript"  src="js/ui.accordion.js"></script>
<script type="text/javascript">
$.validator.setDefaults({
	//submitHandler: function() { alert("submitted!"); }
});

$().ready(function() {	
	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			buyer: "required",
			address:"required",
			mobile:"required",
			password:"required",
			accept:"required",
			ccode:"required",
			terms:"required",
		},
		messages: {
			email: "Please enter a valid email address",
			buyer: "Please enter Buyer's Name",
			address: "Please enter Address",
			mobile: "Please enter Contact Details",
			password: "Enter Password",
			accept: "Accept Terms and Conditions",
			ccode: "Enter Security Code",
			terms:"Select Terms of Payment",
				}
	});
});
</script>
<style type="text/css">
#signupForm { width: 670px; }
#signupForm label.error {
	margin-left: 5px;
	width: auto;
	font-size:10PX;
	display: inline;
	color:#FF0000;
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
	  var area = document.getElementById('lotarea').value;//para sa inputfield nga area
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
<script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
<script type="text/javascript">
    hs.graphicsDir = '../highslide/graphics/';
    hs.outlineType = 'rounded-white';
</script>

<!-- define some style elements-->
<style>
#signupForm { width: 980px; }
.txt{
font-size:12px;
color:#FFFFFF;
font-weight:bold;
}
.subinfo{
float:left;
margin-left:70px;
width:300px;
}
.persoinfo{
float:right;
width:400px;
margin-right:150px;
}
label,a, body 
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 12px; 
}
.err
{
	font-family : Verdana, Helvetica, sans-serif;
	font-size : 12px;
	color: red;

}
</style>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>
</head>
<body>
<div class="main">
<div class="header"><img src="img/header1.gif" width="980" height="250" /></div>
<br /><br /><br /><br /><br /><br />
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
<br />

<div class="content">

<?php
if(!empty($errors)){
echo "<p align='center' class='err'>".nl2br($errors)."</p>";
}
?>
<div align="center" id='contact_form_errorloc' class='err'></div>

<form method="POST" name="signupForm" id="signupForm" action="<?php //echo htmlentities($_SERVER['PHP_SELF']); ?>">
<input type="hidden" name="date"  value="<?php echo date("M d, Y"); ?>"/>

<div class="subinfo">
<table width="335" align="center">
	<tr>
	<td width="147" align="left"><div class="txt">Name of Subdivision:</div></td>
	<td width="176" align="left"><input type="text" name="subname" id="subname" value="<?php echo $subname; ?>" readonly="" /></td>
	</tr>
	<tr>
	<td align="left"><div class="txt">Phase Number:</div></td>
	<td align="left"><input type="text" name="phase" id="phase" value="<?php echo $phase; ?>" readonly="" /></td>
	</tr>
	<tr>
	<td align="left"><div class="txt">Block Number:</div></td>
	<td align="left"><input type="text" name="block" id="block" value="<?php echo $block; ?>"  readonly=""/></td>
	</tr>
	<tr>
	<td align="left"><div class="txt">Lot Number:</div></td>
	<td align="left"><input type="text" name="lotno" id="lotno" value="<?php echo $lotno; ?>" readonly="" /></td>
	</tr>
	<tr>
	<td align="left"><div class="txt">Lot Area (sq.m.):</div></td>
	<td align="left"><input type="text" name="lotarea" id="lotarea" value="<?php echo $lotarea; ?>"  readonly=""/></td>
	</tr>
	<tr>
	<td align="left"><div class="txt">Price (sq./m.): &nbsp; Php</div></td>
	<td align="left"><input type="" name="price1" id="price1" value="<?php echo number_format($price,2); ?>" readonly="" />
	<input type="hidden" name="price" id="price" value="<?php echo $price; ?>" readonly="" />
	</td>
	</tr>
	</table>

</div>
<div class="persoinfo">
<table width="586">
    <td align="left" width="170"><div class="txt">Name of Buyer:<font color="#FF0000">*</font></div></td>
	<td width="404" align="left"><input name="buyer" id="buyer" class="inputclass pageRequired" title="Buyer Name is Required" maxlength="254" value="<?php echo $_SESSION['name']; ?>" style="text-transform:capitalize"/></td>
	<tr>
	<td align="left"><div class="txt">Current Address:<font color="#FF0000">*</font></div></td>
	<td align="left"><input name="address" id="address" class="inputclass pageRequired" title="Address is Required" maxlength="254"  value="<?php echo $_SESSION['address']; ?>"   style="text-transform:capitalize"/></td>
	</tr>	
	<tr>
	<tr>
	<td align="left"><div class="txt">Tel.No/Mobile Number:<font color="#FF0000">*</font></div></td>
	<td align="left"><input name="mobile" id="mobile" class="inputclass pageRequired" title="Contact No. is Required" maxlength="15" onblur="recordClientAddress1.value = this.value" onkeypress="return isNumberKey(event)" /></td>
	</tr>	
<tr>
<td width="170" align="left"><div class="txt"> Email Address:<font color="#FF0000">*</font></div></td>
<td width="404" align="left"><input name="email" id="email" class="inputclass pageRequired" maxlength="254" title="Email address is required"  value="<?php echo $_SESSION['email']; ?>"/></td>
</tr>

	<tr>
	<td align="left"><div class="txt">Terms of Payment:<font color="#FF0000">*</font></div></td>
	<td align="left">
	<div class="txt"><input name="terms" id="terms" type="radio" value="5yrs|0.243180571" onchange="DisplayTerms(this.value)" onclick="CalculateFee()" />
	5 years 
	<input name="terms" type="radio" id="terms"  value="7yrs|0.0200047141" onchange="DisplayTerms(this.value)"  onclick="CalculateFee()"/>
	7 years
	<input name="terms" type="radio" id="terms"  value="10yrs|0.170642299" onchange="DisplayTerms(this.value)" onclick="CalculateFee()" />
	10 years</div></td>
	</tr>	
	</table>
</div>
<div style="clear:both"></div>
<div align="center">
 
 

	
	
	 <input type="hidden" name="term1" id="term1" /></td>
	<input type="hidden" name="costprice" id="cost" readonly="" />
	<input name="discount" type="hidden"  id="reqdown" readonly="" />
	<input name="downbal" id="downbal" readonly="" type="hidden" />
	<input name="amortbal" id="amortbal1" readonly="" type="hidden"/>
	<input type="hidden" name="amort" id="amort" readonly="" />
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'>Enter the code above here :</label><br>
<input id="ccode" name="ccode" type="text"><br>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>

<div align="center"><input type="checkbox" name="accept" id="accept" class="inputclass pageRequired" title="Agree Terms and Condition"/>I accept the <a href="terms.php" onclick="return hs.htmlExpand(this, { objectType: 'ajax'} )" >terms and condition</a>.</div>

      <input name="submit" type="submit" id="submit" value="Submit" class="submitbutton" alt="Submit" title="Submit" onclick=""></div>
</form>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
</div>
<br />

<div style="clear:both"></div>
<div class="bottommenu"> Terms and Condition | Home | About Us | Contact Us| Developer</div>
<div class="footer">
Copyright 2023&copy; RMMC Student Development
</div>
</div>
</body>
</html>
