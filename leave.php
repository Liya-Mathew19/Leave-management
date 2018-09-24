<?php
include 'db.php';
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
<h1><marquee><font color="red">LEAVE REQUESTS</marquee></h1>
<table>
<table border=3 width=70%>
<tr>
<th>SL.NO</th>
<th>REG_NO</th>
<th>NAME</th>
<th>DATE</th>
<th>SECTION</th>
<th>REASON</th>
<th>STATUS</th>
<th>APPROVE</th>
<th>REJECT</th>
<th></th></tr>
<?php
$a=$_SESSION['reg_no'];
	$res=mysqli_query($con,"SELECT * FROM `leave`");
	$i=1;
	while($row=mysqli_fetch_array($res))
	{
	?>
	<tr><td><center><?php echo $i?></td>
<td><center><?php echo $row['reg_no'];?></td>
<td><center><?php echo $row['name'];?></td>
<td><center><?php echo $row['date'];?></td>
<td><center><?php echo $row['day'];?></td>
<td><center><?php echo $row['reason'];?></td>
<td><center><font color="green"><b><?php echo $row['status'];?></b></td>
<td><center><a href="approve.php?uid=<?php echo $row['id'];?>">Approve</a></td>
<td><center><a href="reject.php?uid=<?php echo $row['id'];?>">Reject</a></td></tr>
<?php
$i++;
	}
?>
