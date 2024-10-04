<?php $page="verify-identity";?>
@extends('layout.mainlayout')
@section('content')

			<!-- Page Content -->
			<div class="content content-page bookmark">
				<div class="container">
					<div class="row">
                        @include('layout.partials.nav-employer')
						<div class="col-xl-9 col-lg-8">
							<div class="dashboard-sec payout-section freelancer-statements">
								<div class="page-title portfolio-title">
									<h3 class="mb-0">Verification Details</h3>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-12">
										<div class="mb-3">
											<label class="focus-label">Document Type</label>
											<select  class="form-control select">
												<option value="0">Select</option>
												<option value="1" >Option1</option>
												<option value="2">Option2</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-12">
										<div class="mb-3">
											<label class="focus-label">Document Number</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="input-block">
											<label class="form-label">Document Number</label>
											<div class="upload-sets">
												<label class="upload-filesview">
													Browse File
													<input type="file">
												</label>
												<h6>Or Drag &amp; Drop here</h6>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="d-flex doc-btn">
											<a href="#success-verified" class="btn btn-primary" data-bs-toggle="modal">Submit Verification</a>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>



@component('components.modal-popup')

@endcomponent

@endsection
