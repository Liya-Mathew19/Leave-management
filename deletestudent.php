<?php
include 'db.php';
$kid=$_GET['uid'];
$res=mysqli_query($con,"delete from register where reg_no='$kid'");
header("location:student.php");
?>