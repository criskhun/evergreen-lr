
<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('include/config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect('localhost','root',"");
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db('reservation', $link);
	if(!$db) {
		die("Unable to select database");
	}
	//Sanitize the POST values
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$address =$_POST['address'];
	$email = $_POST['email'];
	$username=$_POST['username'];
	$password =$_POST['password'];
	$confirmpass =$_POST['confirm_password'];
	$gender = $_POST['gender'];
$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['year'];
$bday= $month."-".$day."-".$year;

		//Check for duplicate login ID
	if($username != '') {
		$qry = "SELECT * FROM user WHERE username='$username'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'username has already used by another user';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header('location: directreservation.php');
		exit();
	}

	//Create INSERT query
	$qry = "INSERT INTO user(firstname,lastname, address,gender,bday, email,username,password )VALUES('$fname' ,'$lname', '$address', '$gender', '$bday','$email','$username','$password')";
	
	$result =mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		?>
		<?php
$phase=$_POST['phase'];
$block=$_POST['block'];
$lotno=$_POST['lotno'];
$subname=$_POST['subname'];
$lotarea=$_POST['lotarea'];
$price=$_POST['price'];
$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$address =$_POST['address'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['year'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lot Reservation</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>

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
	  
	 var termss = document.getElementById('term1').value;//para sa inputfield nga price
	  
	  var reqdownpayment=(costprice*1)*0.20;//calculate reqd downpayment
	  document.getElementById('reqdown').value = reqdownpayment; //automatic display when calculate button is pressed
	  
	  var balance=(costprice*1)-(reqdownpayment*1);//downpayment balance
	  document.getElementById('downbal').value = balance; //automatic display when calculate button is pressed
	  
	  document.getElementById('amortbal1').value = balance; //automatic display when calculate button is pressed
	  
	  //compute monthly amortization
	  var term=(balance*1)* (termss*1);
	  document.getElementById('amort').value = term; //automatic display when calculate button is pressed

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

</head>
<body>
<div class="main">
<div class="header"><img src="img/header1.gif" width="980" height="250" /></div>
<br /><br /><br /><br /><br /><br />
<ul id="nav">
  <li class="top"><a href="index.php" class="top_link"><span>Home</span></a></li>
  <li class="top"><a href="profile.php" class="top_link"><span>Profile</span></a></li>
  <li class="top"><a href="updates" class="top_link"><span>Updates</span></a></li>
  <li class="top"><a href="amenities.php" class="top_link"><span>Ameneties</span></a></li>
  <li class="top"><a href="modelhouse.php" class="top_link"><span>Model Houses</span></a></li>
  <li class="top"><a href="contactus.php" class="top_link"><span>Contact Us</span></a></li>
  <li class="top"><a href="userlogin.php" class="top_link"><span>Customer Login</span></a></li>
</ul>
<div class="content">
<div class="sideleft"><br />
<div class="sidenav"> 
  <h1>Details:</h1>
  Subdivision Name: &nbsp; <?php echo $subname; ?><br />
  Subdivision Name: &nbsp; <?php echo $phase; ?><br />
  Subdivision Name: &nbsp; <?php echo $block; ?><br />
  Subdivision Name: &nbsp; <?php echo $lotno; ?><br />
  Subdivision Name: &nbsp; <?php echo $lotarea; ?><br />
  Subdivision Name: &nbsp; <?php echo $price; ?><br />
<br><br /></div>

	  <br />
</div>
<div class="insidecontent">
<form action="#" id="signupForm" method="post">
<div align="center">
<h1>STEP 2:</h1>
</div>
<table width="668" height="59" border="0" >
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
<div align="center">
<h1>Mode of Payment</h1>
</div>
<table width="669" height="116" border="0">
    <tr><input type="text" name="area" id="area" value="<?php echo $lotarea; ?>" />
	<input type="text" name="price" id="price" value="<?php echo $price; ?>" />
      <td width="145" align="right">Terms(years):</td>
      <td width="188"><select name="terms" id="terms" onchange="DisplayTerms(this.value)" style="width: 170px; margin-left:18px;" class="input1">
        <option value="|0">Select Terms</option>
        <option value="5yrs|0.243180571">5 years</option>
        <option value="7yrs|0.0200047141">7 years</option>
        <option value="10yrs|0.170642299">10 years</option>
      </select></td>
      <input type="hidden" name="term1" id="term1" />
      <td width="123" align="right">Total Price:</td>
      <td width="172"><input type="text" name="costprice" id="cost" readonly="" value="0" class="input1"/></td>
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
  </table>
  <input type="button" name="Button" value="Calculate Payment" onclick="CalculateFee()"  class="btn"/>
  <br />
  <br />
  <?php	
$string = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$code = "";
for($i=0; $i<8; $i++){
$y = rand(0,strlen($string)-1);
$code .= $string[$y];
}
?>

<table width="280" height="165" align="center">
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
  <br />
  Agree Terms and Condition &nbsp;<input name="agree" id="agree" type="checkbox" value="checkbox" /><br />
	  <br />
  <table width="400" height="10" border="0" align="center">
    <tr>
      <td align="center"><input type="submit" name="reserve2" value="Reserve Now" class="btn" /></td>
      <td align="center"><input type="submit" name="reset" value="Reset" class="btn" /></td>
    </tr>
  </table>
</form>
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

		<?php
		exit();
	}else {
		die("Query failed");
	}
?>