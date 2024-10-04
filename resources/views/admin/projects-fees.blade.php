<?php $page="projects-fees";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					@component('admin/components.breadcrumb')
						@slot('li_1') Projects Fees @endslot
					    @slot('li_2') Home @endslot
					    @slot('li_3') Fees @endslot
					    @slot('li_4') Projects Fees @endslot
					@endcomponent

					@component('admin/components.search-filter')
					@slot('li_1') Projects Fees @endslot
					@endcomponent

					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-center table-hover mb-0 datatable">
											<thead>
												<tr>
													<th>Name</th>
													<th>Info</th>	
													<th>Value</th>	
													<th class="text-end">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														Posting a Project
													</td>
													<td class="white-space">Marks a project as urgent. Receive a faster response from Freelancers to get your project started within 24 hours.</td>
													<td>$500.00</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														Featured 
													</td>
													<td class="white-space">Featured projects attract more,higher-quality bids.</td>
													<td>$450.00</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														Urgent 
													</td>
													<td class="white-space">Marks a project as urgent. Receive a faster response from Freelancers to get your project started within 24 hours.</td>
													<td>$590.00</td>
													<td class="text-end">
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
        </div>
		<!-- /Main Wrapper -->

@component('admin/components.modal-popup') 
@slot('li_1') Add Project Fees @endslot  
@endcomponent		
@endsection