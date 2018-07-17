<?php
include ("conn.php");
$s=$_POST['sympton_txt'];
$notes=$_POST['disease_txt'];
$query="insert into disease values (null,'$notes')";
$result=mysqli_query($con,$query);

$query1="select * from disease order by DiseaseId  DESC limit 1";
$result1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($result1);




$pid=$row1['DiseaseId'];
$len=count($s);
for($i=0;$i<$len;$i++)
{
	$query="insert into diseasesympton values (null,'$pid','$s[$i]')";
	$result=mysqli_query($con,$query);
}
header('location:writedisease.php');
?>