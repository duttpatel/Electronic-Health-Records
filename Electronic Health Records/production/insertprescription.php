<?php
include ("conn.php");
$docid=$_POST['prescriptionDocId'];
$patientid=$_POST['patientid'];
$pdate=$_POST['date1'];
//$newdate = date_format($pdate,"Y-m-d");
$drugid=$_POST['drug'];
$qty=$_POST['qty'];
$dose=$_POST['dose'];
$when=$_POST['when'];
$notes=$_POST['notes'];
$query="insert into prescription values (null,'$pdate','$patientid','$docid','$notes')";
$result=mysqli_query($con,$query);

$query1="select * from prescription order by PrescriptionId  DESC limit 1";
$result1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($result1);




$pid=$row1['PrescriptionId'];
$len=count($drugid);
for($i=0;$i<$len;$i++)
{
	$query="insert into prescriptiondrug values (null,'$pid','$drugid[$i]','$qty[$i]','$dose[$i]','$when[$i]')";
	$result=mysqli_query($con,$query);
}
echo "<script>
		alert('Done');
		window.location.href='WritePrescription1.php';
		</script>";
?>