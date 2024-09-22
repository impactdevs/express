<?php $page="contests-fees";?>
@extends('layout.mainlayout_admin')
@section('content')
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					@component('admin/components.breadcrumb')
						@slot('li_1') Contests Fees @endslot
					    @slot('li_2') Home @endslot
					    @slot('li_3') Fees @endslot
					    @slot('li_4') Contests Fees @endslot
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
												<th>Info</th>	
												<th>Value</th>	
												<th class="text-end">Actions</th>
											</tr>
										</thead>
										<tbody>
												<tr>
													<td>
														Posting a Contest
													</td>
													<td class="white-space">Free to post a contest and receive entries. A monetary prize must be paid upfront to release as payment for work provided. Optional contest upgrades incur additional costs. Employers are eligible for a 100% money back guarantee.</td>
													<td>FREE</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														Posting a Contest
													</td>
													<td class="white-space">Free to post a contest and receive entries. A monetary prize must be paid upfront to release as payment for work provided. Optional contest upgrades incur additional costs. Employers are eligible for a 100% money back guarantee.</td>
													<td>FREE</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														Awarding to additionalfreelancers 	
													</td>
													<td class="white-space">There are no fees for awarding additional entries a prize. Payment must be provided equal to the original prize amount for each additional entry awarded.</td>
													<td>FREE</td>
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
@slot('li_1') Add Contests Fees @endslot    
@endcomponent
@endsection