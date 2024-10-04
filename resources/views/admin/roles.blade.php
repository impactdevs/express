<?php $page="roles";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					@component('admin/components.breadcrumb')
						@slot('li_1') Roles & Permission @endslot
					    @slot('li_2') Home @endslot
					    @slot('li_4') Roles @endslot
					@endcomponent
					@component('admin/components.search-filter')
					@slot('li_1') Roles @endslot
					@endcomponent
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-center table-hover mb-0 datatable">
											<thead>
												<tr>
													<th>Role Name</th>
													<th class="text-end">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														Admin
													</td>
													<td class="text-end">
														<a href="{{url('admin/roles-permission')}}" class="btn btn-sm bg-pink me-2"><i class="fas fa-user-shield"></i></a>
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														Client
													</td>
													
													<td class="text-end">
														<a href="{{url('admin/roles-permission')}}" class="btn btn-sm bg-pink me-2"><i class="fas fa-user-shield"></i></a>
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														Staff
													</td>
													<td class="text-end">
														<a href="{{url('admin/roles-permission')}}" class="btn btn-sm bg-pink me-2"><i class="fas fa-user-shield"></i></a>
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
@endcomponent
@endsection