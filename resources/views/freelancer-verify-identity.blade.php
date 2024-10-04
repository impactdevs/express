<?php $page="freelancer-verify-identity";?>
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
													<a href="{{url('freelancer-dashboard')}}" class="nav-link ">
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
													<a href="{{url('freelancer-payout')}}" class="nav-link ">
														<img src="{{URL::asset('/assets/img/icon/sidebar-icon-08.svg')}}" alt="Img"> Payout
													</a>
												</li>
												<li class="nav-item">
													<a href="{{url('freelancer-statement')}}" class="nav-link">
														<img src="{{URL::asset('/assets/img/icon/sidebar-icon-09.svg')}}" alt="Img"> Statement
													</a>
												</li>
												<li class="nav-item submenu">
													<a href="{{url('freelancer-profile-settings')}}" class="nav-link active">
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
															<a class="active" href="{{url('freelancer-verify-identity')}}">Verify Identity</a>
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
								<div class="dashboard-sec payout-section freelancer-statements">
									<div class="page-title portfolio-title">
										<h3 class="mb-0">Verification Details</h3>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="mb-3">
												<label class="focus-label">Document Type</label>
												<select  class="form-control select">
													<option value="0">Select</option>
													<option value="1" >Option1</option>
													<option value="2">Option2</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="mb-3">
												<label class="focus-label">Document Number</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="input-block">
												<label class="form-label">Document Number</label>
												<div class="upload-sets">
													<label class="upload-filesview">
														Browse File
														<input type="file">
													</label>
													<h6>Or Drag &amp; Drop here</h6>
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="d-flex doc-btn">
												<a href="#success-verified" data-bs-toggle="modal" class="btn btn-primary">Submit Verification</a>
											</div>
										</div>
									</div>
									
								</div>								
							</div>								
						</div>					
					</div>
				</div>				
				<!-- /Page Content -->
				@component('components.modal-popup')
					
				@endcomponent
@endsection