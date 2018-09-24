
<?php
include 'designbasic.html';
include 'db.php';
?>
<body>
<center><font color="red"><h1>ONLINE LEAVE MANAGEMENT</h1></font></center>
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
      <a href="status.php?uid=<?php echo $_SESSION['reg_no'];?>">Leave Status</a>
    </div>
  </li>
  <li><a href="change.php?uid=<?php echo $_SESSION['reg_no'];?>">Change Password</a></li>
  <li><a href="editstudent.php?uid=<?php echo $_SESSION['reg_no'];?>">Edit Profile</a></li>
  <li><a href="logout1.php">Logout</a></li>
</ul>
</body>
</html>
<html>
<body background="images/b34c146185a29f9ec8de118126f9d76a.jpg">
<h1><marquee>LEAVE APPLICATION</marquee></h1>
<table>
<table border=2 width=70%>
<tr>
<th>SL.NO</th>
<th>REG_NO</th>
<th>NAME</th>
<th>DATE</th>
<th>SECTION</th>
<th>REASON</th>
<th>STATUS</th>
<th>DELETE</th>
<th></th></tr>
<?php

	$res=mysqli_query($con,"SELECT * FROM `leave` WHERE `reg_no`='$_SESSION[reg_no]'");
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
<td><center><a href="delete.php?uid=<?php echo $row['id'];?>">Delete</a></td>
<?php
$i++;
	}
?>