<?php $page="seo-settings";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
					@component('admin/components.breadcrumb')
						@slot('li_1') Settings @endslot
					    @slot('li_2') Home @endslot
					    @slot('li_3') SEO Settings @endslot
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
											<div class="card-header">
												<h5 class="card-title">SEO Settings</h5>
											</div>
											<form>
												<div class="settings-form">
													<div class="form-group form-placeholder">
														<label>Meta Title <span class="star-red">*</span></label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group">
														<label>Meta Keywords <span class="star-red">*</span></label>
														<input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Meta Keywords" name="services" value="Lorem,Ipsum" id="services">
													</div>
													<div class="form-group">
														<label>Meta Description <span class="star-red">*</span></label>
														<textarea class="form-control"></textarea>
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