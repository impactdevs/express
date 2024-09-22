<?php $page="delete-account";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
					@component('admin/components.breadcrumb')
						@slot('li_1') Settings @endslot
					    @slot('li_2') Dashboard @endslot
					    @slot('li_3') Delete Account @endslot
					@endcomponent
					<div class="row">
						<div class="col-xl-3 col-md-4">
						@component('admin/components.settings')
						@endcomponent
							
						</div>
						
						<div class="col-xl-9 col-md-8">
							<div class="card">
								<div class="card-body pt-0">
									<div class="card-header mb-4">
										<h5 class="card-title">Delete your account</h5>
									</div>
								
									<!-- Form -->
									<form>
										<p class="card-text">When you delete your account, you lose access to Kanakku account services, and we permanently delete your personal data.</p>
										<p class="card-text">Are you sure you want to close your account?</p>

										<div class="form-group">
											<div class="form-check form-checkbox">
												<input type="checkbox" class="form-check-input" id="delete_account">
												<label class="form-check-label text-danger" for="delete_account">Confirm that I want to delete my account.</label>
											</div>
										</div>

										<div class="text-end">
											<button type="submit" class="btn btn-primary">Save Changes</button>
										</div>
									</form>
									<!-- /Form -->
									
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