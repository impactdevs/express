<?php $page = "login"; ?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Content -->
<div class="login-wrapper">
	<div class="content">
		<!-- Login Content -->
		<div class="account-content">
			<div class="align-items-center justify-content-center">
				<div class="login-right">
					<div class="login-header text-center">
						<a href="{{url('index')}}"><img src="{{URL::asset('/assets/img/logo.svg')}}" alt="logo" class="img-fluid"></a>
						<h3>Welcome! Nice to see you again</h3>

					</div>
					<form method="post" action="{{url('login')}}">
						@csrf
						<div class="input-block">
							<label class="focus-label">Email Address <span class="label-star"> *</span></label>
							<input type="text" required name="email" class="form-control floating">
							@error('email')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="input-block">
							<label class="focus-label">Your Password <span class="label-star"> *</span></label>
							<div class="position-relative">
								<input type="password" name="password" required class="form-control floating pass-input">
								<div class="password-icon ">
									<span class="fas toggle-password fa-eye-slash"></span>
								</div>
							</div>
							@error('password')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<button class="btn btn-primary w-100 btn-lg login-btn d-flex align-items-center justify-content-center" type="submit">Login Now<i class="feather-arrow-right ms-2"></i></button>
{{--						<div class="login-or">--}}
{{--							<p><span>OR</span></p>--}}
{{--						</div>--}}
{{--						<div class="row social-login">--}}
{{--							<div class="col-sm-4">--}}
{{--								<a href="javascript:void(0);" class="btn btn-block"><img src="{{URL::asset('/assets/img/icon/google-icon.svg')}}" alt="Google">Google</a>--}}
{{--							</div>--}}
{{--							<div class="col-sm-4">--}}
{{--								<a href="javascript:void(0);" class="btn btn-block"><img src="{{URL::asset('/assets/img/icon/fb-icon.svg')}}" alt="Fb">Facebook</a>--}}
{{--							</div>--}}
{{--							<div class="col-sm-4">--}}
{{--								<a href="javascript:void(0);" class="btn btn-block"><img src="{{URL::asset('/assets/img/icon/ios-icon.svg')}}" alt="Apple">Apple</a>--}}
{{--							</div>--}}
{{--						</div>--}}
						<div class="row">
							<div class="col-sm-8 dont-have d-flex  align-items-center">New to Kofejob <a href="{{url('register')}}" class="ms-2">Signup?</a></div>
							<div class="col-sm-4 text-sm-end">
								<a class="forgot-link" href="{{url('forgot-password')}}">Lost Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Login Content -->
	</div>
</div>

<!-- /Page Content -->

</div>
<!-- /Main Wrapper -->
@endsection
