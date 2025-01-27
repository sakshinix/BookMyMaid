<?php
include "lock.php"; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cleaning Company - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jsjquery.min.js"></script>
<script type="text/javascript" src="js/jsjquery.validate.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$("#pform").validate({
		rules:{
			img:'required',
			name:'required',
			email:{
				required:true,
				email:true
				},
				username:'required'
			    cont:{
			  required:true,
             minlength:10,
             number:true			
			},
			address:'required'
			},
		messages:{
			img:'Please upload image',
			name:'Please enter full Name',
			email:{
				required:'Please enter email',
				email:'Please enter valid email'
				
			},
			username:'Please enter valid username',
			cont:{
			required:'Please enter contact',
            minlength:'10 digit only',
            number:'contact should be numbers'		
			},
			
			address:'Please enter your address'
			
			},
		submitHandler:function(form){
			alert("Proceed!");
			form.submit();
			
		}
		
	
	});
});

	
</script>

  </head>
  <body>
  	<div class="wrap">
			<div class="container">
				<div class="row justify-content-between">
						<div class="col-12 col-md d-flex align-items-center">
							<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="#">emailsample@email.com</a></p>
						</div>
						<div class="col-12 col-md d-flex justify-content-md-end">
							<div class="social-media">
				    		<p class="mb-0 d-flex">
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
				    		</p>
			        </div>
						</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.php">Cleaning<span>company</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
		  <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
	        	<li class="nav-item"><a href="pricing.php" class="nav-link">Pricing</a></li>
	            <li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>
				 <li class="nav-item"><a href="account.php" class="nav-link">Account</a></li>
	            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	            
				<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
	        </ul>
	      </div>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	
	          
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home</a><i class="fa fa-chevron-right"></i></a></span> <span>Profile <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Profile</h1>
          </div>
        </div>
      </div>
    </section>
		
		
		
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row mb-5">
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Website</span> <a href="#">yoursite.com</a></p>
					          </div>
				          </div>
								</div>
							</div>
							<?php
							error_reporting(0);
							
	if(isset($_POST['update']))
		{
		$id=$_POST['id'];
		//echo $id;
		$path= "photo/";
    $valid_formats=array("jpg","png","gif","JPG","bmp");
		$name1=$_POST['name'];
		// $name1=str_replace(' ','',$name);
		$email=$_POST['email'];
		$username=$_POST['username'];
		//$password=md5($_POST['password']);
		$cont=$_POST['cont'];
		$address=$_POST['address'];
	//	$address=str_replace(' ','',$address);
		$time=time();
	  $actual_img_name=$_FILES['img']['name'];
	  $reimg=$time.$actual_img_name;
	  $size=$_FILES['img']['size'];
	  $tmp=$_FILES['img']['tmp_name'];
	  $ext=explode(".",$actual_img_name);
	  in_array($ext[1],$valid_formats);
	  move_uploaded_file($tmp,$path.$reimg);
	  //print_r($ext);
	  
		$edit=mysql_query("UPDATE cust_regi SET image='$reimg', name='$name1'  ,mob_no='$cont',address='$address',email='$email',user_name='$username' WHERE id='$id'");
		
	   
		$e=mysql_query($edit);
		
		if($e)
		{
			
			//echo "<html><a href='profile.php'><a></html>";
		}
		
		}
		if(isset($_POST['delete']))
		{
								
								$id=$_POST['id'];
								$delete=mysql_query("DELETE FROM `cust_regi` WHERE id=$id");
								if($delete==true){
									
	                                    	header("location:login.php");
	                            
								}
								
								
		}
							$user_check=$_SESSION['login_user'];
							//echo $user_check;
	                        $qry=mysql_query("SELECT * FROM cust_regi WHERE email='$user_check' ");
							
							while($row=mysql_fetch_array($qry))
	              {   
			              $img=$row['image'];
						  $name=$row['name'];
						  $add=$row['address'];
						 // echo $img;
						echo"<div class='row no-gutters'>";
								echo"<div class='col-md-7'>";
								echo"	<div class='contact-wrap w-100 p-md-5 p-4'>";
								echo"		<h3 class='mb-4'>Profile</h3>";
									echo"	<div id='form-message-warning' class='mb-4'></div> ";
					      		echo"<div id='form-message-success' class='mb-4'>";
					            
					      		echo"</div>";
								echo"		<form id=pform action=profile.php  method=POST enctype=multipart/form-data class='contactForm'>";
									echo"		<div class='row'>";
											
													
									echo"			<div class='col-md-6'>";
									echo"				<div class='form-group'>";
										echo"			    <label class='label' for=img>Upload Photo</label>";
										echo"				<input type=file value=Upload name=img id=img class='btn btn-secondary'>";
														
										echo"			</div>";
										echo"		</div>";
										echo"		<div class='col-md-7'>";
										echo"			<div class='form-group'>";
										echo"				<label class=label for=name>Full Name</label>";
														
										echo"				<input type=text class='form-control' name=name id=name placeholder=Name  value='$name'>";

										echo"			</div>";
										echo"		</div>";
										echo"		<div class='col-md-8'> ";
										echo"			<div class='form-group'>";
											echo"			<label class='label'; for=email>Email Address</label>";
										echo"				<input type=email class='form-control' name=email id=email placeholder=Email value= ". $row['email'].">";
											echo"		</div>";
											echo"	</div>";
											echo"	<div class='col-md-11'>";
											echo"		<div class='form-group'>";
											echo"			<label class='label' for=username>User Name</label>";
											echo"			<input type=text class=form-control name=username id=username placeholder=UserName value= ". $row['user_name'].">";
											echo"		</div>";
											echo"	</div>";
											/*echo"	<div class='col-md-11'>";
											echo"		<div class='form-group'>";
											echo"			<label class='label' for=pass>Password</label>";
											echo"			<input type=password class='form-control' name=password id=password placeholder=Password value= ". $row['pass'].">";
											echo"		</div>";
											echo"</div>";*/
												
											echo"	<div class='col-md-12'>";
											echo"		<div class='form-group'>";
											echo"			<label class='label' for=contact>Contact</label>";
											echo"			<input type=number class='form-control' name=cont id=cont placeholder=Contact value= ". $row['mob_no'].">";
											echo"		</div>";
											echo"	</div>";
											echo"	<div class='col-md-12'> ";
												echo"	<div class='form-group'>";
												echo"		<label class='label' for=address>Address</label>";
												echo"		<input type=text class='form-control' name=address id=address placeholder=Adress value='$add' >";
												echo"	</div>";
											echo"	</div>";
												
											echo"	<div class='col-md-12'>";
												echo"	<div class='form-group'>";
														echo  "<input type=hidden name=id value=" . $row['id'].">";
												echo"<button name=update id=update value=submit class='btn btn-primary'>Update</button>";
												echo"&emsp;&emsp;<button name=delete id=delete value=submit class='btn btn-primary'>Delete Account</button>";
														
											echo"		</div>";
										echo"		</div>";
									echo"		</div>";
								echo"		</form>";
								echo"	</div>";
							echo"	</div>";
							echo"	<div class='col-md-5 d-flex align-items-stretch'>";
							echo"		<div class='info-wrap w-100 p-5 img' style='background-image: url(photo/$img)'>";
				         echo" </div>";
							echo"	</div>";
						
						echo"	</div>";
						
				  }
				  ?>
						</div>
					</div>
					<div class="col-md-12">
						<div id="map" class="map"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121656.25373231898!2d75.84857628465052!3d17.661620501252532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5d082b54ac5d5%3A0x3c719de6c83710d0!2sSolapur%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1649927675519!5m2!1sen!2sin" width="900" height="950" style="border:0; allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
			</div>
			</div>
		</section>

    

    <footer class="footer ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">Cleaning Company</h2>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
              <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
            </ul>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">Latest News</h2>
						<div class="block-21 mb-4 d-flex">
              <a class="img mr-4 rounded" style="background-image: url(images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> Mar. 04, 2020</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="img mr-4 rounded" style="background-image: url(images/image_2.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> Mar. 04, 2020</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
					</div>
					<div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
						<h2 class="footer-heading">Quick Links</h2>
						<ul class="list-unstyled">
              <li><a href="#" class="py-1 d-block">Home</a></li>
              <li><a href="#" class="py-1 d-block">About</a></li>
              <li><a href="#" class="py-1 d-block">Services</a></li>
              <li><a href="#" class="py-1 d-block">Works</a></li>
              <li><a href="#" class="py-1 d-block">Blog</a></li>
              <li><a href="#" class="py-1 d-block">Contact</a></li>
			  <li><a href="#" class="py-1 d-block">profile</a></li>
            </ul>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">Have a Questions?</h2>
						<div class="block-23 mb-3">
              <ul>
                <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
              </ul>
            </div>
					</div>
				</div>
				<div class="row mt-5">
          <div class="col-md-12 text-center">

            <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
			</div>
		</footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>