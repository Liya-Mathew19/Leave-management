<?php 
include 'designbasic.html';
?>
<body>
<center><font color="red"><h1>ONLINE LEAVE MANAGEMENT</h1></font>
<img src="images/City_Engineering_College_Bangalore.jpg" height=100 width=150 style="padding-left: 980px; margin-top: -76px;">
<img src="images/online-leave-management-logo-New.png" height=50 width=200 style="padding-right: 980px; margin-top: -88px;padding-bottom: 51px;">
<body background="images/1440x900.jpg">
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
<?php
include 'db.php';
$kid=$_GET['uid'];
$res=mysqli_query($con,"select * from staff where reg_no='$kid'");
while($row=mysqli_fetch_array($res))
{
?>
<html>
<br><center><head><b><u>*****EDIT DETAILS*****</u></b></head><br><br>
<body>
<form action="#" method="post" enctype="multipart/form-data">
<table>
<tr><td>Name:</td><td><input type="text" name="name" value="<?php echo $row['name'];?>"></td></tr>
<tr><td>Department:</td><td><input type="text" name="dept" value="<?php echo $row['dept'];?>"></td></tr>
<tr><td>Phone:</td><td><input type="text" name="phone" value="<?php echo $row['phone'];?>"></td></tr>
<tr><td>Email:</td><td><input type="email" name="email" value="<?php echo $row['email'];?>"></td></tr>
<tr><td>Photo:</td><td><input type="file" name="img" value="<?php echo $row['image'];?>"></td></tr>
<tr><img src="uploads/<?php echo $row['image'];?>"style="padding-left: 364px; margin-bottom: -574px; width: 110px;"></tr></td>
<tr><td></td><td><input type="submit" name="submit" value="SAVE"/></td></tr>
</table>
</form>
</body>
</html>
<?php
}
if(isset($_POST['submit']))
{
	
	$n=$_POST['name'];
	$a=$_POST['dept'];
	$p=$_POST['phone'];
	$e=$_POST['email'];
	$img=$_FILES['img']['name'];
	if($img==NULL)
	{
		$edit=mysqli_query($con,"UPDATE `staff` SET `name`='$n',`dept`='$a',`phone`='$p',`email`='$e' where reg_no='$kid'");
	}
	else
	{
			move_uploaded_file($_FILES['img']['tmp_name'],"uploads/".$_FILES['img']['name']);
			$edit=mysqli_query($con,"UPDATE `staff` SET `name`='$n',`dept`='$a',`phone`='$p',`email`='$e',`image`='$img' where reg_no='$kid'");
			
	}
	header("location:staffview.php");
}
?>
