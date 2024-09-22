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
										<a class="nav-link active" href="{{url('milestones')}}">Milestones</a>
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
							<div class="my-projects-view">
								<div class="row">
									<div class="col-lg-12">
										<div class="title-head d-flex justify-content-between align-items-center mb-4">
											<h4 class="mb-0">Milestones</h4>
											<a href="#add-milestone" class="login-btn btn-primary" data-bs-toggle="modal">Add Milestone</a>
										</div>
										
										<div class="table-responsive table-box manage-projects-table">
											<table class="table table-center table-hover datatable no-sort">
												<thead class="thead-pink">
													<tr>
														<th>Name</th>
														<th>Budget</th>
														<th>Progress</th>
														<th>Start date</th>
														<th>Due date</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Logo Design</td>
														<td>$2222</td>
														<td>
															<div class="d-flex align-items-center">
																<div class="progress progress-md mb-0">
																	<div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
																<p class="mb-0 orange-text text-center ms-3">45%</p>
															</div>															
														</td>
														<td>29 Sep 2023</td>
														<td>29 Sep 2023</td>
														<td><span class="badge badge-pill bg-danger-light">Unpaid</span></td>
														<td>
															<div class="action-table-data">
																<a href="javascript:void(0);" class="btn btn-request disabled">Initiate</a>
																<a href="#view-milestone" data-bs-toggle="modal" class="view-icon me-2"><i class="feather-eye me-1"></i>View</a>
																<div>
																	<select class="select">
																		<option value="">Select</option>
																		<option value="">Approved</option>
																		<option value="">On Hold</option>
																		<option value="">Cancelled</option>
																	</select>
																</div>
																
																<div class="edit-delete-action">
																	<a href="#edit-milestone" class="me-2" data-bs-toggle="modal"><i class="feather-edit-2"></i></a>
																	<a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>Create desktop applications</td>
														<td>$5762</td>
														<td>
															<div class="d-flex align-items-center">
																<div class="progress progress-md mb-0">
																	<div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
																<p class="mb-0 orange-text text-center ms-3">50%</p>
															</div>															
														</td>
														<td>25 Sep 2023</td>
														<td>25 Sep 2023</td>
														<td><span class="badge badge-pill bg-danger-light">Unpaid</span></td>
														<td>
															<div class="action-table-data">
																<a href="#success-milestone" data-bs-toggle="modal" class="btn btn-request">Initiate</a>
																<a href="#view-milestone" data-bs-toggle="modal" class="view-icon me-2"><i class="feather-eye me-1"></i>View</a>
																<div>
																	<select class="select">
																		<option value="">Select</option>
																		<option value="">Approved</option>
																		<option value="">On Hold</option>
																		<option value="">Cancelled</option>
																	</select>
																</div>
																
																<div class="edit-delete-action">
																	<a href="javascript:void(0);" class="me-2"><i class="feather-edit-2"></i></a>
																	<a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>PHP, Javascript Projects </td>
														<td>$4879</td>
														<td>
															<div class="d-flex align-items-center">
																<div class="progress progress-md mb-0">
																	<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
																<p class="mb-0 orange-text text-center ms-3">100%</p>
															</div>															
														</td>
														<td>17 Sep 2023</td>
														<td>17 Sep 2023</td>
														<td><span class="badge badge-pill bg-success-light">Paid</span></td>
														<td>
															<div class="action-table-data">
																<a href="javascript:void(0);" class="btn btn-request disabled">Initiate</a>
																<a href="#view-milestone" data-bs-toggle="modal" class="view-icon me-2"><i class="feather-eye me-1"></i>View</a>
																<div>
																	<select class="select">
																		<option value="">Select</option>
																		<option value="">Approved</option>
																		<option value="">On Hold</option>
																		<option value="">Cancelled</option>
																	</select>
																</div>
																
																<div class="edit-delete-action">
																	<a href="#edit-milestone" class="me-2" data-bs-toggle="modal"><i class="feather-edit-2"></i></a>
																	<a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>Website Designer Required </td>
														<td>$3651</td>
														<td>
															<div class="d-flex align-items-center">
																<div class="progress progress-md mb-0">
																	<div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
																<p class="mb-0 orange-text text-center ms-3">50%</p>
															</div>															
														</td>
														<td>11 Sep 2023</td>
														<td>11 Sep 2023</td>
														<td><span class="badge badge-pill bg-danger-light">Unpaid</span></td>
														<td>
															<div class="action-table-data">
																<a href="javascript:void(0);" class="btn btn-request disabled">Initiate</a>
																<a href="#view-milestone" data-bs-toggle="modal" class="view-icon me-2"><i class="feather-eye me-1"></i>View</a>
																<div>
																	<select class="select">
																		<option value="">Select</option>
																		<option value="">Approved</option>
																		<option value="">On Hold</option>
																		<option value="">Cancelled</option>
																	</select>
																</div>
																
																<div class="edit-delete-action">
																	<a href="#edit-milestone" class="me-2" data-bs-toggle="modal"><i class="feather-edit-2"></i></a>
																	<a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>Swift / SwiftUI Developer</td>
														<td>$2789</td>
														<td>
															<div class="d-flex align-items-center">
																<div class="progress progress-md mb-0">
																	<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
																<p class="mb-0 orange-text text-center ms-3">100%</p>
															</div>															
														</td>
														<td>05 Sep 2023</td>
														<td>05 Sep 2023</td>
														<td><span class="badge badge-pill bg-success-light">Paid</span></td>
														<td>
															<div class="action-table-data">
																<a href="javascript:void(0);" class="btn btn-request disabled">Initiate</a>
																<a href="#view-milestone" data-bs-toggle="modal" class="view-icon me-2"><i class="feather-eye me-1"></i>View</a>
																<div>
																	<select class="select">
																		<option value="">Select</option>
																		<option value="">Approved</option>
																		<option value="">On Hold</option>
																		<option value="">Cancelled</option>
																	</select>
																</div>
																
																<div class="edit-delete-action">
																	<a href="#edit-milestone" class="me-2" data-bs-toggle="modal"><i class="feather-edit-2"></i></a>
																	<a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>Full-stack Developer </td>
														<td>$7853</td>
														<td>
															<div class="d-flex align-items-center">
																<div class="progress progress-md mb-0">
																	<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
																<p class="mb-0 orange-text text-center ms-3">100%</p>
															</div>															
														</td>
														<td>01 Sep 2023</td>
														<td>01 Sep 2023</td>
														<td><span class="badge badge-pill bg-success-light">Paid</span></td>
														<td>
															<div class="action-table-data">
																<a href="javascript:void(0);" class="btn btn-request disabled">Initiate</a>
																<a href="#view-milestone" data-bs-toggle="modal" class="view-icon me-2"><i class="feather-eye me-1"></i>View</a>
																<div>
																	<select class="select">
																		<option value="">Select</option>
																		<option value="">Approved</option>
																		<option value="">On Hold</option>
																		<option value="">Cancelled</option>
																	</select>
																</div>
																
																<div class="edit-delete-action">
																	<a href="#edit-milestone" class="me-2" data-bs-toggle="modal"><i class="feather-edit-2"></i></a>
																	<a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
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
   
		
@component('components.modal-popup')  
@endcomponent		
@endsection