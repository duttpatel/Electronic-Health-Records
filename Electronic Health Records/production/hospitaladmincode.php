<?php

session_start();
$con=mysqli_connect("localhost","root","","ehr") or die ("error");

$dname="";

$did=0;
$edit_state=false;





if(isset($_POST['save']))
{

		$hid1=$_POST['hospital_txt'];
		$user1=$_POST['user_txt'];
		$pass1=$_POST['pass_txt'];
		
		
		$query="insert into login values (null,'$user1','$pass1','HA')";
		$result=mysqli_query($con,$query);
		$query="select Id from login order by Id desc limit 1";
		$result=mysqli_query($con,$query);
		$row=mysqli_fetch_assoc($reuslt);
		$loginId=$row['Id'];
		$query="insert into hospitaladmin values (null,'$hid1','$user1','$pass1','$loginId')";
		$result=mysqli_query($con,$query);
		
		$_SESSION['msg']="Admin saved";
		
		header('location:hospitaladmin.php');
		
}

		$result=mysqli_query($con,"select * from hospitaladmin");
		
		if(isset($_POST['update']))
		{
		
			$hid1=$_POST['hospital_txt'];
            $user1=$_POST['user_txt'];
            $pass1=$_POST['pass_txt'];          
	
			$did=mysql_real_escape_string($_POST['did']);
			mysqli_query($con,"update hospitaladmin set HospitalId='$hid1',Username='$user1',Password='$pass1' where Id=$did");
			$_SESSION['msg']="Admin Updated";
		
		header('location:hospitaladmin.php');
		
			
		
		}
		
		
		if(isset($_GET['del']))
		{
				$did=$_GET['del'];
				mysqli_query($con,"delete from hospitaladmin where Id=$did ");
				$_SESSION['msg']="Admin Deleted";
		
		header('location:hospitaladmin.php');
		
		}
		




?>