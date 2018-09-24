
<?php
include 'designbasic.html';
include 'db.php'
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

<html>
<body background="images/b34c146185a29f9ec8de118126f9d76a.jpg">
<h1><marquee>LEAVE APPLICATION</marquee></h1>
<center><form action="#" method="post" >
<table>
<tr><td>NAME:</td><td><input type="text" name="name" required/></td></tr>
<tr><td>DATE:</td><td><input type="date" name="date" required/></td></tr>
<tr><td>SECTION:</td><td><select name="section">
<option value="1">..select..</option>
<option value="FN">FN</option>
<option value="AN">AN</option>
<option value="FULL DAY">FULL DAY</option>
</select></td></tr>
<tr><td>REASON:</td><td><textarea name="reason" required></textarea></td></tr>
<tr><td></td><td><input type="submit" value="APPLY" name="submit"/></td></tr>
<?php
if(isset($_POST['submit']))
{
	$a=$_SESSION["reg_no"];
	$b=$_POST["name"];
	$c=$_POST["date"];
	$d=$_POST["section"];
	$e=$_POST["reason"];
	$sql="INSERT INTO `leave`(`reg_no`,`name`, `date`, `day`, `reason`,`status`)VALUES ('$a','$b','$c','$d','$e','Requested')";
	$result=mysqli_query($con,$sql);
	header("Location:view.php");
	
}

?>
</body>
</html>