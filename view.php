
<?php
include 'designbasic.html';
include 'db.php';
?>
<body>
<center><font color="red"><h1>ONLINE LEAVE MANAGEMENT</h1></font>
<img src="images/City_Engineering_College_Bangalore.jpg" height=100 width=150 style="padding-left: 980px; margin-top: -76px;">
<img src="images/online-leave-management-logo-New.png" height=50 width=200 style="padding-right: 980px; margin-top: -88px;padding-bottom: 51px;">
<ul>
 <?php session_start();?>
  <li><a href="home.php?uid=<?php echo $_SESSION['reg_no'];?>">Home</a></li> 
  <li><a href="contact.php">Contact</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Leave</a>
    <div class="dropdown-content">
      <a href="apply.php">Apply Leave</a>
      <a href="status.php?uid=<?php echo $_SESSION['reg_no'];?>">Leave Status</a>
    </div>
  </li>
  <li><a href="change.php?uid=<?php echo $_SESSION['reg_no'];?>">Change Password</a></li>
  <li><a href="editstudent.php?uid=<?php echo $_SESSION['reg_no'];?>">Edit Profile</a></li>
  <li><a href="logout1.php">Logout</a></li>
</ul>
</body>
</html>
<?php
echo "<br><br><center><b>Your Request For Leave Has Been Successfully Applied!!</b>";

?>
