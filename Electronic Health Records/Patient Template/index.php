<?php 
include("conn.php");
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
	.modal-dialog1{
	width:320px;
  margin-left: 40%;
  margin-top: 10%;
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
                  <a href="service.php">Service</a>
                  
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
                
				<li><a data-toggle="modal" data-target="#RegisterModel" href="#">Register Now</a></li>         
                <li><a data-toggle="modal" data-target="#myModal" href="#">My Chart</a></li>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================-->   

    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="sliderArea">
      <!-- Start slider wrapper -->      
      <div class="top-slider">
        <!-- Start First slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/14.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2>A <strong>good laugh </strong> and a long sleep</h2>
            <p><strong>are the best cures</strong>  in the doctor's book..</p>
            
          </div>
        </div>
        <!-- End First slide -->

        <!-- Start 2nd slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/15.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2><strong>The groundwork</strong> For all happiness is good health..</h2>
            
           
          </div>
        </div>
        <!-- End 2nd slide -->

        <!-- Start Third slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/7.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2>Take <strong>care of your body</strong> It's the only place you have to live..</h2>
           
          </div>
        </div>
        <!-- End Third slide -->

        <!-- Start Fourth slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/12.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2><strong>We Promote</strong> a healthy lifestyle..</h2>
           
          </div>
        </div>
        <!-- End Fourth slide -->

        <!-- Start Fifth slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/9.jpg" alt="">
          </div>
         <div class="slider-text">
            <h2>And <strong>here we are</strong> to help you out..</h2>
          
          </div>
        </div>
        <!-- End Fifth slide -->
      </div><!-- /top-slider -->
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN Top Feature SECTION ================-->
    <section id="topFeature">
      <div class="row">
        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature">
              <span class="fa fa-user-md"></span>
              <h3>Electronic Health Records</h3>
              <p> A longitudinal record of personal health and healthcare "from cradle to grave". Thus defined, an EHR is able electronically to collect and store data about patients, supply that information to providers on request and permits doctors to enter patient care orders on computer. </p>
            
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->
         
        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature opening-hours">
              <span class="fa fa-clock-o"></span>
              <h3>No need to remember medical history</h3>
              <p>Now with EHR no need to preserve the medical files and no need to remember the prescriptions and medical history. You can get them all in a single click</p>
                    
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->

        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature">
              <span class="fa fa-hospital-o"></span>
              <h3>Group Of Hospitals and experts </h3>
              <p>When in need of healthcare, we provide you with a list of all the hospitals near your location. You can also search for hospital with speciality.Moreover you can book an appointment too.So now there is no need to face the long queues.Get register and we will take care of your health.</p>

              <div class="modal fade" id="RegisterModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color: white; opacity: 1;">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Register Yourself</h4>
                    </div>
                    <div class="modal-body" style="background-color: white; opacity: 1;">
                      <div class="appointment-area">
                        <form class="appointment-form" method="post" action="PatientinsertCode.php">
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Your name <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" placeholder="Your name" id="first_txt" name="FirstName"> 
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Middle Name <span class="required">*</span>
                              </label>
                              <input type="mail" class="wp-form-control wpcf7-email" placeholder="Middle Name" id="middle_txt" name="MiddleName">  
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Last Name <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" placeholder="Last Name" id="last_txt" name="LastName">
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Gender <span class="required">*</span>
                              </label>

                              <select class="wp-form-control wpcf7-select" id="gender_txt" name="Gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                              </select> 
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Your Birth <span class="required">*</span>
                              </label>
                              <input type="date" class="wp-form-control wpcf7-text" placeholder="dd/mm/yy" id="birthday_txt" name="DOB">
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Height <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-email" placeholder="Height" id="height_txt" name="Height">  
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Weight<span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" placeholder="Weight" id="weight_txt" name="Weight">  
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Blood Group <span class="required">*</span>
                              </label>
                              <select class="wp-form-control wpcf7-select" id="bloodgroup_txt" name="BloodGroup">
                                <option val="B+">B+</option>
                                <option val="B-">B-</option>
                                <option val="A+">A+</option>
                                <option val="A-">A-</option>
                                <option val="O+">O+</option>
                                <option val="O-">O-</option>
                                <option val="AB+">AB+</option>
                                <option val="AB-">AB-</option>
                              </select>  
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
							                              
                              <label class="control-label">Disease <span class="required">*</span>
                              </label>
                              <select multiple="multiple" class="wp-form-control wpcf7-select" name="Disease[]">
							  <?php
							  	$query="select * from disease";
								$result=mysqli_query($con,$query);
								while($row=mysqli_fetch_array($result))
								{
							?>
                                <option value="<?php echo $row['DiseaseId'];?>"><?php echo $row['DiseaseName'];?></option>
                              <?php } ?>
                              </select>
                            </div>
                            
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Address<span class="required">*</span>
                              </label>
                              <textarea class="wp-form-control" cols="5" rows="4" placeholder="Your Address" name="Address"></textarea>
                              
                            </div>
                          </div>  
                          <div class="row">
                              <div class="col-md-6 col-sm-6">
                                <label class="control-label">Contact Number<span class="required">*</span>
                                </label>
                                <input type="text" class="wp-form-control wpcf7-email" placeholder="Contact Number" id="contact_txt" name="ContactNumber">  
                              </div>
							  
							  <div class="col-md-6 col-sm-6">
                                <label class="control-label">Emergency Contact Number<span class="required">*</span>
                                </label>
                                <input type="text" class="wp-form-control wpcf7-email" placeholder=" Emergency Contact Number" id="econtact_txt" name="EContactNumber">  
                              </div>
							  </div>
							  
							  <div class="row"> 
                              <div class="col-md-6 col-sm-6">
                                <label class="control-label">Email<span class="required">*</span>
                                </label>
                                <input type="text" class="wp-form-control wpcf7-text" placeholder="Email" id="email_txt" name="Email">  
                              </div>
                                 
                            
                              <div class="col-md-6 col-sm-6">
                                <label class="control-label">Account Name<span class="required">*</span>
                                </label>
								<?php
								 $id="PA";
								 $id.=date("Y");
								 $id.=rand(1000,100000);
								?>
                                <input type="text" class="wp-form-control wpcf7-text" placeholder="" id="aacount_txt" name="Id" readonly="readonly" value="<?php echo $id;?>">
                              </div>
							  </div>
							   
							   
							   <div class="row">
                              <div class="col-md-6 col-sm-6">
                                <label class="control-label">Password <span class="required">*</span>
                                </label>
                                <input type="password" class="wp-form-control wpcf7-email" placeholder="Password" id="password_txt" name="Password">  
                              </div>
                            
							
							<div class="col-md-6 col-sm-6">
                                <label class="control-label"> Confirm Password <span class="required">*</span>
                                </label>
                                <input type="password" class="wp-form-control wpcf7-email" placeholder="Confirm Password" id="cpassword_txt" name="CPassword">  
                              </div>
                            </div>
                          
                         <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share" name="Submit"></i><span>Register Now</span></button>  
                        </form>
                      </div>
                    </div>                    
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
              <!-- start modal window -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog1">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Login</h4>
                    </div>
                    <div class="modal-body">
                      <div class="appointment-area">
					  
                        <form class="appointment-form" method="post" action="logincode.php">
						
                          <div class="row">
                            <div class="col-md-12 col-sm-12">
                              <label class="control-label">Username <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" placeholder=" Enter Username" name="uid">
                            </div>
							            </div>
							            <div class="row">
                            <div class="col-md-12 col-sm-12">
                              <label class="control-label">Password <span class="required">*</span>
                              </label>
                              <input type="password" class="wp-form-control wpcf7-email" placeholder="Enter Password" name="pwd">  
                            </div>
                          </div>
						  
                         <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share"></i><span>Sign In</span></button>  
                        </form>
						 </div>
                    </div>                    
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
             </div><!-- /.modal -->
						
						
						
						
						
						
					
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->
      </div>
    </section>
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