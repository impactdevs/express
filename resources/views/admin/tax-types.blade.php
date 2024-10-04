<?php $page="tax-types";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
					@component('admin/components.breadcrumb')
						@slot('li_1') Settings @endslot
					    @slot('li_2') Dashboard @endslot
					    @slot('li_3') Tax Types @endslot
					@endcomponent
					<div class="row">
						<div class="col-xl-3 col-md-4">
						@component('admin/components.settings') 
						@endcomponent
						</div>
						
						<div class="col-xl-9 col-md-8">
							<div class="card card-table">
								<div class="card-body pt-0">
									<div class="card-header mb-4">
										<div class="row">
											<div class="col">
												<h5 class="card-title">Tax Types</h5>
											</div>
											<div class="col-auto">
												<a href="javascript:void(0);" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add_tax">Add New Tax</a>
											</div>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-center table-hover mb-0">
											<thead>
												<tr>
													<th>Tax Name </th>
													<th>Tax Percentage (%) </th>
													<th>Status</th>
													<th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>VAT</td>
													<td>14%</td>
													<td>
														<span class="badge bg-success-light">Active</span>
													</td>
													<td class="text-end">
														<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_tax" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_tax" class="btn btn-sm btn-white text-danger"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
												<tr>
													<td>GST</td>
													<td>30%</td>
													<td>
														<span class="badge bg-danger-light">Inactive</span>
													</td>
													<td class="text-end">
														<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_tax" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_tax" class="btn btn-sm btn-white text-danger"><i class="far fa-trash-alt me-1"></i>Delete</a>
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
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
@component('admin/components.modal-popup') 
@endcomponent		
@endsection