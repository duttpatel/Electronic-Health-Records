<?php
include("conn.php");
$pid=$_POST['pid'];
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
	  //file_name=$file_name.$pid;
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
     // $expensions= array("jpeg","jpg","png");
	 $expensions=array("pdf");
	 
      
     /* if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }*/
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
		
		 //header('location:Radiology.html');
         //echo "Success";
      }else{
         print_r($errors);
      }
   }
   
   $test=$_POST['testname'];
   $imp=$_POST['impression'];
   $pid=$_POST['pid'];
   $path="images/".$file_name;
   
   $con=mysqli_connect("localhost","root","","ehr") or die ("error");
   $query ="insert into TestResults(PatientId,TestName,Impression,Path) values('$pid','$test','$imp','$path')";
   $result=mysqli_query($con,$query);
   header('location:Radiology.php');
   
   
   //$query="select Path from TestResults where PatientId='a'";
   //$result=mysqli_query($con,$query);
   //$row=mysqli_fetch_assoc($result);

   
?>
