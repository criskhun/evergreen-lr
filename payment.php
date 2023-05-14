<?php require_once("include/auth.php"); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Welcome Customer</title>
  <link rel="stylesheet" href="css/styleko.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/yep.css" type="text/css" media="screen">
  <script src="https://kit.fontawesome.com/0b4d5035b5.js" crossorigin="anonymous"></script>
  <script src="css/stuHover.js" type="text/javascript"></script>
</head>
<body>
  <div class="main">
    <div class="header">
      <img src="img/header1.gif" width="980" height="250" />
    </div>
    <br /><br /><br /><br /><br /><br />
    <ul id="nav">
      <li class="top"><a href="user_index.php" class="top_link"><span>Home</span></a></li>
      <li class="top"><a href="user_updates.php" class="top_link"><span>Location Map</span></a></li>
      <li class="top"><a href="userprofile.php" class="top_link"><span>Profile</span></a></li>
      <!-- <li class="top"><a href="user_ameneties.php" class="top_link"><span>Amenities</span></a></li> -->
      <li class="top"><a href="user_modelhouses.php" class="top_link"><span>Model Houses</span></a></li>
      <li class="top"><a href="requirements.php" class="top_link"><span>Requirements</span></a></li>
      <li class="top"><a href="user_contactus.php" class="top_link"><span>Contact Us</span></a></li>
      <li class="top"><a href="userlogout.php" class="top_link"><span>Logout</span></a></li>
      <li class="top"><a href="#" class="top_link"><span>Payment</span></a></li>
      <li class="notification">
        <div class="notification-icon">
          <p style="color:white"><i class="fas fa-bell"></i></p>
          <div class="notification-count">2</div>
        </div>
        <div class="notification-modal">
          <div class="notification-header">
            <h2>Notifications</h2>
            <button class="close-button">Close</button>
          </div>
          <div class="notification-list">
            <div class="notification-item">
              <p style="color:white">You have a new approved lot</p>
              <span>2 min ago</span>
            </div>
            <div class="notification-item">
              <p style="color:white">You have a new rejected lot</p>
              <span>1 hour ago</span>
            </div>
          </div>
        </div>
      </li>
    </ul>

    <div align="center">
    <h2>Balance Information</h2>
    <table>
      <tr>
        <th>Date</th>
        <th>Description</th>
        <th>Amount</th>
      </tr>
      <tr>
        <td>2023-05-01</td>
        <td>Income</td>
        <td>+ $500</td>
      </tr>
      <tr>
        <td>2023-05-05</td>
        <td>Expense</td>
        <td>- $200</td>
      </tr>
      <!-- Add more rows for additional balance information -->
    </table>
  </div>
      <div style="clear:both"></div>

      <div style="clear:both"></div>
      <div class="bottommenu">
        <a href="#">Terms and Condition</a> |
        <a href="user_index.php">Home</a> |
        <a href="userprofile.php">About Us</a> |
        <a href="user_contactus.php">Contact Us</a> |
        <a href="#">Developer</a>
      </div>

      <div class="footer">
        <!-- Copyright 2023&copy; RMMC Student Development -->
      </div>
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
  document.querySelector('.close-button').addEventListener('click', function() {
    document.querySelector('.notification-modal').style.display = 'none';
  });
</script>