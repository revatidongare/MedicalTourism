<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/patient-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
<?php include 'includes/head.php'?>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <?php include 'includes/header.php'?>
			<!-- /Header -->
			
			<!-- Sidebar -->
          <?php $status = 5; include 'includes/sidebar.php'?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">List of Patient</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Patient</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Patient ID</th>
													<th>Patient Name</th>
													<th>Blood Group</th>
													<th>Address</th>
													<th>City</th>
													<th>Country</th>
													<th>Phone</th>
													<th>DOB</th>
													<!-- <th class="text-right">Paid</th> -->
												</tr>
											</thead>
											<tbody>
												<?php 
												$query = "SELECT * FROM `patient_master`";
                             include '../config.php';
                             $stmt=$conn->prepare($query);
                             $stmt->execute();
                             $result=$stmt->fetchAll();
                             $conn=null;
                                  
                             foreach($result as $patient){
                             ?>
												<tr>
													<td>#PT<?php echo $patient['id']?></td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/<?php echo $patient['image']?>" alt="User Image"></a>
															<a href="profile.html"><?php echo $patient['name']?> </a>
														</h2>
													</td>
													<td><?php echo $patient['bloodgroup']?></td>
													<td><?php echo $patient['address']?></td>
													<td><?php echo $patient['city']?></td>
													<td><?php echo $patient['country']?></td>
													<td><?php echo $patient['contact']?></td>
													<td><?php echo $patient['dob']?></td>
													<!-- <td class="text-right">$100.00</td> -->
												</tr>
												<?php }?>
												<!-- <tr>
													<td>#PT002</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient2.jpg" alt="User Image"></a>
															<a href="profile.html">Travis Trimble </a>
														</h2>
													</td>
													<td>23</td>
													<td>4026  Fantages Way, Brunswick, Maine, 04011</td>
													<td>2077299974</td>
													<td>22 Oct 2019</td>
													<td class="text-right">$200.00</td>
												</tr>
												<tr>
													<td>#PT003</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient3.jpg" alt="User Image"></a>
															<a href="profile.html">Carl Kelly</a>
														</h2>
													</td>
													<td>29</td>
													<td>2037 Pearcy Avenue, Decatur, Indiana, 46733</td>
													<td>2607247769</td>
													<td>21 Oct 2019</td>
													<td class="text-right">$250.00</td>
												</tr>
												<tr>
													<td>#PT004</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient4.jpg" alt="User Image"></a>
															<a href="profile.html"> Michelle Fairfax</a>
														</h2>
													</td>
													<td>25</td>
													<td>2037 Pearcy Avenue, Decatur, Indiana, 46733</td>
													<td>5043686874</td>
													<td>21 Sep 2019</td>
													<td class="text-right">$150.00</td>
												</tr>
												<tr>
													<td>#PT005</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient5.jpg" alt="User Image"></a>
															<a href="profile.html">Gina Moore</a>
														</h2>
													</td>
													<td>23</td>
													<td>888  Everette Alley, Hialeah, Florida, 33012</td>
													<td>9548207887</td>
													<td>18 Sep 2019</td>
													<td class="text-right">$350.00</td>
												</tr>
												<tr>
													<td>#PT006</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient6.jpg" alt="User Image"></a>
															<a href="profile.html">Elsie Gilley</a>
														</h2>
													</td>
													<td>16</td>
													<td>644  Coffman Alley, Bowling Green, Kentucky, 42101</td>
													<td>3153844562</td>
													<td>18 Sep 2019</td>
													<td class="text-right">$300.00</td>
												</tr>
												<tr>
													<td>#PT007</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient7.jpg" alt="User Image"></a>
															<a href="profile.html"> Joan Gardner</a>
														</h2>
													</td>
													<td>25</td>
													<td>2399  Hillview Drive, San Francisco, California, 94103</td>
													<td>7072202603</td>
													<td>18 Sep 2019</td>
													<td class="text-right">$250.00</td>
												</tr>
												<tr>
													<td>#PT008</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient8.jpg" alt="User Image"></a>
															<a href="profile.html"> Daniel Griffing</a>
														</h2>
													</td>
													<td>21</td>
													<td>4914  Hilltop Haven Drive, Passaic, New Jersey, 07055</td>
													<td>9737739497</td>
													<td>7 Sep 2019</td>
													<td class="text-right">$150.00</td>
												</tr>
												<tr>
													<td>#PT009</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient9.jpg" alt="User Image"></a>
															<a href="profile.html">Walter Roberson</a>
														</h2>
													</td>
													<td>18</td>
													<td>1299  Star Trek Drive, Panama City, Florida, 32405</td>
													<td>8503584445</td>
													<td>11 Sep 2019</td>
													<td class="text-right">$100.00</td>
												</tr>
												<tr>
													<td>#PT010</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient10.jpg" alt="User Image"></a>
															<a href="profile.html">Robert Rhodes</a>
														</h2>
													</td>
													<td>19</td>
													<td>1214  Hamill Avenue, Del Mar, California, 92014</td>
													<td>8582595285</td>
													<td>12 Sep 2019</td>
													<td class="text-right">$120.00</td>
												</tr>
												<tr>
													<td>#PT011</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient11.jpg" alt="User Image"></a>
															<a href="profile.html">Harry Williams</a>
														</h2>
													</td>
													<td>9</td>
													<td>4566  Sampson Street, Denver, Colorado, 80202</td>
													<td>3036077075</td>
													<td>14 Sep 2019</td>
													<td class="text-right">$130.00</td>
												</tr>
												<tr>
													<td>#PT012</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient12.jpg" alt="User Image"></a>
															<a href="profile.html">Robert Johnston</a>
														</h2>
													</td>
													<td>29</td>
													<td>1996  Crummit Lane, Beatrice, Nebraska, 68310</td>
													<td>4022231492</td>
													<td>7 Nov 2019</td>
													<td class="text-right">$260.00</td>
												</tr>
												<tr>
													<td>#PT013</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient13.jpg" alt="User Image"></a>
															<a href="profile.html">Tracy Mason</a>
														</h2>
													</td>
													<td>32</td>
													<td>4211  Vesta Drive, TOLEDO, Washington, 98591</td>
													<td>7737265795</td>
													<td>9 Nov 2019</td>
													<td class="text-right">$290.00</td>
												</tr>
												<tr>
													<td>#PT014</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient14.jpg" alt="User Image"></a>
															<a href="profile.html"> Daniel Finch</a>
														</h2>
													</td>
													<td>23</td>
													<td>186  Bryan Street, Greensboro, North Carolina, 27409</td>
													<td>3362314023</td>
													<td>5 Nov 2019</td>
													<td class="text-right">$300.00</td>
												</tr>
												<tr>
													<td>#PT015</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient15.jpg" alt="User Image"></a>
															<a href="profile.html">Jessica Garza</a>
														</h2>
													</td>
													<td>10</td>
													<td>4672  Rose Street, Schaumburg, Illinois, 60173</td>
													<td>7082788201</td>
													<td>6 Nov 2019</td>
													<td class="text-right">$310.00</td>
												</tr> -->
											</tbody>
										</table>
									</div>
									</div>
								</div>
							</div>
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/patient-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:52 GMT -->
</html>