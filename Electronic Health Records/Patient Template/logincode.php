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
	if($row['UserType']=="PA")
    {
        $query="select * from login where Username='$uid'";
        $result=mysqli_query($connect,$query);
        $row=mysqli_fetch_assoc($result);
        $_SESSION['UID']=$row['Username'];
        header("location:viewappoinmentstatus.php");
    }
}
else
	{
		echo "<script>
		alert('Details is not valid');
		window.location.href='index.php';
		</script>";
	}


?>