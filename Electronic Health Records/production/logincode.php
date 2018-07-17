<?php
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
session_start();
$connect=mysqli_connect("localhost","root","","ehr");

$query ="select * from login where UserName='$uid' and Password='$pwd'";

$result=mysqli_query($connect,$query);

$row=mysqli_fetch_assoc($result);
if($result->num_rows==1)
{
    if($row['UserType']=="MAIN")
    {
        header("location:hospital.php");
    }
    elseif($row['UserType']=="DA")
    {
        //echo "doctor";
        $query="select DoctorId ,Degree from doctor where email='$uid'";
        $result=mysqli_query($connect,$query);
        $row=mysqli_fetch_assoc($result);
        $_SESSION['DID']=$row['DoctorId'];
        if($row['Degree']=="Radiologist")
        {
            header("location:Radiology.php");    
        }
        elseif($row['Degree']=="Pathologist")
        {
            header("location:Pathologist.php");
        }
        else{
            header("location:WritePrescription1.php");
        }
        
    }
	elseif($row['UserType']=="HA")
    {
		header("location:HAdminPatient.php");
	}
}
else
{

    echo "<script>
    alert ('Invaid Details');
	window.location.href='index.html';
    </script>";

}
?>