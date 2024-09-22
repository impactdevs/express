<?php $page="employe-list";?>
@extends('layout.mainlayout_admin')
@section('content')
		<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					@component('admin/components.breadcrumb')
					@slot('li_1') Subscriber List @endslot
				    @slot('li_2') Home @endslot
				    @slot('li_3') Subscriber List @endslot
					@endcomponent

					<div class="row">
						<div class="col-sm-12">
							<div class="subscribe-employe">
								<ul>
									<li class="active"><a href="{{url('admin/employe-list')}}">Employer </a></li>
									<li><a href="{{url('admin/freelance-list')}}">Freelancer</a></li>
								</ul>
							</div>
							<div class="card">
								<div class="table-responsive">
									<table class="table table-center table-hover mb-0 employe-tables employe-list">
										<thead>
											<tr>
												<th>
													<div class="form-check custom-checkbox">
													  <input type="checkbox" class="form-check-input" id="select-all">
													  <label class="form-check-label" for="customCheck1"></label>
													</div>
												</th>
												<th>Plan Name</th>	
												<th>Plan Type</th>	
												<th>Payment</th>	
												<th>Create Date</th>	
												<th>End Date</th>	
												<th>Status</th>	
												<th class="text-end">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
													  <input type="checkbox" class="form-check-input" id="customCheck1">
													  <label class="form-check-label" for="customCheck1"></label>
													</div>
												</td>
												<td><a href="javascript:void(0);">Basic</a></td>
												<td>Monthly</td>
												<td>$300.00</td>
												<td>25/03/2022</td>
												<td>14/03/2021</td>
												<td>
													<button class="btn active-btn">Active</button>
												</td>
												<td class="text-end subscription-end">
													<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
													<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
													  <input type="checkbox" class="form-check-input" id="customCheck1">
													  <label class="form-check-label" for="customCheck1"></label>
													</div>
												</td>
												<td><a href="javascript:void(0);">Enterprise</a></td>
												<td>Yearly</td>
												<td>$200.00</td>
												<td>28-02-2022</td>
												<td>28-02-2022</td>
												<td>
													<button class="btn active-btn">Active</button>
												</td>
												<td class="text-end subscription-end">
													<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
													<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
													  <input type="checkbox" class="form-check-input" id="customCheck1">
													  <label class="form-check-label" for="customCheck1"></label>
													</div>
												</td>
												<td><a href="javascript:void(0);">Professional</a></td>
												<td>Monthly</td>
												<td>$300.00</td>
												<td>28-02-2022</td>
												<td>28-02-2022</td>
												<td>
													<button class="btn inactive-btn">Inactive</button>
												</td>
												<td class="text-end subscription-end">
													<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
													<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
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
			<!-- /Page Wrapper -->
		</div>
		<!-- /Main Wrapper -->	
@component('admin/components.modal-popup')   
@endcomponent
@endsection