<?php 
include("conn.php");
session_start();
$pid=$_SESSION['UID'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Electronic Health Records</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.ico"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">       
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">   
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Photo Swipe Image Gallery -->     
    <link rel='stylesheet prefetch' href='css/photoswipe.css'>
    <link rel='stylesheet prefetch' href='css/default-skin.css'>    

    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>  
    <link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:900' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style type="text/css">
	.modal-dialog{
	width:320px;
	}
	</style> 
	
  </head>
  <body>  
    
    <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-heartbeat"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  
          <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->              
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.html"><i class="fa fa-heartbeat"></i>EHR <span><h6>We Impart Health To Life</h6></span></a>              
              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>   -->                    
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li ><a href="index.html">Home</a></li>
                
                <li><a href="about-us.html">About Us</a></li>
                <li>
                  <a href="service.html" class="Active">Our Service</a>
                  
                </li>
				<li class="dropdown"><a href="#">Stay Healthy<span class="fa fa-angle-down"></span></a>
				<ul class="dropdown-menu" role="menu">
                    <li><a href="#">Eating Right</a></li>
                    <li><a href="#">Manage Stress</a></li>
					<li><a href="#">Stay Active</a></li>
					<li><a href="#">Routine Checkups</a></li>
					<li><a href="#">First Aid</a></li>
                </ul>
				</li>
				<li class="dropdown"><a href="#">Know The Unkown<span class="fa fa-angle-down"></span></a>
				<ul class="dropdown-menu" role="menu">
                    <li><a href="#">Symptom Checker</a></li>
                    <li><a href="#">BMI Calculator</a></li>
                </ul>
				</li>
                
				<li><a href="logout.php">Logout</a></li>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================-->   
    
     <!--=========== BEGIN Patient SECTION ================-->
	  <section id="blogArchive">      
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="blog-breadcrumbs-area">
            <div class="container" style="display:none;">>
              <div class="blog-breadcrumbs-left">
                <h2>My Chart</h2>
              </div>
              <div class="blog-breadcrumbs-right">
                <ol class="breadcrumb">
                  <li>You are here</li>
                  <li><a href="#">Home</a></li>                  
                  <li class="active">My Chart</li>
                </ol>
              </div>
            </div>
          </div>
        </div>        
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <!-- Start Blog Archive Area -->
                <div class="blogArchive-area">
                  <div class="row">
                  <!-- Start left Side bar -->
                    <div class="col-md-3 col-sm-4">
                      <aside class="sidebar">
                        <!-- Start sidebar widget -->
                        <div class="sidebar-widget">
                         
                          <h3>My Chart</h3>
                          <ul>
                            <li><a href="viewprofile.php"><span class="fa fa-angle-right"></span>My Profile</a></li>
                            <li><a href="viewprescription.php"><span class="fa fa-angle-right"></span>Prescriptions</a></li>
                            <li><a href="viewmedicalhistory.php"><span class="fa fa-angle-right"></span>Medical History</a></li>
                            <li><a href="ViewTestResult.php"><span class="fa fa-angle-right"></span>Test Results</a></li>
							<li><a href="Appointment.php"><span class="fa fa-angle-right"></span>Appointment</a></li>
							<li><a href="viewappoinmentstatus.php"><span class="fa fa-angle-right"></span>View Appointment Status</a></li>
                            <li><a href="SearchHospital.php"><span class="fa fa-angle-right"></span>Search Hospital</a></li>
                            <li><a href="viewstore.php"><span class="fa fa-angle-right"></span>Generic Stores</a></li>
							<li><a href="logout.php"><span class="fa fa-angle-right"></span>Logout</a></li>
                          </ul>
                        </div>
                        
                                             </aside>
                    </div>
                    
						  <div class="col-md-9 col-sm-8">                     
                      <div class="blog-content">
					   <div class="single-Blog">
                          <!--<div class="single-blog-right">-->
                           <!-- <div class="blog-img">
                              <figure class="blog-figure">
                               <a href="#"><img alt="img" src="images/9.jpg"></a>
                                <span class="image-effect"></span>
                              </figure>
                            </div>
                            <div class="blog-author">
                              <ul>
                                <li>By <a href="#">Dr. Smith</a></li>
                                <li>In <a href="#">Dental</a></li>
                              </ul>
                            </div>-->
                            <div class="blog-content">
                             <!-- <h2>Latest Trend Of Medical Dental Department</h2>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                              <!-- Read more btn -->
                             <!-- <a class="wpcf7-submit button--itzel" href="#">
                                <i class="button__icon fa fa-link"></i>
                                <span>Read More</span>
                              </a>   -->
							  <div class="appointment-area">
					  
                        <form class="appointment-form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo "viewappoinmentstatus.php"; ?>">
						
                         <!-- <div class="row">-->
						 <h4>Appointment List</h4><hr>
						 <label class="control-label">Status<span class="required">*</span>
                              </label>
						 <select name="options">
						 <option value="">Select Option</option>
						 <option value="no">Not Approve</option>
						 <option value="yes">Approved</option>
						 </select>
						 
						 <input type="submit" name="btn" value="See">
						  <table class="table">
						  
						   
						   
						   
						   <table class="table">
						   
						   <thead>
						   <th>Doctor Name</th>
						   <th>Hopital Name</th>
						   <th>Purpose</th>
						   <th>Status</th>
						   <th>Appoinment Ddate</th>
						   </thead>
						   <tbody>
						   <?php
						   if(isset($_POST['btn']))
						   {
						   		$o=$_POST['options'];
						   		$results=mysqli_query($con,"select * from appointment where PatientId='$pid' and Status='$o'");
								if($results->num_rows>0)
								{
									while($row=mysqli_fetch_array($results))
									{
						    		?>
									<tr>
									<td>
										<?php 
											$did=$row['DoctorId'];
											$q1="select FirstName from Doctor where DoctorId=$did";
											$r1=mysqli_query($con,$q1);
											$r11=mysqli_fetch_assoc($r1);
											
											echo $r11['FirstName'];
										?>
									</td>
									<td>
									<?php 
											$hid=$row['HospitalId'];
											$q1="select HospitalName from hospital where HospitalId=$hid";
											$r1=mysqli_query($con,$q1);
											$r11=mysqli_fetch_assoc($r1);
											
											echo $r11['HospitalName'];
									?>
									</td>
									<td><?php echo $row['Purpose'];?></td>
									<td><?php echo $row['Status'];?></td>
									<td><?php echo $row['ADate'];?></td>
									</tr>
									<?php }?>
							<?php	}
								else
								{
										echo "No DATA FOUND";
								}	
								
						   } ?>
						    
						   </tbody>
						   
						   </table>
						   
						   
						   
						   
						   
						   
                            
							</table>
							
                         <!-- </div>-->
						  
					
                        </form>
						 </div>
							  
							  
                            </div>
                          </div>
                        </div>
                        
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
	 
    
	<!--=========== End Patient SECTION ================-->

             
              <!-- start modal window -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Login</h4>
                    </div>
                    <div class="modal-body">
                      <div class="appointment-area">
					  
                        <form class="appointment-form">
						
                          <div class="row">
                            <div class="col-md-12 col-sm-12">
                              <label class="control-label">Username <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" placeholder=" Enter Username">
                            </div>
							</div>
							<div class="row">
                            <div class="col-md-12 col-sm-12">
                              <label class="control-label">Password <span class="required">*</span>
                              </label>
                              <input type="password" class="wp-form-control wpcf7-email" placeholder="Enter Password">  
                            </div>
                          </div>
						  
					<button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share"></i><span>Sign In</span></button>  
                        </form>
						 </div>
                    </div>                    
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
             </div><!-- /.modal -->
						
						
						
						
						
						
			
    <!--=========== END Top Feature SECTION ================-->
	
	<section id="service">
	<div class="container">
	<p><strong>Get Connected With Government</strong></p>
<marquee behaviour="Scroll" onMouseOver="this.stop();" onMouseOut="this.start();">
			<a href="http://www.indianmedicine.nic.in/"> <img src="images/ayush.gif"></a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<a href="http://www.theadgateway.com/"> <img src="images/108.gif"></a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<a href="http://e-mamta.gujarat.gov.in/"> <img src="images/e-mamta.gif"></a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<a href="http://badea.guj.nic.in/"> <img src="images/badea.gif"></a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<a href="http://www.gujaratinformatics.com/ghmis.html"> <img src="images/ghmis.jpg"></a>
	    </marquee>
</div>
</section>

    <!--=========== BEGIN Service SECTION ================-->
  
    <!--=========== End Service SECTION ================-->

    <!--=========== BEGAIN Why Choose Us SECTION ================-->
    
    <!--=========== END Why Choose Us SECTION ================-->

    <!--=========== BEGAIN Counter SECTION ================-->
    
    <!--=========== End Doctors SECTION ================-->

    <!--=========== BEGAIN Testimonial SECTION ================-->
    
    <!--=========== End Testimonial SECTION ================-->

    <!--=========== BEGAIN Home Blog SECTION ================-->
   
    <!--=========== End Home Blog SECTION ================--> 

    <!--=========== Start Footer SECTION ================-->
    <footer id="footer">
      <!-- Start Footer Top -->
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>About Us</h2>
                <div class="line"></div>
              </div>           
              <p>We are providing healthcare solutions.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Our Service</h2>
                <div class="line"></div>
              </div>
              <ul class="footer-service">
                <li><a href="#"><span class="fa fa-check"></span>View Prescriptions</a></li>
                <li><a href="#"><span class="fa fa-check"></span>Medical History</a></li>
                <li><a href="#"><span class="fa fa-check"></span>Test Results</a></li>
                <li><a href="#"><span class="fa fa-check"></span>Generic Stores</a></li>
                <li><a href="#"><span class="fa fa-check"></span>Search Hospitals</a></li>
              </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Tags</h2>
                <div class="line"></div>
              </div>
                <ul class="tag-nav">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Stay Healthy</a></li>
                  <li><a href="#">Know The Unknown</a></li>
                  <li><a href="#">Register Now</a></li>
                  <li><a href="#">My Chart</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Contact Info</h2>
                <div class="line"></div>
              </div>
              <p>.</p>
              <address class="contact-info">
                <p><span class="fa fa-home"></span>305 Intergraph Way
                Madison, AL 35758, India</p>
                <p><span class="fa fa-phone"></span>9998760996</p>
                <p><span class="fa fa-envelope"></span>info@ehr.com</p>
              </address>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start Footer Middle -->
      <div class="footer-middle">
        <div class="container">
          <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-copyright">
              <p>&copy; Copyright 2017 <a href="index.html">Electronic Health Records</a></p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-social">              
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-google-plus"></span></a>
                <a href="#"><span class="fa fa-linkedin"></span></a>     
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- Start Footer Bottom -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>Design & Developed By <a rel="nofollow" href="#">Electronic Health Records</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--=========== End Footer SECTION ================-->

    <!-- jQuery Library  -->
    <script src="js/jquery.js"></script>    
    <!-- Bootstrap default js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>    
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>      
    <!-- counter -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Doctors hover effect -->
    <script src="js/snap.svg-min.js"></script>
    <script src="js/hovers.js"></script>
    <!-- Photo Swipe Gallery Slider -->
    <script src='js/photoswipe.min.js'></script>
    <script src='js/photoswipe-ui-default.min.js'></script>    
    <script src="js/photoswipe-gallery.js"></script>

    <!-- Custom JS -->
    <script src="js/custom.js"></script>
     
  </body>
</html>