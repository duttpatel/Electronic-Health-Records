<?php

session_start();
$did=$_SESSION['DID'];
$con=mysqli_connect("localhost","root","","ehr") or die ("error");

$pid="";
$date="";
$purpose="";

$result=mysqli_query($con,"select * from appointment where status='no' and DoctorId=$did");


if(isset($_GET['del']))
		{
				$aid=$_GET['del'];
				mysqli_query($con,"delete from appointment where AppoinmentId=$aid ");
				//$_SESSION['msg']="Drug Deleted";
				echo "<script>
		alert('Appoinment Deleted');
		window.location.href='AppointConfirm.php';
		</script>";
		
		
		}
		
		
		
		
		if(isset($_GET['edit']))
		{
		
		
	
			$aid=$_GET['edit'];
			mysqli_query($con,"update appointment set status='yes' where AppoinmentId=$aid");
			//$_SESSION['msg']="Drug Updated";
			echo "<script>
		alert('Appoinment Confirm');
		window.location.href='AppointConfirm.php';
		</script>";
			
			
		
		}



?>