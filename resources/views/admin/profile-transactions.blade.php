<?php $page="profile-transactions";?>
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
										<li ><a href="{{url('admin/user-profile')}}"><img class="me-2" src="{{ URL::asset('/assets_admin/img/icon/icon-09.svg')}}" alt="">Personal </a></li>
										<li class="active"><a href="{{url('admin/profile-transactions')}}"><img class="me-2" src="{{ URL::asset('/assets_admin/img/icon/icon-13.svg')}}" alt="">Transactions </a></li>
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
										<div class="col">
											<h3 class="page-title">Recent Transaction</h3>
											<p> All the recent transaction made by user.</p>
										</div>
									</div>
								</div>
								<!-- /Active Profile Header -->
								
								<div class="card">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-center table-hover mb-0 datatable">
												<thead>
													<tr>
														<th>
															<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="select-all">
															<label class="form-check-label" ></label>
															</div>
														</th>
														<th>Order</th>
														<th>Type</th>	
														<th>Details</th>	
														<th>Reference</th>	
														<th>Amount</th>	
														<th></th>	
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" >
																<label class="form-check-label" ></label>
															</div>
														</td>
														<td>#24586414</td>
														<td>
															<div class="table-avatar user-profile">
																<a href="{{url('profile')}}"><i class="fas fa-exchange-alt exchange"></i></a>
																<div>
																	<h5><a href="{{url('profile')}}">Received from Investment Account</a></h5>
																	<p class="receive-date">	Mar 13, 2022<span>Completed</span></p>
																</div>
															</div>
														</td>
														<td ><button class="btn received-btn">Recieved</button></td>
														<td>
															151410331 
														</td>
														<td>
															<div class="table-avatar content-user">
																<div>
																	<h5 class="text-success">+ 4,335.006 USD</h5>
																	<p>	Balance : 1,335.006 USD</p>
																</div>
															</div>
														</td>
														<td class="text-end complete-show">
															<a href="javascript:void(0);" ><i class="fas fa-arrow-right" data-bs-toggle="modal" data-bs-target="#transaction-category"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" >
																<label class="form-check-label" ></label>
															</div>
														</td>
														<td>#34586414</td>
														<td>
															<div class="table-avatar user-profile">
																<a href="{{url('profile')}}"><i class="fas fa-undo-alt refresh"></i></a>
																<div>
																	<h5><a href="{{url('profile')}}">Received from Investment Account</a></h5>
																	<p class="receive-date">	Jun 13, 2022<span>Completed</span></p>
																</div>
															</div>
														</td>
														<td ><button class="btn withdraw-btn text-danger">Withdrawn</button></td>
														<td>
															261410331 
														</td>
														<td>
															<div class="table-avatar content-user">
																<div>
																	<h5 class="text-danger">- 5,335.006 USD</h5>
																	<p>	Balance : 1,335.006 USD</p>
																</div>
															</div>
														</td>
														<td class="text-end complete-show">
															<a href="javascript:void(0);" ><i class="fas fa-arrow-right" data-bs-toggle="modal" data-bs-target="#transaction-category"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" >
																<label class="form-check-label" ></label>
															</div>
														</td>
														<td>#34586414</td>
														<td>
															<div class="table-avatar user-profile">
																<a href="{{url('profile')}}"><i class="fas fa-exchange-alt exchange"></i></a>
																<div>
																	<h5><a href="{{url('profile')}}">Received from Investment Account</a></h5>
																	<p class="receive-date">	Mar 13, 2022<span>Completed</span></p>
																</div>
															</div>
														</td>
														<td ><button class="btn received-btn">Recieved</button></td>
														<td>
															341410331 
														</td>
														<td>
															<div class="table-avatar content-user">
																<div>
																	<h5 class="text-success">+ 4,335.006 USD</h5>
																	<p>	Balance : 1,335.006 USD</p>
																</div>
															</div>
														</td>
														<td class="text-end complete-show">
															<a href="javascript:void(0);" ><i class="fas fa-arrow-right" data-bs-toggle="modal" data-bs-target="#transaction-category"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" >
																<label class="form-check-label" ></label>
															</div>
														</td>
														<td>#34586414</td>
														<td>
															<div class="table-avatar user-profile">
																<a href="{{url('profile')}}"><i class="fas fa-undo-alt refresh"></i></a>
																<div>
																	<h5><a href="{{url('profile')}}">Received from Investment Account</a></h5>
																	<p class="receive-date">	Jun 13, 2022<span>Completed</span></p>
																</div>
															</div>
														</td>
														<td ><button class="btn withdraw-btn text-danger">Withdrawn</button></td>
														<td>
															261410331 
														</td>
														<td>
															<div class="table-avatar content-user">
																<div>
																	<h5 class="text-danger">- 5,335.006 USD</h5>
																	<p>	Balance : 1,335.006 USD</p>
																</div>
															</div>
														</td>
														<td class="text-end complete-show">
															<a href="javascript:void(0);" ><i class="fas fa-arrow-right" data-bs-toggle="modal" data-bs-target="#transaction-category"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" >
																<label class="form-check-label" ></label>
															</div>
														</td>
														<td>#24586414</td>
														<td>
															<div class="table-avatar user-profile">
																<a href="{{url('profile')}}"><i class="fas fa-exchange-alt exchange"></i></a>
																<div>
																	<h5><a href="{{url('profile')}}">Received from Investment Account</a></h5>
																	<p class="receive-date">	Mar 13, 2022<span>Completed</span></p>
																</div>
															</div>
														</td>
														<td ><button class="btn received-btn">Recieved</button></td>
														<td>
															151410331 
														</td>
														<td>
															<div class="table-avatar content-user">
																<div>
																	<h5 class="text-success">+ 4,335.006 USD</h5>
																	<p>	Balance : 1,335.006 USD</p>
																</div>
															</div>
														</td>
														<td class="text-end complete-show">
															<a href="javascript:void(0);" ><i class="fas fa-arrow-right" data-bs-toggle="modal" data-bs-target="#transaction-category"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" >
																<label class="form-check-label" ></label>
															</div>
														</td>
														<td>#34586414</td>
														<td>
															<div class="table-avatar user-profile">
																<a href="{{url('profile')}}"><i class="fas fa-undo-alt refresh"></i></a>
																<div>
																	<h5><a href="{{url('profile')}}">Received from Investment Account</a></h5>
																	<p class="receive-date">	Jun 13, 2022<span>Completed</span></p>
																</div>
															</div>
														</td>
														<td ><button class="btn withdraw-btn text-danger">Withdrawn</button></td>
														<td>
															261410331 
														</td>
														<td>
															<div class="table-avatar content-user">
																<div>
																	<h5 class="text-danger">- 5,335.006 USD</h5>
																	<p>	Balance : 1,335.006 USD</p>
																</div>
															</div>
														</td>
														<td class="text-end complete-show">
															<a href="javascript:void(0);" ><i class="fas fa-arrow-right" data-bs-toggle="modal" data-bs-target="#transaction-category"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" >
																<label class="form-check-label" ></label>
															</div>
														</td>
														<td>#34586414</td>
														<td>
															<div class="table-avatar user-profile">
																<a href="{{url('profile')}}"><i class="fas fa-exchange-alt exchange"></i></a>
																<div>
																	<h5><a href="{{url('profile')}}">Received from Investment Account</a></h5>
																	<p class="receive-date">	Mar 13, 2022<span>Completed</span></p>
																</div>
															</div>
														</td>
														<td ><button class="btn received-btn">Recieved</button></td>
														<td>
															341410331 
														</td>
														<td>
															<div class="table-avatar content-user">
																<div>
																	<h5 class="text-success">+ 4,335.006 USD</h5>
																	<p>	Balance : 1,335.006 USD</p>
																</div>
															</div>
														</td>
														<td class="text-end complete-show">
															<a href="javascript:void(0);" ><i class="fas fa-arrow-right" data-bs-toggle="modal" data-bs-target="#transaction-category"></i></a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								
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