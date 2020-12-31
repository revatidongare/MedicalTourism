<?php 
include 'session.php'; 
?>
<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index.php" class="navbar-brand logo">
							<img src="../assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper" style="z-index: 9;">
						<div class="menu-header">
							<a href="../index.php" class="menu-logo">
								<img src="../assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="active">
								<a href="index.php" style="font-family: Poppins;">Home</a>
								<!-- <a href="../index.php" style="font-family: Poppins,sans-serif;">Home</a> -->
							</li>
							<li class="active">
								<a href="medicaltourism.php" style="font-family: Poppins;">Medical Tourism</a>
							</li>
							<li class="active">
								<a href="ayurvedic.php" style="font-family: Poppins;">Ayurvedic & Nachrotheraphy</a>
							</li> 
							
							<li class="active">
								<a href="internationalforum.php" style="font-family: Poppins;">International Forum</a>
							</li> 
							<li class="active">
								<a href="domestictourism.php" style="font-family: Poppins;"> News & Events</a>
							</li>  

							<!-- <li class="has-submenu">
								<a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="doctor-dashboard.php">Doctor Dashboard</a></li>
									<li><a href="appointments.php">Appointments</a></li>
									<li><a href="schedule-timings.php">Schedule Timing</a></li>
									<li><a href="my-patients.php">Patients List</a></li>
									<li><a href="patient-profile.php">Patients Profile</a></li>
									<li><a href="chat-doctor.php">Chat</a></li>
									<li><a href="invoices.php">Invoices</a></li>
									<li><a href="doctor-profile-settings.php">Profile Settings</a></li>
									<li><a href="reviews.php">Reviews</a></li>
									<li><a href="doctor-register.php">Doctor Register</a></li>
								</ul>
							</li> -->	
							<!-- <li class="has-submenu">
								<a href="#">Patients <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="search.php">Search Doctor</a></li>
									<li><a href="doctor-profile.php">Doctor Profile</a></li>
									<li><a href="booking.php">Booking</a></li>
									<li><a href="checkout.php">Checkout</a></li>
									<li><a href="booking-success.php">Booking Success</a></li>
									<li><a href="patient-dashboard.php">Patient Dashboard</a></li>
									<li><a href="favourites.php">Favourites</a></li>
									<li><a href="chat.php">Chat</a></li>
									<li><a href="profile-settings.php">Profile Settings</a></li>
									<li><a href="change-password.php">Change Password</a></li>
								</ul>
							</li> -->	
							<!-- <li class="has-submenu">
								<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="voice-call.php">Voice Call</a></li>
									<li><a href="video-call.php">Video Call</a></li>
									<li><a href="search.php">Search Doctors</a></li>
									<li><a href="calendar.php">Calendar</a></li>
									<li><a href="components.php">Components</a></li>
									<li class="has-submenu">
										<a href="invoices.php">Invoices</a>
										<ul class="submenu">
											<li><a href="invoices.php">Invoices</a></li>
											<li><a href="invoice-view.php">Invoice View</a></li>
										</ul>
									</li>
									<li><a href="blank-page.php">Starter Page</a></li>
									<li><a href="login.php">Login</a></li>
									<li><a href="register.php">Register</a></li>
									<li><a href="forgot-password.php">Forgot Password</a></li>
								</ul>
							</li> -->
							<!-- <li>
								<a href="admin/index.php" target="_blank">Admin</a>
							</li> -->
							<!-- <li class="login-link">
								<a href="login.php">Login / Signup</a>
							</li> -->
						</ul>		 
					</div>		 
					<ul class="nav header-navbar-rht" style="z-index: 9">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>							
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +91 932556756</p>
							</div>
						</li>
						<!-- User Menu -->
						<?php                 
                 if(isset($_SESSION['id'])){
                 	// echo $_SESSION['id'];
                 	$id = $_SESSION['id'] ;
							$query = "SELECT * FROM `doctor` where `id` = $id";
                             include '../config.php';
                             $stmt=$conn->prepare($query);
                             $stmt->execute();
                             $result=$stmt->fetchAll();
                             $conn=null;
                                  
                             foreach($result as $doctor){
                  ?>
               
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="../assets/img/doctors/<?php echo $doctor['image']?>" width="31" alt="<?php echo $doctor['image']?>">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="../assets/img/doctors/<?php echo $doctor['image']?>" alt="User Image" class="avatar-img rounded-circle">
									</div>
									<div class="user-text">
										<h6><?php echo $doctor['name']?></h6>
										<p class="text-muted mb-0">Doctors</p>
									</div>
								</div>
								<a class="dropdown-item" href="doctor-dashboard.php">Dashboard</a>
								<a class="dropdown-item" href="profile-settings.php">Profile Settings</a>
								<a class="dropdown-item" href="logout.php">Logout</a>
							</div>
						</li>
						<?php }}?>
						<!-- /User Menu -->
					</ul>
				</nav>
			</header>