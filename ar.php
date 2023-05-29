<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Accounts Receivable Report <?php echo $_GET['status']; ?></title>
<link href="css/view.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div style="margin:0 auto; width:900px;">	  
<div class="content">
<div align="center" style="width:900px">
<h1>Accounts Receivable Report <br><br>Accounts Receivable Report </h1>
</div>
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
	echo '<div style="color:#192841; text-align:center;">No Lots Found !</div>';
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
	  
</body>
</html>