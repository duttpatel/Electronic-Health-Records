<?php

session_start();
$con=mysqli_connect("localhost","root","","ehr") or die ("error");

$dname="";

$did=0;
$edit_state=false;





if(isset($_POST['save']))
{

		$hname=$_POST['hospital_name_txt'];
		$spc=$_POST['hospital_special_txt'];
		$house=$_POST['hospital_house_txt'];
		$city=$_POST['hospital_city_txt'];
		$street=$_POST['hospital_street_txt'];
		$pincode=$_POST['hospital_pincode_txt'];
		
		
		
		$query="insert into hospital values (null,'$hname','$spc','$house','$city','$street','$pincode')";
		$result=mysqli_query($con,$query);
		$_SESSION['msg']="Hospital saved";
		
		header('location:hospital.php');
		
}

		$result=mysqli_query($con,"select * from hospital");
		
		if(isset($_POST['update']))
		{
		
			$hname=$_POST['hospital_name_txt'];
		$spc=$_POST['hospital_special_txt'];
		$house=$_POST['hospital_house_txt'];
		$city=$_POST['hospital_city_txt'];
		$street=$_POST['hospital_street_txt'];
		$pincode=$_POST['hospital_pincode_txt'];
	
			$did=mysql_real_escape_string($_POST['did']);
			mysqli_query($con,"update hospital set HospitalName='$hname',HospitalSpeciality='$spc',HospitalHouse='$house',City='$city',Street='$street',Pincode='$pincode' where HospitalId=$did");
			$_SESSION['msg']="Hospital Updated";
		
		header('location:hospital.php');
		
			
		
		}
		
		
		if(isset($_GET['del']))
		{
				$did=$_GET['del'];
				mysqli_query($con,"delete from hospital where HospitalId=$did ");
				$_SESSION['msg']="Hospital Deleted";
		
		header('location:hospital.php');
		
		}
		




?>