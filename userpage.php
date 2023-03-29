<?php require_once("include/auth.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome Customer</title>
<link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/yep.css" type="text/css" media="screen">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-6i/BSFLj+yWm5pn5Q5O5Kt+JjgkWYc8pOJ/+9F4jv40lNjKc09oyfNwEjrkwes3vCCO44kCj0HDdXd9ql9N3qQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
  <li class="top"><a href="user_ameneties.php" class="top_link"><span>Amenities</span></a></li>
  <li class="top"><a href="user_modelhouses.php" class="top_link"><span>Model Houses</span></a></li>
  <li class="top"><a href="requirements.php" class="top_link"><span>Requirements</span></a></li>
  <li class="top"><a href="user_contactus.php" class="top_link"><span>Contact Us</span></a></li>
  <li class="top"><a href="userlogout.php" class="top_link"><span>Logout</span></a></li>
</ul>
<div class="content">
<div class="notification-icon">
  <i class="fa fa-bell"></i>
  <div class="notification-count">2</div>
</div>

<div class="notification-modal">
  <div class="notification-header">
    <h2>Notifications</h2>
    <i class="fa fa-times"></i>
  </div>
  <div class="notification-list">
    <div class="notification-item">
      <p style="color:white">lot requirements still pending</p>
      <span>2 min ago</span>
    </div>
    <div class="notification-item">
    <p style="color:white">lot approve</p>
      <span>1 hour ago</span>
    </div>
  </div>
</div>

<div align="center">
  <h1>WELCOME!<br /><br /> Our valued Customer!<br /><br /></h1>
  <h9><div style=" text-decoration:underline; text-transform:capitalize"><?php echo $_SESSION['name']; ?></div></h9>
  <br /><br />
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

<script>

  // show notification modal when notification icon is clicked
document.querySelector('.notification-icon').addEventListener('click', function() {
  document.querySelector('.notification-modal').style.display = 'block';
});

// hide notification modal when close button is clicked
document.querySelector('.notification-header i').addEventListener('click', function() {
  document.querySelector('.notification-modal').style.display = 'none';
});

</script>

