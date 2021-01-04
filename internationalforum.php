
		
<!DOCTYPE html> 
 <html lang="en">

 <!-- doccure/  30 Nov 2019 04:11:34 GMT -->
 <?php include 'includes/head.php';?>
 <head>
 	<!-- <meta charset="utf-8"> -->
 	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
 <body>

 	<!-- Main Wrapper -->
 	<div class="main-wrapper">

 		<!-- Header -->
 		<?php include 'includes/navbar.php';?>
 		<!-- /Header -->

 		<!-- Home Banner -->
 		<section class="section section-search">
 			<div class="container-fluid">
 				<div id="myCarousel" class="carousel slide" data-ride="carousel">
 					<!-- Indicators -->
 					<ol class="carousel-indicators">
 						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
 						<li data-target="#myCarousel" data-slide-to="1"></li>
 						<li data-target="#myCarousel" data-slide-to="2"></li>
 					</ol>

 					<!-- Wrapper for slides -->
 					<div class="carousel-inner">
 						<div class="item active">
 							<img src="assets/img/internationalforum/Medical Tourism Photo7 .jpg" alt="Los Angeles" style="width:1600px; height: 600px;">
 						</div>

 						<div class="item">
 							<img src="assets/img/internationalforum/Medical Tourism Photo5 .jpg" alt="Chicago" style="width:1600px; height: 600px;">
 						</div>

 						<div class="item">
 							<img src="assets/img//internationalforum/Medical Tourism 15 (1).jpg" alt="New york" style="width:1600px; height: 600px;">
 						</div>
 					</div>

 					<style>
 						@media only screen (max-width: 768px){
 							.carousel-caption {
 								position: initial;
 								right: 15%;
 								bottom: 20px;
 								left: 15%;
 								z-index: 10;
 								padding-top: 20px;
 								padding-bottom: 20px;
 								color: #fff;
 								text-align: center;
 								text-shadow: 0 1px 2px rgba(0,0,0,.6);
 							}
 						}
 						</style>
 					<!--<div class="carousel-caption">
 							<div class="banner-wrapper">
 								<div class="banner-header text-center">
 									<h1>Search Doctor, Make an Appointment</h1>
 									<p>Discover the best doctors, clinic & hospital the city nearest to you.</p>
 								</div>

 								<!-- Search -->
 								<!--<div class="search-box">
 									<form action="back.php">
 										<div class="form-group search-location">
 											<input type="text" class="form-control" placeholder="Search Location">
 											<span class="form-text">Based on your Location</span>
 										</div>
 										<div class="form-group search-info">
 											<input type="text" class="form-control" placeholder="Search Doctors, Clinics, Hospitals, Diseases Etc">
 											<span class="form-text">Ex : Dental or Sugar Check up etc</span>
 										</div>
 										<button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>
 									</form>
 								</div>
 								<!-- /Search -->

 							<!--</div>
 						</div>-->
 						<!-- Left and right controls -->
 						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
 							<span class="glyphicon glyphicon-chevron-left"></span>
 							<span class="sr-only">Previous</span>
 						</a>
 						<a class="right carousel-control" href="#myCarousel" data-slide="next">
 							<span class="glyphicon glyphicon-chevron-right"></span>
 							<span class="sr-only">Next</span>
 						</a>


 					</div>
 				</div>

 			</section>
 			<!-- /Home Banner -->





			<!-- Footer -->
			<?php include 'includes/footer.php';?>
			<!-- /Footer -->

		</div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
		
		<?php include 'includes/script.php';?>
	</body>

	<!-- doccure/  30 Nov 2019 04:11:53 GMT -->
	</html>