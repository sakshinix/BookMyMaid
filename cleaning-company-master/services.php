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
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Services <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Services</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Services</span>
            <h2>How We Works</h2>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-6 col-lg-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-workplace"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Office Cleaning</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <?php
				echo"<form action=blog.php method=POST >";
				echo"<input type=text id=service name=service value=OfficeCleaning>";
				echo"<br/><br/>";
				echo"<button type=submit class=btn-custom>Read more</button></br>"; 
				echo"</form>";
				?>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 services ftco-animate">
          	<div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-pool"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Pool Cleaning</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <?php
				echo"<form action=blog.php method=POST >";
				echo"<input type=text id=service name=service value=PoolCleaning>";
				echo"<br/><br/>";
				echo"<button type=submit class=btn-custom>Read more</button></br>"; 
				echo"</form>";
				?>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-rug"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Carpet Cleaning</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                 <?php
				echo"<form action=blog.php method=POST >";
				echo"<input type=text id=service name=service value=CarpetCleaning>";
				echo"<br/><br/>";
				echo"<button type=submit class=btn-custom>Read more</button></br>"; 
				echo"</form>";
				?>
              </div>
            </div> 
          </div>

          <div class="col-md-6 col-lg-4 services ftco-animate">
          	<div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-kitchen"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Kitchen Cleaning</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
               <?php
				echo"<form action=blog.php method=POST >";
				echo"<input type=text id=service name=service value=KitchenCleaning>";
				echo"<br/><br/>";
				echo"<button type=submit class=btn-custom>Read more</button></br>"; 
				echo"</form>";
				?>
              </div>
            </div> 
          </div>

          <div class="col-md-6 col-lg-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-garden"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Garden Cleaning</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                 <?php
				echo"<form action=blog.php method=POST >";
				echo"<input type=text id=service name=service value=GardenCleaning>";
				echo"<br/><br/>";
				echo"<button type=submit class=btn-custom>Read more</button></br>"; 
				echo"</form>";
				?>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 services ftco-animate">
          	<div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-balcony"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Window Cleaning</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <?php
				echo"<form action=blog.php method=POST >";
				echo"<input type=text id=service name=service value=WindowCleaning>";
				echo"<br/><br/>";
				echo"<button type=submit class=btn-custom>Read more</button>"; 
				echo"</form>";
				?>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-intro" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-8 text-center">
    				<h2>Together we will explore new things</h2>
    				<a href="" class="icon-video d-flex align-items-center justify-content-center"><span class="fa fa-play"></span></a>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading mb-3">Price &amp; Plans</span>
            <h2>Choose Your Perfect Plans</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa flaticon-sprayer"></span></div>
	            	<h4 class="heading-2">Starter</h4>
		            <span class="price"><sup>$</sup> <span class="number">49</span></span>
		            
		            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>Bedrooms cleaning</li>
		              <li><span class="fa fa-check mr-2"></span>Vacuuming</li>
		              <li><span class="fa fa-check mr-2"></span>Bathroom cleaning</li>
		              <li><span class="fa fa-check mr-2"></span>Mirrow cleaning</li>
		              <li><span class="fa fa-check mr-2"></span>Livingroom cleaning</li>
		            </ul>

		            <a href="#" class="btn btn-primary px-4 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7 active">
	            <div class="text-center">
	            <div class="icon d-flex align-items-center justify-content-center"><span class="fa flaticon-vacuum-cleaner"></span></div>
            	<h4 class="heading-2">Standard</h4>
	            <span class="price"><sup>$</sup> <span class="number">79</span></span>
	            
	            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>Bedrooms cleaning</li>
		              <li><span class="fa fa-check mr-2"></span>Vacuuming</li>
		              <li><span class="fa fa-check mr-2"></span>Bathroom cleaning</li>
		              <li><span class="fa fa-check mr-2"></span>Mirrow cleaning</li>
		              <li><span class="fa fa-check mr-2"></span>Livingroom cleaning</li>
		            </ul>

	            <a href="#" class="btn btn-primary px-4 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa flaticon-tap"></span></div>
            	<h4 class="heading-2">Premium</h4>
	            <span class="price"><sup>$</sup> <span class="number">109</span></span>
	            
	            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>Bedrooms cleaning</li>
		              <li><span class="fa fa-check mr-2"></span>Vacuuming</li>
		              <li><span class="fa fa-check mr-2"></span>Bathroom cleaning</li>
		              <li><span class="fa fa-check mr-2"></span>Mirrow cleaning</li>
		              <li><span class="fa fa-check mr-2"></span>Livingroom cleaning</li>
		            </ul>

	            <a href="#" class="btn btn-primary px-4 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa flaticon-cleaning"></span></div>
            	<h4 class="heading-2">Platinum</h4>
	            <span class="price"><sup>$</sup> <span class="number">159</span></span>
	            
	            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>Bedrooms cleaning</li>
		              <li><span class="fa fa-check mr-2"></span>Vacuuming</li>
		              <li><span class="fa fa-check mr-2"></span>Bathroom cleaning</li>
		              <li><span class="fa fa-check mr-2"></span>Mirrow cleaning</li>
		              <li><span class="fa fa-check mr-2"></span>Livingroom cleaning</li>
		            </ul>

	            <a href="#" class="btn btn-primary px-4 py-3">Get Started</a>
	            </div>
	          </div>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>