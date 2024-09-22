<?php $page="freelancer-portfolio";?>
@extends('layout.mainlayout')
@section('content')		


		<!-- Page Content -->			
		<div class="content content-page portfolio-page">					
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
											<a href="{{url('freelancer-project-proposals')}}" class="nav-link">
												<img src="{{URL::asset('/assets/img/icon/sidebar-icon-02.svg')}}" alt="Img"> Projects
												<span class="menu-arrow"></span>
											</a>
											<ul class="sub-menu-ul">
												<li>
													<a href="{{url('freelancer-project-proposals')}}">My Proposal</a>
												</li>
												<li>
													<a href="{{url('freelancer-ongoing-projects')}}">Ongoing Projects</a>
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
													<a  href="{{url('freelancer-favourites')}}">Bookmarked Projects</a>
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
											<a href="{{url('freelancer-portfolio')}}" class="nav-link active">
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
						<div class="dashboard-sec freelance-favourites">
							<div class="page-title portfolio-title">
								<h3 class="mb-0">Portfolio</h3>
								<a class="btn btn-primary title-btn" data-bs-toggle="modal" href="#portfolio"><i class="feather-plus"></i> Add Portfolio</a>
							</div>
							<div class="pro-content">
								<div class="row row-gap">
									<div class="col-sm-6 col-lg-4">
										<div class="project-widget">
											<div class="portfolio-img">
												<img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/project-1.jpg')}}">
												<div class="portfolio-live">
												<div class="portfolio-content">
													<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="feather-edit-2"></i></a>
													<a href="#delete_modal" data-bs-toggle="modal" class="port-icon"><i class="feather-trash-2"></i></a>
												</div>
												</div>
											</div>
											<div class="portfolio-detail">
												<h3 class="pro-name">Razor Website Design</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-lg-4">
										<div class="project-widget">
											<div class="portfolio-img">
												<img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/project-2.jpg')}}">
												<div class="portfolio-live">
												<div class="portfolio-content">
													<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="feather-edit-2"></i></a>
													<a href="#delete_modal" data-bs-toggle="modal" class="port-icon"><i class="feather-trash-2"></i></a>
												</div>
												</div>
											</div>
											<div class="portfolio-detail">
												<h3 class="pro-name">Transport Website</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-lg-4">
										<div class="project-widget">
											<div class="portfolio-img">
												<img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/project-3.jpg')}}">
												<div class="portfolio-live">
												<div class="portfolio-content">
													<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="feather-edit-2"></i></a>
													<a href="#delete_modal" data-bs-toggle="modal" class="port-icon"><i class="feather-trash-2"></i></a>
												</div>
												</div>
											</div>
											<div class="portfolio-detail">
												<h3 class="pro-name">Wordpress Website</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-lg-4">
										<div class="project-widget">
											<div class="portfolio-img">
												<img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/project-4.jpg')}}">
												<div class="portfolio-live">
												<div class="portfolio-content">
													<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="feather-edit-2"></i></a>
													<a href="#delete_modal" data-bs-toggle="modal" class="port-icon"><i class="feather-trash-2"></i></a>
												</div>
												</div>
											</div>
											<div class="portfolio-detail">
												<h3 class="pro-name">Mobile App</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-lg-4">
										<div class="project-widget">
											<div class="portfolio-img">
												<img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/project-5.jpg')}}">
												<div class="portfolio-live">
												<div class="portfolio-content">
													<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="feather-edit-2"></i></a>
													<a href="#delete_modal" data-bs-toggle="modal" class="port-icon"><i class="feather-trash-2"></i></a>
												</div>
												</div>
											</div>
											<div class="portfolio-detail">
												<h3 class="pro-name">Healthcare Website</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-lg-4">
										<div class="project-widget">
											<div class="portfolio-img">
												<img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/project-6.jpg')}}">
												<div class="portfolio-live">
												<div class="portfolio-content">
													<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="feather-edit-2"></i></a>
													<a href="#delete_modal" data-bs-toggle="modal" class="port-icon"><i class="feather-trash-2"></i></a>
												</div>
												</div>
											</div>
											<div class="portfolio-detail">
												<h3 class="pro-name">Injury Website</h3>
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