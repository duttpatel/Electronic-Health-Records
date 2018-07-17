<?php
include("conn.php");

if(isset($_POST['submit']))
{
	$pid=$_POST['pid'];
	$adate=$_POST['adate'];
	$atime=trim($_POST['atime']);
	$atime=$atime.":00";
	$hid=$_POST['hid'];
	$did=$_POST['did'];
	$purpose=$_POST['purpose'];
	
	$query="insert into appointment values(null,'$pid','$did','$hid','$purpose','no','$adate','$atime')";
	
	$res=mysqli_query($con,$query);
	echo "<script>
		alert('Appoinment Booked');
		window.location.href='Appointment.php';
		</script>";
	
}

 
?>