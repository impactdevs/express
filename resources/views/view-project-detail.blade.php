<?php $page="milestones";?>
@extends('layout.mainlayout')
@section('content')		

			<!-- Page Content -->
			<div class="content">
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
														<a href="{{url('manage-projects')}}" class="active">All Projects</a>
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
														<a href="{{url('cancelled-projects')}}">Cancelled Projects</a>
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
								<h3>Manage Projects</h3>
							</div>
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="{{url('view-project-detail')}}">Overview & Discussions</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('milestones')}}">Milestones</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('tasks')}}">Tasks</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('files')}}">Files</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('project-payment')}}">Payments</a>
									</li>
								</ul>
							</nav>
							
							<!-- project list -->
							<div class="my-projects">
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
																<img src="{{URL::asset('/assets/img/user/table-avatar-03.jpg')}}" alt="Img" class="img-fluid me-2">
																<div>
																	<h4>Hannah Finn</h4>
																	<span>10 Oct 2023<i class="fa-solid fa-star"></i>5.0</span>
																</div>
															</div>
														</div>
													</li>
													<li>
														<div class="project-action text-center overview-action">
															<a href="javascript:void(0);" class="projects-btn ">Is job completed?</a>
															<a href="{{url('chats')}}" class="btn-text mb-0">Chat Now</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Proposals --> 
							</div>
							<!-- /project list -->
								
							<!-- Overview -->
							<div class="overview-description">
								<h4>Description</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
							</div>
						
							<!-- /Overview -->
							
							<!-- Skills Required -->
							<div class="skill-required">
								<h4 >Skills Required</h4>
								<div class="pro-content">
									<div class="tags">
										<span class="badge badge-pill badge-design">Web design</span>
										<span class="badge badge-pill badge-design">UI Design</span>
										<span class="badge badge-pill badge-design">React</span>
										<span class="badge badge-pill badge-design">Design Writing</span>
										<span class="badge badge-pill badge-design">Software Design</span>
										<span class="badge badge-pill badge-design">HTML5</span>
										<span class="badge badge-pill badge-design">Sketch</span>	
									</div>
								</div>
							</div>
							<!-- /Skills Required -->
						
						</div>							
					</div>
				</div>
			</div>				
			<!-- /Page Content -->
      

@endsection