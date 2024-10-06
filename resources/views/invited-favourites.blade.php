<?php $page="favourites";?>
@extends('layout.mainlayout')
@section('content')
<!-- Page Content -->
<div class="content content-page bookmark">
	<div class="container">
		<div class="row">
            @include('layout.partials.nav-employer')
			<div class="col-xl-9 col-lg-8">
				<!-- project list -->
				<div class="my-projects-view favourite-group">
					<div class="row">
						<div class="col-lg-12">
							<div class="page-title">
								<h3>Bookmarked Freelancers</h3>
							</div>
							<div class="freelance-box book-mark favour-book">
								<div class="row">
									<div class="col-md-6 col-lg-6 col-xl-4">
										<div class="freelance-widget">
											<div class="freelance-content">
												<a href="javascript:void(0);" class="favourite color-active"><i class="feather-heart"></i></a>
												<div class="freelance-img">
													<a href="{{url('developer-details')}}">
														<img src="{{URL::asset('/assets/img/user/table-avatar-03.jpg')}}" alt="User Image">
														<span class="verified"><i class="fas fa-check-circle"></i></span>
													</a>
												</div>
												<div class="freelance-info">
													<h3><a href="{{url('developer-details')}}">George Wells</a></h3>
													<div class="freelance-specific">UI/UX Designer</div>
													<div class="freelance-location"><i class="feather-map-pin me-1"></i>Alabama, USA</div>
													<div class="rating">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star "></i>
														<i class="fas fa-star"></i>
														<span class="average-rating">4.7 (32)</span>
													</div>
													<div class="freelance-tags">
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
													</div>
													<div class="freelancers-price">$25 Hourly</div>
												</div>
											</div>
											<div class="cart-hover">
												<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<div class="freelance-widget">
											<div class="freelance-content">
												<a href="javascript:void(0);" class="favourite color-active"><i class="feather-heart"></i></a>
												<div class="freelance-img">
													<a href="{{url('developer-details')}}">
														<img src="{{URL::asset('/assets/img/user/user-02.jpg')}}" alt="User Image">
														<span class="verified"><i class="fas fa-check-circle"></i></span>
													</a>
												</div>
												<div class="freelance-info">
														<h3><a href="{{url('developer-details')}}">Timothy Smith</a></h3>
														<div class="freelance-specific">PHP Developer</div>
														<div class="freelance-location"><i class="feather-map-pin me-1"></i>Illinois, USA</div>
														<div class="rating">
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star "></i>
															<i class="fas fa-star"></i>
															<span class="average-rating">4.8 (55)</span>
														</div>
														<div class="freelance-tags">
															<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
															<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
															<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
														</div>
														<div class="freelancers-price">$21 Hourly</div>
													</div>
												</div>
												<div class="cart-hover">
													<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
												</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<div class="freelance-widget">
											<div class="freelance-content">
												<a href="javascript:void(0);" class="favourite color-active"><i class="feather-heart"></i></a>
												<div class="freelance-img">
													<a href="{{url('developer-details')}}">
														<img src="{{URL::asset('/assets/img/user/proposal-user-02.jpg')}}" alt="User Image">
														<span class="verified"><i class="fas fa-check-circle"></i></span>
													</a>
												</div>
												<div class="freelance-info">
													<h3><a href="{{url('developer-details')}}">Janet Paden</a></h3>
													<div class="freelance-specific">Graphic Designer</div>
													<div class="freelance-location"><i class="feather-map-pin me-1"></i>New York, USA</div>
													<div class="rating">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star "></i>
														<i class="fas fa-star"></i>
														<span class="average-rating">4.1 (30)</span>
													</div>
													<div class="freelance-tags">
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
													</div>
													<div class="freelancers-price">Free</div>
												</div>
											</div>
											<div class="cart-hover">
												<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<div class="freelance-widget">
											<div class="freelance-content">
												<a href="javascript:void(0);" class="favourite color-active"><i class="feather-heart"></i></a>
												<div class="freelance-img">
													<a href="{{url('developer-details')}}">
														<img src="{{URL::asset('/assets/img/user/table-avatar-02.jpg')}}" alt="User Image">
														<span class="verified"><i class="fas fa-check-circle"></i></span>
													</a>
												</div>
												<div class="freelance-info">
													<h3><a href="{{url('developer-details')}}">James Douglas</a></h3>
													<div class="freelance-specific">iOS Developer</div>
													<div class="freelance-location"><i class="feather-map-pin me-1"></i>Florida, USA</div>
													<div class="rating">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<span class="average-rating">3.2 (22)</span>
													</div>
													<div class="freelance-tags">
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
													</div>
													<div class="freelancers-price">Free</div>
												</div>
											</div>
											<div class="cart-hover">
												<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<div class="freelance-widget">
											<div class="freelance-content">
												<a href="javascript:void(0);" class="favourite color-active"><i class="feather-heart"></i></a>
												<div class="freelance-img">
													<a href="{{url('developer-details')}}">
														<img src="{{URL::asset('/assets/img/user/table-avatar-05.jpg')}}" alt="User Image">
														<span class="verified"><i class="fas fa-check-circle"></i></span>
													</a>
												</div>
												<div class="freelance-info">
													<h3><a href="{{url('developer-details')}}">Floyd Lewis</a></h3>
													<div class="freelance-specific">SEO Developer</div>
													<div class="freelance-location"><i class="feather-map-pin me-1"></i>Texas, USA</div>
													<div class="rating">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star "></i>
														<i class="fas fa-star"></i>
														<span class="average-rating">4.9 (40)</span>
													</div>
													<div class="freelance-tags">
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
													</div>
													<div class="freelancers-price">$30 Hourly</div>
												</div>
											</div>
											<div class="cart-hover">
												<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<div class="freelance-widget">
											<div class="freelance-content">
												<a href="javascript:void(0);" class="favourite color-active"><i class="feather-heart"></i></a>
												<div class="freelance-img">
													<a href="{{url('developer-details')}}">
														<img src="{{URL::asset('/assets/img/user/user-03.jpg')}}" alt="User Image">
														<span class="verified"><i class="fas fa-check-circle"></i></span>
													</a>
												</div>
												<div class="freelance-info">
													<h3><a href="{{url('developer-details')}}">Jacqueline Daye</a></h3>
													<div class="freelance-specific">SM Developer</div>
													<div class="freelance-location"><i class="feather-map-pin me-1"></i>California, USA</div>
													<div class="rating">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star "></i>
														<i class="fas fa-star"></i>
														<span class="average-rating">4.3 (35)</span>
													</div>
													<div class="freelance-tags">
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
													</div>
													<div class="freelancers-price">$12 Hourly</div>
												</div>
											</div>
											<div class="cart-hover">
												<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<div class="freelance-widget">
											<div class="freelance-content">
												<a href="javascript:void(0);" class="favourite color-active"><i class="feather-heart"></i></a>
												<div class="freelance-img">
													<a href="{{url('developer-details')}}">
														<img src="{{URL::asset('/assets/img/user/table-avatar-04.jpg')}}" alt="User Image">
														<span class="verified"><i class="fas fa-check-circle"></i></span>
													</a>
												</div>
												<div class="freelance-info">
													<h3><a href="{{url('developer-details')}}">Crystal Kemper</a></h3>
													<div class="freelance-specific">Network Engineer</div>
													<div class="freelance-location"><i class="feather-map-pin me-1"></i>Maryland, USA</div>
													<div class="rating">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<span class="average-rating">3.5 (28)</span>
													</div>
													<div class="freelance-tags">
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
													</div>
													<div class="freelancers-price">$20 Hourly</div>
												</div>
											</div>
											<div class="cart-hover">
												<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<div class="freelance-widget">
											<div class="freelance-content">
												<a href="javascript:void(0);" class="favourite color-active"><i class="feather-heart"></i></a>
												<div class="freelance-img">
													<a href="{{url('developer-details')}}">
														<img src="{{URL::asset('/assets/img/user/avatar-8.jpg')}}" alt="User Image">
														<span class="verified"><i class="fas fa-check-circle"></i></span>
													</a>
												</div>
												<div class="freelance-info">
													<h3><a href="{{url('developer-details')}}">Tony Ingle</a></h3>
													<div class="freelance-specific">Business Analyst</div>
													<div class="freelance-location"><i class="feather-map-pin me-1"></i>Missouri, USA</div>
													<div class="rating">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<span class="average-rating">2.1 (15)</span>
													</div>
													<div class="freelance-tags">
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
													</div>
													<div class="freelancers-price">$42 Hourly</div>
												</div>
											</div>
											<div class="cart-hover">
												<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<div class="freelance-widget">
											<div class="freelance-content">
												<a href="javascript:void(0);" class="favourite color-active"><i class="feather-heart"></i></a>
												<div class="freelance-img">
													<a href="{{url('developer-details')}}">
														<img src="{{URL::asset('/assets/img/user/avatar-9.jpg')}}" alt="User Image">
														<span class="verified"><i class="fas fa-check-circle"></i></span>
													</a>
												</div>
												<div class="freelance-info">
													<h3><a href="{{url('developer-details')}}">Kathleen Kaiser</a></h3>
													<div class="freelance-specific">IT Project Manager</div>
													<div class="freelance-location"><i class="feather-map-pin me-1"></i>Kansas, USA</div>
													<div class="rating">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star"></i>
														<span class="average-rating">4.5 (36)</span>
													</div>
													<div class="freelance-tags">
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
														<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
													</div>
													<div class="freelancers-price">$25 Hourly</div>
												</div>
											</div>
											<div class="cart-hover">
												<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- project list -->
			</div>
		</div>
	</div>
</div>


<!-- /Page Content -->

@component('components.modal-popup')
@slot('li_1') Freelancers @endslot
@endcomponent
@endsection
