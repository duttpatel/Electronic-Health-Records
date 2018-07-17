<?php

session_start();
$con=mysqli_connect("localhost","root","","ehr") or die ("error");

$allergyname="";
$drugid="";

$id=0;
$edit_state=false;





if(isset($_POST['save']))
{

		$allergyname=$_POST['allergyname'];
		$drugid=$_POST['drugid'];
		
		
		
		$query="insert into allergy values (null,'$allergyname','$drugid')";
		$result=mysqli_query($con,$query);
		$_SESSION['msg']="Allergy saved";
		
		header('location:AddAllergy.php');
		
}

		$result=mysqli_query($con,"select Id,AllergyName,DrugName from allergy,drug where allergy.DrugId=drug.DrugId");
		
		if(isset($_POST['update']))
		{
		
			$allergyname=mysql_real_escape_string($_POST['allergyname']);
			$drugid=mysql_real_escape_string($_POST['drugid']);
	
			$id=mysql_real_escape_string($_POST['id']);
			mysqli_query($con,"update allergy set AllergyName='$allergyname',DrugId='$drugid' where Id=$id");
			$_SESSION['msg']="Allergy Updated";
		
		header('location:AddAllergy.php');
		
			
		
		}
		
		
		if(isset($_GET['del']))
		{
				$id=$_GET['del'];
				mysqli_query($con,"delete from allergy where Id=$id ");
				$_SESSION['msg']="Allergy Deleted";
		
		header('location:AddAllergy.php');
		
		}
		




?>