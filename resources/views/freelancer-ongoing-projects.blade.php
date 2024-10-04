<?php $page="freelancer-project-proposals";?>
@extends('layout.mainlayout')
@section('content')		

		<!-- Page Content -->			
		<div class="content content-page">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-4 theiaStickySidebar">
						<div class="settings-widget">
							<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
								<a href="{{url('freelancer-profile')}}"><img alt="profile image" src="{{URL::asset('/assets/img/user/avatar-1.jpg')}}" class="avatar-lg rounded-circle"></a>
								<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
									<h3 class="mb-0"><a href="{{url('freelancer-profile')}}">Bruce Bush</a><img src="{{URL::asset('/assets/img/icon/verified-badge.svg')}}" class="ms-1" alt="Img"></h3>
									<p class="mb-0">@brucebush</p>
								</div>
							</div>
							<div class="settings-menu">
								<div id="sidebar-menu" class="sidebar-menu">
									<ul>
										<li class="nav-item">
											<a href="{{url('freelancer-dashboard')}}" class="nav-link">
												<img src="{{URL::asset('/assets/img/icon/sidebar-icon-01.svg')}}" alt="Img"> Dashboard
												
											</a>
										</li>
										<li class="nav-item submenu">
											<a href="{{url('freelancer-project-proposals')}}" class="nav-link active">
												<img src="{{URL::asset('/assets/img/icon/sidebar-icon-02.svg')}}" alt="Img"> Projects
												<span class="menu-arrow"></span>
											</a>
											<ul class="sub-menu-ul">
												<li>
													<a href="{{url('freelancer-project-proposals')}}">My Proposal</a>
												</li>
												<li>
													<a href="{{url('freelancer-ongoing-projects')}}" class="active">Ongoing Projects</a>
												</li>
												<li>
													<a href="{{url('freelancer-completed-projects')}}">Completed Projects</a>
												</li>
												<li>
													<a href="{{url('freelancer-cancelled-projects')}}">Cancelled Projects</a>
												</li>
											</ul>
										</li>
										<li class="nav-item submenu">
											<a href="{{url('freelancer-favourites')}}" class="nav-link">
												<img src="{{URL::asset('/assets/img/icon/sidebar-icon-03.svg')}}" alt="Img"> Favourites
												<span class="menu-arrow"></span>
											</a>
											<ul class="sub-menu-ul">
												<li>
													<a href="{{url('freelancer-favourites')}}">Bookmarked Projects</a>
												</li>
												<li>
													<a href="{{url('freelancer-invitations')}}">Invitations</a>
												</li>
											</ul>
										</li>
										<li class="nav-item">
											<a href="{{url('freelancer-review')}}" class="nav-link">
												<img src="{{URL::asset('/assets/img/icon/sidebar-icon-04.svg')}}" alt="Img"> Reviews
											</a>
										</li>
										<li class="nav-item">
											<a href="{{url('freelancer-portfolio')}}" class="nav-link">
												<img src="{{URL::asset('/assets/img/icon/sidebar-icon-05.svg')}}" alt="Img"> Portfolio
											</a>
										</li>
										<li class="nav-item">
											<a href="{{url('freelancer-chats')}}" class="nav-link">
												<img src="{{URL::asset('/assets/img/icon/sidebar-icon-06.svg')}}" alt="Img"> Chat
											</a>
										</li>
										<li class="nav-item">
											<a href="{{url('freelancer-withdraw-money')}}" class="nav-link">
												<img src="{{URL::asset('/assets/img/icon/sidebar-icon-07.svg')}}" alt="Img"> Payments
											</a>
										</li>
										<li class="nav-item">
											<a href="{{url('freelancer-payout')}}" class="nav-link">
												<img src="{{URL::asset('/assets/img/icon/sidebar-icon-08.svg')}}" alt="Img"> Payout
											</a>
										</li>
										<li class="nav-item">
											<a href="{{url('freelancer-withdraw-money')}}" class="nav-link">
												<img src="{{URL::asset('/assets/img/icon/sidebar-icon-09.svg')}}" alt="Img"> Statement
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:void(0);" class="nav-link">
												<img src="{{URL::asset('/assets/img/icon/sidebar-icon-10.svg')}}" alt="Img">  Settings
												<span class="menu-arrow"></span>
											</a>
											<ul class="sub-menu-ul">
												<li>
													<a href="{{url('freelancer-profile-settings')}}">Profile Setting</a>
												</li>
												<li>
													<a href="{{url('freelancer-membership')}}">Plan & Billing</a>
												</li>
												<li>
													<a href="{{url('freelancer-verify-identity')}}">Verify Identity</a>
												</li>
												<li>
													<a href="{{url('freelancer-change-password')}}">Changes Password</a>
												</li>
												<li>
													<a href="{{url('freelancer-delete-account')}}">Delete Account</a>
												</li>
											</ul>
										</li>
										<li class="nav-item">
											<a href="{{url('index')}}" class="nav-link">
												<img src="{{URL::asset('/assets/img/icon/sidebar-icon-11.svg')}}" alt="Img"> Logout
											</a>
										</li>
									</ul>
								</div>
								
							</div>
						</div>					
					</div>
					<div class="col-xl-9 col-lg-8">
						<div class="page-title">
							<h3>Ongoing Projects</h3>
						</div>
						<!-- Proposals list -->
						<div class="proposals-section ongoing-projects">
							
							<!-- Proposals -->
							<div class="freelancer-proposals proposal-ongoing">
								<div class="project-proposals align-items-center freelancer">
									<div class="proposal-info">
										<div class="proposals-details">
											<h3 class="proposals-title">3D Renders and Amazon Product Store images/Video</h3>
											<ul>
												
												<li>
													<div class="proposal-client-price">
														<h4 class="title-info">Client Price</h4>
														<h3 class="client-price">$599.00 <span class="price-type">( Fixed )</span></h3>
													</div>
												</li>
												<li>
													<div class="proposal-job-type">
														<h4 class="title-info">Project Deadline</h4>
														<h3>28 Oct 2023</h3>
													</div>
												</li>
												<li>
													<div class="proposal-img">
														<div class="proposal-client d-flex align-items-center">
															<img src="{{URL::asset('/assets/img/user/table-avatar-02.jpg')}}" alt="Img" class="img-fluid me-2">
															<div>
																<h4>Hayley Melba</h4>
																<span>10 Oct 2023<i class="fa-solid fa-star"></i>5.0</span>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="project-action text-center">
														<a href="{{url('freelancer-view-project-detail')}}" class="projects-btn mb-0">View Details</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Proposals --> 

							<!-- Proposals -->
							<div class="freelancer-proposals proposal-ongoing">
								<div class="project-proposals align-items-center freelancer">
									<div class="proposal-info">
										<div class="proposals-details">
											<h3 class="proposals-title">Landing Page Redesign / Sales Page Redesign (Not Entire Web)</h3>
											<ul>
												
												<li>
													<div class="proposal-client-price">
														<h4 class="title-info">Client Price</h4>
														<h3 class="client-price">$280.00 <span class="price-type">( Fixed )</span></h3>
													</div>
												</li>
												<li>
													<div class="proposal-job-type">
														<h4 class="title-info">Project Deadline</h4>
														<h3>25 Oct 2023</h3>
													</div>
												</li>
												<li>
													<div class="proposal-img">
														<div class="proposal-client d-flex align-items-center">
															<img src="{{URL::asset('/assets/img/user/user-01.jpg')}}" alt="Img" class="img-fluid me-2">
															<div>
																<h4>James Douglas</h4>
																<span>12 Oct 2023<i class="fa-solid fa-star"></i>5.0</span>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="project-action text-center">
														<a href="{{url('freelancer-view-project-detail')}}" class="projects-btn mb-0">View Details</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Proposals --> 

							<!-- Proposals -->
							<div class="freelancer-proposals proposal-ongoing">
								<div class="project-proposals align-items-center freelancer">
									<div class="proposal-info">
										<div class="proposals-details">
											<h3 class="proposals-title">WooCommerce Product Page Back Up Restoration</h3>
											<ul>
												
												<li>
													<div class="proposal-client-price">
														<h4 class="title-info">Client Price</h4>
														<h3 class="client-price">$140.00 <span class="price-type">( Fixed )</span></h3>
													</div>
												</li>
												<li>
													<div class="proposal-job-type">
														<h4 class="title-info">Project Deadline</h4>
														<h3>17 Oct 2023</h3>
													</div>
												</li>
												<li>
													<div class="proposal-img">
														<div class="proposal-client d-flex align-items-center">
															<img src="{{URL::asset('/assets/img/user/user-02.jpg')}}" alt="Img" class="img-fluid me-2">
															<div>
																<h4>Tony Ingle</h4>
																<span>26 Oct 2023<i class="fa-solid fa-star"></i>5.0</span>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="project-action text-center">
														<a href="{{url('freelancer-view-project-detail')}}" class="projects-btn mb-0">View Details</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Proposals --> 

							<!-- Proposals -->
							<div class="freelancer-proposals proposal-ongoing">
								<div class="project-proposals align-items-center freelancer">
									<div class="proposal-info">
										<div class="proposals-details">
											<h3 class="proposals-title">Full-stack Developer to help us to build our</h3>
											<ul>
												
												<li>
													<div class="proposal-client-price">
														<h4 class="title-info">Client Price</h4>
														<h3 class="client-price">$350.00 <span class="price-type">( Fixed )</span></h3>
													</div>
												</li>
												<li>
													<div class="proposal-job-type">
														<h4 class="title-info">Project Deadline</h4>
														<h3>28 Oct 2023</h3>
													</div>
												</li>
												<li>
													<div class="proposal-img">
														<div class="proposal-client d-flex align-items-center">
															<img src="{{URL::asset('/assets/img/user/table-avatar-05.jpg')}}" alt="Img" class="img-fluid me-2">
															<div>
																<h4>Sam Prendiville</h4>
																<span>03 Nov 2023<i class="fa-solid fa-star"></i>5.0</span>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="project-action text-center">
														<a href="{{url('freelancer-view-project-detail')}}" class="projects-btn mb-0">View Details</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Proposals --> 

							<!-- Proposals -->
							<div class="freelancer-proposals proposal-ongoing">
								<div class="project-proposals align-items-center freelancer">
									<div class="proposal-info">
										<div class="proposals-details">
											<h3 class="proposals-title">Video animator to bring some illustrations to life</h3>
											<ul>
												
												<li>
													<div class="proposal-client-price">
														<h4 class="title-info">Client Price</h4>
														<h3 class="client-price">$620.00<span class="price-type">( Fixed )</span></h3>
													</div>
												</li>
												<li>
													<div class="proposal-job-type">
														<h4 class="title-info">Project Deadline</h4>
														<h3>11 Oct 2023</h3>
													</div>
												</li>
												<li>
													<div class="proposal-img">
														<div class="proposal-client d-flex align-items-center">
															<img src="{{URL::asset('/assets/img/user/user-03.jpg')}}" alt="Img" class="img-fluid me-2">
															<div>
																<h4>Samantha Ogden</h4>
																<span>14 Nov 2023<i class="fa-solid fa-star"></i>5.0</span>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="project-action text-center">
														<a href="{{url('freelancer-view-project-detail')}}" class="projects-btn mb-0">View Details</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Proposals --> 

							<!-- Proposals -->
							<div class="freelancer-proposals proposal-ongoing">
								<div class="project-proposals align-items-center freelancer">
									<div class="proposal-info">
										<div class="proposals-details">
											<h3 class="proposals-title">Food Delivery Mobile App</h3>
											<ul>
												
												<li>
													<div class="proposal-client-price">
														<h4 class="title-info">Client Price</h4>
														<h3 class="client-price">$260.00 <span class="price-type">( Fixed )</span></h3>
													</div>
												</li>
												<li>
													<div class="proposal-job-type">
														<h4 class="title-info">Project Deadline</h4>
														<h3>03 Oct 2023</h3>
													</div>
												</li>
												<li>
													<div class="proposal-img">
														<div class="proposal-client d-flex align-items-center">
															<img src="{{URL::asset('/assets/img/user/table-avatar-04.jpg')}}" alt="Img" class="img-fluid me-2">
															<div>
																<h4>Sam Facy</h4>
																<span>18 Nov 2023<i class="fa-solid fa-star"></i>5.0</span>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="project-action text-center">
														<a href="{{url('freelancer-view-project-detail')}}" class="projects-btn mb-0">View Details</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Proposals --> 
							
						</div>
						<!-- /Proposals list -->
						
					</div>
				</div>
			</div>
		</div>				
		<!-- /Page Content -->

@endsection