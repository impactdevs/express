<?php $page="social-links";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
					@component('admin/components.breadcrumb')
						@slot('li_1') Settings @endslot
					    @slot('li_2') Home @endslot
					    @slot('li_4') Settings @endslot
					    @slot('li_3') Social Links @endslot
					@endcomponent
					<div class="row">
						<div class="col-lg-12">

							@component('admin/components.settings')
							@endcomponent

							<div class="row">
								<div class="col-lg-6 col-md-8">
									<div class="card">
										<div class="card-body pt-0">
											<div class="card-header">
												<h5 class="card-title">Social Link Settings</h5>
											</div>
											<form>
												<div class="settings-form">
													<div class="links-info">
														<div class="row form-row links-cont">
															<div class="col-12 col-md-11">
																<div class="form-group form-placeholder d-flex">
																	<button class="btn social-icon">
																		<i class="feather-facebook"></i>
																	</button>
																	<input type="text" class="form-control" placeholder="https://www.facebook.com">
																</div> 
															</div>
															<div class="col-12 col-md-1">
																<a href="javascript:void(0);" class="btn trash">
																	<i class="feather-trash-2"></i>
																</a>
															</div>
														</div>
													</div>
													<div class="links-info">
														<div class="row form-row links-cont">
															<div class="col-12 col-md-11">
																<div class="form-group form-placeholder d-flex">
																	<button class="btn social-icon">
																		<i class="feather-twitter"></i>
																	</button>
																	<input type="text" class="form-control" placeholder="https://www.twitter.com">
																</div> 
															</div>
															<div class="col-12 col-md-1">
																<a href="javascript:void(0);" class="btn trash">
																	<i class="feather-trash-2"></i>
																</a>
															</div>
														</div>
													</div>
													<div class="links-info">
														<div class="row form-row links-cont">
															<div class="col-12 col-md-11">
																<div class="form-group form-placeholder d-flex">
																	<button class="btn social-icon">
																		<i class="feather-youtube"></i>
																	</button>
																	<input type="text" class="form-control" placeholder="https://www.youtube.com">
																</div> 
															</div>
															<div class="col-12 col-md-1">
																<a href="javascript:void(0);" class="btn trash">
																	<i class="feather-trash-2"></i>
																</a>
															</div>
														</div>
													</div>
													<div class="links-info">
														<div class="row form-row links-cont">
															<div class="col-12 col-md-11">
																<div class="form-group form-placeholder d-flex">
																	<button class="btn social-icon">
																		<i class="feather-linkedin"></i>
																	</button>
																	<input type="text" class="form-control" placeholder="https://www.linkedin.com">
																</div> 
															</div>
															<div class="col-12 col-md-1">
																<a href="javascript:void(0);" class="btn trash">
																	<i class="feather-trash-2"></i>
																</a>
															</div>

														</div>
													</div>
												</div>
												<div class="form-group">
													<a href="javascript:void(0);" class="btn add-links">
														<i class="fas fa-plus me-1"></i> Add More
													</a>
												</div>
												<div class="form-group mb-0">
													<div class="settings-btns">
														<button type="submit" class="btn btn-orange">Submit</button>
														<button type="submit" class="btn btn-grey">Cancel</button>
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