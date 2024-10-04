<?php $page="localization-details";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
					@component('admin/components.breadcrumb')
						@slot('li_1') Settings @endslot
					    @slot('li_2') Home @endslot
					    @slot('li_4') Settings @endslot
					    @slot('li_3') Localization @endslot
					@endcomponent
					
					<div class="row">
						<div class="col-lg-12">

							@component('admin/components.settings')
							@endcomponent

							<div class="row">
								<div class="col-md-6">
									<div class="card">
										<div class="card-body pt-0">
											<div class="card-header">
												<h5 class="card-title">Localization Details</h5>
											</div>
											<form>
												<div class="settings-form">
													<div class="form-group">
														<label>Time Zone</label>
														<select class="select form-control">
															<option selected="selected">(UTC +5:30) Antarctica/Palmer</option>
															<option>(UTC+05:30) India</option> 
														</select>
													</div>
													<div class="form-group">
														<label>Date Format</label>
														<select class="select form-control">
															<option selected="selected">15 May 2016</option>
															<option>15/05/2016</option>
															<option>15.05.2016</option>
															<option>15-05-2016</option>
															<option>05/15/2016</option>
															<option>2016/05/15</option>
															<option>2016-05-15</option>
														</select>
													</div>
													<div class="form-group">
														<label>Time Format</label>
														<select class="select form-control">
															<option selected="selected">12 Hours</option>
															<option>24 Hours</option>
															<option>36 Hours</option>  
															<option>48 Hours</option>
															<option>60 Hours</option> 
														</select>
													</div>
													<div class="form-group">
														<label>Currency Symbol</label>
														<select class="select form-control">
															<option selected="selected">$</option>
															<option>₹</option>  
															<option>£</option>
															<option>€</option> 
														</select>
													</div>
													<div class="form-group mb-0">
														<div class="settings-btns">
															<button type="submit" class="btn btn-orange">Update</button>
														</div>
													</div>
												</div>
											</form>
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
@endsection