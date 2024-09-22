<?php $page="forgot-password";?>
@extends('layout.mainlayout')
@section('content')		


			<!-- Page Content -->
			<div class="login-wrapper">
				<div class="content">
					<div class="container">					
						<!-- Login Content -->
						<div class="account-content">
							<div class="align-items-center justify-content-center">
								<div class="login-right">
									<div class="login-header text-center">
										<h2>Forgot Password</h2>
										<h3>Please enter your email address</h3>
									</div>
									<form action="{{url('dashboard')}}">
										<div class="input-block">
											<label class="focus-label">Email Address <span class="label-star"> *</span></label>
											<input type="text" class="form-control floating">
										</div>										
										<button class="btn btn-primary w-100 btn-lg login-btn d-flex align-items-center justify-content-center mb-4" type="submit">Send Now<i class="feather-arrow-right ms-2"></i></button>
										<div class="row">
											<div class="col-sm-8 dont-have d-flex mt-0  align-items-center">Remember Password<a href="{{url('login')}}" class="ms-2">Sign in?</a></div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- /Login Content -->
					</div>
				</div>		
			</div>			
			<!-- /Page Content -->

@endsection