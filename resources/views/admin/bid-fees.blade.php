<?php $page="bid-fees";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					@component('admin/components.breadcrumb')
						@slot('li_1') Bid Fees @endslot
					    @slot('li_2') Home @endslot
					    @slot('li_3') Fees @endslot
					    @slot('li_4') Bid Fees @endslot   
					@endcomponent

					@component('admin/components.search-filter')
					@slot('li_1') Add Bid @endslot   
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
														Bidding on projects
													</td>
													<td class="white-space">Freelancers are able to bid for free up to their monthly allocation of bids provided by their membership package. Optional upgrades to promote a bid will incur additional costs.</td>
													<td>FREE</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														Sponsored bid 	
													</td>
													<td class="white-space">Sponsoring your bid is a way to get noticed immediately by Employers. Use it to move your bid to the top of the bid list by paying a sponsorship amount. Sponsored bids are ranked in the bid list by highest amount paid then by reputation.</td>
													<td>0.75% of bid amount(minimum $5.00USD, maximum$20.00 USD)</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a>
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
													Highlight Bid 	
													</td>
													<td class="white-space">Highlight your bid to visually stand out to the Employer from other bidders.</td>
													<td>$50.00
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
