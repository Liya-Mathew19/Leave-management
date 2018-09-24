<?php 
include 'db.php';
include 'designbasic.html';
?>
<body>
<center><font color="red"><h1>ONLINE LEAVE MANAGEMENT</h1></font>
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
<center><h1><font color="green">STAFF PROFILE</h1></font>

<img src="images/MCAStaffChart.png" height=150 width=150 style="padding-right: 980px; margin-top: -66px;padding-bottom: -20px;    padding-left: -2px;">
<body background="images/1440x900.jpg">
<form action="#" method="post" enctype="multipart/form-data">
<table border=2 width=50%>
<tr><th>Sl.No</th>
<th>Register No</th>
<th>Name</th>
<th>Department</th>
<th>Phone</th>
<th>Email</th>
<th>Photo</th>
<th>Edit</th>
<th>Delete</th></tr>
<?php
$result=mysqli_query($con,"select * from staff");
$i=1;
while($row=mysqli_fetch_array($result))
{
?>
<tr><td><?php echo $i;?></td>
<td><?php echo $row['reg_no'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['dept'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['email'];?></td>
<td><img src="uploads/<?php echo $row['image'];?>" alt="" height="100" width="150"/></td>
<?php echo "<td><a href='editstaff.php?uid=$row[reg_no]'>Edit</a></td>
				<td><a href='deletestaff.php?uid=$row[reg_no]'>Delete</a></td>";
				$i++;
?>
<?php
}
?>

