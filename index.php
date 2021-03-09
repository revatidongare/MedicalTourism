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
 							<img src="assets/img/doctors/Medical Tourism photo1.jpeg" alt="Los Angeles" style="width:1600px; height: 500px;">
 						</div>

 						<div class="item">
 							<img src="assets/img/doctors/Medical Tourism Photo3.jpg" alt="Chicago" style="width:1600px; height: 500px;">
 						</div>

 						<div class="item">
 							<img src="assets/img/doctors/med.jpg " alt="New york" style="width:1600px; height: 500px;">
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
 					<div class="carousel-caption" style="background-color: #000;    opacity: 0.8; z-index: auto;">
 						<div class="banner-wrapper">
 							<div class="banner-header text-center">
 								<h1>Search Doctor, Make an Appointment</h1>
 								<p>Discover the best doctors, clinic & hospital the city nearest to you.</p>
 								<div class="search-box">
 									<form action="search.php" method="post">
 										<div class="form-group search-location">
 											<input type="text" name="location" class="form-control" placeholder="Search Location">
 											<span class="form-text">Based on your Location</span>
 										</div>
 										<div class="form-group search-info">
 											<input type="text" name="doctor" class="form-control" placeholder="Search Doctors, Clinics / Hospitals, Specialities / Diseases Etc">
 											<span class="form-text">Ex : Dental or Sugar Check up etc</span>
 										</div>
 										<button type="submit" name="search" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>
 									</form>
 								</div>
 							</div>

 							<!-- Search -->
 								<!-- <div class="search-box">
 									<form action="search.php" method="post">
 										<div class="form-group search-location">
 											<input type="text" name="location" class="form-control" placeholder="Search Location">
 											<span class="form-text">Based on your Location</span>
 										</div>
 										<div class="form-group search-info">
 											<input type="text" name="doctor" class="form-control" placeholder="Search Doctors, Clinics / Hospitals, Specialities / Diseases Etc">
 											<span class="form-text">Ex : Dental or Sugar Check up etc</span>
 										</div>
 										<button type="submit" name="search" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>
 									</form>
 								</div> -->
 								<!-- /Search -->

 							</div>
 						</div>
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

 			<!-- Popular Section -->
 			<section class="section section-doctor">
 				<div class="container-fluid">
 					<div class="row">
						<!-- <div class="col-lg-4">
							<div class="section-header ">
								<h2>Book Our Doctor</h2>
								<p>Lorem Ipsum is simply dummy text </p>
							</div>
							<div class="about-content">
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>
								<p>web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes</p>					
								<a href="javascript:;">Read More..</a>
							</div>
						</div> -->
						<div class="col-lg-12">
							<div class="doctor-slider slider">

								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<iframe id="Nframe" width="100%" height="60%" src="https://www.youtube.com/embed/FR8iMC8z74Q?rel=0&amp;autoplay=1&mute=1" frameborder="0" allowfullscreen >
											<style >
												.ytp-unmute .ytp-popup .ytp-button .ytp-unmute-animated .ytp-unmute-shrink{
													display: block;
												}
											</style>
										</iframe>
										<!-- <a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a> -->
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.php">Ruby Perrin</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
										<!-- <div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<span class="d-inline-block average-rating">(17)</span>
										</div> -->
										<!-- <ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Florida, USA
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> $300 - $1000 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul> -->
										<!-- <div class="row row-sm">
											<div class="col-6">
												<a href="doctor-profile.php" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="booking.php" class="btn book-btn">Book Now</a>
											</div>
										</div> -->
									</div>
								</div>
								<!-- /Doctor Widget -->

								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<iframe id="Nframe" width="100%" height="60%" src="https://www.youtube.com/embed/6i6jqJeHQio?rel=0&amp;autoplay=1&mute=1" frameborder="0" allowfullscreen >
											<style >
												.ytp-unmute .ytp-popup .ytp-button .ytp-unmute-animated .ytp-unmute-shrink{
													display: block;
												}
											</style>
										</iframe>
										<!-- <a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a> -->
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.php">Darren Elder</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
										<!-- <div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(35)</span>
										</div> -->
										<!-- <ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Newyork, USA
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> $50 - $300 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul> -->
										<!-- <div class="row row-sm">
											<div class="col-6">
												<a href="doctor-profile.php" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="booking.php" class="btn book-btn">Book Now</a>
											</div>
										</div> -->
									</div>
								</div>
								<!-- /Doctor Widget -->

								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<iframe id="Nframe" width="100%" height="60%" src="https://www.youtube.com/embed/iwQzuuCRlBw?rel=0&amp;autoplay=1&mute=1" frameborder="0" allowfullscreen>
											<style>
												.ytp-unmute .ytp-popup .ytp-button .ytp-unmute-animated .ytp-unmute-shrink{
													display: block;
												}
											</style>
										</iframe>
										<!-- <a href="javascript:void(0)" class="fav-btn">
										<i class="far fa-bookmark"></i>
									</a> -->
								</div>
								<div class="pro-content">
									<h3 class="title">
										<a href="doctor-profile.php">Deborah Angel</a> 
										<i class="fas fa-check-circle verified"></i>
									</h3>
									<p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
									<!-- <div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="d-inline-block average-rating">(27)</span>
									</div>
									<ul class="available-info">
									<li>
									<i class="fas fa-map-marker-alt"></i> Georgia, USA
									</li>
									<li>
									<i class="far fa-clock"></i> Available on Fri, 22 Mar
									</li>
									<li>
									<i class="far fa-money-bill-alt"></i> $100 - $400 
									<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
									</li>
									</ul>
									<div class="row row-sm">
									<div class="col-6">
									<a href="doctor-profile.php" class="btn view-btn">View Profile</a>
									</div>
									<div class="col-6">
									<a href="booking.php" class="btn book-btn">Book Now</a>
									</div>
								</div> -->
							</div>
						</div>
						<!-- /Doctor Widget -->
						<!-- Doctor Widget -->
						<div class="profile-widget">
							<div class="doc-img">
								<iframe id="Nframe" width="100%" height="60%" src="https://www.youtube.com/embed/JDD1-8xdCs0?rel=0&amp;autoplay=1&mute=1" frameborder="0" allowfullscreen >
									<style>
										.ytp-unmute .ytp-popup .ytp-button .ytp-unmute-animated .ytp-unmute-shrink{
											display: block;
										}
									</style>
								</iframe>
								<!-- <a href="javascript:void(0)" class="fav-btn">
								<i class="far fa-bookmark"></i>
							</a> -->
						</div>
						<div class="pro-content">
							<h3 class="title">
								<a href="doctor-profile.php">Sofia Brient</a> 
								<i class="fas fa-check-circle verified"></i>
							</h3>
							<p class="speciality">MBBS, MS - General Surgery, MCh - Urology</p>
										<!-- <div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(4)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Louisiana, USA
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> $150 - $250 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="doctor-profile.php" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="booking.php" class="btn book-btn">Book Now</a>
											</div>
										</div> -->
									</div>
								</div>
								<!-- /Doctor Widget -->
								
								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<iframe id="Nframe" width="100%" height="60%" src="https://www.youtube.com/embed/FR8iMC8z74Q?rel=0&amp;autoplay=1&mute=1" frameborder="0" allowfullscreen >
											<style >
												.ytp-unmute .ytp-popup .ytp-button .ytp-unmute-animated .ytp-unmute-shrink{
													display: block;
												}
											</style>
										</iframe>
										<!-- <a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a> -->
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.php">Marvin Campbell</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MBBS, MD - Ophthalmology, DNB - Ophthalmology</p>
										<!-- <div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(66)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Michigan, USA
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> $50 - $700 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="doctor-profile.php" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="booking.php" class="btn book-btn">Book Now</a>
											</div>
										</div> -->
									</div>
								</div>
								<!-- /Doctor Widget -->
								
								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<iframe id="Nframe" width="100%" height="60%" src="https://www.youtube.com/embed/6i6jqJeHQio?rel=0&amp;autoplay=1&mute=1" frameborder="0" allowfullscreen >
											<style >
												.ytp-unmute .ytp-popup .ytp-button .ytp-unmute-animated .ytp-unmute-shrink{
													display: block;
												}
											</style>
										</iframe>
										<!-- <a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a> -->
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.php">Katharine Berthold</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
										<!-- <div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(52)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Texas, USA
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> $100 - $500 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="doctor-profile.php" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="booking.php" class="btn book-btn">Book Now</a>
											</div>
										</div> -->
									</div>
								</div>
								<!-- /Doctor Widget -->
								
								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<iframe id="Nframe" width="100%" height="60%" src="https://www.youtube.com/embed/FR8iMC8z74Q?rel=0&amp;autoplay=1&mute=1" frameborder="0" allowfullscreen >
											<style >
												.ytp-unmute .ytp-popup .ytp-button .ytp-unmute-animated .ytp-unmute-shrink{
													display: block;
												}
											</style>
										</iframe>
										<!-- <a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a> -->
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.php">Linda Tobin</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MBBS, MD - General Medicine, DM - Neurology</p>
										<!-- <div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(43)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Kansas, USA
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> $100 - $1000 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="doctor-profile.php" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="booking.php" class="btn book-btn">Book Now</a>
											</div>
										</div> -->
									</div>
								</div>
								<!-- /Doctor Widget -->
								
								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<iframe id="Nframe" width="100%" height="60%" src="https://www.youtube.com/embed/6i6jqJeHQio?rel=0&amp;autoplay=1&mute=1" frameborder="0" allowfullscreen >
											<style >
												.ytp-unmute .ytp-popup .ytp-button .ytp-unmute-animated .ytp-unmute-shrink{
													display: block;
												}
											</style>
										</iframe>
										<!-- <a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a> -->
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.php">Paul Richard</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MBBS, MD - Dermatology , Venereology & Lepros</p>
										<!-- <div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(49)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> California, USA
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> $100 - $400 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="doctor-profile.php" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="booking.php" class="btn book-btn">Book Now</a>
											</div>
										</div> -->
									</div>
								</div>
								
								<!-- Doctor Widget -->
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Popular Section -->

			<!-- Clinic and Specialities -->
			<section class="section section-specialities">
				<div class="container-fluid">
					<div class="section-header text-center">
						<h2>Clinic and Specialities</h2>
						<!-- <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
					</div>
					<div class="row justify-content-center">
						<div class="col-md-9">
							<!-- Slider -->
							<div class="specialities-slider slider">

								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/specialities-01.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Urology</p>
								</div>	
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/specialities-02.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Neurology</p>	
								</div>							
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/specialities-03.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p>Orthopedic</p>	
								</div>							
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/specialities-04.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p>Cardiologist</p>	
								</div>							
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p>Dentist</p>
								</div>							
								<!-- /Slider Item -->
								
							</div>
							<!-- /Slider -->
							
						</div>
					</div>
				</div>   
			</section>	 
			<!-- Clinic and Specialities -->

			<!-- Popular Section -->
			<section class="section section-doctor">
				<div class="container-fluid">
					<div class="row">
						<!-- <div class="col-lg-4">
							<div class="section-header ">
								<h2>Book Our Doctor</h2>
								
							</div>
							<div class="about-content">
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>
								<p>web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes</p>					
								<a href="javascript:;">Read More..</a>
							</div>
						</div> -->
						<div class="col-lg-12">
							<div class="section-header text-center">
								<h2> Our Doctors</h2>
								
							</div>
							<div class="doctor-slider slider">

								<?php $query = "SELECT * FROM `doctor` where `active` = 1 ";
								include 'config.php';
								$stmt=$conn->prepare($query);
								$stmt->execute();
								$result=$stmt->fetchAll();
								$conn=null;
								$id=0 ;
								foreach($result as $doctor){
									?>
									<!-- Doctor Widget -->
									<div class="profile-widget">
										<div class="doc-img">
											<a href="doctor-profile.php">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/<?php echo $doctor['image']?>">
											</a>
										<!-- <a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a> -->
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.php"><?php echo $doctor['name']?></a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality"><?php echo $doctor['qualification']?> - <?php echo $doctor['specialities']?></p>
										<!-- <div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<span class="d-inline-block average-rating">(17)</span>
										</div> -->
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Mumbai,India
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> Rs.300 - Rs.1000 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<?php                 
												if(isset($_SESSION['id'])){?>
													<a href="patients/doctor-profile.php" class="btn view-btn">View Profile</a>
												<?php }else{?>
													<a href="login.php" class="btn view-btn">View Profile</a>
												<?php }?>
											</div>
											<div class="col-6">
												<?php                 
												if(isset($_SESSION['id'])){?>
												<a href="booking.php" class="btn book-btn">Book Now</a>
												<?php } else{?>
													<a href="login.php" class="btn book-btn">Book Now</a>
												<?php }?>
											</div>
										</div>
									</div>
								</div>
								<!-- /Doctor Widget -->
							<?php }?>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Popular Section -->

		<!-- Availabe Features -->
		<section class="section section-features">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-5 features-img">
						<img src="assets/img/features/feature.png" class="img-fluid" alt="Feature">
					</div>
					<div class="col-md-7">
						<div class="section-header">	
							<h2 class="mt-2">Available Features in Our Clinic</h2>
							<!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p> -->
						</div>	
						<div class="features-slider slider">
							<!-- Slider Item -->
							<div class="feature-item text-center">
								<img src="assets/img/features/feature-01.jpg" class="img-fluid" alt="Feature">
								<p>Patient Ward</p>
							</div>
							<!-- /Slider Item -->

							<!-- Slider Item -->
							<div class="feature-item text-center">
								<img src="assets/img/features/feature-02.jpg" class="img-fluid" alt="Feature">
								<p>Test Room</p>
							</div>
							<!-- /Slider Item -->

							<!-- Slider Item -->
							<div class="feature-item text-center">
								<img src="assets/img/features/feature-03.jpg" class="img-fluid" alt="Feature">
								<p>ICU</p>
							</div>
							<!-- /Slider Item -->

							<!-- Slider Item -->
							<div class="feature-item text-center">
								<img src="assets/img/features/feature-04.jpg" class="img-fluid" alt="Feature">
								<p>Laboratory</p>
							</div>
							<!-- /Slider Item -->

							<!-- Slider Item -->
							<div class="feature-item text-center">
								<img src="assets/img/features/feature-05.jpg" class="img-fluid" alt="Feature">
								<p>Operation</p>
							</div>
							<!-- /Slider Item -->

							<!-- Slider Item -->
							<div class="feature-item text-center">
								<img src="assets/img/features/feature-06.jpg" class="img-fluid" alt="Feature">
								<p>Medical</p>
							</div>
							<!-- /Slider Item -->
						</div>
					</div>
				</div>
			</div>
		</section>		
		<!-- Availabe Features -->
		<table>
			<tr>
				<th>Date</th>
				<th>Day</th>
				<th>Description</th>
				
			</tr>
			<tr>
				<td>24th January</td>
				<td>National Girl Child Day</td>
				<td>To promote awareness about the rights of a girl child.</td>
			</tr>
			<tr>
				<td>30 Jan or Sunday closest to it.</td>
				<td>World Leprosy Eradication Day</td>
				<td>World Leprosy Day raises awareness of a disease that many people believe to be extinct.</td>
			</tr>
			<tr>
				<td>4th February</td>
				<td>World Cancer Day</td>
				<td>World Cancer Day is an international day marked on February 4 to raise awareness of cancer and to encourage its prevention, detection, and treatment.</td>
			</tr>
			<tr>
				<td>12th February</td>
				<td>Sexual & Reproductive Health Awareness Day</td>
				<td>Sexual and Reproductive Health Awareness Day is organized to raise awareness about sexual and reproductive health (SRH).</td>
			</tr>
			<tr>
				<td>2nd Thusday in March</td>
				<td>World Kidney Day</td>
				<td>Thursday of March. It is the global awareness campaign to raise awareness of the importance of kidneys to our health and to reduce the impact of kidney disease and its associated health problems worldwide.</td>
			</tr>
			<tr>
				<td>20th March</td>
				<td>World Oral Health Day</td>
				<td>On the 20 March every year, we ask the world to unite to help reduce the burden of oral diseases, which affect individuals, health systems and economies everywhere.</td>
			</tr>
			<tr>
				<td>21st March</td>
				<td>World Down Syndrome Day</td>
				<td>World Down Syndrome Day (WDSD), 21 March, is a global awareness day which has been officially observed by the United Nations since 2012.</td>
			</tr>
			<tr>
				<td>24th March</td>
				<td>World TB Day</td>
				<td>World TB Day is a day to educate the public about the impact of TB around the world.</td>
			</tr>
			<tr>
				<td>26th March</td>
				<td>World Epilepsy Day</td>
				<td>International Epilepsy Day is a special event which promotes awareness of epilepsy in more than 130 countries each year.</td>
			</tr>
			<tr>
				<td>2nd April</td>
				<td>World Autism Day</td>
				<td>World Autism Awareness Day is an internationally recognized day on 2 April every year, encouraging Member States of the United Nations to take measures to raise awareness about people with autistic spectrum disorders including autism and Asperger syndrome throughout the world.</td>
			</tr>
			<tr>
				<td>7th April</td>
				<td>World Health Day</td>
				<td>The World Health Day is a global health awareness day celebrated every year on 7 April, under the sponsorship of the World Health Organization (WHO), as well as other related organizations.</td>
			</tr>
			<tr>
				<td>11th April</td>
				<td>World Parkinson's Day</td>
				<td>The International Parkinson and Movement Disorder Society (MDS) advocates for Parkinson’s disease throughout the world, while at the same time promoting public awareness of the MDS mission to disseminate knowledge and promote research in order to favorably affect the care of patients.</td>
			</tr>
			<tr>
				<td>11th April</td>
				<td>National Safe Motherhood Day</td>
				<td>National Safe Motherhood Day is an initiative of the White Ribbon Alliance India (WRAI), to enforce that women must have the availability and adequate access to care during pregnancy childbirth and postnatal services.</td>
			</tr>
			<tr>
				<td>17th April</td>
				<td>World Haemophilia Day</td>
				<td>Every year on 17 April World Haemophilia Day is recognised worldwide to increase awareness of haemophilia, von Willebrand disease and other inherited bleeding disorders. </td>
			</tr>
			<tr>
				<td>19th April</td>
				<td>World Liver Day</td>
				<td>World liver day is observed on every 19 April, to spread awareness about liver related disease. </td>
			</tr>
			<tr>
				<td>25th April</td>
				<td>World Malaria Day</td>
				<td>World Malaria Day, which takes place on 25 April each year, is an internationally recognized day, highlighting the global efforts to control malaria and celebrating the gains that have been made.</td>
			</tr>
			<tr>
				<td>Last Week of April</td>
				<td>World Immunization Week</td>
				<td>World Immunization Week – celebrated in the last week of April (24 to 30 April) – aims to promote the use of vaccines to protect people of all ages against disease.</td>
			</tr>
			<tr>
				<td>1st Tuesday of May</td>
				<td>World Asthma Day</td>
				<td>World Asthma Day is an annual event organized by the Global Initiative for Asthma (GINA) to improve asthma awareness and care around the world. </td>
			</tr>
			<tr>
				<td>8th May</td>
				<td>World Asthma Day</td>
				<td>World Asthma Day is an annual event organized by the Global Initiative for Asthma (GINA) to improve asthma awareness and care around the world. </td>
			</tr>
			<tr>
				<td>8th May</td>
				<td>World Asthma Day</td>
				<td>World Asthma Day is an annual event organized by the Global Initiative for Asthma (GINA) to improve asthma awareness and care around the world. </td>
			</tr>
			<tr>
				<td>8th May</td>
				<td>World Asthma Day</td>
				<td>World Asthma Day is an annual event organized by the Global Initiative for Asthma (GINA) to improve asthma awareness and care around the world. </td>
			</tr>
			<tr>
				<td>14th June</td>
				<td>World Blood Donation Day</td>
				<td>Every year countries around the world celebrate World Blood Donor Day (WBDD). The event serves to raise awareness of the need for safe blood and blood products and to thank voluntary, unpaid blood donors for their life-saving gifts of blood.</td>
			</tr>
			<tr>
				<td>19th June</td>
				<td>World Sickle Cell Day</td>
				<td>June 19th was officially designated as World Sickle Cell Awareness Day. The international awareness day is observed annually with the goal to increase public knowledge and an understanding of sickle cell disease, and the challenges experienced by patients and their families and caregivers.</td>
			</tr>
			<tr>
				<td>Entire June</td>
				<td>Anti Malaria Month</td>
				<td>Anti Malaria Month is observed every year in the month of June throughout the country. It is observed prior to the onset of monsoon and transmission season with the objective to enhance the level of awareness and encourage community participation through mass media campaigns and inter-personal communication (IPC).</td>
			</tr>
			<tr>
				<td>Entire June</td>
				<td>Anti Malaria Month</td>
				<td>Anti Malaria Month is observed every year in the month of June throughout the country. It is observed prior to the onset of monsoon and transmission season with the objective to enhance the level of awareness and encourage community participation through mass media campaigns and inter-personal communication (IPC).</td>
			</tr>
			<tr>
				<td>1st July</td>
				<td>Doctor's Day</td>
				<td>National Doctors' Day is a day celebrated to recognize the contributions of physicians to individual lives and com
				unities.</td>
			</tr>
			<tr>
				<td>1st July</td>
				<td>Doctor's Day</td>
				<td>National Doctors' Day is a day celebrated to recognize the contributions of physicians to individual lives and communities.</td>
			</tr>
			<tr>
				<td>11th July</td>
				<td>World Population Day</td>
				<td>World Population Day is an annual event, observed on July 11 every year, which seeks to raise awareness of global population issues.</td>
			</tr>
			<tr>
				<td>28th July</td>
				<td>World Hepatitis Day</td>
				<td>World Hepatitis Day, 28 July, is an opportunity to step up national and international efforts on hepatitis, encourage actions and engagement by individuals, partners and the public and highlight the need for a greater global response as outlined in the WHO's Global hepatitis report of 2017.</td>
			</tr>
			<tr>
				<td>29th July</td>
				<td>ORS Day</td>
				<td>ORS day is observed on July 29 every year to create awareness about the importance of Oral Rehydration Salts, in saving millions of young lives.</td>
			</tr>
			<tr>
				<td>1 to 7 August</td>
				<td>World Breast Feeding Week</td>
				<td>World Breastfeeding Week (WBW) is an annual celebration which is held every year from 1 to 7 August in more than 120 countries. According to the 26 August data of WBW website[1], 540 events have been held worldwide by more than 79 countries with 488 organizations and 406,620 participants for the World Breastfeeding Week 2010.</td>
			</tr>
			<tr>
				<td>21st September</td>
				<td>World Alzheimer's Day</td>
				<td>World Alzheimer's Day is observed on 21st September every year to raise the awareness about Alzheimer's and Dementia.</td>
			</tr>
			<tr>
				<td>29th September</td>
				<td>World Heart Day</td>
				<td>Cardiovascular diseases (CVDs) take the lives of 17.9 million people every year, 31% of all global deaths. </td>
			</tr>







		</table>
		<br>
		<style>
			table {
				font-family: arial, sans-serif;
				border-collapse: collapse;
				width: 80%;
			}
			td,th {
				border: 1px solid #dddddd;
				text-align: left;
				padding: 8px;
			}
		</style>

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