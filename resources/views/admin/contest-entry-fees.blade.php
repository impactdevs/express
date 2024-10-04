<?php $page="contest-entry-fees";?>
@extends('layout.mainlayout_admin')
@section('content')
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					@component('admin/components.breadcrumb')
						@slot('li_1') Contest Entry Fees @endslot
					    @slot('li_2') Home @endslot
					    @slot('li_3') Fees @endslot
					    @slot('li_4') Contest Entry Fees @endslot
					@endcomponent 

					@component('admin/components.search-filter')
					@slot('li_1') Add Fees @endslot   
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
													<th>Value</th>	
													<th class="text-end">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														Submit an Entry	
													</td>
													<td>FREE</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														Sealed Entry		
													</td>
													<td>$30.00</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
													Highlight Entry	
													</td>
													<td>$30.00</td>
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
@endcomponent
@endsection