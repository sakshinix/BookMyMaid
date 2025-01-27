<?php

include ("lock.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BOOK MY MAID </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
 
<script type = "text/javascript">
   
      function validate() {
		   if( document.myForm.img.value == " " ) {
            alert( "Please provide your Image!" );
            document.myForm.img.focus();
            return false;
         }
      
         if( document.myForm.name.value == " " ) {
            alert( "Please provide your name!" );
            document.myForm.name.focus() ;
            return false;
         }
		   if( document.myForm.mob_no.value == " " ) {
            alert( "Please provide your name!" );
            document.myForm.mob_no.value.length != 10 ){
            
            alert( "Please provide a Contact no " );
            document.myForm.mob_no.focus() ; 
            return false;
         }
		   }
		   if( document.myForm.address.value == " " ) {
            alert( "Please provide your Address!" );
            document.myForm.address.focus() ;
            return false;
         }
		   if( document.myForm.city.value == " " ) {
            alert( "Please provide your City!" );
            document.myForm.city.focus() ;
            return false;
         }
		   if( document.myForm.addhar.value == "" ) {
            alert( "Please provide your Addharcard no!" );
            document.myForm.addhar.value.length != 12 ){
            
            alert( "Please provide a Addharcard no " );
            document.myForm.addhar.focus() ; 
            return false;
         }
		   }
		   if( document.myForm.img1.value == "" ) {
            alert( "Please provide your Addharcard PDF!" );
            document.myForm.img1.focus() ;
            return false;
         }
		   if( document.myForm.experience.value == "" ) {
            alert( "Please provide your Experience!" );
            document.myForm.experience.focus() ;
            return false;
         }
		   if( document.myForm.gender.value == "" ) {
            alert( "Please provide your Gender!" );
            document.myForm.gender.focus() ;
            return false;
         }
		 
         if( document.myForm.profession.value == "" ) {
            alert( "Please provide your Professional!" );
            document.myForm.profession.focus() ;
            return false;
         }
		   if( document.myForm.fir-reg.value == "" ) {
            alert( "Please provide your FIR-Registered!" );
            document.myForm.fir-reg.focus() ;
            return false;
         }
		   if( document.myForm.no_of_comp.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.no_of_comp.focus() ;
            return false;
         }
		   if( document.myForm.img2.value == "" ) {
            alert( "Please provide your Criminal pdf !" );
            document.myForm.img2.focus() ;
            return false;
         }
         
		  if( document.myForm.acc_no.value == "" ) {
            alert( "Please provide your Account No!" );
            document.myForm.acc_no.value.length != 12 ){
            
            alert( "Please provide a Account no " );
            document.myForm.acc_no.focus() ; 
            return false;
         }
		  }
         
		  if( document.myForm.ifc.value == "" ) {
            alert( "Please provide your IFC Code!" );
            document.myForm.ifc.value.length != 11 ){
            
            alert( "Please provide a IFC Code " );
            document.myForm.ifc.focus() ; 
            return false;
         }
		  }
         
         
		  if( document.myForm.detail.value == "" ) {
            alert( "Please provide Details!" );
            document.myForm.detail.focus() ;
            return false;
         }
         
         if( document.myForm.salary.value == "" ) {
            alert( "Please provide Salary!" );
			document.myForm.salary.focus() ;
            return false;
         }
         return( true );
      }
		  
</script>

	


</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="../../index.php">
            <h4 class="card-title" style="color:blue"> <b><font size="+1">BOOK MY MAID</b></font></h4>
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.php">
            <img src="../../images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">WELCOME, <span class="text-black fw-bold">PVSR</span></h1>
            <h3 class="welcome-sub-text"></h3>
          </li>
        </ul>
          <ul class="navbar-nav ms-auto">
          
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          
          
         
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="../../images/face0.jpeg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../../images/face0.jpeg" width="159px" height="129px" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">PVSR</p>
                <p class="fw-light text-muted mb-0">pvsr@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              
              <a href="../samples/logout.php" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
         
          <li class="nav-item nav-category">Forms and Datas</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title"> Registration</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/registration.php">Maid Registration</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Details</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/tables/Maidtable.php">Maid Details</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/tables/customer_details.php">Customer Details</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Contact</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="contactus.php">Contact US</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/signin.php"> Login </a></li>
              </ul>
            </div>
          </li>
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
          
			
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" style="color:purple"> <font size="+3">Maid Registration</font></h4>
                  <p class="card-description" style="color:blue"> <font size="+2">
                   Personal Details</font>
                  </p>
                  <form name="myForm" action="insert.php" onsubmit="return(validate());" method= "POST"   enctype="multipart/form-data"  class="forms-sample"  >
				  
				  
                      <label>Upload Photo</label>
                      <input type="file" name="img" id="img" class="file-upload-default btn btn-primary">
                      
                   
					
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="name" name="name"  placeholder="Name">
					 
                    </div>
					<div class="form-group">
                      <label for="exampleInputName2">Contact</label>
                      <input type="text" class="form-control" id="mob_no"  name="mob_no" placeholder="Contact">
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">Address</label>
                      <input type="text" class="form-control" id="address" name="address"  placeholder="Address">
                    </div>
					<div class="form-group">
                      <label for="city">City</label>
                      <input type="text" class="form-control" id="city" name="city"placeholder="Location">
                    </div>
					
                    <div class="form-group">
                      <label for="email">Email address [Optional]</label>
                      <input type="email" class="form-control" id="email" name="email"placeholder="Email">
                    </div>
					
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
					
					<div class="form-group">
                      <label for="">Addhar Card</label>
                      <input type="text" class="form-control" id="addhar" name="addhar" placeholder="Addhar card">
                    </div>
					
					
                      <label>Upload Addhar card</label>
                      <input type="file" name="img1" id="img1" class="file-upload-default  btn btn-primary">
                     
                  
					
					<div class="form-group">                                                             
                      <label for="experience">Experience</label>
                      <input type="text" class="form-control" id="experience" name="experience"placeholder="Experience">
                    </div>
					
                    <div class="form-group">
                      <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender" >
						<option value="">Select</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    
                    <div class="form-group">
                      <label for="profession">Service Type</label>
                      <input type="text" class="form-control" id="profession" name="profession" placeholder="Service Type">
                    </div></br></br>
					
					<p style="color:blue"><font size="+2">Offical & Criminal Details</font></p>
					
                    <div class="form-group">
                      <label for="fir-reg">FIR Registered</label>
                        <select class="form-control" id="fir-reg"  name="fir-reg" >
						<option value="">Select</option>
                          <option value="YES">YES</option>
                          <option value="NO">NO</option>
                        </select>
                      </div>
					  
					    <div class="form-group">
                      <label for="no_of_comp">No.of Complaints</label>
                        <select class="form-control" id="no_of_comp" name="no_of_comp" >
						<option value="">Select</option>
						<option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
						  <option value="3">3</option>
                        </select>
                      </div>
					  
					
                      <label>Upload Criminal Details</label>
                      <input type="file" name="img2"  id="img2" class="file-upload-default  btn btn-primary">
                      
                   
					
					<p style="color:blue"><font size="+2">Bank Details</font></p>
					
					<div class="form-group">
                      <label for="acc_no">Account no</label>
                      <input type="text" class="form-control" id="acc_no" name="acc_no" placeholder="Enter Account no">
                    </div>
					
                    <div class="form-group">
                      <label for="ifc">IFC Code</label>
                      <input type="text" class="form-control" id="ifc" name="ifc" placeholder="Enter IFC Code">
                    </div>
					
				<p style="color:blue"><font size="+2">External Details</font></p>
					
                     <div class="form-group">
                      <label for="detail">Enter if the Maid has any health issues or any external issues</label>
                      <textarea class="form-control" id="detail" name="detail" rows="4"></textarea>
                    </div>
					
					 <div class="form-group">
                      <label for="ifc">Salary</label>
                      <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter the Salary">
                    </div>
					
                    <input type="submit" class="btn btn-primary me-2" value="Submit">
               <button type="reset" class="btn btn-warning btn-icon-text">
                          <i class="ti-reload btn-icon-prepend"></i>                                                    
                          Reset
                        </button>
                  </form>
                </div>
              </div>
            </div>
            
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
