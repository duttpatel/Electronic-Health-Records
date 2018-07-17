<?php
include("conn.php");

$first=$_POST['FirstName'];
$middle=$_POST['MiddleName'];
$last=$_POST['LastName'];
$dob=$_POST['DOB'];
$height=$_POST['Height'];
$weight=$_POST['Weight'];
$blood=$_POST['BloodGroup'];
$address=$_POST['Address'];
$contact=$_POST['ContactNumber'];
$econtact=$_POST['EContactNumber'];
$email=$_POST["Email"];

$id=$_POST['Id'];

$query="update patient set FirstName='$first',MiddleName='$middle',LastName='$last',DOB='$dob',Height='$height',Weight='$weight',BloodGroup='$blood',Address='$address',ContactNumber='$contact',EContactNumber='$econtact',Email='$email' where PatientId='$id'";

$result=mysqli_query($con,$query);

echo "<script>
		alert('Details Updated');
		window.location.href='viewprofile.php';
		</script>";


?>