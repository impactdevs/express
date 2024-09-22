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
								<a class="nav-link" href="{{url('view-project-detail')}}">Overview & Discussions</a>
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
								<a class="nav-link active" href="{{url('project-payment')}}">Payments</a>
							</li>
						</ul>
					</nav>
					
					<!-- project list -->
					<div class="my-projects-view">
						<div class="row">
							<div class="col-lg-12">
								<div class="title-head d-flex justify-content-between align-items-center mb-4">
									<h4 class="mb-0">Payments</h4>
									
								</div>
								
								<div class="table-responsive table-box manage-projects-table">
									<table class="table table-center table-hover datatable no-sort">
										<thead class="thead-pink">
											<tr>
												<th>Name</th>
												<th>Type of  Payment</th>
												<th>Budget</th>
												<th>Status</th>
												<th>Date Paid</th>
												<th>Invoice</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Research </td>
												<td>
													Milestone														
												</td>
												<td>$2222</td>
												<td><span class="badge badge-pill bg-success-light">Completed</span></td>
												<td>29 Sep 2023</td>
												<td>
													<div class="action-table-data">															
														<div class="edit-delete-action m-0">
															<a href="javascript:void(0);" class="download-icon"><i class="feather-download"></i></a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>Design </td>
												<td>
													Milestone														
												</td>
												<td>$5762</td>
												<td><span class="badge badge-pill bg-warning-light">Pending</span></td>
												<td>29 Sep 2023</td>
												<td>
													<div class="action-table-data">															
														<div class="edit-delete-action m-0">
															<a href="javascript:void(0);" class="download-icon"><i class="feather-download"></i></a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>Development	</td>
												<td>
													Milestone														
												</td>
												<td>$4879</td>
												<td><span class="badge badge-pill bg-success-light">Completed</span></td>
												<td>29 Sep 2023</td>
												<td>
													<div class="action-table-data">															
														<div class="edit-delete-action m-0">
															<a href="javascript:void(0);" class="download-icon"><i class="feather-download"></i></a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						
					</div>
					<!-- project list -->
				
				</div>								
			</div>
		</div>
	</div>				
	<!-- /Page Content -->	
@endsection