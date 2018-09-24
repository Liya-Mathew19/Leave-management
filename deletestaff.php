<?php
include 'db.php';
$kid=$_GET['uid'];
$res=mysqli_query($con,"delete from staff where reg_no='$kid'");
header("location:staffview.php");
?>