<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/register.html  30 Nov 2019 04:12:20 GMT -->
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
									<div class="col-md-7 col-lg-6 login-left">
										<img src="../assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Doctor Login</h3>
										</div>
										
										<!-- Register Form -->
										<form action="session.php" method="post">
											<div class="form-group form-focus">
												<input type="email" class="form-control floating" id="email" name="email">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="password">
												<label class="focus-label">Password</label>
											</div>
											<!-- <div class="form-group form-focus">
												<input type="password" class="form-control floating">
												<label class="focus-label">Create Password</label>
											</div> -->
											
											<div class="text-right">
												<a class="forgot-link" href="login.php">No account Yet? </a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" name="login" type="submit">Signin</button>
											<div class="text-right">
												<a class="forgot-link" href="login.php">Forgot Password</a>
											</div>
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

<!-- doccure/register.html  30 Nov 2019 04:12:20 GMT -->
</html>