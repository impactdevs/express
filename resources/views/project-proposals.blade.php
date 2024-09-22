<?php $page="manage-projects";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Home @endslot
    @slot('li_3') Dashboard @endslot
@endcomponent


			<!-- Page Content -->			
			<div class="content">
				<div class="container">
					<div class="row">
						
						@component('components.sidebar')  
						@endcomponent
						
						<div class="col-xl-9 col-md-8">
							<div class="page-title">
								<h3>Proposals</h3>
							</div>
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="{{url('manage-projects')}}">All Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('pending-projects')}}">Pending Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('ongoing-projects')}}">Ongoing Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('completed-projects')}}">Completed Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('cancelled-projects')}}">Cancelled Projects</a>
									</li>
								</ul>
							</nav> 
						
							<!-- project list -->
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-10 flex-wrap">
										<div class="projects-card flex-fill">
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
																		<h5><img src="{{ URL::asset('/assets/img/en.png')}}" height="13" alt="Lang"> UK</h5>
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
														<div class="projects-amount proposals">
															<h3>$500.00</h3>
															<h5>in 12 Days</h5>
														</div> 
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 d-flex flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body p-2">
												<div class="prj-proposal-count text-center">
													<span>5</span>
													<h3>Proposals</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /project list -->
							
							<!-- Proposals list -->
							<div class="proposals-section mb-4">
								<h3 class="page-subtitle">Proposals By freelancer</h3>
								<div class="proposal-card">
								
									<!-- Proposals -->
									<div class="project-proposals align-items-center">
										<div class="proposals-info">
											<div class="proposer-info">
												<div class="proposer-img">
													<img src="{{ URL::asset('/assets/img/user/avatar-1.jpg')}}" alt="" class="img-fluid">
												</div>
												<div class="proposer-detail">
													<h4>George Wells</h4>
													<ul class="proposal-details">
														<li> February 26, 2021</li>
														<li><i class="fas fa-star text-primary"></i> 4 Reviews</li>
														<li> <a href="{{url('freelancer-profile')}}" class="font-semibold text-primary">View Profile</a></li>
													</ul>
												</div>
											</div>
											<div class="proposer-bid-info">
												<div class="proposer-bid">
													<h3>$480.00</h3>
													<h5>in 11 Days</h5>
												</div>
												<div class="proposer-confirm">
													<a data-bs-toggle="modal" href="#hire" class="projects-btn">Hire Now</a>
												</div>
											</div>
										</div>
										<div class="description-proposal">
											<h5 class="desc-title">Description</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. 
											Et cursus tellus viverra adipiscing suspendisse. Semper arcu est eget eleifend. 
											Faucibus elit massa sollicitudin elementum ut feugiat nunc ac. Turpis quam sed in sed curabitur netus laoreet. 
											In tortor neque sapien praesent porttitor cursus sed cum
											<span id="dots">...</span>
											<span id="more">Turpis quam sed in sed curabitur netus laoreet. In tortor neque sapien praesent porttitor cursus
											</span><span id="myBtn" class="text-primary font-bold readmore">Readmore</span></p>
										</div>
									</div>
									<!-- Proposals -->
									
									<!-- Proposals -->
									<div class="project-proposals align-items-center">
										<div class="proposals-info">
											<div class="proposer-info">
												<div class="proposer-img">
													<img src="{{ URL::asset('/assets/img/user/avatar-2.jpg')}}" alt="" class="img-fluid">
												</div>
												<div class="proposer-detail">
													<h4>Hannah Finn</h4>
													<ul class="proposal-details">
														<li> October 26, 2021</li>
														<li><i class="fas fa-star text-primary"></i> 4 Reviews</li>
														<li> <a href="{{url('freelancer-profile')}}" class="font-semibold text-primary">View Profile</a></li>
													</ul>
												</div>
											</div>
											<div class="proposer-bid-info">
												<div class="proposer-bid">
													<h3>$220.00</h3>
													<h5>in 15 Days</h5>
												</div>
												<div class="proposer-confirm">
													<a data-bs-toggle="modal" href="#hire" class="projects-btn">Hire Now</a>
												</div>
											</div>
										</div>
										<div class="description-proposal">
											<h5 class="desc-title">Description</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. 
											Et cursus tellus viverra adipiscing suspendisse. Semper arcu est eget eleifend. 
											Faucibus elit massa sollicitudin elementum ut feugiat nunc ac. Turpis quam sed in sed curabitur netus laoreet. 
											In tortor neque sapien praesent porttitor cursus sed cum
											<span id="dots1">...</span>
											<span id="myBtn1" class="text-primary font-bold readmore">Readmore</span></p>
										</div>
									</div>
									<!-- Proposals -->
									
									<!-- Proposals -->
									<div class="project-proposals align-items-center mb-0">
										<div class="proposals-info">
											<div class="proposer-info">
												<div class="proposer-img">
													<img src="{{ URL::asset('/assets/img/user/avatar-3.jpg')}}" alt="" class="img-fluid">
												</div>
												<div class="proposer-detail">
													<h4>Timothy Smith</h4>
													<ul class="proposal-details">
														<li> October 28, 2021</li>
														<li><i class="fas fa-star text-primary"></i> 4 Reviews</li>
														<li> <a href="{{url('freelancer-profile')}}" class="font-semibold text-primary">View Profile</a></li>
													</ul>
												</div>
											</div>
											<div class="proposer-bid-info">
												<div class="proposer-bid">
													<h3>$300.00</h3>
													<h5>in 12 Days</h5>
												</div>
												<div class="proposer-confirm">
													<a data-bs-toggle="modal" href="#hire" class="projects-btn">Hire Now</a>
												</div>
											</div>
										</div>
										<div class="description-proposal">
											<h5 class="desc-title">Description</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. 
											Et cursus tellus viverra adipiscing suspendisse. Semper arcu est eget eleifend. 
											Faucibus elit massa sollicitudin elementum ut feugiat nunc ac. Turpis quam sed in sed curabitur netus laoreet. 
											In tortor neque sapien praesent porttitor cursus sed cum
											<span id="dots2">...</span>
											<span id="myBtn2" class="text-primary font-bold readmore">Readmore</span></p>
										</div>
									</div>
									<!-- Proposals -->
									
								</div>
							</div>
							<!-- /Proposals list -->
							
							<!-- pagination -->
							<div class="row">
								<div class="col-md-12">
									<ul class="paginations">
										<li><a href="javascript:void(0);"> <i class="fas fa-angle-left"></i> Previous</a></li>
										<li><a href="javascript:void(0);">1</a></li>
										<li><a href="javascript:void(0);" class="active">2</a></li>
										<li><a href="javascript:void(0);">3</a></li>
										<li><a href="javascript:void(0);">4</a></li>
										<li><a href="javascript:void(0);">Next <i class="fas fa-angle-right"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- /pagination -->
							
						</div>
					</div>
				</div>
			</div>	
			<!-- /Page Content -->
@component('components.modal-popup')  
@endcomponent
@endsection