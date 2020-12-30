<!DOCTYPE html> 
<html lang="en">

<!-- doccure/search.php  30 Nov 2019 04:12:16 GMT -->
<?php include 'includes/head.php';?>
<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">
		
		<!-- Header -->
		<?php include 'includes/navbar.php';?>
		<!-- /Header -->

		<!-- Breadcrumb -->
		<div class="breadcrumb-bar">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-md-8 col-12">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Search</li>
							</ol>
						</nav>
						<h2 class="breadcrumb-title">2245 matches found for : Dentist In Bangalore</h2>
					</div>
					<!-- <div class="col-md-4 col-12 d-md-block d-none">
						<div class="sort-by">
							<span class="sort-title">Sort by</span>
							<span class="sortby-fliter">
								<select class="select">
									<option>Select</option>
									<option class="sorting">Rating</option>
									<option class="sorting">Popular</option>
									<option class="sorting">Latest</option>
									<option class="sorting">Free</option>
								</select>
							</span>
						</div>
					</div> -->
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->

		<!-- Page Content -->
		<div class="content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-lg-12 col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
						
						<!-- Search Filter -->
							<!-- <div class="card search-filter">
								<div class="card-header">
									<h4 class="card-title mb-0">Search Filter</h4>
								</div>
								<div class="card-body">
								<div class="filter-widget">
									<div class="cal-icon">
										<input type="text" class="form-control datetimepicker" placeholder="Select Date">
									</div>			
								</div>
								<div class="filter-widget">
									<h4>Gender</h4>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="gender_type" checked>
											<span class="checkmark"></span> Male Doctor
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="gender_type">
											<span class="checkmark"></span> Female Doctor
										</label>
									</div>
								</div>
								<div class="filter-widget">
									<h4>Select Specialist</h4>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist" checked>
											<span class="checkmark"></span> Urology
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist" checked>
											<span class="checkmark"></span> Neurology
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Dentist
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Orthopedic
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Cardiologist
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Cardiologist
										</label>
									</div>
								</div>
									<div class="btn-search">
										<button type="button" class="btn btn-block">Search</button>
									</div>	
								</div>
							</div> -->
							<!-- /Search Filter -->
							
						</div>
						
						<div class="col-lg-12 col-md-12 col-lg-8 col-xl-9">

							<!-- Doctor Widget -->
							<?php 
							if(isset($_POST['search'])){
								$doctor = $_POST['doctor'];
								$location = $_POST['location'];
								$query = "SELECT * FROM `doctor` WHERE `city` = '$location' OR `name`= '$doctor' OR `hospital` = '$doctor' AND `active` = 1 ";
								include 'config.php';
								$stmt=$conn->prepare($query);
								$stmt->execute();
								$result=$stmt->fetchAll();
								$conn=null;
								$id=0 ;
								foreach($result as $doctor){
									?>
									<div class="card">
										<div class="card-body">
											<div class="doctor-widget">
												<div class="doc-info-left">
													<div class="doctor-img">
														<a href="doctor-profile.php">
															<img src="assets/img/doctors/<?php echo $doctor['image']?>" class="img-fluid" alt="User Image">
														</a>
													</div>
													<div class="doc-info-cont">
														<h4 class="doc-name"><a href="doctor-profile.php"><?php echo $doctor['name']?></a></h4>
														<p class="doc-speciality"><?php echo $doctor['hospital']?> </p>
														<h5 class="doc-department"><?php echo $doctor['qualification']?> - <?php echo $doctor['specialities']?></h5>
														<!-- <div class="rating">
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star"></i>
															<span class="d-inline-block average-rating">(17)</span>
														</div> -->
														<div class="clinic-details">
															<p class="doc-location"><i class="fas fa-map-marker-alt"></i> <?php echo $doctor['address']?></p>
															<!-- <ul class="clinic-gallery">
																<li>
																	<a href="assets/img/features/feature-01.jpg" data-fancybox="gallery">
																		<img src="assets/img/features/feature-01.jpg" alt="Feature">
																	</a>
																</li>
																<li>
																	<a href="assets/img/features/feature-02.jpg" data-fancybox="gallery">
																		<img  src="assets/img/features/feature-02.jpg" alt="Feature">
																	</a>
																</li>
																<li>
																	<a href="assets/img/features/feature-03.jpg" data-fancybox="gallery">
																		<img src="assets/img/features/feature-03.jpg" alt="Feature">
																	</a>
																</li>
																<li>
																	<a href="assets/img/features/feature-04.jpg" data-fancybox="gallery">
																		<img src="assets/img/features/feature-04.jpg" alt="Feature">
																	</a>
																</li>
															</ul> -->
														</div>
														<div class="clinic-services">
															<span>Dental Fillings</span>
															<span> Whitneing</span>
														</div>
													</div>
												</div>
												<div class="doc-info-right">
													<div class="clini-infos">
														<ul>
															<li><i class="far fa-thumbs-up"></i> 98%</li>
															<li><i class="far fa-comment"></i> <?php echo $doctor['experience']?></li>
															<li><i class="fas fa-map-marker-alt"></i> <?php echo $doctor['city']?></li>
															<li><i class="far fa-money-bill-alt"></i> <?php echo $doctor['fees']?> <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i> </li>
														</ul>
													</div>
													<div class="clinic-booking">
														<!-- <a class="view-pro-btn" href="doctor-profile.php">View Profile</a> -->
														<a class="apt-btn" href="booking.php">Book Appointment</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php } }?>
								<!-- /Doctor Widget -->


							</div>
						</div>

					</div>

				</div>		
				<!-- /Page Content -->

				<!-- Footer -->
				<?php include 'includes/footer.php';?>
				<!-- /Footer -->

			</div>
			<!-- /Main Wrapper -->

			<!-- jQuery -->
			<?php include 'includes/script.php';?>

		</body>

		<!-- doccure/search.php  30 Nov 2019 04:12:16 GMT -->
		</html>