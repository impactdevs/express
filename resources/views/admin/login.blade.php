<?php $page="login";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Main Wrapper -->
		<div class="main-wrapper login-body">
			<div class="login-wrapper">
				<div class="container">
				
					<img class="img-fluid logo-dark mb-2" src="{{ URL::asset('/assets_admin/img/logo-01.png')}}" alt="Logo">
					<div class="loginbox">
						
						<div class="login-right">
							<div class="login-right-wrap">
								<h1>Welcome Back</h1>
								<p class="account-subtitle">Don't miss your next opportunity. Sign in to stay updated on your professional world.</p>
								
								<form method="POST" action="{{ route('login.custom') }}">
									@csrf
									<div class="form-group form-focus">
										<input type="text" class="form-control floating" name="email" id="Email" value="admin@example.com">
										<label class="focus-label">Email</label>
										<div class="text-danger">
											@error('0')
						            			{{$message}}
						                	@enderror
						                	@error('email')
						            			{{$message}}
						                	@enderror
						            	</div>
									</div>
									<div class="form-group form-focus mt-4">
										<input type="password" class="form-control floating pass-input" name="password" id="password" value="123456">
										<label class="focus-label">Password</label>
										<span class="fa fa-eye-slash toggle-password pt-4"></span>
										<div class="text-danger">
											@error('0')
						            			{{$message}}
						                	@enderror
				                        	@error('password')
				                    			{{$message}}
				                        	@enderror
				                    	</div>
									</div>
									<div class="form-group">
										<label class="custom_check">
											<input type="checkbox" name="rem_password">
											<span class="checkmark"></span> Remember password
										</label>
									</div>
									<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
									<div class="login-or">
										<p>Or login with</p>
									</div>
									<!-- Social Login -->
									<div class="row form-row social-login">
										<div class="col-lg-4">
											<a href="javascript:void(0);" class="btn btn-twitter btn-block mb-1"> Twitter</a>
										</div>
										<div class="col-lg-4">
											<a href="javascript:void(0);" class="btn btn-facebook btn-block mb-1"> Facebook</a>
										</div>
										<div class="col-lg-4">
											<a href="javascript:void(0);" class="btn btn-google btn-block mb-1"> Google</a>
										</div>
									</div>
									<!-- /Social Login -->
									<div class="row form-row login-foot">
										<div class="col-lg-6 login-forgot">
											<a class="forgot-link" href="{{url('admin/forgot-password')}}">Forgot Password ?</a>
										</div>
										<div class="col-lg-6 dont-have">New to Kofejob? <a href="{{url('admin/register')}}">Click here</a></div>
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Main Wrapper -->
@endsection