<?php
$message_sent = false;
if(isset($_POST['pemail']) && $_POST['pemail'] != ''){

if(filter_var($_POST['pemail'], FILTER_VALIDATE_EMAIL)){
//submit the form
$pname = $_POST["pname"];
$pnumber = $_POST["pnumber"];
$pemail = $_POST["pemail"];
$sname = $_POST["sname"];
$school = $_POST["school"];
$class = $_POST["class"];
$dob = $_POST["dob"];

$to = "sawuor@kis.sc.ke";
$body = "";
$body .="From: ".$pname. "\r\n";
$body .="Email: ".$pemail. "\r\n";
$body .="Number: ".$pnumber. "\r\n";
$body .="Student: ".$sname. "\r\n";
$body .="Class: ".$class. "\r\n";

mail($to,$pname,$body);
$message_sent = true;
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content=" Kinderword International School" />
	<meta name="author" content="Kinderword International School" />
	<meta name="robots" content="Kinderword International School" />
	<!-- DESCRIPTION -->
	<meta name="description" content="Kinderword International School" />	
	<!-- OG -->
	<meta property="og:title" content="Kinderword International School" />
	<meta property="og:description" content="Kinderword International School" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/logo.png" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Kinderworld International School </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	
	<!-- REVOLUTION SLIDER CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/navigation.css">
	<!-- REVOLUTION SLIDER END -->	
</head>
<body id="bg">

<div class="page-wraper">
<div id="loading-icon-bx"></div>
<!-- Header Top ==== -->
<header class="header rs-nav header-transparent">
	<div class="top-bar">
		<div class="container">
			<div class="row d-flex justify-content-between">
				<div class="topbar-left">
					<ul>
						<li><a href="javascript:;"><i class="fa fa-envelope-o"></i>info@kis.sc.ke</a></li>
					</ul>
				</div>
				<div class="topbar-right">
					<ul>
						<li><a href="#">Enroll Now</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="sticky-header navbar-expand-lg">
		<div class="menu-bar clearfix">
			<div class="container clearfix">
				<!-- Header Logo ==== -->
				<div class="menu-logo">
					<a href="home"><img src="assets/images/logo.png" alt="Kinderworld International School"></a>
				</div>
				<!-- Mobile Nav Button ==== -->
				<button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<!-- Author Nav ==== -->
				<div class="secondary-menu">
					<div class="secondary-inner">
						<ul>
							<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
							<li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
							<!-- Search Button ==== -->
							<li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
						</ul>
					</div>
				</div>
				<!-- Search Box ==== -->
				<div class="nav-search-bar">
					<form action="#">
						<input name="search" value="" type="text" class="form-control" placeholder="Type to search">
						<span><i class="ti-search"></i></span>
					</form>
					<span id="search-remove"><i class="ti-close"></i></span>
				</div>
				<!-- Navigation Menu ==== -->
				<div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
					<div class="menu-logo">
						<a href="home"><img src="assets/images/logo.png" alt=""></a>
					</div>
					<ul class="nav navbar-nav">	
						<li class="active"><a href="home">Home <i class=""></i></a>
						</li>							
						<li><a href="javascript:;">Academics <i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu">
								<li><a href="early-years">Early Years</a>
									
								</li>
								<li><a href="key-stage-one">Key Stage One</a>
								
								</li>
								<li><a href="key-stage-two">Key Stage Two</a>
									
								</li>
								<li><a href="key-stage-three">Key Stage Three</a>
									
								</li>
								<li><a href="key-stage-four">Key Stage Four</a></li>
								
							</ul>
						</li>
						<li class="add-mega-menu"><a href="javascript:;">School Life <i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu add-menu">
								<li class="add-menu-left">
									<h5 class="menu-adv-title">Inside Kinderwold</h5>
									<ul>
										<li><a href="pastoral">Pastoral Care</a></li>
										<li><a href="field-trips">Field Trips</a></li>										
										<li><a href="calendar.pdf" target="_blank">The School Calendar 2022-2023</a></li>											
										<li><a href="bulletin.pdf" target="_blank">Latest Bulletin</a></li>
									</ul>
								</li>
								<li class="add-menu-right">
									<img src="assets/images/adv/building.jpg" alt="Kinderwold International School"/>
								</li>
							</ul>
						</li>
						<li><a href="javascript:;">Co-Carricular <i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu">
								<li><a href="sports">Sports</a></li>
								<li><a href="clubs">Clubs</a></li>									
							</ul>
						</li>
						<li><a href="javascript:;">Media <i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu">
								<li><a href="gallery">Our Gallery</a></li>									
							</ul>
						</li>	
						<li class="nav-dashboard"><a href="careers">Careers <i class="fa fa-chevron-down"></i></a></li>						
						<li class="nav-dashboard"><a href="contact">Contact Us <i class="fa fa-chevron-down"></i></a></li>
					</ul>
					<div class="nav-social-link">
						<a href="javascript:;"><i class="fa fa-facebook"></i></a>
						<a href="javascript:;"><i class="fa fa-google-plus"></i></a>
						<a href="javascript:;"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<!-- Navigation Menu END ==== -->
			</div>
		</div>
	</div>
</header>

    <!-- Header Top END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner " style="background-image:url(assets/images/courses/pic10.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white"></h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Admission Request</li>
				</ul>
			</div>
		</div><br>
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="widget">						
							<p class="m-b20">Our Vision is to provide each child with a safe and supportive environment that promotes responsibility and excellence in learning.
					 </p>	
					 <p class="m-b20">For quick enquiries, Call +254798139954 | +254716337627 or email <a href="mailto:info@kis.sc.ke">info@kis.sc.ke</a></p>													
							<div class="subscribe-form m-b20">								
							</div>
						</div>
					</div>
					
					<div class="col-sm-6">
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">CONTACT OUR ADMISSIONS TEAM</h2>
					
				</div>	
				<form class="contact-bx">
					<form method="post" action="admissions-request.php"> 
					<div class="row placeani">						
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Parent's Full Name</label>
									<input name="pname" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Parent's Phone Number</label>
									<input name="pnumber" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Parent's Email Address</label>
									<input name="pemail" type="email" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Student's Full Name</label>
									<input name="sname" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Student's Previous School</label>
									<input name="school" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Student's Previous Class</label>
									<input name="class" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<p>Student's Date Of Birth</p>
								<div class="input-group">									
									<input name="dob" type="date" required="" class="form-control">
								</div>
							</div>
						</div>
					
						<div class="col-lg-12 m-b30">
							<input type="submit" value="Send" id="contact-submit" class="btn button-md">							
						</div>
					
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
</div><br>

    <!-- Content END-->
   <!-- Footer ==== -->
   <footer>
	<div class="footer-top">
		<div class="pt-exebar">
			<div class="container">
				<div class="d-flex align-items-stretch">
					<div class="pt-logo mr-auto">
						<a href="index"><img src="assets/images/" alt=""/></a>
					</div>
					<div class="pt-social-link">
						<ul class="list-inline m-a0">
							<li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					<div class="pt-btn-join">
						<a href="contact" class="btn ">Get In touch</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
					<div class="widget">
						<h5 class="footer-title">As a school we believe that:</h5>
						<p class="text-capitalize m-b20">All children are talented, unique and gifted in a special way. Let us grow with with and nurture your child in a way that will make him or her an internationally responsible citizen</p>
						<div class="subscribe-form m-b20">
							
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-5 col-md-7 col-sm-12">
					<div class="row">
						<div class="col-4 col-lg-4 col-md-4 col-sm-4">
							<div class="widget footer_widget">
								<h5 class="footer-title">The School</h5>
								<ul>
									<li><a href="home">Home</a></li>									
									<li><a href="contact">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col-4 col-lg-4 col-md-4 col-sm-4">
							<div class="widget footer_widget">
								<h5 class="footer-title">Academics</h5>
								<ul>
									<li><a href="early-years">Early Years</a></li>
									<li><a href="key-stage-one">Key Stage One</a></li>
									<li><a href="key-stage-two">Key Stage Two</a></li>
									<li><a href="key-stage-three">Key Stage Three</a></li>
									<li><a href="key-stage-four">Key Stage Four</a></li>
								</ul>
							</div>
						</div>
						<div class="col-4 col-lg-4 col-md-4 col-sm-4">
							<div class="widget footer_widget">
								<h5 class="footer-title">School Life</h5>
								<ul>
									<li><a href="sports">Sports</a></li>
									<li><a href="clubs">Clubs</a></li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
					<div class="widget widget_gallery gallery-grid-4">
						<h5 class="footer-title">Accreditations</h5>
						<ul class="magnific-image">
							<div class="ttr-post-media"> <img src="assets/images/blog/latest-blog/camb.png" width="200" height="160" alt=""> </div>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="center">
				<p align="center">All Rights Reserved. &copy; 2022 Kinderworld International School.</p>
			</div>
		</div>
	</div>
</footer>
<!-- Footer END ==== -->
    <!-- scroll top button -->
    <button class="back-to-top fa fa-chevron-up" ></button>
</div>
<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>
<script src='../../www.google.com/recaptcha/api.js'></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
<script>
	const constraints = {
		name: {
			presence: { allowEmpty: false }
		},
		email: {
			presence: { allowEmpty: false },
			email: true
		},
		message: {
			presence: { allowEmpty: false }
		}
	};
	const form = document.getElementById('contact-form');
	form.addEventListener('submit', function (event) {
	  const formValues = {
		  name: form.elements.name.value,
		  email: form.elements.email.value,
		  message: form.elements.message.value
	  };
	  const errors = validate(formValues, constraints);
	  if (errors) {
		event.preventDefault();
		const errorMessage = Object
			.values(errors)
			.map(function (fieldValues) { return fieldValues.join(', ')})
			.join("\n");
		alert(errorMessage);
	  }
	}, false);
 </script>
 
</body>

</html>
