<?php require_once("include/auth.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DPRC- List of Lots</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>
<script src="css/jquery-1.3.2.js" type="text/javascript"></script>
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>

<script language="Javascript" type="text/javascript">
function result()
{
var subname=document.getElementById('subname').value;
var phase=document.getElementById('phase').value;
var block=document.getElementById('block').value;
var lot=document.getElementById('lot').value;

$.ajax({
		type: "POST",
		data: ({phase: phase,block: block,lot: lot,subname:subname}),
		url:"result1.php",
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
<div class="content1"><br /><br />
<form action="" method="post">
<div align="center">
<select name="subname" id="subname">
                  <option>-Select Subdivision-</option>
                  <?php
include("include/dbconnection.php");

$result = mysql_query("SELECT * FROM subdivision  ORDER BY subdname ASC")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<option>' . $row['subdname'] . '<br></option>'; 
        } 
?>
        </select>
Phase Number:
<select name="phase" id="phase">
  <option>-Phase No-</option>
  <?php
include("include/dbconnection.php");//run the query

$result = mysql_query("SELECT * FROM phase")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<option>' . $row['phase'] . '<br></option>'; 
 			}
			?>
</select>
	  Block Number:
<select name="block" id="block">
  <option>-Block No-</option>
  <?php
include("include/dbconnection.php");//run the query

$result = mysql_query("SELECT * FROM block")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<option>' . $row['block'] . '<br></option>'; 
 			}
			?>
</select>
Lot Number:
<input type="text" id="lot" name="lotno" width="10px" />
<input type="button" name="search" value="Search" onclick="result()"/>
</div>
<br />
 <div class="result"></div>
 <br /> 
 <div align="right" style="margin-right:40px;">Select Phase
 <select name="phase">
        <?php
include("include/dbconnection.php");

$result = mysql_query("SELECT * FROM phase  ORDER BY phase ASC")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<option>' . $row['phase'] . '<br></option>'; 
        } 
?>
 </select>
 <input type="submit" name="OK" value="OK" />
 </div>
  <table width="929" border="0" align="center">
    <tr>
      <td width="43" align="center" bgcolor="#cccccc">Lot ID</td>
      <td width="85" align="center" bgcolor="#cccccc">Subdivision</td>
      <td width="58" align="center" bgcolor="#cccccc">Phase</td>
      <td width="53" align="center" bgcolor="#cccccc">BLock</td>
      <td width="53" align="center" bgcolor="#cccccc">Lot No</td>
      <td width="103" align="center" bgcolor="#cccccc">Class</td>
      <td width="40" align="center" bgcolor="#cccccc">Area</td>
      <td width="124" align="center" bgcolor="#cccccc">Price</td>
      <td width="140" align="center" bgcolor="#cccccc">Cost Price</td>
      <td width="61" align="center" bgcolor="#cccccc">Status</td>
      <td width="51" align="center" bgcolor="#cccccc">Edit</td>
      <td width="68" align="center" bgcolor="#cccccc">Delete</td>
    </tr>
    <?php 
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM lot ORDER BY lot_id");
if (isset($_POST['OK'])) 
	{
	if ($_POST['phase']=='1-A')
		{$result = mysql_query("SELECT * FROM lot where phase='1-A' ORDER BY block ASC ");}
	if ($_POST['phase']=='1-B')
		{$result = mysql_query("SELECT * FROM lot where phase='1-B' ORDER BY block ASC ");}	
	if ($_POST['phase']=='2-A')
		{$result = mysql_query("SELECT * FROM lot where phase='2-A' ORDER BY block ASC ");}	
	if ($_POST['phase']=='2-B')
		{$result = mysql_query("SELECT * FROM lot where phase='2-B' ORDER BY block ASC ");}
	if ($_POST['phase']=='3-A')
		{$result = mysql_query("SELECT * FROM lot where phase='3-A' ORDER BY block ASC ");}
	if ($_POST['phase']=='3-B')
		{$result = mysql_query("SELECT * FROM lot where phase='3-B' ORDER BY block ASC ");}			}
if (!$result) 
	{
    die("Query to show fields from table failed");
	}
$rows = MYSQL_NUMROWS($result);

If ($rows == 0) 
	{
	echo '<div style=" color:red; text-align:center;">No Lots Found !</div>';
	}
else if ($rows > 0) 
	{
	$i=0;
	while ($i<$rows)
		{		
			if(($i%2)==0) 
				{
					$bgcolor ='#FFFFFF';
				}
			else
				{
					$bgcolor ='@C0C0C0';
				}		
			$lotid = MYSQL_RESULT($result,$i,"lot_id");
			$phase = MYSQL_RESULT($result,$i,"phase");
			$block = MYSQL_RESULT($result,$i,"block");
			$lotarea = MYSQL_RESULT($result,$i,"lotarea");
			$class = MYSQL_RESULT($result,$i,"class");
			$price = MYSQL_RESULT($result,$i,"price");
			$lotno = MYSQL_RESULT($result,$i,"lotno");
			$tcp = MYSQL_RESULT($result,$i,"tcp");
			$subname= MYSQL_RESULT($result,$i,"subdname");
			$status = MYSQL_RESULT($result,$i,"lotstatus");

?>
    <tr>
      <td width="43" align="center" ><?php echo $lotid ?></td>
      <td width="85" align="center"><?php echo $subname ?></td>
      <td width="58" align="center" ><?php echo $phase ?></td>
      <td width="53" align="center" ><?php echo $block ?></td>
      <td width="53" align="center" ><?php echo $lotno ?></td>
      <td width="103" align="center" ><?php echo $class ?></td>
      <td width="40" align="center" ><?php echo $lotarea ?></td>
      <td width="124" align="center" ><font color="#FF0000"> Php</font> <?php echo  number_format($price ,2);?></td>
      <td width="140" align="center" ><font color="#FF0000"> Php</font> <?php echo number_format($tcp,2); ?></td>
      <td width="61" align="center" ><?php echo $status ?></td>
      <td width="51" align="center" ><a href="editlot.php?lotid= <?php echo $lotid; ?>"><img src="img/edit.png" width="25" height="25" border="0" /></a></h6></td>
      <td width="68" align="center" ><a href="deletelot.php?lotid= <?php echo $lotid; ?>"><img src="img/cancel.png"onclick="return confirm('Are you sure you want to delete a lot no. <?php echo $lotid ?>');" width="25" height="25" border="0" /></a></td>
    </tr>
    <?php 	
$i++;		
	}
	}	
?>
  </table>
  <br />
						<br />
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
