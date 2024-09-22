<?php $page="categories";?>
@extends('layout.mainlayout_admin')
@section('content')
	
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					@component('admin/components.breadcrumb')
						@slot('li_1') Categories @endslot
					    @slot('li_2') Home @endslot
					    @slot('li_4') Categories @endslot
					@endcomponent

					@component('admin/components.search-filter')
					@slot('li_1') Add Categories @endslot   
					@endcomponent

					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<div class="table-responsive">
											<table class="table table-center table-hover mb-0 datatable">
												<thead>
													<tr>
														<th>S.No</th>
														<th>Category Name</th>	
														<th class="text-end">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															1
														</td>
														<td>Graphics & Design</td>
														<td class="text-end">
															<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
															<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															2
														</td>
														<td>Cartoons</td>
														<td class="text-end">
															<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
															<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															3
														</td>
														<td>Flyers & Brochures	</td>
														<td class="text-end">
															<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
															<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															4
														</td>
														<td>Illustration</td>
														<td class="text-end">
															<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
															<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															5
														</td>
														<td>Sales & Marketing</td>
														<td class="text-end">
															<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
															<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
														</td>
													</tr>												
													<tr>
														<td>
															6
														</td>
														<td>Accounting / Finance</td>
														<td class="text-end">
															<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
															<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
														</td>
													</tr>												
													<tr>
														<td>
															7
														</td>
														<td>Telecommunications</td>
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
				</div>
			</div>
			<!-- /Page Wrapper -->
       </div>
	<!-- /Main Wrapper -->
@component('admin/components.modal-popup')   
@endcomponent	
@endsection