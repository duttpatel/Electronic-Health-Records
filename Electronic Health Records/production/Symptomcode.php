<?php

session_start();
$con=mysqli_connect("localhost","root","","ehr") or die ("error");

$sname="";

$sid=0;
$edit_state=false;





if(isset($_POST['save']))
{

		$sname=$_POST['sname'];
		
		
		
		$query="insert into sympton(SName) values ('$sname')";
		$result=mysqli_query($con,$query);
		$_SESSION['msg']="Symptom saved";
		
		header('location:Symptom.php');
		
}

		$result=mysqli_query($con,"select * from sympton");
		
		if(isset($_POST['update']))
		{
		
			$sname=mysql_real_escape_string($_POST['sname']);
	
			$sid=mysql_real_escape_string($_POST['sid']);
			mysqli_query($con,"update sympton set SName='$sname' where SId=$sid");
			$_SESSION['msg']="Symptom Updated";
		
		header('location:Symptom.php');
		
			
		
		}
		
		
		if(isset($_GET['del']))
		{
				$sid=$_GET['del'];
				mysqli_query($con,"delete from sympton where SId=$sid ");
				$_SESSION['msg']="Symptom Deleted";
		
		header('location:Symptom.php');
		
		}
		




?>