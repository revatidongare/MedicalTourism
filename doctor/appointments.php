<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/appointments.php  30 Nov 2019 04:12:09 GMT -->
<?php include 'includes/head.php';?>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<?php include 'includes/navbar.php'?>
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Appointments</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Appointments</h2>
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
							<?php $status = 2; include 'includes/sidebar.php'?>
							<!-- /Profile Sidebar -->
							
						</div>
						
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="appointments">
							
							<?php 
							$query = "SELECT * FROM `appointment` where `doctor_id` = $id";
                             include '../config.php';
                             $stmt=$conn->prepare($query);
                             $stmt->execute();
                             $result=$stmt->fetchAll();
                             $conn=null;
                                  
                             foreach($result as $appointment){
                             	$pid = $appointment['patient_id'];

                             $dquery = "SELECT * FROM `patient_master` where `id` = $pid";
                             include '../config.php';
                             $dstmt=$conn->prepare($dquery);
                             $dstmt->execute();
                             $dresult=$dstmt->fetch();
                             $conn=null;

																?>
								<!-- Appointment List -->
								<div class="appointment-list">
									<div class="profile-info-widget">
										<a href="patient-profile.php" class="booking-doc-img">
											<img src="../assets/img/patients/<?php echo $dresult['image'];?>" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="patient-profile.php"><?php echo $dresult['name'];?></a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> <?php echo $appointment['appointmentdate'];?> , 10.00 AM</h5>
												<h5><i class="fas fa-map-marker-alt"></i><?php echo $dresult['city'];?>, <?php echo $dresult['state'];?></h5>
												<h5><i class="fas fa-envelope"></i> <?php echo $dresult['email'];?></h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> <?php echo $dresult['contact'];?></h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div>
							<?php }?>
								<!-- /Appointment List -->
							
								<!-- Appointment List -->
								<!-- <div class="appointment-list">
									<div class="profile-info-widget">
										<a href="patient-profile.php" class="booking-doc-img">
											<img src="../assets/img/patients/patient1.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="patient-profile.php">Charlene Reed </a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 12 Nov 2019, 5.00 PM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> North Carolina, United States</h5>
												<h5><i class="fas fa-envelope"></i> charlenereed@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 828 632 9170</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div> -->
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<!-- <div class="appointment-list">
									<div class="profile-info-widget">
										<a href="patient-profile.php" class="booking-doc-img">
											<img src="../assets/img/patients/patient2.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="patient-profile.php">Travis Trimble</a></h3>
											
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 11 Nov 2019, 8.00 PM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> Maine, United States</h5>
												<h5><i class="fas fa-envelope"></i> travistrimble@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 207 729 9974</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div> -->
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<!-- <div class="appointment-list">
									<div class="profile-info-widget">
										<a href="patient-profile.php" class="booking-doc-img">
											<img src="../assets/img/patients/patient3.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="patient-profile.php">Carl Kelly</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 9 Nov 2019, 9.00 AM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> Newyork, United States</h5>
												<h5><i class="fas fa-envelope"></i> carlkelly@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 260 724 7769</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div> -->
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<!-- <div class="appointment-list">
									<div class="profile-info-widget">
										<a href="patient-profile.php" class="booking-doc-img">
											<img src="../assets/img/patients/patient4.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="patient-profile.php">Michelle Fairfax</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 9 Nov 2019, 1.00 PM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> Indiana, United States</h5>
												<h5><i class="fas fa-envelope"></i> michellefairfax@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 504 368 6874</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div> -->
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<!-- <div class="appointment-list">
									<div class="profile-info-widget">
										<a href="patient-profile.php" class="booking-doc-img">
											<img src="../assets/img/patients/patient5.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="patient-profile.php">Gina Moore</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 8 Nov 2019, 3.00 PM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> Florida, United States</h5>
												<h5><i class="fas fa-envelope"></i> ginamoore@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 954 820 7887</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div> -->
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<!-- <div class="appointment-list">
									<div class="profile-info-widget">
										<a href="patient-profile.php" class="booking-doc-img">
											<img src="../assets/img/patients/patient6.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="patient-profile.php">Elsie Gilley</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 6 Nov 2019, 9.00 AM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> Kentucky, United States</h5>
												<h5><i class="fas fa-envelope"></i> elsiegilley@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 315 384 4562</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div> -->
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<!-- <div class="appointment-list">
									<div class="profile-info-widget">
										<a href="patient-profile.php" class="booking-doc-img">
											<img src="../assets/img/patients/patient7.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="patient-profile.php">Joan Gardner</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 5 Nov 2019, 12.00 PM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> California, United States</h5>
												<h5><i class="fas fa-envelope"></i> joangardner@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 707 2202 603</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div> -->
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<!-- <div class="appointment-list">
									<div class="profile-info-widget">
										<a href="patient-profile.php" class="booking-doc-img">
											<img src="../assets/img/patients/patient8.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="patient-profile.php">Daniel Griffing</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 5 Nov 2019, 7.00 PM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> New Jersey, United States</h5>
												<h5><i class="fas fa-envelope"></i> danielgriffing@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 973 773 9497</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div> -->
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<!-- <div class="appointment-list">
									<div class="profile-info-widget">
										<a href="patient-profile.php" class="booking-doc-img">
											<img src="../assets/img/patients/patient9.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="patient-profile.php">Walter Roberson</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 4 Nov 2019, 10.00 AM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> Florida, United States</h5>
												<h5><i class="fas fa-envelope"></i> walterroberson@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 850 358 4445</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div> -->
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<!-- <div class="appointment-list">
									<div class="profile-info-widget">
										<a href="patient-profile.php" class="booking-doc-img">
											<img src="../assets/img/patients/patient10.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="patient-profile.php">Robert Rhodes</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 4 Nov 2019, 11.00 AM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> California, United States</h5>
												<h5><i class="fas fa-envelope"></i> robertrhodes@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 858 259 5285</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div> -->
								<!-- /Appointment List -->
								
								<!-- Appointment List -->
								<!-- <div class="appointment-list">
									<div class="profile-info-widget">
										<a href="patient-profile.php" class="booking-doc-img">
											<img src="../assets/img/patients/patient11.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="patient-profile.php">Harry Williams</a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 3 Nov 2019, 6.00 PM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> Colorado, United States</h5>
												<h5><i class="fas fa-envelope"></i> harrywilliams@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> +1 303 607 7075</h5>
											</div>
										</div>
									</div>
									<div class="appointment-action">
										<a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
											<i class="far fa-eye"></i> View
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
											<i class="fas fa-check"></i> Accept
										</a>
										<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
											<i class="fas fa-times"></i> Cancel
										</a>
									</div>
								</div> -->
								<!-- /Appointment List -->
								
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
		
		<!-- Appointment Details Modal -->
		<div class="modal fade custom-modal" id="appt_details">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Appointment Details</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<ul class="info-details">
							<li>
								<div class="details-header">
									<div class="row">
										<div class="col-md-6">
											<span class="title">#APT0001</span>
											<span class="text">21 Oct 2019 10:00 AM</span>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<button type="button" class="btn bg-success-light btn-sm" id="topup_status">Completed</button>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<span class="title">Status:</span>
								<span class="text">Completed</span>
							</li>
							<li>
								<span class="title">Confirm Date:</span>
								<span class="text">29 Jun 2019</span>
							</li>
							<li>
								<span class="title">Paid Amount</span>
								<span class="text">$450</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /Appointment Details Modal -->
	  
		<!-- jQuery -->
		<?php include 'includes/script.php';?>
		
	</body>

<!-- doccure/appointments.php  30 Nov 2019 04:12:09 GMT -->
</html>