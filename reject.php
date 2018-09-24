<?php
include 'db.php';
$kid=$_GET['uid'];
$res1=mysqli_query($con,"select * from leave where id='$kid'");
$res=mysqli_query($con,"DELETE FROM `leave` WHERE id='$kid'");
header("location:leave.php");
?>