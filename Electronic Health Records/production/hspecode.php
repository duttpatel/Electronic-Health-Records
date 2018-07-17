<?php

session_start();
$con=mysqli_connect("localhost","root","","ehr") or die ("error");

$sname="";

$sid=0;
$edit_state=false;





if(isset($_POST['save']))
{

		$sname=$_POST['sname'];
		
		
		
		$query="insert into hspeciality(SName) values ('$sname')";
		$result=mysqli_query($con,$query);
		$_SESSION['msg']="Speciality saved";
		
		header('location:hspeciality.php');
		
}

		$result=mysqli_query($con,"select * from hspeciality");
		
		if(isset($_POST['update']))
		{
		
			$sname=mysql_real_escape_string($_POST['sname']);
	
			$sid=mysql_real_escape_string($_POST['sid']);
			mysqli_query($con,"update hspeciality set SName='$sname' where Sid=$sid");
			$_SESSION['msg']="Speciality Updated";
		
		header('location:hspeciality.php');
			
		
		}
		
		
		if(isset($_GET['del']))
		{
				$sid=$_GET['del'];
				mysqli_query($con,"delete from hspeciality where Sid=$sid ");
				$_SESSION['msg']="Speciality Deleted";
		
		header('location:hspeciality.php');
		}
		




?>