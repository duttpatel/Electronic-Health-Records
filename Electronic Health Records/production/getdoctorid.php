<?php

$did=$_GET['q'];
$con=mysqli_connect("localhost","root","","ehr") or die ("error");

$query="select DoctorId,FirstName,LastName from doctor where HospitalId=$did";

$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result))
{
	echo "<option value=".$row['DoctorId'].">".$row['FirstName']."  ".$row['LastName']."</option>";
}

?>
