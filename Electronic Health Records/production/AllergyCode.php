<?php

session_start();
$con=mysqli_connect("localhost","root","","ehr") or die ("error");

$pid="";
$aid="";

$id=0;
$edit_state=false;





if(isset($_POST['save']))
{

		$pid=$_POST['patientid'];
		$aid=$_POST['allergyid'];
		
		
		
		$query="insert into patientallergy values (null,'$pid','$aid')";
		$result=mysqli_query($con,$query);
		$_SESSION['msg']="Allrgy saved";
		
		header('location:Allergy.php');
		
}

		$result=mysqli_query($con,"select * from patientallergy");
		
		

?>