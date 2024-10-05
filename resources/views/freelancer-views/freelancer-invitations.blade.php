<?php $page="freelancer-favourites";?>
@extends('layout.mainlayout')
@section('content')
<!-- Page Content -->
<div class="content content-page bookmark">
	<div class="container">
		<div class="row">
            @include('layout.partials.nav-freelancer')
			<div class="col-xl-9 col-lg-8">
				<div class="dashboard-sec freelance-favourites">
					<div class="page-title">
						<h3>Invitations</h3>
					</div>
					<div class="row row-gap">
						<div class="col-md-6 col-lg-12 col-xl-4">

							<div class="freelance-widget widget-author">
								<div class="freelance-content">
									<div class="freelance-top-content d-flex">
										<span> <i class="feather-clock me-1"></i>Posted Just Now</span>
										<a href="javascript:void(0);" class="favourite"><i class="feather-heart"></i></a>
									</div>
									<div class="author-heading">
										<div class="profile-img">
											<span class="project-verified"><i class="fas fa-check-circle"></i></span>
											<a href="{{url('project-details')}}">
												<img src="{{URL::asset('/assets/img/company/img-1.png')}}" alt="author">
											</a>
										</div>
										<div class="profile-name">
											<div class="author-location"><a href="{{url('project-details')}}">Amaze Tech </a></div>
										</div>
										<div class="freelance-info">
											<h3><a href="javascript:void(0);">UI/UX Developer</a></h3>
											<div class="freelance-location"><i class="feather-map-pin me-1"></i>Alabama, USA</div>
										</div>
										<div class="freelance-tags">
											<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
											<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
											<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
										</div>
										<div class="freelancers-price">$40-$500</div>
									</div>
									<div class="counter-stats">
											<ul>
												<li>
													<h5>Expiry</h5>
													<h3 class="counter-value">4 Days Left</h3>
												</li>
												<li>
													<h5>Proposals</h5>
													<h3 class="counter-value">15</h3>
												</li>
												<li>
													<h5>Job Type</h5>
													<h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
												</li>
											</ul>
										</div>
									</div>
									<div class="cart-hover">
										<a href="{{url('project-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
									</div>
								</div>
							</div>
						<div class="col-md-6 col-lg-12 col-xl-4">

							<div class="freelance-widget widget-author">
								<div class="freelance-content">
									<div class="freelance-top-content d-flex">
										<span> <i class="feather-clock me-1"></i>1 min ago</span>
										<a href="javascript:void(0);" class="favourite"><i class="feather-heart"></i></a>
									</div>
								<div class="author-heading">
									<div class="profile-img">
										<span class="project-verified"><i class="fas fa-check-circle"></i></span>
										<a href="{{url('project-details')}}">
											<img src="{{URL::asset('/assets/img/company/img-2.png')}}" alt="author">
										</a>
									</div>
									<div class="profile-name">
										<div class="author-location"><a href="{{url('project-details')}}">Park INC </a></div>
									</div>
									<div class="freelance-info">
										<h3><a href="javascript:void(0);">PHP Developer</a></h3>
										<div class="freelance-location"><i class="feather-map-pin me-1"></i>California, USA</div>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelancers-price">$30-$300</div>
								</div>
								<div class="counter-stats">
										<ul>
											<li>
												<h5>Expiry</h5>
												<h3 class="counter-value">5 Days Left</h3>
											</li>
											<li>
												<h5>Proposals</h5>
												<h3 class="counter-value">15</h3>
											</li>
											<li>
												<h5>Job Type</h5>
												<h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
											</li>
										</ul>
									</div>
								</div>
								<div class="cart-hover">
									<a href="{{url('project-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-12 col-xl-4">

							<div class="freelance-widget widget-author">
								<div class="freelance-content">
									<div class="freelance-top-content d-flex">
										<span> <i class="feather-clock me-1"></i>30 mins ago</span>
										<a href="javascript:void(0);" class="favourite"><i class="feather-heart"></i></a>
									</div>
								<div class="author-heading">
									<div class="profile-img">
										<span class="project-verified"><i class="fas fa-check-circle"></i></span>
										<a href="{{url('project-details')}}">
											<img src="{{URL::asset('/assets/img/company/img-3.png')}}" alt="author">
										</a>
									</div>
									<div class="profile-name">
										<div class="author-location"><a href="{{url('project-details')}}">Tech Zone</a> </div>
									</div>
									<div class="freelance-info">
										<h3><a href="javascript:void(0);">Graphic Designer</a></h3>
										<div class="freelance-location"><i class="feather-map-pin me-1"></i>New York, USA</div>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelancers-price">$15-$500</div>
								</div>
								<div class="counter-stats">
									<ul>
										<li>
											<h5>Expiry</h5>
											<h3 class="counter-value">4 Days Left</h3>
										</li>
										<li>
											<h5>Proposals</h5>
											<h3 class="counter-value">15</h3>
										</li>
										<li>
											<h5>Job Type</h5>
											<h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
										</li>
									</ul>
								</div>
								</div>
								<div class="cart-hover">
									<a href="{{url('project-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-12 col-xl-4">
							<div class="freelance-widget widget-author">
								<div class="freelance-content">
								<div class="freelance-top-content d-flex">
									<span> <i class="feather-clock me-1"></i>1 day ago</span>
									<a href="javascript:void(0);" class="favourite"><i class="feather-heart"></i></a>
								</div>
								<div class="author-heading">
									<div class="profile-img">
										<span class="project-verified"><i class="fas fa-check-circle"></i></span>
										<a href="{{url('project-details')}}">
											<img src="{{URL::asset('/assets/img/company/img-4.png')}}" alt="author">
										</a>
									</div>
									<div class="profile-name">
										<div class="author-location"><a href="{{url('project-details')}}">ABC Software</a> </div>
									</div>
									<div class="freelance-info">
										<h3><a href="javascript:void(0);">iOS Developer</a></h3>
										<div class="freelance-location"><i class="feather-map-pin me-1"></i>Florida, USA</div>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelancers-price">$25-$250</div>
								</div>
								<div class="counter-stats">
									<ul>
										<li>
											<h5>Expiry</h5>
											<h3 class="counter-value">1 Days Left</h3>
										</li>
										<li>
											<h5>Proposals</h5>
											<h3 class="counter-value">13</h3>
										</li>
										<li>
											<h5>Job Type</h5>
											<h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
										</li>
									</ul>
								</div>
								</div>
								<div class="cart-hover">
									<a href="{{url('project-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-12 col-xl-4">
							<div class="freelance-widget widget-author">
								<div class="freelance-content">
								<div class="freelance-top-content d-flex">
									<span> <i class="feather-clock me-1"></i>3 days ago</span>
									<a href="javascript:void(0);" class="favourite"><i class="feather-heart"></i></a>
								</div>
								<div class="author-heading">
									<div class="profile-img">
										<span class="project-verified"><i class="fas fa-check-circle"></i></span>
										<a href="{{url('project-details')}}">
											<img src="{{URL::asset('/assets/img/company/img-5.png')}}" alt="author">
										</a>
									</div>
									<div class="profile-name">
										<div class="author-location"><a href="{{url('project-details')}}">Host Technologies</a></div>
									</div>
									<div class="freelance-info">
										<h3><a href="javascript:void(0);">SEO Developer</a></h3>
										<div class="freelance-location"><i class="feather-map-pin me-1"></i>Texas, USA</div>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelancers-price">$50-$700</div>
								</div>
								<div class="counter-stats">
									<ul>
										<li>
											<h5>Expiry</h5>
											<h3 class="counter-value">6 Days Left</h3>
										</li>
										<li>
											<h5>Proposals</h5>
											<h3 class="counter-value">18</h3>
										</li>
										<li>
											<h5>Job Type</h5>
											<h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
										</li>
									</ul>
								</div>
								</div>
								<div class="cart-hover">
									<a href="{{url('project-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-12 col-xl-4">
							<div class="freelance-widget widget-author">
								<div class="freelance-content">
								<div class="freelance-top-content d-flex">
									<span> <i class="feather-clock me-1"></i>1 week ago</span>
									<a href="javascript:void(0);" class="favourite"><i class="feather-heart"></i></a>
								</div>
								<div class="author-heading">
									<div class="profile-img">
										<span class="project-verified"><i class="fas fa-check-circle"></i></span>
										<a href="{{url('project-details')}}">
											<img src="{{URL::asset('/assets/img/company/img-6.png')}}" alt="author">
										</a>
									</div>
									<div class="profile-name">
										<div class="author-location"><a href="{{url('project-details')}}">Alfred Tech</a> </div>
									</div>
									<div class="freelance-info">
										<h3><a href="javascript:void(0);">SM Developer</a></h3>
										<div class="freelance-location"><i class="feather-map-pin me-1"></i>Virginia, USA</div>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelancers-price">$42-$100</div>
								</div>
								<div class="counter-stats">
									<ul>
										<li>
											<h5>Expiry</h5>
											<h3 class="counter-value">2 Days Left</h3>
										</li>
										<li>
											<h5>Proposals</h5>
											<h3 class="counter-value">15</h3>
										</li>
										<li>
											<h5>Job Type</h5>
											<h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
										</li>
									</ul>
								</div>
								</div>
								<div class="cart-hover">
									<a href="{{url('project-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-12 col-xl-4">
							<div class="freelance-widget widget-author">
								<div class="freelance-content">
									<div class="freelance-top-content d-flex">
										<span> <i class="feather-clock me-1"></i>3 week ago</span>
										<a href="javascript:void(0);" class="favourite"><i class="feather-heart"></i></a>
									</div>
								<div class="author-heading">
									<div class="profile-img">
										<span class="project-verified"><i class="fas fa-check-circle"></i></span>
										<a href="{{url('project-details')}}">
											<img src="{{URL::asset('/assets/img/company/img-7.png')}}" alt="author">
										</a>
									</div>
									<div class="profile-name">
										<div class="author-location"><a href="{{url('project-details')}}">Kind Softwares</a> </div>
									</div>
									<div class="freelance-info">
										<h3><a href="javascript:void(0);">Network Engineer</a></h3>
										<div class="freelance-location"><i class="feather-map-pin me-1"></i>Delaware, USA</div>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelancers-price">$12-$320</div>
								</div>
								<div class="counter-stats">
									<ul>
										<li>
											<h5>Expiry</h5>
											<h3 class="counter-value">5 Days Left</h3>
										</li>
										<li>
											<h5>Proposals</h5>
											<h3 class="counter-value">24</h3>
										</li>
										<li>
											<h5>Job Type</h5>
											<h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
										</li>
									</ul>
								</div>
								</div>
								<div class="cart-hover">
									<a href="{{url('project-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-12 col-xl-4">
							<div class="freelance-widget widget-author">
								<div class="freelance-content">
									<div class="freelance-top-content d-flex">
										<span> <i class="feather-clock me-1"></i>1 month ago</span>
										<a href="javascript:void(0);" class="favourite"><i class="feather-heart"></i></a>
									</div>
								<div class="author-heading">
									<div class="profile-img">
										<span class="project-verified"><i class="fas fa-check-circle"></i></span>
										<a href="{{url('project-details')}}">
											<img src="{{URL::asset('/assets/img/company/img-8.png')}}" alt="author">
										</a>
									</div>
									<div class="profile-name">
										<div class="author-location"><a href="{{url('project-details')}}">Particles INC </a></div>
									</div>
									<div class="freelance-info">
										<h3><a href="javascript:void(0);">Business Analyst</a></h3>
										<div class="freelance-location"><i class="feather-map-pin me-1"></i>Kentucky, USA</div>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelancers-price">$35-$520</div>
								</div>
								<div class="counter-stats">
									<ul>
										<li>
											<h5>Expiry</h5>
											<h3 class="counter-value">4 Days Left</h3>
										</li>
										<li>
											<h5>Proposals</h5>
											<h3 class="counter-value">15</h3>
										</li>
										<li>
											<h5>Job Type</h5>
											<h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
										</li>
									</ul>
								</div>
								</div>
								<div class="cart-hover">
									<a href="{{url('project-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-12 col-xl-4">
							<div class="freelance-widget widget-author">
								<div class="freelance-content">
									<div class="freelance-top-content d-flex">
										<span> <i class="feather-clock me-1"></i>2 month ago</span>
										<a href="javascript:void(0);" class="favourite"><i class="feather-heart"></i></a>
									</div>
								<div class="author-heading">
									<div class="profile-img">
										<span class="project-verified"><i class="fas fa-check-circle"></i></span>
										<a href="{{url('project-details')}}">
											<img src="{{URL::asset('/assets/img/company/img-9.png')}}" alt="author">
										</a>
									</div>
									<div class="profile-name">
										<div class="author-location"><a href="{{url('project-details')}}">Soft Technologies</a> </div>
									</div>
									<div class="freelance-info">
										<h3><a href="{{url('project-details')}}">IT Project Manager</a></h3>
										<div class="freelance-location"><i class="feather-map-pin me-1"></i>Kansas, USA</div>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelancers-price">$10-$300</div>
								</div>
								<div class="counter-stats">
									<ul>
										<li>
											<h5>Expiry</h5>
											<h3 class="counter-value">1 Days Left</h3>
										</li>
										<li>
											<h5>Proposals</h5>
											<h3 class="counter-value">12</h3>
										</li>
										<li>
											<h5>Job Type</h5>
											<h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
										</li>
									</ul>
								</div>
								</div>
								<div class="cart-hover">
									<a href="{{url('project-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
								</div>
							</div>
						</div>


					</div>

					<div class="row">
						<div class="col-md-12">
							<ul class="paginations list-pagination">
								<li class="page-item"><a href="javascript:void(0);"><i class="feather-chevron-left"></i></a>
								</li>
								<li class="page-item"><a href="javascript:void(0);" class="active">1</a></li>
								<li class="page-item"><a href="javascript:void(0);">2</a></li>
								<li class="page-item"><a href="javascript:void(0);">3</a></li>
								<li class="page-item"><a href="javascript:void(0);">...</a></li>
								<li class="page-item"><a href="javascript:void(0);">10</a></li>
								<li class="page-item"><a href="javascript:void(0);"><i class="feather-chevron-right"></i></a></li>
							</ul>
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
