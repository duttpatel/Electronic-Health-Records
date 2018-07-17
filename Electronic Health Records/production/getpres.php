<?php


$did=$_GET['q'];
$con=mysqli_connect("localhost","root","","ehr") or die ("error");


$query="select DrugName from drug where DrugId in(select DrugId from prescriptiondrug where PrescriptionId in(select PrescriptionId from prescription where DoctorId=$did))";

$result=mysqli_query($con,$query);

while ($row=mysqli_fetch_assoc($result))
{
	echo "<tr><td>".$row['DrugName']."</td></tr>";
}


?>