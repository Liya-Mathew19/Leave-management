<?php
include 'designbasic.html';
?>
<html>
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

<?php
include 'db.php';

$kid=$_GET['uid'];
$res=mysqli_query($con,"select * from register where reg_no='$kid'");
while($row=mysqli_fetch_array($res))
{
?>
<html>
<style>
div {
    background-color: lightgrey;
    width: 250px;
    border: 25px;
    padding: 25px;
    margin: 5px;
}

</style>
<div><br><center><head><b><u>*****EDIT DETAILS*****</u></b></head><br><br>
<body>
<form action="#" method="post" enctype="multipart/form-data">
<table>
<tr><td>Name:</td><td><input type="text" name="name" value="<?php echo $row['name'];?>"></td></tr>
<tr><td>Batch:</td><td><input type="text" name="batch" value="<?php echo $row['batch'];?>"></td></tr>
<tr><td>Phone:</td><td><input type="text" name="phone" value="<?php echo $row['phone'];?>"></td></tr>
<tr><td>Email:</td><td><input type="email" name="email" value="<?php echo $row['email'];?>"></td></tr>
<tr><td>Photo:</td><td><input type="file" name="img" value="<?php echo $row['image'];?>"></td></tr>
<tr><img src="uploads/<?php echo $row['image'];?>"style="padding-left: 364px; margin-bottom: -574px; width: 110px;"></tr></td>
<tr><td></td><td><input type="submit" name="submit" value="SAVE"/></td></tr>
</table></div>
</form>
</body>
</html>
<?php
}
if(isset($_POST['submit']))
{
	
	$n=$_POST['name'];
	$a=$_POST['batch'];
	$p=$_POST['phone'];
	$e=$_POST['email'];
	$img=$_FILES['img']['name'];
	if($img==NULL)
	{
		$edit=mysqli_query($con,"UPDATE `register` SET `name`='$n',`batch`='$a',`phone`='$p',`email`='$e' where reg_no='$kid'");
	}
	else
	{
			move_uploaded_file($_FILES['img']['tmp_name'],"uploads/".$_FILES['img']['name']);
			$edit=mysqli_query($con,"UPDATE `register` SET `name`='$n',`batch`='$a',`phone`='$p',`email`='$e',`image`='$img' where reg_no='$kid'");
			
	}
	header("location:home.php?uid=$_SESSION[reg_no]");
}
?>
