<?php $page="verify-identity";?>
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
											<li class="nav-item submenu">
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
														<a href="{{url('verify-identity')}}" class="active">Verify Identity</a>
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
											<a href="#success-verified" class="btn btn-primary" data-bs-toggle="modal">Submit Verification</a>
										</div>
									</div>
								</div>
								
							</div>								
						</div>
					</div>
				</div>
			</div>	
						
			
			
@component('components.modal-popup')  

@endcomponent

@endsection