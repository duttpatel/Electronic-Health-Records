<?php
include("conn.php");
$pid=$_GET['pid'];
$did=$_GET['did'];
$drug=array();
$query1="select AllergyId from patientallergy where PatientId='$pid'";
$result1=mysqli_query($con,$query1);
while($row1=mysqli_fetch_assoc($result1))
{
	$query2="select DrugId from allergy where Id=".$row1['AllergyId'];
	$result2=mysqli_query($con,$query2);
	while($row2=mysqli_fetch_assoc($result2))
	{
		array_push($drug,$row2['DrugId']);
	}
	
}

if(in_array($did,$drug,true))
{
	$query3="select DrugName from drug where DrugId=".$did;
	$result3=mysqli_query($con,$query3);
	$row3=mysqli_fetch_assoc($result3);
	echo "Patient has allergy with ".$row3['DrugName'];
}
else
{
	
}


?>