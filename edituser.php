<?php
include 'db.php';
session_start();

$kid=$_GET['uid'];
$res=mysqli_query($con,"select * from register where reg_no='$kid'");
while($row=mysqli_fetch_array($res))
{
	$_SESSION['reg_no']=$row['reg_no'];
?>
<html>
<center><head><b><u>*****EDIT YOUR PROFILE*****</u></b></head><br><br>
<body>
<form action="#" method="post" enctype="multipart/form-data">
<table><font size="4">
<tr><td>&nbsp <b>NAME:</b></td><td><input type="text" name="name" value="<?php echo $row['name'];?>"></td></tr>
<tr><td>&nbsp <b>REG_NO:</b></td><td><input type="text" name="reg_no" value=<?php echo $row['reg_no'];?></td></tr>
<tr><td>&nbsp <b>BATCH:</b></td><td><input type="text" name="batch" value=<?php echo $row['batch'];?></td></tr>
<tr><td>&nbsp <b>PHONE:</b></td><td><input type="text" name="phone" value=<?php echo $row['phone'];?></td></tr></font>
<img src="uploads/<?php echo $row['image'];?>" alt="" height="150" width="150" style="padding-right: 418px; margin-bottom: 6px;"/>
<tr><td></td><td><input type="submit" name="submit" value="SAVE"/></td></tr>
</table>
</form>
</body>
</html>
<?php
}
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$reg_no=$_POST['reg_no'];
	$batch=$_POST['batch'];
	$phone=$_POST['phone'];
	$img=$_FILES['img']['name'];
	if($img==NULL)
	{
		$edit=mysqli_query($con,"UPDATE `register` SET `name`='$name',`reg_no`='$reg_no',`batch`='$batch',`phone`='$phone' where reg_no='$kid'");
	}
	else
	{
			move_uploaded_file($_FILES['img']['tmp_name'],"uploads/".$_FILES['img']['name']);
			$edit=mysqli_query($con,"UPDATE `register` SET `name`='$name',`reg_no`='$reg_no',`batch`='$batch',`phone`='$phone',`image`='$img' where reg_no='$kid'");
			
	}
	header("location:home.php");
}
?>
