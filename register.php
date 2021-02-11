<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/register.php  30 Nov 2019 04:12:20 GMT -->
<?php include 'includes/head.php';?>
	<body class="account-page">

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<?php include 'includes/navbar.php';?>
			<!-- /Header -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
								
							<!-- Register Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<!-- <div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">	
									</div> -->
									<div class="col-md-12 col-lg-12 login-right">
										<div class="login-header">
											<h3>Patient Register <!-- <a href="doctor/doctor-register.php">Are you a Doctor?</a> --></h3>
										</div>
										
										<!-- Register Form -->
										<form action="patients/back.php" method="post">
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="name">
												<label class="focus-label">Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="email">
												<label class="focus-label">E-mail</label>
											</div>
											<div class="form-group form-focus">
												<input input type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control floating" name="contact">
												<label class="focus-label">Contact</label>
											</div>
											<!-- <div class="form-group form-focus">
												<input type="text" class="form-control floating" name="name">
												<label class="focus-label">DOB</label>
											</div> -->
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="bloodgroup">
												<label class="focus-label">Blood Group </label>
											</div>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="address">
												<label class="focus-label">Address</label>
											</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="city">
												<label class="focus-label">City</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="state">
												<label class="focus-label">State</label>
											</div>

											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="zipcode">
												<label class="focus-label">Zipcode</label>
											</div>
											 <div class="form-group form-focus">
												<input type="text" class="form-control floating" name="country">
												<label class="focus-label">Country</label>
											</div>

											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="password">
												<label class="focus-label"> Password </label>
											</div>
											</div>									

											</div>
											
											
											<div class="form-group form-focus">
												<label>Display Picture</label>
												<input type="file" name="image">
												
											</div>
											<!-- -->
											<div class="text-right">
												<a class="forgot-link" href="login.php">Already have an account?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" name="register" id="register" type="submit">Signup</button>
											<!-- <div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="row form-row social-login">
												<div class="col-6">
													<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
												</div>
												<div class="col-6">
													<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
												</div>
											</div> -->
										</form>
										<!-- /Register Form -->
										
									</div>
								</div>
							</div>
							<!-- /Register Content -->
								
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

<!-- doccure/register.php  30 Nov 2019 04:12:20 GMT -->
</html>