<?php $page="user-profile";?>
@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content report-box container-fluid">
					@component('admin/components.breadcrumb')
						@slot('li_1') Freelancer Profile @endslot
					    @slot('li_2') Home @endslot
					    @slot('li_3') Freelancer Profile @endslot
					@endcomponent
					
					@component('admin/components.user-profile')
					@endcomponent

					<div class="row">
						<div class="col-sm-12">
							<div class="card profile-home">
								<div class="subscribe-employe users-list transaction-list">
									<ul>
										<li class="active"><a href="{{url('admin/user-profile')}}"><img class="me-2" src="{{ URL::asset('/assets_admin/img/icon/icon-12.svg')}}" alt="">Personal </a></li>
										<li><a href="{{url('admin/profile-transactions')}}"><img class="me-2" src="{{ URL::asset('/assets_admin/img/icon/icon-10.svg')}}" alt="">Transactions </a></li>
										<li><a href="{{url('admin/activities')}}"><img class="me-2" src="{{ URL::asset('/assets_admin/img/icon/icon-11.svg')}}" alt="">Activities</a></li>
									</ul>
									<div class="profile-icon-group">
										<div class="d-flex">
											<a href="javascript:void(0);" class="reset-icon me-1">
												<img src="{{ URL::asset('/assets_admin/img/icon/icon-03.svg')}}" alt="">
											</a>
											<a class="suspend-icon" href="javascript:void(0);">
												<img src="{{ URL::asset('/assets_admin/img/icon/icon-04.svg')}}" alt="">
											</a>
										</div>
									</div>
								</div>
								
								<!-- Active Profile Header -->
								<div class="page-header profile-information">
									<div class="row align-items-center">
										<div class="col-12">
											<h3 class="page-title">Personal Information</h3>
											<p> Basic info, like name and address etc that used on platform.</p>
										</div>
									</div>
								</div>
								<!-- /Active Profile Header -->
								
								<!-- Basic Information -->
								<div class="row">
									<div class="col-md-6">
										<div class="basic-info">
											<h4>BASIC INFORMATION</h4>
											<ul class="information-list">
												<li>Username <span>William</span></li>
												<li>Email Address <span>william@example.com</span></li>
												<li>Full Name <span>William Cooper</span></li>
												<li>Display Name <span>Ishtiyak</span></li>
												<li>Mobile Number <span>707 229 8991</span></li>
												<li>Date of Birth <span>Jan 08, 1997</span></li>
												<li >Gender <span>Not updated yet</span></li>
											</ul>
										</div>
									</div>
									<div class="col-md-6">
										<div class="basic-info">
											<h4>RESIDENTIAL ADDRESS</h4>
											<ul class="information-list">
												<li>Address Line <span>Not updated yet</span></li>
												<li>City<span>Not updated yet</span></li>
												<li>State / Province<span>Not updated yet</span></li>
												<li>Zip / Postal Code<span>Not updated yet</span></li>
												<li>Country <span>Us</span></li>
											</ul>
										</div>
									</div>
									<div class="col-md-12">
										<div class="basic-info additional-space">
											<h4>ADDITIONAL INFORMATION</h4>
										</div>	
										<div class="row">
											<div class="col-lg-3 col-md-6">
												<div class="additional-info">
													<p>Join Date </p>
													<h5>May 20, 2021</h5>
												</div>
											</div>
											<div class="col-lg-3 col-md-6">
												<div class="additional-info">
													<p>Reg Method</p>
													<h5>By Email</h5>
												</div>
											</div>
											<div class="col-lg-3 col-md-6">
												<div class="additional-info">
													<p>Email Verified At</p>
													<h5>May 20, 2021 04:53 AM</h5>
												</div>
											</div>
											<div class="col-lg-3 col-md-6">
												<div class="additional-info mb-0">
													<p>Save Activity Logs</p>
													<h5>Enabled</h5>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Basic Information -->
								
							</div>			
						</div>			
					</div>
				</div>			
			</div>
			<!-- /Page Wrapper -->
		</div>
		<!-- /Main Wrapper -->
@component('admin/components.modal-popup') 
@endcomponent		
@endsection