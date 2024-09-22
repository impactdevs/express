<?php $page="manage-projects";?>
@extends('layout.mainlayout')
@section('content')		

	
			<!-- Page Content -->			
			<div class="content content-page">
				<div class="container">
					<div class="row">
						
						<!-- sidebar -->
						<div class="col-xl-3 col-lg-4 theiaStickySidebar">
							<div class="settings-widget">
								<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
									<a href="{{url('freelancer-profile')}}"><img alt="profile image" src="{{URL::asset('/assets/img/user/table-avatar-03.jpg')}}" class="avatar-lg rounded-circle"></a>
									<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
										<h3 class="mb-0"><a href="{{url('profile-settings')}}">Walter Griffin</a><img src="{{URL::asset('/assets/img/icon/verified-badge.svg')}}" class="ms-1" alt="Img"></h3>
										<p class="mb-0">@waltergriffin</p>
									</div>
								</div>
								<div class="settings-menu">
									<div id="sidebar-menu" class="sidebar-menu">
										<ul>
											<li class="nav-item">
												<a href="{{url('dashboard')}}" class="nav-link">
													<img src="{{URL::asset('/assets/img/icon/sidebar-icon-01.svg')}}" alt="Img"> Dashboard
												</a>
											</li>
											<li class="nav-item submenu">
												<a href="{{url('freelancer-project-proposals')}}" class="nav-link">
													<img src="{{URL::asset('/assets/img/icon/sidebar-icon-02.svg')}}" alt="Img"> Projects
													<span class="menu-arrow"></span>
												</a>
												<ul class="sub-menu-ul">
													<li>
														<a href="{{url('manage-projects')}}">All Projects</a>
													</li>
													<li>
														<a href="{{url('ongoing-projects')}}">Ongoing Projects</a>
													</li>
													<li>
														<a href="{{url('completed-projects')}}">Completed Projects</a>
													</li>
													<li>
														<a href="{{url('pending-projects')}}">Pending Projects</a>
													</li>
													<li>
														<a href="{{url('cancelled-projects')}}" class="active">Cancelled Projects</a>
													</li>
													<li>
														<a href="{{url('expired-projects')}}">Expired Projects</a>
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
														<a href="{{url('favourites')}}">Bookmarked Projects</a>
													</li>
													<li>
														<a href="{{url('invited-favourites')}}">Invitations</a>
													</li>
												</ul>
											</li>
											<li class="nav-item">
												<a href="{{url('review')}}" class="nav-link">
													<img src="{{URL::asset('/assets/img/icon/sidebar-icon-04.svg')}}" alt="Img"> Reviews
												</a>
											</li>
											<li class="nav-item">
												<a href="{{url('chats')}}" class="nav-link">
													<img src="{{URL::asset('/assets/img/icon/sidebar-icon-06.svg')}}" alt="Img"> Chat
												</a>
											</li>
											<li class="nav-item">
												<a href="{{url('deposit-funds')}}" class="nav-link">
													<img src="{{URL::asset('/assets/img/icon/sidebar-icon-07.svg')}}" alt="Img"> Payments
												</a>
											</li>
											<li class="nav-item">
												<a href="javascript:void(0);" class="nav-link">
													<img src="{{URL::asset('/assets/img/icon/sidebar-icon-10.svg')}}" alt="Img">  Settings
													<span class="menu-arrow"></span>
												</a>
												<ul class="sub-menu-ul">
													<li>
														<a href="{{url('profile-settings')}}">Profile</a>
													</li>
													<li>
														<a href="{{url('membership-plans')}}">Plan & Billing</a>
													</li>
													<li>
														<a href="{{url('verify-identity')}}">Verify Identity</a>
													</li>
													<li>
														<a href="{{url('change-password')}}">Change Password</a>
													</li>
													<li>
														<a href="{{url('delete-account')}}">Delete Account</a>
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
						<!-- /sidebar -->
						
						<div class="col-xl-9 col-lg-8">
							<div class="page-title">
								<h3>Cancelled Projects</h3>
							</div>
							<!-- project list -->
							<div class="my-projects-list ongoing-projects">
								<div class="row">
									<div class="col-xl-12 flex-wrap">
										<div class="freelancer-proposals proposal-ongoing mb-0">
											<div class="project-proposals align-items-center freelancer">
												<div class="proposal-info">
													<div class="proposals-details">
														<span class="tech-name-badge">Dreamguystech</span>
														<div class="d-flex justify-content-between align-items-start">
															<div class="employee-project-card">
																
																<h3 class="proposals-title">Website Designer Required For Directory Theme</h3>
																<ul>
																	
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Project type</h4>
																			<h3>Hourly</h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Location</h4>
																			<h3 class="flag-icon"><img src="{{URL::asset('/assets/img/icon/flag-icon.svg')}}" height="13" alt="Lang"> UK</h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Expiry</h4>
																			<h3>4 Days Left</h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Price</h4>
																			<h3>$500</h3>
																		</div>
																	</li>
																</ul>
															</div>
															<ul class="employee-project">
																<li>
																	<div class="project-action text-center">
																		<a href="javascript:void(0);" class="projects-btn">Repost</a>
																		<a href="javascript:void(0);" class="mb-0">Delete</a>
																	</div>
																</li>
															</ul>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<!-- /project list -->
							
							<!-- project list -->
							<div class="my-projects-list ongoing-projects">
								<div class="row">
									<div class="col-xl-12 flex-wrap">
										<div class="freelancer-proposals proposal-ongoing mb-0">
											<div class="project-proposals align-items-center freelancer">
												<div class="proposal-info">
													<div class="proposals-details">
														<span class="tech-name-badge">Dreamguystech</span>
														<div class="d-flex justify-content-between align-items-start">
															<div class="employee-project-card">
																
																<h3 class="proposals-title">Landing Page Redesign / Sales Page Redesign</h3>
																<ul>
																	
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Project type</h4>
																			<h3>Fixed</h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Location</h4>
																			<h3 class="flag-icon"><img src="{{URL::asset('/assets/img/icon/flag-icon.svg')}}" height="13" alt="Lang"> UK</h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Expiry</h4>
																			<h3>5 Days Left</h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Price</h4>
																			<h3>$280</h3>
																		</div>
																	</li>
																</ul>
															</div>
															<ul class="employee-project">
																<li>
																	<div class="project-action text-center">
																		<a href="javascript:void(0);" class="projects-btn">Repost</a>
																		<a href="javascript:void(0);" class="mb-0">Delete</a>
																	</div>
																</li>
															</ul>
														</div>														
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<!-- /project list -->

							<!-- project list -->
							<div class="my-projects-list ongoing-projects">
								<div class="row">
									<div class="col-xl-12 flex-wrap">
										<div class="freelancer-proposals proposal-ongoing mb-0">
											<div class="project-proposals align-items-center freelancer">
												<div class="proposal-info">
													<div class="proposals-details">
														<span class="tech-name-badge">Dreamguystech</span>
														<div class="d-flex justify-content-between align-items-start">
															<div class="employee-project-card">
																
																<h3 class="proposals-title">WooCommerce Product Page Back Up Restoration</h3>
																<ul>
																	
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Project type</h4>
																			<h3>Hourly</h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Location</h4>
																			<h3 class="flag-icon"><img src="{{URL::asset('/assets/img/icon/flag-icon.svg')}}" height="13" alt="Lang"> UK</h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Expiry</h4>
																			<h3>3 Days Left</h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Price</h4>
																			<h3>$700</h3>
																		</div>
																	</li>
																</ul>
															</div>
															<ul class="employee-project">
																<li>
																	<div class="project-action text-center">
																		<a href="javascript:void(0);" class="projects-btn">Repost</a>
																		<a href="javascript:void(0);" class="mb-0">Delete</a>
																	</div>
																</li>
															</ul>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<!-- /project list -->

							<!-- project list -->
							<div class="my-projects-list ongoing-projects">
								<div class="row">
									<div class="col-xl-12 flex-wrap">
										<div class="freelancer-proposals proposal-ongoing mb-0">
											<div class="project-proposals align-items-center freelancer">
												<div class="proposal-info">
													<div class="proposals-details">
														<span class="tech-name-badge">Dreamguystech</span>
														<div class="d-flex justify-content-between align-items-start">
															<div class="employee-project-card">
																
																<h3 class="proposals-title">Laravel Backend Developer to finish ongoing project</h3>
																<ul>
																	
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Project type</h4>
																			<h3>Fixed </h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Location</h4>
																			<h3 class="flag-icon"><img src="{{URL::asset('/assets/img/icon/flag-icon.svg')}}" height="13" alt="Lang"> UK</h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Expiry</h4>
																			<h3>8 Days Left</h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Price</h4>
																			<h3>$300</h3>
																		</div>
																	</li>
																</ul>
															</div>
															<ul class="employee-project">
																<li>
																	<div class="project-action text-center">
																		<a href="javascript:void(0);" class="projects-btn">Repost</a>
																		<a href="javascript:void(0);" class="mb-0">Delete</a>
																	</div>
																</li>
															</ul>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<!-- /project list -->

							<!-- project list -->
							<div class="my-projects-list ongoing-projects">
								<div class="row">
									<div class="col-xl-12 flex-wrap">
										<div class="freelancer-proposals proposal-ongoing mb-0">
											<div class="project-proposals align-items-center freelancer">
												<div class="proposal-info">
													<div class="proposals-details">
														<span class="tech-name-badge">Dreamguystech</span>
														<div class="d-flex justify-content-between align-items-start">
															<div class="employee-project-card">
																
																<h3 class="proposals-title">3D Renders and Amazon Product Store images/Video</h3>
																<ul>
																	
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Project type</h4>
																			<h3>Fixed</h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Location</h4>
																			<h3 class="flag-icon"><img src="{{URL::asset('/assets/img/icon/flag-icon.svg')}}" height="13" alt="Lang"> UK</h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Expiry</h4>
																			<h3>8 Days Left</h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Price</h4>
																			<h3>$300</h3>
																		</div>
																	</li>
																</ul>
															</div>
															<ul class="employee-project">
																<li>
																	<div class="project-action text-center">
																		<a href="javascript:void(0);" class="projects-btn">Repost</a>
																		<a href="javascript:void(0);" class="mb-0">Delete</a>
																	</div>
																</li>
															</ul>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<!-- /project list -->

							<!-- project list -->
							<div class="my-projects-list ongoing-projects">
								<div class="row">
									<div class="col-xl-12 flex-wrap">
										<div class="freelancer-proposals proposal-ongoing mb-0">
											<div class="project-proposals align-items-center freelancer">
												<div class="proposal-info">
													<div class="proposals-details">
														<span class="tech-name-badge">Dreamguystech</span>
														<div class="d-flex justify-content-between align-items-start">
															<div class="employee-project-card">
																
																<h3 class="proposals-title">Website Designer Required For Directory Theme</h3>
																<ul>
																	
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Project type</h4>
																			<h3>Hourly</h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Location</h4>
																			<h3 class="flag-icon"><img src="{{URL::asset('/assets/img/icon/flag-icon.svg')}}" height="13" alt="Lang"> UK</h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Expiry</h4>
																			<h3>4 Days Left</h3>
																		</div>
																	</li>
																	<li>
																		<div class="proposal-job-type">
																			<h4 class="title-info">Price</h4>
																			<h3>$500</h3>
																		</div>
																	</li>
																</ul>
															</div>
															<ul class="employee-project">
																<li>
																	<div class="project-action text-center">
																		<a href="javascript:void(0);" class="projects-btn">Repost</a>
																		<a href="javascript:void(0);" class="mb-0">Delete</a>
																	</div>
																</li>
															</ul>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<!-- /project list -->
							
							<div class="row">
								<div class="col-md-12">
									<ul class="paginations list-pagination">
										<li class="page-item"><a href="javascript:void(0);"><i class="feather-chevron-left"></i></a>
										</li>
										<li class="page-item"><a href="javascript:void(0);" class="active">1</a></li>
										<li class="page-item"><a href="javascript:void(0);">2</a></li>
										<li class="page-item"><a href="javascript:void(0);">3</a></li>
										<li class="page-item"><a href="javascript:void(0);">...</a></li>
										<li class="page-item"><a href="javascript:void(0);">10</a></li>
										<li class="page-item"><a href="javascript:void(0);"><i class="feather-chevron-right"></i></a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>	
			
			<!-- /Page Content -->

@endsection