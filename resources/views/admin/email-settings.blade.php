<?php $page="email-settings";?>
@extends('layout.mainlayout_admin')
@section('content')
<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
					<div class="page-header">
					@component('admin/components.breadcrumb')
						@slot('li_1') Settings @endslot
					    @slot('li_2') Home @endslot
					    @slot('li_3') Email Settings @endslot
					    @slot('li_4') Settings @endslot
					@endcomponent
					
					<div class="row">
						<div class="col-lg-12">
							@component('admin/components.settings')
							@endcomponent

							<div class="row">
								<div class="col-md-6">
									<div class="card">
										<div class="card-body pt-0">
											<div class="card-header d-flex justify-content-between align-items-center">
												<h5 class="card-title">PHP Mail</h5>
												<div class="status-toggle d-flex justify-content-between align-items-center">
													<input type="checkbox" id="status_1" class="check">
													<label for="status_1" class="checktoggle">checkbox</label>
												</div>
											</div>
											<form>
												<div class="settings-form">
													<div class="form-group form-placeholder">
														<label>Email From Address <span class="star-red">*</span></label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group form-placeholder">
														<label>Email Password <span class="star-red">*</span></label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group form-placeholder">
														<label>Emails From Name <span class="star-red">*</span></label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group mb-0">
														<div class="settings-btns">
															<button type="submit" class="btn btn-orange">Submit</button>
															<button type="submit" class="btn btn-grey">Cancel</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-body pt-0">
											<div class="card-header d-flex justify-content-between align-items-center">
												<h5 class="card-title">SMTP</h5>
												<div class="status-toggle d-flex justify-content-between align-items-center">
													<input type="checkbox" id="status_2" class="check" checked="">
													<label for="status_2" class="checktoggle">checkbox</label>
												</div>
											</div>
											<form>
												<div class="settings-form">
													<div class="form-group form-placeholder">
														<label>Email From Address <span class="star-red">*</span></label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group form-placeholder">
														<label>Email Password <span class="star-red">*</span></label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group form-placeholder">
														<label>Email Host <span class="star-red">*</span></label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group form-placeholder">
														<label>Email Port <span class="star-red">*</span></label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group mb-0">
														<div class="settings-btns">
															<button type="submit" class="btn btn-orange">Submit</button>
															<button type="submit" class="btn btn-grey">Cancel</button>
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