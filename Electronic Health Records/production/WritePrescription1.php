
<?php
include ("conn.php");
session_start();
$did=$_SESSION['DID']; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Electronic Health Records | </title>
	
	
	
	 
	 
		<script type="text/javascript" src="js/script.js"></script> 

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>EHR</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Doctor</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
			
                  <li><a href="AppointConfirm.php"><i class="fa fa-home"></i> Home <span class=""></span></a>
                    
                  </li>
                  <li><a><i class="fa fa-edit"></i> Appoinment <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="AppointConfirm.php">Confirm Appoinment</a></li>
					  
					 
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Prescription <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="WritePrescription1.html">Write Prescription</a></li>
					 
                    </ul>
                  </li>
				  
				  
				  
				   <li><a><i class="fa fa-desktop"></i> View Details <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="ViewPres.php">Previous Precriptions</a></li>
                      <li><a href="MedicalHistory.php">Medical History</a></li>
                      <li><a href="viewtest.php">Test Result</a></li>
                    </ul>
                  </li>
                  
                 
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Welcome Admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="logoutcode.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
		  
					  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Prescription</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Write Prescription <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo "insertprescription.php";?>">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="right:185px;">Date <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-nam" class="form-control col-md-7 col-xs-12" name="date1" style="right:200px;" readonly value="<?php echo date("Y-m-d");?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name" style="right:185px;">Doctor ID <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="prescriptionDocId" class="form-control col-md-7 col-xs-12" style="right:200px;" value="<?php echo $did;?>" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" style="right:185px;">Patient ID</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input list="patient_id" class="form-control col-md-7 col-xs-12" style="right:200px;" name="patientid" id="pid">
						<datalist id="patient_id">
						
						<?php 
						$query="select PatientId,FirstName from patient";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_assoc($result))
						{
						?>
						<option value="<?php echo $row['PatientId'];?>"><?php echo $row['FirstName'];?></option>
						<?php } ?>
						</datalist>
						
                          <!--<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="patid" style="right:200px;">-->
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12" style="right:185px;">Notes</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="notes" style="right:200px;">
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
					  <table id="datatable" class="table">
				 		 <thead>
                        <tr>
                          <th>#</th>
                          <th>Drug Name</th>
                          <th>Quantity</th>
                          <th>Dosage</th>
						  <th>when to take</th>
                        </tr>
                      </thead>
				 
  				 <tr><p>
				 
				 <td><input type="checkbox" required="required" name="chk[]" checked="checked" class="form-control col-md-7 col-xs-12" /></td>
				 <td>
				 
                          <select name="drug[]" class="form-control col-md-7 col-xs-12" onChange="smart(this.value)">
						  <option value="">Select Drug</option>
						  <?php
						  $query="select * from drug";
						  $result=mysqli_query($con,$query);
						  while($row=mysqli_fetch_assoc($result))
						  {
						  	$DrugId=$row['DrugId'];
							$DrugName=$row['DrugName'];
						  	echo "<option value='$DrugId'>$DrugName</option>";
						  }
						                            
                            
						?>
						<!--<option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>-->
                          </select>
                        
				 
				 
				 
			   </td>
			   
   			   <td>
			   			
						<input type="text" name="qty[]" placeholder="qty" class="form-control col-md-7 col-xs-12">
						
				</td>
    			
				
				
				<td>
						
                          <select name="dose[]" class="form-control col-md-7 col-xs-12">
                            <option value="OID">OID</option>
                            <option value="BID">BID</option>
                            <option value="TID">TID</option>
                            
                          </select>
                       
				
				
				</td>
				
				
				<td>
						
                          <select name="when[]" class="form-control col-md-7 col-xs-12">
                            <option value="Before Meal">Before Meal</option>
                            <option value="After Meal">After Meal</option>
                            
                            
                          </select>
                       
				
				
				</td>
				
				
				</p>
  			 </tr>
 			 </table>
 				 <Button type="button" onClick="addRow('datatable');"  class="btn btn-primary">Add</Button>
 					 <Button type="button" onClick="deleteRow('datatable');" class="btn btn-primary">Delete</Button>
 				
					  
					  </div>
					  
					  
					  
					  
                       
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						<center>
                          <button class="btn btn-primary" type="submit">Submit</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                         </center> 
                        </div>
                      </div>
					  
				 
				 		
				
 				 

                    </form>
                  </div>
                </div>
              </div>
            </div>


				
		 

        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
             
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	<script>
	function smart(drugid)
	{
		if (window.XMLHttpRequest) 
		{
            // code for IE7+, Firefox, Chrome, Opera, Safari
           	 xmlhttp = new XMLHttpRequest();
			
        } 
		else 
		{
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() 
		{
            if (this.readyState == 4 && this.status == 200) 
			{
				if(this.responseText!="")
				{
					alert(this.responseText);
				}
                //document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","smart1.php?pid="+document.getElementById("pid").value+"&did="+drugid,true);
        xmlhttp.send();
    
	}
	</script>
  </body>
</html>
</div>