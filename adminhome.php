<?php
include 'designbasic.html';
?>
<body>
<center><font color="red"><h1>ONLINE LEAVE MANAGEMENT</h1></font>
<img src="images/City_Engineering_College_Bangalore.jpg" height=100 width=150 style="padding-left: 980px; margin-top: -76px;">
<img src="images/online-leave-management-logo-New.png" height=50 width=200 style="padding-right: 980px; margin-top: -88px;padding-bottom: 51px;">
<ul>
 <?php session_start();?>
  <li><a href="adminhome.php?uid=<?php echo $_SESSION['reg_no'];?>">Home</a></li> 
  <li><a href="contactadmin.php">Contact</a></li>
   <li><a href="leave.php">Leave</a></li>
   <li><a href="staffview.php">Staff Profile</a></li>
   <li><a href="studentview.php">Student Profile</a></li>
   <li><a href="staffreg.php">Add Staff</a></li>
   <li><a href="studentreg.php">Add Student</a></li>
  <li><a href="logout2.php">Logout</a></li>
</ul>
</body>
</html>

<html>
<body background="images/1440x900.jpg">
<marquee><b><font size="5">WELCOME TO YOU</b></font></marquee>
<center><h1><font color="red">ADMIN PROFILE</h1></font><br>
<img src="images/fr-rubin.jpg" height=100 width=150 style="float:center;margin-top:-9px"><br><br>
<?php
include 'db.php';
?>
<?php
if(!isset($_SESSION['reg_no']))
	{
		header("location:login2.php");
	}
echo "WELCOME TO THE ADMINISTRATOR PAGE";
?>