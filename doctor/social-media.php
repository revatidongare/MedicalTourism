<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/social-media.php  30 Nov 2019 04:12:36 GMT -->
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
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Social Media</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Social Media</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Profile Sidebar -->
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="../assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Dr. Darren Elder</h3>
											
											<div class="patient-details">
												<h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="doctor-dashboard.php">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="appointments.php">
													<i class="fas fa-calendar-check"></i>
													<span>Appointments</span>
												</a>
											</li>
											<li>
												<a href="my-patients.php">
													<i class="fas fa-user-injured"></i>
													<span>My Patients</span>
												</a>
											</li>
											<li>
												<a href="schedule-timings.php">
													<i class="fas fa-hourglass-start"></i>
													<span>Schedule Timings</span>
												</a>
											</li>
											<li>
												<a href="invoices.php">
													<i class="fas fa-file-invoice"></i>
													<span>Invoices</span>
												</a>
											</li>
											<li>
												<a href="reviews.php">
													<i class="fas fa-star"></i>
													<span>Reviews</span>
												</a>
											</li>
											<li>
												<a href="chat-doctor.php">
													<i class="fas fa-comments"></i>
													<span>Message</span>
													<small class="unread-msg">23</small>
												</a>
											</li>
											<li>
												<a href="doctor-profile-settings.php">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li class="active">
												<a href="social-media.php">
													<i class="fas fa-share-alt"></i>
													<span>Social Media</span>
												</a>
											</li>
											<li>
												<a href="doctor-change-password.php">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="index-2.php">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
							<!-- /Profile Sidebar -->
							
						</div>
						
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">
								
									<!-- Social Form -->
									<form>                                                                                           
										<div class="row">
											<div class="col-md-12 col-lg-8">
												<div class="form-group">
													<label>Facebook URL</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-lg-8">
												<div class="form-group">
													<label>Twitter URL</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-lg-8">
												<div class="form-group">
													<label>Instagram URL</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-lg-8">
												<div class="form-group">
													<label>Pinterest URL</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-lg-8">
												<div class="form-group">
													<label>Linkedin URL</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-lg-8">
												<div class="form-group">
													<label>Youtube URL</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="submit-section">
											<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
										</div>
									</form>
									<!-- /Social Form -->
									
								</div>
							</div>
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

<!-- doccure/social-media.php  30 Nov 2019 04:12:36 GMT -->
</html>