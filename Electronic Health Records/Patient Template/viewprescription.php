<html>
<head>
<style>
u
{
	border-bottom-width:10px;
}
</style>
</head>
<body id='target'>
<h1 align="center"><u>Prescription</u></h1>

<?php
include ("conn.php");
session_start();
$uid=$_SESSION['UID'];
$query="select * from prescription where PatientId='$uid'";
$result=mysqli_query($con,$query);
if($result->num_rows>0)
{
	while($row=mysqli_fetch_assoc($result))
{
	$q1="select FirstName,LastName,Degree,HospitalId from doctor where DoctorId=".$row['DoctorId'];
	$r1=mysqli_query($con,$q1);
	$row1=mysqli_fetch_assoc($r1);
	
	$q2="select HospitalName from hospital where HospitalId=".$row1['HospitalId'];
	$r2=mysqli_query($con,$q2);
	$row2=mysqli_fetch_assoc($r2);
	
	$q3="select FirstName,LastName from patient where PatientId=".$row['PatientId'];
	$r3=mysqli_query($con,$q3);
	$row3=mysqli_fetch_assoc($r3);
	echo "<div style='border-style:solid; border-width:1px; width:50%; float:left; margin-left:26%;margin-top:10px;'>";
	echo "<table width='100%' style=''>";
	echo "<tr>";
	
	echo "<td width='50%'>";
	echo "Doctor : ".$row1['FirstName'].$row1['LastName'];
	//
	echo "</td>";
	
	echo "<td width='50%'>";
	echo "Paitent : ".$row3['FirstName'].$row3['LastName'];
	echo "</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td width='50%'>";
	echo "Degree : ".$row1['Degree']."<br>";
	echo "</td>";
	
	echo "<td width='50%'>";
	echo "Prescription Date : ".$row['PrescriptionDate'];
	echo "</td>";
	
	echo "</tr>";
	
	echo "<tr>";
	echo "<td width='50%'>";
	echo "Hospital : ".$row2['HospitalName'];
	echo "</td>";
	echo "</td>";
	
	echo "</tr>";
	echo "<tr>";
	echo "<td colspan='2'>";
	echo "<u>Prescription Note</u> : ".$row['notes'];
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	
	echo "<hr>";
	$pid=$row['PrescriptionId'];
	echo "<table width='100%'>";
	echo "<tr>";
	echo "<td width='25%'><u>Drug</u></td>";
	echo "<td width='25%'><u>Quantity</u></td>";
	echo "<td width='25%'><u>Dose</u></td>";
	echo "<td width='25%'><u>Intake</u></td>";
	echo "</tr>";
	$query1 = "select * from prescriptiondrug where PrescriptionId = $pid";
	$result1=mysqli_query($con,$query1);
	while($row1=mysqli_fetch_assoc($result1))
	{
		$q1="select DrugName from drug where DrugId=".$row1['DrugId'];
		$r1=mysqli_query($con,$q1);
		$row11=mysqli_fetch_assoc($r1);
		echo "<tr>";
		echo "<td>".$row11['DrugName']."</td>";
		echo "<td>".$row1['Qty']."</td>";
		echo "<td>".$row1['Dose']."</td>";
		echo "<td>".$row1['When']."</td>";
		
		echo "</tr>";
	}
	
	echo "</table>";
	echo "</div>";
	echo "<br>";
	echo "<br>";
}
}
else
{
	echo "No data found";
}


?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.0-beta.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.1.135/jspdf.min.js"></script>
<script type="text/javascript" src="http://cdn.uriit.ru/jsPDF/libs/adler32cs.js/adler32cs.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2014-11-29/FileSaver.min.js"></script>
<script type="text/javascript" src="libs/Blob.js/BlobBuilder.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.addimage.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.standard_fonts_metrics.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.split_text_to_size.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.from_html.js"></script>
</body>

</html>