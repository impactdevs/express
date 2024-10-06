<?php $page="change-password";?>
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
							<h3 class="mb-0">Change Password</h3>
						</div>
						<div class="row">

							<div class="col-md-12">
								<div class="input-block">
									<label class="focus-label">Old Password </label>
									<div class="position-relative">
										<input type="password" class="form-control floating pass-input">
										<div class="password-icon ">
											<span class="fas toggle-password fa-eye-slash"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="input-block">
									<label class="focus-label">New Password </label>
									<div class="position-relative">
										<input type="password" class="form-control floating pass-input1">
										<div class="password-icon ">
											<span class="fas toggle-password1 fa-eye-slash"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="input-block">
									<label class="focus-label">Confirm Password </label>
									<div class="position-relative">
										<input type="password" class="form-control floating pass-inputs">
										<div class="password-icon ">
											<span class="fas toggle-passwords fa-eye-slash"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="d-flex doc-btn">
									<a href="javascript:void(0);" class="btn btn-gray">Cancel</a>
									<a href="#password-changed" data-bs-toggle="modal" class="btn btn-primary">Update</a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- /Page Content -->

	   @component('components.modal-popup')

	   @endcomponent

@endsection
