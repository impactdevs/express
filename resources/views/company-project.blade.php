<?php $page="company-project";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')
    @slot('li_1') Home @endslot
    @slot('li_2') Employers @endslot
    @slot('li_3') COMPANY PROFILE @endslot
@endcomponent

@component('components.tab-details')
@endcomponent
	<!-- Page Content -->
	<div class="content">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 col-md-12">

					<div class="pro-view">

						<!-- Tab Detail -->
						<nav class="provider-tabs mb-4 abouts-view">
							<ul class="nav nav-tabs nav-tabs-solid nav-justified">
								<li class="nav-item">
									<a class="nav-link " href="{{url('company-profile')}}">
										<img src="{{URL::asset('/assets/img/icon/tab-icon-13.png')}}"  alt="User Image">
										<p class="bg-red">About Us</p>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active-about" href="{{url('company-project')}}">
										<img src="{{URL::asset('/assets/img/icon/tab-icon-12.png')}}"  alt="User Image">
										<p>Projects</p>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{url('company-gallery')}}">
										<img src="{{URL::asset('/assets/img/icon/tab-icon-10.png')}}"  alt="User Image">
										<p >Gallery</p>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{url('company-review')}}">
										<img src="{{URL::asset('/assets/img/icon/tab-icon-11.png')}}"  alt="User Image">
										<p >Reviews</p>
									</a>
								</li>
							</ul>
						</nav>
						<!-- /Tab Detail -->

						<!-- Projects Tab Content -->
						<div class="pro-post widget-box company-post" >
							<h3 class="pro-title">Projects</h3>
							<div class="projects-card flex-fill project-company">
								<div class="card-body">
									<div class="projects-details align-items-center">
										<div class="project-info">
											<span>Dreamguystech</span>
											<h2>Website Designer Required For Directory Theme</h2>
											<div class="customer-info">
												<ul class="list-details">
													<li>
														<div class="slot">
															<p>Price type</p>
															<h5>Fixed</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Location</p>
															<h5><img src="{{URL::asset('/assets/img/en.png')}}" height="13" alt="Lang"> UK</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Expiry</p>
															<h5>4 Days Left</h5>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="project-hire-info">
											<div class="content-divider"></div>
											<div class="projects-amount">
												<h3>$500.00</h3>
												<h5>in 12 Days</h5>
											</div>
											<div class="content-divider"></div>
											<div class="projects-action text-center">
												<a href="{{url('view-project-detail')}}" class="projects-btn">View Proposals</a>
												<a href="{{url('view-project-detail')}}" class="projects-btn">Edit Jobs</a>
												<a href="javascript:void(0);" class="hired-detail"><span>5</span> Proposals</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="projects-card flex-fill project-company">
								<div class="card-body">
									<div class="projects-details align-items-center">
										<div class="project-info">
											<span>Dreamguystech</span>
											<h2>Laravel Backend Developer to finish ongoing project</h2>
											<div class="customer-info">
												<ul class="list-details">
													<li>
														<div class="slot">
															<p>Price type</p>
															<h5>Fixed</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Location</p>
															<h5><img src="{{URL::asset('/assets/img/en.png')}}" height="13" alt="Lang"> UK</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Expiry</p>
															<h5>4 Days Left</h5>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="project-hire-info">
											<div class="content-divider"></div>
											<div class="projects-amount">
												<h3>$500.00</h3>
												<h5>in 12 Days</h5>
											</div>
											<div class="content-divider"></div>
											<div class="projects-action text-center">
												<a href="{{url('view-project-detail')}}" class="projects-btn">View Details</a>
												<a href="javascript:void(0);" class="hired-detail">Hired on 19 JUN 2021</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="projects-card flex-fill project-company">
								<div class="card-body">
									<div class="projects-details align-items-center">
										<div class="project-info">
											<span>Dreamguystech</span>
											<h2>WooCommerce Product Page Back Up Restoration</h2>
											<div class="customer-info">
												<ul class="list-details">
													<li>
														<div class="slot">
															<p>Price type</p>
															<h5>Fixed</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Location</p>
															<h5><img src="{{URL::asset('/assets/img/en.png')}}" height="13" alt="Lang"> UK</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Expiry</p>
															<h5>4 Days Left</h5>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="project-hire-info">
											<div class="content-divider"></div>
											<div class="projects-amount">
												<h3>$500.00</h3>
												<h5>in 12 Days</h5>
											</div>
											<div class="content-divider"></div>
											<div class="projects-action text-center">
												<a href="{{url('view-project-detail')}}" class="projects-btn">View Proposals</a>
												<a href="{{url('view-project-detail')}}" class="projects-btn">Edit Jobs</a>
												<a href="javascript:void(0);" class="hired-detail"><span>5</span> Proposals</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="projects-card flex-fill project-company">
								<div class="card-body">
									<div class="projects-details align-items-center">
										<div class="project-info">
											<span>Dreamguystech</span>
											<h2>Laravel Backend Developer to finish ongoing project</h2>
											<div class="customer-info">
												<ul class="list-details">
													<li>
														<div class="slot">
															<p>Price type</p>
															<h5>Fixed</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Location</p>
															<h5><img src="{{URL::asset('/assets/img/en.png')}}" height="13" alt="Lang"> UK</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Expiry</p>
															<h5>4 Days Left</h5>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="project-hire-info">
											<div class="content-divider"></div>
											<div class="projects-amount">
												<h3>$500.00</h3>
												<h5>in 12 Days</h5>
											</div>
											<div class="content-divider"></div>
											<div class="projects-action text-center">
												<a href="{{url('view-project-detail')}}" class="projects-btn">View Details</a>
												<a href="javascript:void(0);" class="hired-detail">Hired on 19 JUN 2021</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="projects-card flex-fill project-company">
								<div class="card-body">
									<div class="projects-details align-items-center">
										<div class="project-info">
											<span>Dreamguystech</span>
											<h2>Website Designer Required For Directory Theme</h2>
											<div class="customer-info">
												<ul class="list-details">
													<li>
														<div class="slot">
															<p>Price type</p>
															<h5>Fixed</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Location</p>
															<h5><img src="{{URL::asset('/assets/img/en.png')}}" height="13" alt="Lang"> UK</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Expiry</p>
															<h5>4 Days Left</h5>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="project-hire-info">
											<div class="content-divider"></div>
											<div class="projects-amount">
												<h3>$500.00</h3>
												<h5>in 12 Days</h5>
											</div>
											<div class="content-divider"></div>
											<div class="projects-action text-center">
												<a href="{{url('view-project-detail')}}" class="projects-btn">View Proposals</a>
												<a href="{{url('view-project-detail')}}" class="projects-btn">Edit Jobs</a>
												<a href="javascript:void(0);" class="hired-detail"><span>5</span> Proposals</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="projects-card flex-fill project-company">
								<div class="card-body">
									<div class="projects-details align-items-center">
										<div class="project-info">
											<span>Dreamguystech</span>
											<h2>Laravel Backend Developer to finish ongoing project</h2>
											<div class="customer-info">
												<ul class="list-details">
													<li>
														<div class="slot">
															<p>Price type</p>
															<h5>Fixed</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Location</p>
															<h5><img src="{{URL::asset('/assets/img/en.png')}}" height="13" alt="Lang"> UK</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Expiry</p>
															<h5>4 Days Left</h5>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="project-hire-info">
											<div class="content-divider"></div>
											<div class="projects-amount">
												<h3>$500.00</h3>
												<h5>in 12 Days</h5>
											</div>
											<div class="content-divider"></div>
											<div class="projects-action text-center">
												<a href="{{url('view-project-detail')}}" class="projects-btn">View Details</a>
												<a href="javascript:void(0);" class="hired-detail">Hired on 19 JUN 2021</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="projects-card flex-fill project-company">
								<div class="card-body">
									<div class="projects-details align-items-center">
										<div class="project-info">
											<span>Dreamguystech</span>
											<h2>WooCommerce Product Page Back Up Restoration</h2>
											<div class="customer-info">
												<ul class="list-details">
													<li>
														<div class="slot">
															<p>Price type</p>
															<h5>Fixed</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Location</p>
															<h5><img src="{{URL::asset('/assets/img/en.png')}}" height="13" alt="Lang"> UK</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Expiry</p>
															<h5>4 Days Left</h5>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="project-hire-info">
											<div class="content-divider"></div>
											<div class="projects-amount">
												<h3>$500.00</h3>
												<h5>in 12 Days</h5>
											</div>
											<div class="content-divider"></div>
											<div class="projects-action text-center">
												<a href="{{url('view-project-detail')}}" class="projects-btn">View Proposals</a>
												<a href="{{url('view-project-detail')}}" class="projects-btn">Edit Jobs</a>
												<a href="javascript:void(0);" class="hired-detail"><span>5</span> Proposals</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="projects-card flex-fill project-company">
								<div class="card-body">
									<div class="projects-details align-items-center">
										<div class="project-info">
											<span>Dreamguystech</span>
											<h2>Laravel Backend Developer to finish ongoing project</h2>
											<div class="customer-info">
												<ul class="list-details">
													<li>
														<div class="slot">
															<p>Price type</p>
															<h5>Fixed</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Location</p>
															<h5><img src="{{URL::asset('/assets/img/en.png')}}" height="13" alt="Lang"> UK</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Expiry</p>
															<h5>4 Days Left</h5>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="project-hire-info">
											<div class="content-divider"></div>
											<div class="projects-amount">
												<h3>$500.00</h3>
												<h5>in 12 Days</h5>
											</div>
											<div class="content-divider"></div>
											<div class="projects-action text-center">
												<a href="{{url('view-project-detail')}}" class="projects-btn">View Details</a>
												<a href="javascript:void(0);" class="hired-detail">Hired on 19 JUN 2021</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="projects-card flex-fill project-company">
								<div class="card-body">
									<div class="projects-details align-items-center">
										<div class="project-info">
											<span>Dreamguystech</span>
											<h2>Website Designer Required For Directory Theme</h2>
											<div class="customer-info">
												<ul class="list-details">
													<li>
														<div class="slot">
															<p>Price type</p>
															<h5>Fixed</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Location</p>
															<h5><img src="{{URL::asset('/assets/img/en.png')}}" height="13" alt="Lang"> UK</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Expiry</p>
															<h5>4 Days Left</h5>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="project-hire-info">
											<div class="content-divider"></div>
											<div class="projects-amount">
												<h3>$500.00</h3>
												<h5>in 12 Days</h5>
											</div>
											<div class="content-divider"></div>
											<div class="projects-action text-center">
												<a href="{{url('view-project-detail')}}" class="projects-btn">View Proposals</a>
												<a href="{{url('view-project-detail')}}" class="projects-btn">Edit Jobs</a>
												<a href="javascript:void(0);" class="hired-detail"><span>5</span> Proposals</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="projects-card flex-fill project-company">
								<div class="card-body">
									<div class="projects-details align-items-center">
										<div class="project-info">
											<span>Dreamguystech</span>
											<h2>Laravel Backend Developer to finish ongoing project</h2>
											<div class="customer-info">
												<ul class="list-details">
													<li>
														<div class="slot">
															<p>Price type</p>
															<h5>Fixed</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Location</p>
															<h5><img src="{{URL::asset('/assets/img/en.png')}}" height="13" alt="Lang"> UK</h5>
														</div>
													</li>
													<li>
														<div class="slot">
															<p>Expiry</p>
															<h5>4 Days Left</h5>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="project-hire-info">
											<div class="content-divider"></div>
											<div class="projects-amount">
												<h3>$500.00</h3>
												<h5>in 12 Days</h5>
											</div>
											<div class="content-divider"></div>
											<div class="projects-action text-center">
												<a href="{{url('view-project-detail')}}" class="projects-btn">View Details</a>
												<a href="javascript:void(0);" class="hired-detail">Hired on 19 JUN 2021</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Pagination -->
							<div class="row">
								<div class="col-md-12">
									<ul class="paginations list-pagination">
										<li class="page-item"><a href="javascript:void(0);">Previous</a></li>
										<li class="page-item"><a href="javascript:void(0);" class="active">1</a></li>
										<li class="page-item"><a href="javascript:void(0);">Next</a></li>
									</ul>
								</div>
							</div>
							<!-- /Pagination -->

						</div>
						<!-- /Projects Tab Content -->

					</div>
				</div>

				<!-- profile Sidebar -->
				<div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar company-profile">

					<!-- About Widget -->
					<div class="pro-post widget-box about-widget profile-overview">
						<div class="profile-head">
							<h4 class="pro-title mb-0">Profile Overview</h4>
						</div>
						<ul class="latest-posts pro-content">
							<li><p>Company Name</p><h6>Amaze Tech  PVT LTD.</h6></li>
							<li><p>Company Established</p><h6>02-12-2005</h6></li>
							<li><p>No of Employees</p><h6>1500 - 1850</h6></li>
							<li><p>Owner Name</p><h6>Charles Dickens</h6></li>
							<li><p>Email</p><h6>amazetechpvt.ltd@gmail.com</h6></li>
							<li><p>Website</p><h6>www.amazetechpvt.ltd.com</h6></li>
						</ul>
						<div class="contact-btn">
							<a href="javascript:void(0);" class="btn btn-primary"><i class="fas fa-phone-alt"></i> Contact</a>
						</div>
					</div>
					<!-- /About Widget -->

					<!-- Employer Location -->
					<div class="pro-post widget-box location-widget">
						<div class="profile-head">
							<h4 class="pro-title">Company Location</h4>
						</div>
						<div class="map-location">
							<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" ></iframe>
						</div>
					</div>
					<!-- /Employer Location -->

					<!-- Working Widget -->
					<div class="pro-post widget-box  working-days">
						<div class="profile-head">
							<h4 class="pro-title mb-0">Working Days</h4>
						</div>
						<ul class="latest-posts pro-content">
							<li><p>Monday</p><h6>9AM - 5PM</h6></li>
							<li><p>Tuesday </p><h6>9AM - 5PM</h6></li>
							<li><p>Wednesday </p><h6>9AM - 5PM</h6></li>
							<li><p>Thursday </p><h6>9AM - 5PM</h6></li>
							<li><p>Friday </p><h6>9AM - 5PM</h6></li>
							<li><p>Saturday </p><h6>9AM - 5PM</h6></li>
							<li><p>Sunday </p><h6><span>Close</span></h6></li>
						</ul>
					</div>
					<!-- /Working Widget -->

					<!-- Social Widget -->
					<div class="pro-post widget-box social-widget">
						<div class="profile-head">
							<h4 class="pro-title">SOCIAL LINKS</h4>
						</div>
						<ul class="social-link-profile">
							<li><a href="javascript:void(0);"><i class="fab fa-facebook"></i></a></li>
							<li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
							<li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
							<li><a href="javascript:void(0);"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="javascript:void(0);"><i class="fab fa-telegram"></i></a></li>
						</ul>
					</div>
					<!-- /Social Widget -->

				</div>
				<!-- /Profile Sidebar -->

			</div>
		</div>
	</div>
	<!-- /Page Content -->
@component('components.modal-popup')
@endcomponent
@endsection
