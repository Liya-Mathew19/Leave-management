<?php
include 'designbasic.html';
include 'db.php';
?>
<body>
<center><font color="red"><h1>ONLINE LEAVE MANAGEMENT</h1></font></center>
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
      <a href="status.php">Leave Status</a>
    </div>
  </li>
<li><a href="change.php?uid=<?php echo $_SESSION['reg_no'];?>">Change Password</a></li>
  <li><a href="editstudent.php?uid=<?php echo $_SESSION['reg_no'];?>">Edit Profile</a></li>
  <li><a href="logout1.php">Logout</a></li>
</ul>
</body>
</html>
<html>
<body background="images/b34c146185a29f9ec8de118126f9d76a.jpg">
<marquee><b><font size="5">WELCOME TO YOU</b></font></marquee>
<style>
div  {
    background-color: lightgrey;
    width: 250px;
    border: 25px;
    padding: 15px;
    margin: 5px;
	margin-right: 138px
}
</style>
<div><h1><font color="red">USER PROFILE</h1></font></fieldset>
<?php

	if(!isset($_SESSION['reg_no']))
	{
		header("location:login1.php");
	}
$kid =$_GET['uid'];
$select_details = "SELECT * FROM register WHERE reg_no = '$kid'";
$result = mysqli_query($con , $select_details);
$row =mysqli_fetch_array($result);

?>
<table><font size="4"><tr>
<td><img src="uploads/<?php echo $row['image'];?>" alt="" height="100" width="100" style="padding-right: 418px; margin-bottom: 6px; padding-left: 61px; margin-top: -13px;"></td></tr>
<tr><td><b>NAME:<?php echo $row['name'];?></b></td></tr>
<tr><td><b>REG_NO:<?php echo $row['reg_no'];?></b></td></tr>
<tr><td><b>BATCH:<?php echo $row['batch'];?></b></td></tr>
<tr><td><b>PHONE:<?php echo $row['phone'];?></b></td></tr>
<tr><td><b>EMAIL:<?php echo $row['email'];?></b></td></tr></font></div>