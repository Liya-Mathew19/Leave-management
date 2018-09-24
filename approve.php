<?php
include 'db.php';
$kid=$_GET['uid'];
$res1=mysqli_query($con,"select * from leave where id='$kid'");
	$res=mysqli_query($con,"UPDATE `leave` SET `status`='APPROVED' WHERE id='$kid'");
header("location:leave.php");
?>