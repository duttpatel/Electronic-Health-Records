<?php

session_start();
$con=mysqli_connect("localhost","root","","ehr") or die ("error");

$dname="";

$did=0;
$edit_state=false;





if(isset($_POST['save']))
{

		$dname=$_POST['dname'];
		
		
		
		$query="insert into drug(DrugName) values ('$dname')";
		$result=mysqli_query($con,$query);
		$_SESSION['msg']="Drug saved";
		
		header('location:Drug.php');
		
}

		$result=mysqli_query($con,"select * from drug");
		
		if(isset($_POST['update']))
		{
		
			$dname=mysql_real_escape_string($_POST['dname']);
	
			$did=mysql_real_escape_string($_POST['did']);
			mysqli_query($con,"update drug set DrugName='$dname' where DrugId=$did");
			$_SESSION['msg']="Drug Updated";
		
		header('location:Drug.php');
		
			
		
		}
		
		
		if(isset($_GET['del']))
		{
				$did=$_GET['del'];
				mysqli_query($con,"delete from drug where DrugId=$did ");
				$_SESSION['msg']="Drug Deleted";
		
		header('location:Drug.php');
		
		}
		




?>