<?php

session_start();
$con=mysqli_connect("localhost","root","","ehr") or die ("error");

$dname="";

$did=0;
$edit_state=false;





if(isset($_POST['save']))
{

		$hname=$_POST['genericstore_name_txt'];
		$spc=$_POST['genericstore_special_txt'];
		$house=$_POST['genericstore_house_txt'];
		$city=$_POST['genericstore_city_txt'];
		$street=$_POST['genericstore_street_txt'];
		$pincode=$_POST['genericstore_pincode_txt'];
		
		
		
		$query="insert into genericstore values (null,'$hname','$house','$city','$street','$pincode')";
		$result=mysqli_query($con,$query);
		$_SESSION['msg']="Genericstore saved";
		
		header('location:genericstore.php');
		
}

		$result=mysqli_query($con,"select * from genericstore");
		
		if(isset($_POST['update']))
		{
		
			$hname=$_POST['genericstore_name_txt'];
		$house=$_POST['genericstore_house_txt'];
		$city=$_POST['genericstore_city_txt'];
		$street=$_POST['genericstore_street_txt'];
		$pincode=$_POST['genericstore_pincode_txt'];
	
			$did=mysql_real_escape_string($_POST['did']);
			mysqli_query($con,"update genericstore set GenericstoreName='$hname',House='$house',City='$city',Street='$street',Pincode='$pincode' where GenericstoreId=$did");
			$_SESSION['msg']="Genericstore Updated";
		
		header('location:genericstore.php');
		
			
		
		}
		
		
		if(isset($_GET['del']))
		{
				$did=$_GET['del'];
				mysqli_query($con,"delete from genericstore where GenericstoreId=$did ");
				$_SESSION['msg']="Hospital Deleted";
		
		header('location:genericstore.php');
		
		}
		




?>