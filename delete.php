<?php
include 'db.php';
$kid=$_GET['uid'];
$res=mysqli_query($con,"delete from `leave` where `id`='$kid'");
header("location:status.php");
?>