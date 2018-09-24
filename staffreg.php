<?php 
include 'db.php';
include 'designbasic.html';
?>
<body>
<center><font color="red"><h1>ONLINE LEAVE MANAGEMENT</h1></font></center>
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
<center><h1><font color="green">STAFF REGISTRATION</h1></font>
<form action="#" method="post" enctype="multipart/form-data">
<table border="0" width="53%" align="center" cellpadding="10"><tr>
<tr><td width="50%"><b><i><tr><td><b><i>ENTER THE REGISTER NUMBER:</td><td><input type="text" name="reg_no" required/></td></tr>
<b><i><tr><td><b><i>	  ENTER THE NAME:</td><td><input type="text" name="name" required/></td></tr>
<tr><td><b><i>            ENTER THE DEPARTMENT:</td><td><input type="text" name="dept" required/></td></tr>
<tr><td><b><i>            ENTER THE PHONE:</td><td><input type="text" name="phone" required/></td></tr>
<tr><td><b><i>            ENTER THE EMAIL:</td><td><input type="email" name="email" required/></td></tr>
<tr><td><b><i>            UPLOAD YOUR PHOTO   :</td><td><input type="file" name="img" accept="image/*" required></td></tr>
<td><td><input type="checkbox" name="terms" checked="checked"> <b><i>I accept all Terms and Conditions</td></td></tr>
<tr><td><td><input type="submit" name="submit" value="SUBMIT"/>  
<input type="reset" name="reset" value="RESET"/></td></td><br></tr>
</form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
	$reg_no=$_POST["reg_no"];
	$n=$_POST["name"];
	$d=$_POST["dept"];
	$p=$_POST["phone"];
	$e=$_POST["email"];
	$img=$_FILES['img']['name'];
	move_uploaded_file($_FILES["img"]["tmp_name"],"uploads/".$_FILES["img"]["name"]);
	$sql="INSERT INTO `staff`(`reg_no`,`name`, `dept`, `phone`,`email`,`image`) VALUES ('$reg_no','$n','$d','$p','$e','$img')";
	$result=mysqli_query($con,$sql);
	header("location:staffview.php");
}
?>