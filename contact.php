<?php
if(isset($_REQUEST['submit_register'])){

$email = $_REQUEST['email'];
$name = $_REQUEST['name'];
$phonenumber = $_REQUEST['phonenumber'];
$message = $_REQUEST['message'];



$connection = mysqli_connect("localhost","root","","ukraine"); 

$insert_query = "INSERT INTO contact SET email='$email',name='$name',phonenumber='$phonenumber',message='$message', date=NOW()";
$query = mysqli_query($connection , $insert_query);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>études en Ukraine</title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="wrapper-main">
	<!-- Top Bar -->
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="social-media">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="contact-details">
						<ul>
							<li><i class="fas fa-phone fa-rotate-90"></i> +01 899 286 777</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
        <div class="container">
            <a class="navbar-brand" href="index.html">
				<img src="images/logo.png" alt="logo" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Home</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="services.html">Services</a>
					</li>

					     <li class="nav-item">
						<a class="nav-link" href="procedure.html">procédure</a>
					</li>
 
                      <li class="nav-item">
						<a class="nav-link" href="frais.html">frais</a>
					</li>
 
                    <li class="nav-item">
						<a class="nav-link" href="formulaire.html">formulaire</a>
					</li>
                    
					 <li class="nav-item">
						<a class="nav-link" href="faq.html">FAQ</a>
					</li>

					 <li class="nav-item">
						<a class="nav-link" href="about.html">About</a>
					</li>

					<li class="nav-item">
						<a class="nav-link active" href="contact.php">Contact</a>
					</li>
				</ul>
            </div>
        </div>
    </nav>
	
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3"> Contact </h1>
			<div class="breadcrumb-main">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="index.html">Home</a>
					</li>
					<li class="breadcrumb-item active">Contact</li>
				</ol>
			</div>
		</div>
	</div>

    <div class="contact-main">
		<div class="container">
			<!-- Content Row -->
		  <div class="row">
			<!-- Map Column -->
				<div class="col-lg-8 mb-4 contact-left">
					<h3>Send us a Message</h3>
					<form action="contact.php" method="POST">
						<div class="control-group form-group">
							<div class="controls">
								<input type="text" name="name" placeholder="Full Name" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
								<p class="help-block"></p>
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<input type="tel" name="phonenumber" placeholder="Phone Number" name="name" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<input type="email" name="email" placeholder="Email Address" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<textarea rows="5" cols="100" name="message" placeholder="Message" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
							</div>
						</div>
						<div id="success"></div>
						<!-- For success/fail messages -->
						<input style="background-color:gold; border-radius: 5px;" type="submit" name="submit_register" value="envoyer"/>
					</form>
				</div>
				<!-- Contact Details Column -->
				<div class="col-lg-4 mb-4 contact-right">
					<h3>Contact Details</h3>
					
					<p>
						<abbr title="Phone">P</abbr>: 
					</p>
					<p>
						<abbr title="Email">E</abbr>:
						<a href="mailto:name@example.com"></a>
					</p>
					<p>
						<abbr title="Hours">H</abbr>: Lundi - Vendredi: 9:00 AM to 5:00 PM
					</p>
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>
	
	

    <!--footer starts from here-->
    <footer class="footer">
       <!-- <div class="container bottom_border">
            <div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">About Us</h5>
					
					<p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
					<ul class="footer-social">
						<li><a class="facebook hb-xs-margin" href="#"><span class="hb hb-xs spin hb-facebook"><i class="fab fa-facebook-f"></i></span></a></li>
						<li><a class="twitter hb-xs-margin" href="#"><span class="hb hb-xs spin hb-twitter"><i class="fab fa-twitter"></i></span></a></li>
						<li><a class="instagram hb-xs-margin" href="#"><span class="hb hb-xs spin hb-instagram"><i class="fab fa-instagram"></i></span></a></li>
						<li><a class="googleplus hb-xs-margin" href="#"><span class="hb hb-xs spin hb-google-plus"><i class="fab fa-google-plus-g"></i></span></a></li>
						<li><a class="dribbble hb-xs-margin" href="#"><span class="hb hb-xs spin hb-dribbble"><i class="fab fa-dribbble"></i></span></a></li>
					</ul>
				</div>	
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
					
					<ul class="footer_ul_amrc">
						<li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Default Version</a></li>
						<li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Boxed Version</a></li>
						<li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Our Team </a></li>
						<li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>About Us</a></li>
						<li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Our Services</a></li>
						<li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Get In Touch</a></li>
					</ul>
					
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
					
					<ul class="footer_ul2_amrc">
						<li>
							<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
							<p>Lorem Ipsum is simply dummy...<a href="#">https://www.lipsum.com/</a></p>
						</li>
						<li>
							<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
							<p>Lorem Ipsum is simply dummy...<a href="#">https://www.lipsum.com/</a></p>
						</li>
						<li>
							<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
							<p>Lorem Ipsum is simply dummy...<a href="#">https://www.lipsum.com/</a></p>
						</li>
					</ul>
					
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 ">
					<div class="news-box">
						<h5 class="headin5_amrc col_white_amrc pt2">Newsletter</h5>
						<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
						<form action="#">
							<div class="input-group">
								<input class="form-control" placeholder="Search for..." type="text">
								<span class="input-group-btn">
								  <button class="btn btn-secondary" type="button">Go!</button>
								</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>-->
        <div class="container">
            <p class="copyright text-center">All Rights Reserved. &copy; 2020 
			
            </p>
        </div>
    </footer>
</div>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/script.js"></script>
</body>
</html>

