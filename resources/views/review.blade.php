<?php $page="review";?>
@extends('layout.mainlayout')
@section('content')		

			<!-- Page Content -->
			<div class="content content-page bookmark">					
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
												<a href="{{url('review')}}" class="nav-link active">
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
							<div class="dashboard-sec freelance-favourites">
								<div class="page-title">
									<h3>Reviews</h3>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="review-card">
											<h5>Fast and clear.</h5>
											<p>Fast and clear. European visual concepts. Easy to communicate TOP</p>
											<div class="reviewer-details-block">
												<div class="reviewer-img">
													<img src="{{URL::asset('/assets/img/user/avatar-10.jpg')}}" class="img-fluid" alt="Img">
												</div>
												<div class="reviewer-details">
													<h6>Theresa Phillips</h6>
													<div class="d-flex">
														<div class="rating">
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star"></i>
															<span class="average-rating">4</span>
														</div>
														<div class="reviewer-log">
															<i class="feather-calendar"></i><span>Just now</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="review-card">
											<h5>This seller was great overall.</h5>
											<p>This seller was great overall. One thing I noticed was that there was one logo out of the 4 I got that stood out amongst the others. Now I loved that one logo but the other ones did not look like much thought were put into them and they were a little disappointing. It is understandable for the price for them to only put effort into one logo, which like I said I loved. I think it would be better to tell this seller to make one good logo and to provide 3 other logos that work off the one good logo. Maybe make that one good logo and then change colors and fonts for the other 3. But overall this seller was great!</p>
											<div class="reviewer-details-block">
												<div class="reviewer-img">
													<img src="{{URL::asset('/assets/img/user/avatar-11.jpg')}}" class="img-fluid" alt="Img">
												</div>
												<div class="reviewer-details">
													<h6>Amy Stratton</h6>
													<div class="d-flex">
														<div class="rating">
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<span class="average-rating">5</span>
														</div>
														<div class="reviewer-log">
															<i class="feather-calendar"></i><span>1 min ago</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="review-card">
											<h5>Great help given and work</h5>
											<p>Great help given and work was done as asked on time! :)</p>
											<div class="reviewer-details-block">
												<div class="reviewer-img">
													<img src="{{URL::asset('/assets/img/user/avatar-2.jpg')}}" class="img-fluid" alt="Img">
												</div>
												<div class="reviewer-details">
													<h6>Henry Munford</h6>
													<div class="d-flex">
														<div class="rating">
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<span class="average-rating">5</span>
														</div>
														<div class="reviewer-log">
															<i class="feather-calendar"></i><span>25 mins ago</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="review-card">
											<h5>very quick & smart.</h5>
											<p>very quick & smart. Recommend him for any web related work</p>
											<div class="reviewer-details-block">
												<div class="reviewer-img">
													<img src="{{URL::asset('/assets/img/user/avatar-12.jpg')}}" class="img-fluid" alt="Img">
												</div>
												<div class="reviewer-details">
													<h6>Barbara McDonald</h6>
													<div class="d-flex">
														<div class="rating">
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<span class="average-rating">5</span>
														</div>
														<div class="reviewer-log">
															<i class="feather-calendar"></i><span>1 hour ago</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="review-card">
											<h5>They delivered great work! The delivery was prompt and the communication was excellent.</h5>
											<p>They delivered great work! The delivery was prompt and the communication was excellent. I will be using them in the future and recommend them to anyone who needs their services!</p>
											<div class="reviewer-details-block">
												<div class="reviewer-img">
													<img src="{{URL::asset('/assets/img/user/avatar-4.jpg')}}" class="img-fluid" alt="Img">
												</div>
												<div class="reviewer-details">
													<h6>Tyler Lewis</h6>
													<div class="d-flex">
														<div class="rating">
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<span class="average-rating">5</span>
														</div>
														<div class="reviewer-log">
															<i class="feather-calendar"></i><span>5 hours ago</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
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
							<!-- project list -->
							
							
						</div>
					</div>
				</div>
			</div>	
						
			
			<!-- /Page Content -->

@component('components.modal-popup')  
@endcomponent
@endsection