<!DOCTYPE html>
<html lang="en">

<?php include'includes/head.php';?>
<script>
	$('#myCarousel').on('slid.bs.carousel', function (e) {
  $('#myCarousel').carousel('2') // Will slide to the slide 2 as soon as the transition to slide 1 is finished
})

$('#myCarousel').carousel('1') // Will start sliding to the slide 1 and returns to the caller
$('#myCarousel').carousel('2') // !! Will be ignored, as the transition to the slide 1 is not finished !!
</script>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

	<div id="wrapper">

		<?php include'includes/navbar.php';?>


		<!-- Section: intro -->
		<section id="intro" class="intro">
			<div class="intro-content">
				<div class="container" style="max-width: 90%;">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="row">
							<div class="col-lg-12 " style="padding-left: 20px">
								<div class="card text-white" style="height:17rem; margin-top: 0.5rem; border: 0">
									<div class="card-body" style="background-color: white;padding: 0;">
										<!--   <h3 style="color: #E84B3A;">Latest Videos</h3>-->

										<iframe id="Nframe" width="100%" height="60%" src="https://www.youtube.com/embed/FR8iMC8z74Q?rel=0&amp;autoplay=1&mute=1" frameborder="0" allowfullscreen >
											<style >
												.ytp-unmute .ytp-popup .ytp-button .ytp-unmute-animated .ytp-unmute-shrink{
													display: block;
												}
											</style>
										</iframe>										
									</div>
								</div>
								<div class="card text-white" style="height:17rem; margin-top: 0.5rem; border: 0">
									<div class="card-body" style="background-color: white;padding: 0;">
										<!--   <h3 style="color: #E84B3A;">Latest Videos</h3>-->

										<iframe id="Nframe" width="100%" height="60%" src="https://www.youtube.com/embed/6i6jqJeHQio?rel=0&amp;autoplay=1&mute=1" frameborder="0" allowfullscreen >
											<style >
												.ytp-unmute .ytp-popup .ytp-button .ytp-unmute-animated .ytp-unmute-shrink{
													display: block;
												}
											</style>
										</iframe>										
									</div>
								</div>
							</div>					


							<!-- <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img  src="img/1.jpg" width="100%" alt="First slide">
										</div>
										<div class="carousel-item">
											<img src="img/2.jpg" width="100%" alt="Second slide">
										</div>
										<div class="carousel-item">
											<img src="img/3.jpg" width="100%" alt="Third slide">
										</div>
									</div>
								</div>
							</div> -->	
						</div>
					</div>					
					<!-- <div class="row"> -->
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							
							<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
								<div class="form-wrapper">
									<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

										<div class="panel panel-skin">
											<div class="panel-heading" >
												<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Find Doctor </h3>
											</div>
											<div class="panel-body">
												<form role="form" class="lead">
													<div class="row">
														<div class="col-lg-6 col-sm-12 col-md-6">
															<div class="form-group">


																<div class="form-group">
																	<label for="exampleFormControlSelect1">Search Country</label>
																	<select class="form-control" id="exampleFormControlSelect1" >
																		<option value="0">country</option>
																		<option value="1">India</option>
																		<option value="2">Australia</option>
																		<option value="3">Germany</option>
																		<option value="4">Dubai</option>
																	</select>


																</div>

															</div>
														</div>


														<div class="col-lg-6 col-sm-12 col-md-6">
															<div class="form-group">

																<label for="exampleFormControlSelect1">Search State</label>
																<select class="form-control" id="exampleFormControlSelect1" >
																	<option value="0">states</option>
																	<option value="1">Karnataka</option>
																	<option value="2">Maharashtra</option>
																	<option value="3">Bihar</option>
																	<option value="4">Gujarat</option>
																</select>

															</div>
														</div>




														<div class="col-lg-6 col-sm-12 col-md-6">
															<div class="form-group">

																<label for="exampleFormControlSelect1">Search City</label>
																<select class="form-control" id="exampleFormControlSelect1" >
																	<option value="0">city</option>
																	<option value="1">Kochi</option>
																	<option value="2">Banglore</option>
																	<option value="3">Mumbai</option>
																	<option value="4">Delhi</option>
																</select>
															</div>

														</div>


														<div class="col-lg-6 col-sm-12 col-md-6">
															<div class="form-group">

																<label for="exampleFormControlSelect1">Search specialization</label>
																<select class="form-control" id="exampleFormControlSelect1" >
																	<option value="0">Category</option>
																	<option value="1">Cardiologisit</option>
																	<option value="2">Gynocologisit/Obstetrician</option>
																	<option value="3">Genral Physician</option>
																	<option value="4">Homoeopath</option>
																	<option value="5">Dermologisit</option>
																	<option value="6">Ayurveda</option>
																	<option value="4">Dentist</option>
																</select>

															</div>
														</div>
														<div class="col-lg-6 col-sm-12 col-md-6">
															<div class="form-group">

																<label for="exampleFormControlSelect1">Search doctor</label>
																<select class="form-control" id="exampleFormControlSelect1" >
																	<option value="0">search</option>
																	<option value="1"></option>
																	<option value="2"></option>
																	<option value="3"></option>
																	<option value="4"></option>
																	<option value="5"></option>
																	<option value="6"></option>
																	<option value="4"></option>
																</select>

															</div>
														</div>

														<div class="col-lg-6 col-sm-12 col-md-6">
															<div class="form-group">

																<label for="exampleFormControlSelect1">Search hospitals/clinics</label>
																<select class="form-control" id="exampleFormControlSelect1" >
																	<option value="0">search</option>
																	<option value="1"></option>
																	<option value="2"></option>
																	<option value="3"></option>
																	<option value="4"></option>
																	<option value="5"></option>
																	<option value="6"></option>
																	<option value="4"></option>
																</select>

															</div>
														</div>
														<div class="col-lg-6 col-sm-12 col-md-6">
															<div class="form-group">

																<label for="exampleFormControlSelect1">Search Laboratory</label>
																<select class="form-control" id="exampleFormControlSelect1" >
																	<option value="0">search</option>
																	<option value="1"></option>
																	<option value="2"></option>
																	<option value="3"></option>
																	<option value="4"></option>
																	<option value="5"></option>
																	<option value="6"></option>
																	<option value="4"></option>
																</select>

															</div>
														</div>


													</div>
													<div class="row" align="center">
														<div class ="col-lg-4"> </div>
														<div class="col-lg-4">

															<input type="text-center" value="Submit" class="btn btn-skin btn-block btn-lg">
														</div>
													</div>

												</form>
											</div>
										</div>				

									</div>
								</div>
							</div>
							<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
								<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">									
									<h2 class="h-ultra">Trust You Doctor</h2>
								</div>
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
									<h4 class="h-light">Provide <b> <span class="color">best quality healthcare</span> </b>for you</h4>
								</div>
								<div class="well well-trans">
									<div class="wow fadeInLeft" data-wow-delay="0.1s">

										<ul class="lead-list">
											<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Affordable monthly<br>premium packages</strong><br /></span></li>
											<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite doctor</strong><br /></span></li>
											<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Only use friendly environment</strong><br /></span></li>
										</ul>

									</div>
								</div>


							</div>

						</div>

					<!-- </div> -->
					</div>
				</div>
			</div>		
		</section>

		<!-- /Section: intro -->

		<!-- Section: boxes -->
 <!--   <section id="boxes" class="home-section paddingtop-80">
	
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							
							<i class="fa fa-check fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Make an appoinment</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							
							<i class="fa fa-list-alt fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Choose your package</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							<i class="fa fa-user-md fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Help by specialist</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							
							<i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Get diagnostic report</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
-->
<!-- /Section: boxes -->

<!--
<section id="callaction" class="home-section paddingtop-40">	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="callaction bg-gray">
					<div class="row">
						<div class="col-md-8">
							<div class="wow fadeInUp" data-wow-delay="0.1s">
								<div class="cta-text">
									<h3>In an emergency? Need help now?</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipiscing elit uisque interdum ante eget faucibus. </p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="wow lightSpeedIn" data-wow-delay="0.1s">
								<div class="cta-btn">
									<a href="#" class="btn btn-skin btn-lg">Book an appoinment</a>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	

-->
<!-- Section: services -->

<section id="service" class="home-section nopadding paddingtop-60">

	<div class="container">

		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
					<img src="img/dummy/img-1.jpg" class="img-responsive" alt="" />
				</div>
			</div>
			<div class="col-sm-3 col-md-3">
				
				<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="service-box">
						<div class="service-icon">
							<span class="fa fa-stethoscope fa-3x"></span> 
						</div>
						<div class="service-desc">
							<h5 class="h-light">Medical checkup</h5>
							<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
						</div>
					</div>
				</div>
				
				<div class="wow fadeInRight" data-wow-delay="0.2s">
					<div class="service-box">
						<div class="service-icon">
							<span class="fa fa-wheelchair fa-3x"></span> 
						</div>
						<div class="service-desc">
							<h5 class="h-light">Nursing Services</h5>
							<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
						</div>
					</div>
				</div>
				<div class="wow fadeInRight" data-wow-delay="0.3s">
					<div class="service-box">
						<div class="service-icon">
							<span class="fa fa-plus-square fa-3x"></span> 
						</div>
						<div class="service-desc">
							<h5 class="h-light">Pharmacy</h5>
							<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
						</div>
					</div>
				</div>


			</div>
			<div class="col-sm-3 col-md-3">
				
				<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="service-box">
						<div class="service-icon">
							<span class="fa fa-h-square fa-3x"></span> 
						</div>
						<div class="service-desc">
							<h5 class="h-light">Gyn Care</h5>
							<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
						</div>
					</div>
				</div>
				
				<div class="wow fadeInRight" data-wow-delay="0.2s">
					<div class="service-box">
						<div class="service-icon">
							<span class="fa fa-filter fa-3x"></span> 
						</div>
						<div class="service-desc">
							<h5 class="h-light">Neurology</h5>
							<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
						</div>
					</div>
				</div>
				<div class="wow fadeInRight" data-wow-delay="0.3s">
					<div class="service-box">
						<div class="service-icon">
							<span class="fa fa-user-md fa-3x"></span> 
						</div>
						<div class="service-desc">
							<h5 class="h-light">Sleep Center</h5>
							<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
						</div>
					</div>
				</div>

			</div>
			
		</div>		
	</div>
</section>

<!-- /Section: services -->



<!-- Section: team -->

<section id="doctor" class="home-section bg-gray paddingbot-60">
	<div class="container marginbot-50">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
						<h2 class="h-bold">Doctors</h2>
						<p>We provide best and specialist doctors</p>
					</div>
				</div>
				<div class="divider-short"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				
				<div id="filters-container" class="cbp-l-filters-alignLeft">
					<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (<div class="cbp-filter-counter"></div>)</div>
					<div data-filter=".cardiologist" class="cbp-filter-item">Cardiologist (<div class="cbp-filter-counter"></div>)</div>
					<div data-filter=".psychiatrist" class="cbp-filter-item">Psychiatrist(<div class="cbp-filter-counter"></div>)</div>
					<div data-filter=".neurologist" class="cbp-filter-item">Neurologist (<div class="cbp-filter-counter"></div>)</div>
				</div>

				<div id="grid-container" class="cbp-l-grid-team">
					<ul>
						<li class="cbp-item psychiatrist">
							<a href="doctors/member1.html" class="cbp-caption cbp-singlePage">
								<div class="cbp-caption-defaultWrap">
									<img src="img/team/3.png" alt="" width="100%">
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											<div class="cbp-l-caption-text">VIEW PROFILE</div>
										</div>
									</div>
								</div>
							</a>
							<a href="doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Dr Ashok Alim Chandani</a>
							<div class="cbp-l-grid-team-position">Psychiatrist</div>
						</li>
						<li class="cbp-item cardiologist">
							<a href="doctors/member2.html" class="cbp-caption cbp-singlePage">
								<div class="cbp-caption-defaultWrap">
									<img src="img/team/2.jpeg" alt="" width="100%">
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											<div class="cbp-l-caption-text">VIEW PROFILE</div>
										</div>
									</div>
								</div>
							</a>
							<a href="doctors/member2.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Rajneesh Kapoor</a>
							<div class="cbp-l-grid-team-position">Cardiologist</div>
						</li>
						<li class="cbp-item cardiologist">
							<a href="doctors/member3.html" class="cbp-caption cbp-singlePage">
								<div class="cbp-caption-defaultWrap">
									<img src="img/team/1.jpg" alt="" width="100%">
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											<div class="cbp-l-caption-text">VIEW PROFILE</div>
										</div>
									</div>
								</div>
							</a>
							<a href="doctors/member3.html" class="cbp-singlePage cbp-l-grid-team-name">Dr. Tapan Ghose</a>
							<div class="cbp-l-grid-team-position">Cardiologist</div>
						</li>
						<li class="cbp-item neurologist">
							<a href="doctors/member4.html" class="cbp-caption cbp-singlePage">
								<div class="cbp-caption-defaultWrap">
									<img src="img/team/4.jpg" alt="" width="100%">
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											<div class="cbp-l-caption-text">VIEW PROFILE</div>
										</div>
									</div>
								</div>
							</a>
							<a href="doctors/member4.html" class="cbp-singlePage cbp-l-grid-team-name">Dr Arun Garg</a>
							<div class="cbp-l-grid-team-position">Neurologist</div>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</div>

</section>

<!-- /Section: team -->



<!-- Section: works -->
<!--
<section id="facilities" class="home-section paddingbot-60">
	<div class="container marginbot-50">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
						<h2 class="h-bold">Our facilities</h2>
						<p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
					</div>
				</div>
				<div class="divider-short"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12" >
				<div class="wow bounceInUp" data-wow-delay="0.2s">
					<div id="owl-works" class="owl-carousel">
						<div class="item"><a href="img/photo/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="img/photo/1.jpg" class="img-responsive" alt="img"></a></div>
						<div class="item"><a href="img/photo/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg"><img src="img/photo/2.jpg" class="img-responsive " alt="img"></a></div>
						<div class="item"><a href="img/photo/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg"><img src="img/photo/3.jpg" class="img-responsive " alt="img"></a></div>
						<div class="item"><a href="img/photo/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg"><img src="img/photo/4.jpg" class="img-responsive " alt="img"></a></div>
						<div class="item"><a href="img/photo/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg"><img src="img/photo/5.jpg" class="img-responsive " alt="img"></a></div>
						<div class="item"><a href="img/photo/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg"><img src="img/photo/6.jpg" class="img-responsive " alt="img"></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
-->
<!-- /Section: works -->


<!-- Section: testimonial -->
<section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

	<div class="carousel-reviews broun-block">
		<div class="container">
			<div class="row">
				<div id="carousel-reviews" class="carousel slide" data-ride="carousel">

					<div class="carousel-inner">
						<div class="item active">
							<div class="col-md-4 col-sm-6">
								<div class="block-text rel zmin">
									<a title="" href="#">Emergency Contraception</a>
									<div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
<<<<<<< Updated upstream
									<p>I am glad that an  like this is created for the benefit of all. It would really be a game changer in healthcare ecosystem in India. </p>
=======
									<p>Very convenient and useful. I wanted some tests run for my parents who were staying with me .Since I couldnt travel with them to the lab, I tried using this after hearing an ad. A lab person came home and took the blood samples. I got both their reports on my app and doctors were also assigned for us.</p>
>>>>>>> Stashed changes
									<ins class="ab zmin sprite sprite-i-triangle block"></ins>
								</div>
								<div class="person-text rel text-light">					
									<img src="img/testimonials/1.jpg" alt="" class="person img-circle" />
									<a title="" href="#">Anna</a>
									<span>Banglore</span>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 hidden-xs">
								<div class="block-text rel zmin">
									<a title="" href="#">Orthopedic Surgery</a>
									<div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
									<p>This  is really flawless. Good for elderly people. Best part of this home delivery of medicine at discounted price.</p>
									<ins class="ab zmin sprite sprite-i-triangle block"></ins>
								</div>
								<div class="person-text rel text-light">
									<img src="img/testimonials/2.jpg" alt="" class="person img-circle" />
									<a title="" href="#">Gisshen </a>
									<span>Pondicherry</span>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
								<div class="block-text rel zmin">
									<a title="" href="#">Medical consultation</a>
									<div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
									<p>I don’t usually rely on apps for health stuff, but this is  exceeded my expectations. Thanks, guys!</p>
									<ins class="ab zmin sprite sprite-i-triangle block"></ins>
								</div>
								<div class="person-text rel text-light">
									<img src="img/testimonials/3.jpg" alt="" class="person img-circle" />
									<a title="" href="#">Smita</a>
									<span>Delhi</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-4 col-sm-6">
								<div class="block-text rel zmin">
									<a title="" href="#">Birth control pills</a>
									<div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
									<p>This  is really flawless. Good for elderly people. Best part of this home delivery of medicine at discounted price.</p>
									<ins class="ab zmin sprite sprite-i-triangle block"></ins>
								</div>
								<div class="person-text rel text-light">
									<img src="img/testimonials/4.jpg" alt="" class="person img-circle" />
									<a title="" href="#">Thanmay</a>
									<span>Banglore</span>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 hidden-xs">
								<div class="block-text rel zmin">
									<a title="" href="#">Radiology</a>
									<div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
									<p>I don’t usually rely on apps for health stuff, but this is  exceeded my expectations. Thanks, guys!</p>
									<ins class="ab zmin sprite sprite-i-triangle block"></ins>
								</div>
								<div class="person-text rel text-light">
									<img src="img/testimonials/5.jpg" alt="" class="person img-circle" />
									<a title="" href="#">Ella </a>
									<span>Chennai</span>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
								<div class="block-text rel zmin">
									<a title="" href="#">Cervical Lesions</a>
									<div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
									<p>I am glad that an  like this is created for the benefit of all. It would really be a game changer in healthcare ecosystem in India. </p>
									<ins class="ab zmin sprite sprite-i-triangle block"></ins>
								</div>
								<div class="person-text rel text-light">
									<img src="img/testimonials/6.jpg" alt="" class="person img-circle" />
									<a title="" href="#">Suzanne </a>
									<span>GOA</span>
								</div>
							</div>
						</div>


					</div>

					<a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- /Section: testimonial -->


<!-- Section: pricing -->
<!--	
<section id="pricing" class="home-section bg-gray paddingbot-60">	
	<div class="container marginbot-50">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="wow lightSpeedIn" data-wow-delay="0.1s">
					<div class="section-heading text-center">
						<h2 class="h-bold">Health packages</h2>
						<p>Take charge of your health today with our specially designed health packages</p>
					</div>
				</div>
				<div class="divider-short"></div>
			</div>
		</div>
	</div>

	<div class="container">

		<div class="row">

			<div class="col-sm-4 pricing-box">
				<div class="wow bounceInUp" data-wow-delay="0.1s">
					<div class="pricing-content general">
						<h2>Basic Fit 1 Package</h2>
						<h3>$33<sup>.99</sup> <span>/ one time</span></h3>
						<ul>
							<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
							<li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
							<li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
							<li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
						</ul>

						<div class="price-bottom">
							<a href="#" class="btn btn-skin btn-lg">Purchase</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-4 pricing-box featured-price">
				<div class="wow bounceInUp" data-wow-delay="0.3s">
					<div class="pricing-content featured">
						<h2>Golden Glow Package</h2>
						<h3>$65<sup>.99</sup> <span>/ one time</span></h3>
						<ul>
							<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
							<li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
							<li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
							<li>Body Composition Analysis <i class="fa fa-check icon-success"></i></li>
							<li>GR Assessment & Scoring <i class="fa fa-check icon-success"></i></li>
						</ul>

						<div class="price-bottom">
							<a href="#" class="btn btn-skin btn-lg">Purchase</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-4 pricing-box">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
					<div class="pricing-content general last">
						<h2>Basic Fit 2 Package</h2>
						<h3>$47<sup>.99</sup> <span>/ one time</span></h3>
						<ul>
							<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
							<li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
							<li>General Screening – Regular <i class="fa fa-check icon-success"></i></li>
							<li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
						</ul>

						<div class="price-bottom">
							<a href="#" class="btn btn-skin btn-lg">Purchase</a>
						</div>
					</div>
				</div>
			</div>

		</div>				

	</div>
</section>	 

-->
<!-- /Section: pricing -->

<section id="partner" class="home-section paddingbot-60">	
	<div class="container marginbot-50">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="wow lightSpeedIn" data-wow-delay="0.1s">
					<div class="section-heading text-center">
						<h2 class="h-bold">Our trusted Hospitals</h2>
						<p>Take charge of your health today with our trusted hospitals</p>
					</div>
				</div>
				<div class="divider-short"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="partner">
					<a href="#"><img src="img/dummy/partner-1.jpg" alt="" /></a>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="partner">
					<a href="#"><img src="img/dummy/partner-2.jpg" alt="" /></a>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="partner">
					<a href="#"><img src="img/dummy/partner-3.jpg" alt="" /></a>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="partner">
					<a href="#"><img src="img/dummy/partner-4.jpg" alt="" /></a>
				</div>
			</div>
		</div>
	</div>
</section>	

<?php include'includes/footer.php';?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Core JavaScript Files -->
<script src="js/jquery.min.js"></script>	 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script>

<div class="fsElement fsEmbed footer-translate" id="fsEl_25395" data-use-new="true" >


	<div class="fsElementContent" >
		<div id="google_translate_element"></div><script type="text/javascript">
			function googleTranslateElementInit() {
				new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
			}
		</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		<!-- Google Translate End -->

	</div>


</div>
</body>

</html>
