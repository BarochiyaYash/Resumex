<?php
session_start();
if ($_SESSION['u_name'] == null) {
	header('location:login.php');
}
if ($_SESSION['u_name']) {

	error_reporting(0);
	?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">

	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Book</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
			CSS
			============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/main.css">
	</head>

	<body>

		<?php include('header.php') ?>

		<!-- start banner Area -->
		<div class="rowxx">
			<div class="active-tstimonial-caruselxx">
				<div>
					<section class="banner-area" id="home">
						<div class="container">
							<div class="row fullscreen d-flex align-items-center justify-content-start">
								<div class="banner-content col-lg-7">

									<h1 class="text-uppercase">
										Free Resume Generator
									</h1>
									<p class="text-white pt-20 pb-20">
										Make professional resume in few minutes.
									</p>

								</div>
								<div class="col-lg-5 banner-right">
									<img class="img-fluid" src="img/1m.png" alt="">
								</div>
							</div>
						</div>
					</section>
					<!-- End banner Area -->
				</div>


				<div>
					<section class="banner-area1" id="home">
						<div class="container">
							<div class="row fullscreen d-flex align-items-center justify-content-start">
								<div class="banner-content col-lg-7">
									<h1 class="text-uppercase">
										Find out best resumes
									</h1>
									<br>
									<a href="template.php" class="primary-btn text-uppercase">Find out Resume Templates</a>
								</div>
								<div class="col-lg-5 banner-right">
									<img class="img-fluid" src="img/header-img.png" alt="">
								</div>
							</div>
						</div>
					</section>
					<!-- End banner Area -->
				</div>

			</div>
		</div>





		<section class="section-gap info-area" id="about">
			<div class="container">
				<div class="container">
					<div class="single-info row mt-40 align-items-center">
						<div class="col-lg-6 col-md-12 text-center no-padding info-left">
							<div class="info-thumb">
								<img src="img/rmi.jpg" class="img-fluid info-img" alt="">
							</div>
						</div>
						<div class="col-lg-6 col-md-12 no-padding info-rigth">
							<div class="info-content">
								<h2 class="pb-30">What is a Resume? Definition and Purpose</h2>
								<p>
									A strong resume communicates your qualifications and sets you up for career success.
									Here’s a full breakdown of what a resume is (with a concise definition), why resumes are
									important for job seekers, and what makes each type of resume unique.
								</p>
								<br>

								<img src="img/signature.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Start fact Area -->
		<section class="fact-area relative section-gap" id="fact">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-40 col-lg-8">
						<div class="title text-center">
							<h1 class="mb-10">Some Features that Made us Unique</h1>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End fact Area -->
		<!-- Start counter Area -->
		<section class="counter-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="single-counter">
							<h1 class="counter">2536</h1>
							<p>Happy Clients</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-counter">
							<h1 class="counter">6784</h1>
							<p>Total Projects</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-counter">
							<h1 class="counter">1059</h1>
							<p>Cups Coffee</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-counter">
							<h1 class="counter">12239</h1>
							<p>Tickets Submitted</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end counter Area -->
		<br>
		<br>
		<br>

		<!-- Start fact Area -->
		<section class="fact-area relative section-gap" id="fact">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-20 col-lg-8">
						<div class="title text-center">
							<h1 class="mb-10">Let's made your Resume</h1>
							<br>
							<a href="template.php" class="primary-btn text-uppercase">Free Template</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End fact Area -->


		<!-- Start price Area -->
		<section class="price-area section-gap" id="price">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-60 col-lg-8">
						<div class="title text-center">
							<h1 class="mb-10">Purchase whatever you want</h1>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="single-price no-padding">
							<div class="price-top">
								<h4>Free Plans</h4>
							</div>

							<div class="price-bottom">
								<div class="col-md-12 mt-sm-30">
									<h3 class="mb-20">Unordered List</h3>
									<div class="">
										<ul class="unordered-list">
											<li>Fta Keys</li>
											<li>For Women Only Your Computer Usage</li>
											<li>Facts Why Inkjet Printing Is Very Appealing
												<ul>
													<li>Addiction When Gambling Becomes
														<ul>
															<li>Protective Preventative Maintenance</li>
														</ul>
													</li>
												</ul>
											</li>
											<li>Dealing With Technical Support 10 Useful Tips</li>
											<li>Make Myspace Your Best Designed Space</li>
											<li>Cleaning And Organizing Your Computer</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="price-bottom">
								<h1><span>$</span>Free</h1>
								<a href="#" class="primary-btn header-btn">Purchase Now</a>
							</div>
						</div>
					</div>



					<div class="col-lg-6">
						<div class="single-price no-padding">
							<div class="price-top">
								<h4>Free Plans</h4>
							</div>

							<div class="price-bottom">
								<div class="col-md-12 mt-sm-30">
									<h3 class="mb-20">Unordered List</h3>
									<div class="">
										<ul class="unordered-list">
											<li>Fta Keys</li>
											<li>For Women Only Your Computer Usage</li>
											<li>Facts Why Inkjet Printing Is Very Appealing
												<ul>
													<li>Addiction When Gambling Becomes
														<ul>
															<li>Protective Preventative Maintenance</li>
														</ul>
													</li>
												</ul>
											</li>
											<li>Dealing With Technical Support 10 Useful Tips</li>
											<li>Make Myspace Your Best Designed Space</li>
											<li>Cleaning And Organizing Your Computer</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="price-bottom">
								<h1><span>$</span>Free</h1>
								<a href="#" class="primary-btn header-btn">Purchase Now</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End price Area -->
		<!-- Start price Area -->
		<section class="price-area section-gap" id="price">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-60 col-lg-8">
						<div class="title text-center">
							<h1 class="mb-10">Purchase whatever you want</h1>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="single-price no-padding">
							<div class="price-top">
								<h4>PDF</h4>
							</div>
							<p>
								Who are in extremely love with <br>
								eco friendly system.
							</p>
							<div class="price-bottom">
								<h1><span>$</span> 79.99</h1>
								<a href="#" class="primary-btn header-btn">Purchase Now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-price no-padding">
							<div class="price-top">
								<h4>E-Book</h4>
							</div>
							<p>
								Who are in extremely love with <br>
								eco friendly system.
							</p>
							<div class="price-bottom">
								<h1><span>$</span> 99.99</h1>
								<a href="#" class="primary-btn header-btn">Purchase Now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-price no-padding">
							<div class="price-top">
								<h4>Print Copy</h4>
							</div>
							<p>
								Who are in extremely love with <br>
								eco friendly system.
							</p>
							<div class="price-bottom">
								<h1><span>$</span> 59.99</h1>
								<a href="#" class="primary-btn">Purchase Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End price Area -->





		<?php include('footer.php') ?>

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
			integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script type="text/javascript"
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/easing.min.js"></script>
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/parallax.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/mail-script.js"></script>
		<script src="js/main.js"></script>
	</body>

	</html>
	<?php
}
?>