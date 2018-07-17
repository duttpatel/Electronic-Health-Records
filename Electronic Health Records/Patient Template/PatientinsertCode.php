<?php
include("conn.php");

$first=$_POST['FirstName'];
$middle=$_POST['MiddleName'];
$last=$_POST['LastName'];
$gender=$_POST['Gender'];
$dob=$_POST['DOB'];
$height=$_POST['Height'];
$weight=$_POST['Weight'];
$blood=$_POST['BloodGroup'];
$address=$_POST['Address'];
$contact=$_POST['ContactNumber'];
$econtact=$_POST['EContactNumber'];
$id=$_POST['Id'];
$diseaseSelected = array();
$disease=$_POST['Disease'];

if ($disease)
{
    foreach ($disease as $value)
    {
        array_push($diseaseSelected,$value);
    }
}

$password=$_POST['Password'];
$email=$_POST["Email"];
$query="insert into patient values(null,'$id','$first','$middle','$last','$dob','$gender',$weight,$height,'$blood','$address','$contact','$econtact','$email')";
$result=mysqli_query($con,$query);
for($i=0;$i<count($diseaseSelected);$i++)
{
	$query="insert into patientdisease values (null,'$id','$diseaseSelected[$i]')";
	$result=mysqli_query($con,$query);
}
$query="insert into login values (null,'$id','$password','PA')";
$result=mysqli_query($con,$query);
header("location:index1.php")
?>