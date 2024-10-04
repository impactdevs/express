<?php $page="freelancer-membership";?>
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
															<a class="active" href="{{url('freelancer-membership')}}">Plan & Billing</a>
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
								<div class="dashboard-sec payout-section freelancer-statements plan-billing">
									<div class="page-title portfolio-title">
										<h3 class="mb-0">Plan & Billing</h3>
									</div>
									<div class="plan-billing-section">
										<div class="row row-gap">
											<div class="col-xl-4 col-md-6">
												<div class="package-detail">
													<h4>Basic Plan</h4>
													<p>Go Pro, Best for the individuals</p>
													<h3 class="package-price">$19.00 <span>/ Month</span></h3>
													<div class="package-feature">
														<ul>
															<li>12 Project Credits</li>
															<li>10 Allowed Services</li>
															<li>20 Days visibility</li>
															<li>5 Featured Services</li>
															<li>20 Days visibility</li>
															<li>30 Days Package Expiry</li>
															<li class="non-check">Profile Featured</li>
														</ul>
													</div>
													<a href="#payout_modal" data-bs-toggle="modal" class="btn btn-outline-primary btn-block">Select Plan</a>
												</div>
											</div>
											
											<div class="col-xl-4 col-md-6">
												<div class="package-detail">
													<h4>Business </h4>
													<p>Highest selling package features</p>
													<h3 class="package-price">$29.00<span>/ Month</span></h3>
													<div class="package-feature">
														<ul>
															<li>15 Project Credits</li>
															<li>12 Allowed Services</li>
															<li>25 Days visibility</li>
															<li>10 Featured Services</li>
															<li>30 Days visibility</li>
															<li>40 Days Package Expiry</li>
															<li>Profile Featured</li>
														</ul>
													</div>
													<a href="#payout_modal" data-bs-toggle="modal" class="btn btn-outline-primary btn-block">Select Plan</a>
												</div>
											</div>
											
											<div class="col-xl-4 col-md-6">
												<div class="package-detail">
													<h4>The Unlimited </h4>
													<p>Drive crazy, unlimited on the go</p>
													<h3 class="package-price">$79.00<span>/ Month</span></h3>
													<div class="package-feature">
														<ul>
															<li>Unlimited Project Credits</li>
															<li>Unlimited Services</li>
															<li>Services Never Expire</li>
															<li>20 Featured Services</li>
															<li>Services Never Expire</li>
															<li>Package Never Expire</li>
															<li>Profile Featured</li>
														</ul>
													</div>
													<a href="#payout_modal" data-bs-toggle="modal" class="btn btn-outline-primary btn-block">Select Plan</a>
												</div>
											</div>
										</div>
									</div>
								  
									<div class="page-title ">
										<h3 >Current Plan</h3>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<div class="member-plan pro-box">
												<div class="member-detail">
													<div class="row">
														<div class="col-md-4">
															<h5>The Unlimited</h5>
															<div class="yr-amt">Our most popular plan for small teams.</div>													
															<div class="expiry-on"><span><i class="feather-calendar"></i>Renew Date:</span> 24 JAN 2022</div>												
														</div>
														<div class="col-md-8 change-plan mt-3 mt-md-0">
															<div>
																<h3>$1200</h3>
																<div class="yr-duration">Duration: One Year</div>
															</div>
															<div class="change-plan-btn" >
																<a href="javascript:void(0);" class="btn  btn-primary-lite">Cancel Subscription</a>
																<a href="javascript:void(0);" class="btn btn-primary black-btn">Change Plan</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Table -->
									<div class="table-top-section">
										<div class="table-header">
											<h5 class="mb-0">Statement</h5>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>Purchased Date</th>
													<th>Details</th>
													<th>Expiry Date</th>
													<th>Type</th>
													<th>Price</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>15 Sep 2021</td>
													<td class="invoice-td">
														<p class="mb-0 fw-bold">Business</p>
														<a href="javascript:void(0);" class="">Invoice : IVIP12023598</a>
													</td>
													<td>15th July 2022</td>
													<td>Monthly</td>
													<td>$200.00</td>
													<td><div class="badge badge-danger-lite"><span>Inactive</span></div></td>
												</tr>
												<tr>
													<td>18 Oct 2021</td>
													<td class="invoice-td">
														<p class="mb-0 fw-bold">The Unlimited</p>
														<a href="javascript:void(0);" class="">Invoice : IVIP12023599</a>
													</td>
													<td>18th July 2023</td>
													<td>Yearly</td>
													<td>$209.00</td>
													<td><div class="badge badge-paid"><span>Active</span></div></td>
												</tr>
												<tr>
													<td>18 Jan 2021</td>
													<td class="invoice-td">
														<p class="mb-0 fw-bold">Basic Plan</p>
														<a href="javascript:void(0);" class="">Invoice : IVIP12023600</a>
													</td>
													<td>19th July 2024</td>
													<td>Yearly</td>
													<td>$219.00</td>
													<td><div class="badge badge-paid"><span>Active</span></div></td>
												</tr>
												<tr>
													<td>18 Sep 2021</td>
													<td class="invoice-td">
														<p class="mb-0 fw-bold">The Unlimited</p>
														<a href="javascript:void(0);" class="">Invoice : IVIP12023601</a>
													</td>
													<td>19th July 2022</td>
													<td>Monthly</td>
													<td>$319.00</td>
													<td><div class="badge badge-danger-lite"><span>Inactive</span></div></td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- /Table -->
									
								</div>								
							</div>								
						</div>					
					</div>
				</div>				
				<!-- /Page Content -->
				@component('components.modal-popup')
					
				@endcomponent

@endsection