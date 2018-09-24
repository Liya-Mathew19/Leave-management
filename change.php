<?php
include 'designbasic.html';
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
<br><br><center><h1><b><font color="green">CHANGE PASSWORD</b></h1></font>
<body background="images/1440x900.jpg">
<html>
<head>
<?php
include 'db.php';

$kid=$_GET['uid'];
$res=mysqli_query($con,"select `password` from `admin` where `reg_no`='$kid'");
while($row=mysqli_fetch_array($res))
{
?>
<html>
<style>
div {
    background-color: lightgrey;
    width: 271px;
    border: 25px;
    padding: 25px;
    margin: 5px;
}

</style>
<div>
<body>
<form action="#" method="post" enctype="multipart/form-data">
<table>
<tr><td>Old Password:</td><td><input type="text" name="password" placeholder="Old Password"></td></tr>
<tr><td>New Password:</td><td><input type="text" name="password1" placeholder="New password"></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="SAVE"/></td></tr>
</table></div>
</form>
</body>
</html>
<?php
}
if(isset($_POST['submit']))
{
	
	$opass=$_POST['password'];
	$pass=$_POST['password1'];
	/*if($opass==$row['password'])
	{
		$edit=mysqli_query($con,"UPDATE `admin` SET `password`='$pass' where reg_no='$kid'");
	}
	else
	{
		echo "WRONG PASSWORD!!";
	}*/
	header("location:home.php?uid=$_SESSION[reg_no]");
}
?>

 