<?php $page="providers";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					@component('admin/components.breadcrumb')
						@slot('li_1') Providers @endslot
					    @slot('li_2') Home @endslot
					    @slot('li_4') Providers @endslot
					@endcomponent
					@component('admin/components.search-filter')
					@slot('li_1') Company Name @endslot
					@endcomponent
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-center table-hover mb-0 datatable">
											<thead>
												<tr>
													<th></th>
													<th>ID</th>
													<th>Logo</th>
													<th>Company name</th>
													<th>Primary contact</th>	
													<th>website</th>	
													<th>Total Projects</th>	
													<th>Status</th>	
													<th class="text-end">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck5">
														  <label class="form-check-label" for="customCheck5"></label>
														</div>
													</td>
													<td>C1</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="{{ URL::asset('/assets_admin/img/company/img-1.png')}}" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);">Focused Holistic Hardware</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}">
																Emily Smith
															</a>
														</h2>			
													</td>
													<td>https://focusedhardware.de</td>
													<td>
														120
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-enable">Enabled</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
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
													<td>C2</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="{{ URL::asset('/assets_admin/img/company/img-2.png')}}" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);">Phased Actuating Interface</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}">
																Joshuah Runolfsdottir
															</a>
														</h2>			
													</td>
													<td>https://phasedactuating.com</td>
													<td>
														132
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-disable">Disable</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck2">
														  <label class="form-check-label" for="customCheck2"></label>
														</div>
													</td>
													<td>C3</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="{{ URL::asset('/assets_admin/img/company/img-3.png')}}" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);">Intuitive Global Encoding</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}">
																Amy Wilkinson
															</a>
														</h2>			
													</td>
													<td>https://globalencoding.com</td>
													<td>
														90
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-enable">Enabled</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck3">
														  <label class="form-check-label" for="customCheck3"></label>
														</div>
													</td>
													<td>C4</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="{{ URL::asset('/assets_admin/img/company/img-4.png')}}" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);">Visionary Scalable Alliance</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}">
																Jimmy Richardson
															</a>
														</h2>			
													</td>
													<td>https://visionaryscalable.com</td>
													<td>
														110
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-disable">Disable</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck4">
														  <label class="form-check-label" for="customCheck4"></label>
														</div>
													</td>
													<td>C5</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="{{ URL::asset('/assets_admin/img/company/img-5.png')}}" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);">Self-Enabling Neutral Matrix</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}">
																Damon Cohn
															</a>
														</h2>			
													</td>
													<td>https://neutralmatrix.com</td>
													<td>
														158
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-disable">Disable</a>
													</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck6">
														  <label class="form-check-label" for="customCheck6"></label>
														</div>
													</td>
													<td>C6</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="{{ URL::asset('/assets_admin/img/company/img-6.png')}}" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);">Amaze Tech</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}">
																Jacqueline Daye
															</a>
														</h2>			
													</td>
													<td>https://amazetech.de</td>
													<td>
														120
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-enable">Enabled</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck7">
														  <label class="form-check-label" for="customCheck7"></label>
														</div>
													</td>
													<td>C7</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="{{ URL::asset('/assets_admin/img/company/img-7.png')}}" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);">Park Inc</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}">
																Tony Ingle
															</a>
														</h2>			
													</td>
													<td>https://parkinc.de</td>
													<td>
														120
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-disable">Disable</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck8">
														  <label class="form-check-label" for="customCheck8"></label>
														</div>
													</td>
													<td>C8</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="{{ URL::asset('/assets_admin/img/company/img-8.png')}}" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);">Tech Zone</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}">
																Albert Boone
															</a>
														</h2>			
													</td>
													<td>https://techzone.de</td>
													<td>
														120
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-enable">Enabled</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck9">
														  <label class="form-check-label" for="customCheck9"></label>
														</div>
													</td>
													<td>C9</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="{{ URL::asset('/assets_admin/img/company/img-9.png')}}" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);">ABC Software</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}">
																Kathleen Kaiser
															</a>
														</h2>			
													</td>
													<td>https://abcsoftware.de</td>
													<td>
														120
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-enable">Enabled</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck10">
														  <label class="form-check-label" for="customCheck10"></label>
														</div>
													</td>
													<td>C10</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="{{ URL::asset('/assets_admin/img/company/img-10.png')}}" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);">Host Technologies</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('admin/profile')}}">
																Mickey Bernier
															</a>
														</h2>			
													</td>
													<td>https://hosttechnologies.de</td>
													<td>
														120
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-disable">Disable</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
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