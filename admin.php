<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['id']);
	unset($_SESSION['firstname']);
	unset($_SESSION['lastname']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrator Log-in</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<script src="css/stuHover.js" type="text/javascript"></script>
</head>
<body>
<div class="main">
<div class="header"><img src="img/header1.gif" width="980" height="250" /></div>
<br /><br /><br /><br /><br /><br />
<div class="content">
<br />
<form action="login.php" method="post">
  <table width="340" height="140" border="0" align="center"> 
    <tr>
      <td width="87">Username </td>
      <td width="243"><input type="text" name="username" class="input" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="pword" class="input" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="register" value="Log-In"  class="btn1"/></td>
    </tr>

  </table>
</form>
<br /><br />
<div align="center">
 <?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<br><font color="red"><br>',$msg,'</font></br>'; 
		}
		unset($_SESSION['ERRMSG_ARR']);
	}
?></div>

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

