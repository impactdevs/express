<?php $page="project-invoice";?>
@extends('layout.mainlayout_admin')
@section('content')
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content report-box container-fluid">
				
					@component('admin/components.breadcrumb')
					@slot('li_1') Reports @endslot
				    @slot('li_2') Home @endslot
				    @slot('li_3') Reports @endslot
					@endcomponent
					
					<!-- Project Chart -->
					<div class="project-chart">
						<div class="row">
							<div class="col-xl-12 d-flex">
								<div class="card flex-fill">
									<div class="card-header">
										<div class="d-flex justify-content-between align-items-center">
											<h5 class="card-title">Invoices Report</h5>

											<div class="dropdown">
												<button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
													2022
												</button>
												<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
													<li>
														<a href="javascript:void(0);" class="dropdown-item">2021</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">2022</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">2020</a>
													</li>												
												</ul>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-bar-stacked"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Project Chart -->
					
					<!-- Project Download -->
					<div class="project-download">
						<div class="title-group d-flex">
							<h2>Invoice</h2>
							<div class="down-load">
								<a href="javascript:void(0);" class="btn-primary"><i class="fas fa-cloud-download-alt"></i>Download</a>
							</div>
						</div>
						<div class="select-group">
							<div class="row">
								<div class="col-lg-2 col-md-6">
									<select class="form-select">
										<option> Name</option>
										<option>Option 1</option>
										<option>Option 2</option>
										<option>Option 3</option>
										<option>Option 4</option>
										<option>Option 5</option>
									</select>
								</div>
								<div class="col-lg-2 col-md-6">
									<select class="form-select">
										<option> Project name</option>
										<option>Option 1</option>
										<option>Option 2</option>
										<option>Option 3</option>
										<option>Option 4</option>
										<option>Option 5</option>
									</select>
								</div>
								<div class="col-lg-2 col-md-6">
									<select class="form-select">
										<option> Date</option>
										<option>Option 1</option>
										<option>Option 2</option>
										<option>Option 3</option>
										<option>Option 4</option>
										<option>Option 5</option>
									</select>
								</div>
								<div class="col-lg-2 col-md-6">
									<select class="form-select">
										<option> Freelancer</option>
										<option>Option 1</option>
										<option>Option 2</option>
										<option>Option 3</option>
										<option>Option 4</option>
										<option>Option 5</option>
									</select>
								</div>
								<div class="col-lg-2 col-md-6">
									<select class="form-select">
										<option> status</option>
										<option>Option 1</option>
										<option>Option 2</option>
										<option>Option 3</option>
										<option>Option 4</option>
										<option>Option 5</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<!-- /Project Download -->
					
					<!-- Employer Project -->
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-center table-hover mb-0 datatable">
									<thead>
										<tr>
											<th>
												<div class="form-check custom-checkbox">
												  <input type="checkbox" class="form-check-input" id="select-all">
												  <label class="form-check-label" for="customCheck1"></label>
												</div>
											</th>
											<th>Invoice No</th>
											<th>Name</th>
											<th>Project Name</th>	
											<th>Invoice Date</th>	
											<th>Price</th>	
											<th>Paid date</th>	
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
											<td><a href="javascript:void(0);">#55454</a></td>
											<td><a href="javascript:void(0);" class="active-name">Hendry</a></td>
											<td><a href="javascript:void(0);">UI/UX Design</a></td>
											<td>25/03/20022</td>
											<td>$450.44</td>
											<td>25/03/20022</td>
											<td>
												<button class="btn active-btn">Paid</button>
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
											<td><a href="javascript:void(0);">#55454</a></td>
											<td><a href="javascript:void(0);" class="active-name">Mark</a></td>
											<td><a href="javascript:void(0);">Doccure</a></td>
											<td>28-02-2022</td>
											<td>$450.44</td>
											<td>25/03/20022</td>
											<td>
												<button class="btn active-btn">Paid</button>
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
											<td><a href="javascript:void(0);">#55454</a></td>
											<td><a href="javascript:void(0);" class="active-name">Steawart</a></td>
											<td><a href="javascript:void(0);">SmartHR</a></td>
											<td>28-02-2022</td>
											<td>$450.44</td>
											<td>25/03/20022</td>
											<td>
												<button class="btn inactive-btn">Unpaid</button>
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
					<!-- /Employer Project -->
					
				</div>
				<!-- /Page Wrapper -->
			</div>
        </div>
		<!-- /Main Wrapper -->
@component('admin/components.modal-popup')   
@endcomponent		
@endsection