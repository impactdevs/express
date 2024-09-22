<?php $page="developer";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('li_1') Freelancer Grid @endslot
    @slot('li_2') Home @endslot
	@slot('li_3') Developers @endslot
@endcomponent	
			
		<!-- Page Content -->			
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
					
						<!-- Search Filter -->
						<div class="card search-filter">
							<div class="card-header d-flex justify-content-between">
								<h4 class="card-title mb-0">Search Filter</h4>
							</div>
							<div class="card-body">
								<div class="filter-widget">
									<h4 class="filter-title">
										<a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapselocation" aria-expanded="true" aria-controls="collapseOne">
											Location	
											<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
										</a> 
									</h4>
									<div id="collapselocation" class="collapse show" data-bs-parent="#accordionExample1" >
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time" >
												<span class="checkmark"></span>USA (25)
											</label>
										</div>
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time">
												<span class="checkmark"></span> IND (62)
											</label>
										</div>
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time">
												<span class="checkmark"></span>UK (46)
											</label>
										</div>
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time">
												<span class="checkmark"></span>AUS (37)
											</label>
										</div>
										<div id="collapseOnes3" class="collapse"  data-bs-parent="#accordionExample1" >
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_time">
													<span class="checkmark"></span> IND (62)
												</label>
											</div>
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_time">
													<span class="checkmark"></span>UK (46)
												</label>
											</div>
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_time">
													<span class="checkmark"></span>AUS (37)
												</label>
											</div>
										</div>
										<div class="showmore mt-2">
											<a href="javascript:void(0);"  data-bs-toggle="collapse" data-bs-target="#collapseOnes3" aria-expanded="true" aria-controls="collapseOne"><i class="feather-plus me-1"></i>Show More</a>
										</div>
									</div>
								</div>
								<div class="filter-widget">
									<h4 class="filter-title">
										<a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapseskills" aria-expanded="true" aria-controls="collapseOne">
											Skills	
											<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
										</a> 
									</h4>
									<div id="collapseskills" class="collapse show"  data-bs-parent="#accordionExample1" >
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time" >
												<span class="checkmark"></span> After Effects (6)
											</label>
										</div>
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time">
												<span class="checkmark"></span> Android Developer (7)	
											</label>
										</div>
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time">
												<span class="checkmark"></span> Backend Developer (7)
											</label>
										</div>
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time">
												<span class="checkmark"></span> Computer Operator (1)
											</label>
										</div>
										<div id="collapseOnes1" class="collapse"  data-bs-parent="#accordionExample1" >
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_time" >
													<span class="checkmark"></span> After Effects (6)
												</label>
											</div>
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_time">
													<span class="checkmark"></span> Android Developer (7)	
												</label>
											</div>
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_time">
													<span class="checkmark"></span> Backend Developer (7)
												</label>
											</div>
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_time">
													<span class="checkmark"></span> Computer Operator (1)
												</label>
											</div>
										</div>
										<div class="showmore mt-2">
											<a href="javascript:void(0);"  data-bs-toggle="collapse" data-bs-target="#collapseOnes1" aria-expanded="true" aria-controls="collapseOne"><i class="feather-plus me-1"></i>Show More</a>
										</div>
									</div>
								</div>
								<div class="filter-widget">
									<h4 class="filter-title">
										<a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Category	
											<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
										</a> 
									</h4>
									<div id="collapseOne" class="collapse show"  data-bs-parent="#accordionExample1" >
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time" >
												<span class="checkmark"></span> Developer (25) 
											</label>
										</div>
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time">
												<span class="checkmark"></span> UI Developer (62)
											</label>
										</div>
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time">
												<span class="checkmark"></span>  React Developer (46)
											</label>
										</div>
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time">
												<span class="checkmark"></span>  .Net Developer (37)
											</label>
										</div>
										<div id="collapseOnes" class="collapse"  data-bs-parent="#accordionExample1" >
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_time">
													<span class="checkmark"></span> UI Developer (62)
												</label>
											</div>
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_time">
													<span class="checkmark"></span>  React Developer (46)
												</label>
											</div>
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_time">
													<span class="checkmark"></span>  .Net Developer (37)
												</label>
											</div>
										</div>
										<div class="showmore mt-2">
											<a href="javascript:void(0);"  data-bs-toggle="collapse" data-bs-target="#collapseOnes" aria-expanded="true" aria-controls="collapseOne"><i class="feather-plus me-1"></i>Show More</a>
										</div>
									</div>
								</div>
								<div class="filter-widget">
									<h4 class="filter-title">
										<a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapsproject" aria-expanded="true" aria-controls="collapseOne">
											Freelancer Type
											<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
										</a> 
									</h4>
									<div id="collapsproject" class="collapse show"  data-bs-parent="#accordionExample1" >
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time" >
												<span class="checkmark"></span>Fixed (6) 
											</label>
										</div>
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time">
												<span class="checkmark"></span>Hourly (7)
											</label>
										</div>
									</div>
								</div>
								<div class="filter-widget">
									<h4 class="filter-title">
										<a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapselanguage" aria-expanded="true" aria-controls="collapseOne">
											Languages	
											<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
										</a> 
									</h4>
									<div id="collapselanguage" class="collapse show"  data-bs-parent="#accordionExample1" >
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time" >
												<span class="checkmark"></span> English (5)
											</label>
										</div>
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time">
												<span class="checkmark"></span> Arabic (2)
											</label>
										</div>
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time">
												<span class="checkmark"></span>German (1)
											</label>
										</div>
										
										<div id="collapseOnes2" class="collapse"  data-bs-parent="#accordionExample1" >
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_time" >
													<span class="checkmark"></span> English (5)
												</label>
											</div>
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_time">
													<span class="checkmark"></span> Arabic (2)
												</label>
											</div>
											<div>
												<label class="custom_check">
													<input type="checkbox" name="select_time">
													<span class="checkmark"></span>German (1)
												</label>
											</div>
										</div>
										<div class="showmore mt-2">
											<a href="javascript:void(0);"  data-bs-toggle="collapse" data-bs-target="#collapseOnes2" aria-expanded="true" aria-controls="collapseOne"><i class="feather-plus me-1"></i>Show More</a>
										</div>
									</div>
								</div>
								<div class="filter-widget">
									<h4 class="filter-title">
										<a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapselanguagea" aria-expanded="true" aria-controls="collapseOne">
											Freelancer Type	
											<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
										</a> 
									</h4>
									<div id="collapselanguagea" class="collapse show"  data-bs-parent="#accordionExample1" >
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time" >
												<span class="checkmark"></span>Full Time (3)
											</label>
										</div>
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time">
												<span class="checkmark"></span> Part Time (4)
											</label>
										</div>
										<div>
											<label class="custom_check">
												<input type="checkbox" name="select_time">
												<span class="checkmark"></span>Project Based (2)
											</label>
										</div>
									</div>
								</div>
								
							
								<div class="btn-search">
									<button type="button" class="btn btn-primary">Search</button>
									<button type="button" class="btn btn-block">Reset</button>
								</div>	
							</div>
						</div>
						<!-- /Search Filter -->
						
					</div>
					
					<div class="col-md-12 col-lg-8 col-xl-9">
						<div class="sort-tab develop-list-select">
							<div class="row align-items-center">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
									<div class="d-flex align-items-center">
									   <div class="freelance-view">
										  <h4>Found 9 Results</h4>
									   </div>
									</div>
								 </div>
								 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-sm-end">
									<div class="sort-by">
										<select class="select ">
										   <option >Sort by (Default)</option>
										   <option >Relevance</option>
										   <option>Rating</option>
										   <option>Popular</option>
										   <option>Latest</option>
										   <option>Free</option>
										</select>
									 </div>
									<ul class="list-grid d-flex align-items-center">
										<li><a href="{{url('developer')}}" class="favour-active"><i class="fas fa-th-large"></i></a></li>
										<li><a href="{{url('developer-list')}}" ><i class="fas fa-list"></i></a></li>
									</ul>
								</div>
							</div>
					   </div>
						
						<div class="row">
							<div class="col-md-6 col-lg-6 col-xl-4">
								<div class="freelance-widget">
									<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
										<div class="freelance-img">
											<a href="{{url('developer-details')}}">
												<img src="{{URL::asset('/assets/img/user/avatar-1.jpg')}}" alt="User Image">
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
												<i class="fas fa-star filled"></i>
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
										<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
										<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6 col-xl-4">
								<div class="freelance-widget">
									<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite favourited"><i class="feather-heart"></i></a>
										<div class="freelance-img">
											<a href="{{url('developer-details')}}">
												<img src="{{URL::asset('/assets/img/user/avatar-2.jpg')}}" alt="User Image">
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
													<i class="fas fa-star filled"></i>
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
											<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
											<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
										</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6 col-xl-4">
								<div class="freelance-widget">
									<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
										<div class="freelance-img">
											<a href="{{url('developer-details')}}">
												<img src="{{URL::asset('/assets/img/user/avatar-3.jpg')}}" alt="User Image">
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
												<i class="fas fa-star filled"></i>
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
										<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
										<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6 col-xl-4">
								<div class="freelance-widget">
									<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
										<div class="freelance-img">
											<a href="{{url('developer-details')}}">
												<img src="{{URL::asset('/assets/img/user/avatar-4.jpg')}}" alt="User Image">
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
										<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
										<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6 col-xl-4">
								<div class="freelance-widget">
									<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
										<div class="freelance-img">
											<a href="{{url('developer-details')}}">
												<img src="{{URL::asset('/assets/img/user/avatar-5.jpg')}}" alt="User Image">
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
												<i class="fas fa-star filled"></i>
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
										<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
										<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6 col-xl-4">
								<div class="freelance-widget">
									<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
										<div class="freelance-img">
											<a href="{{url('developer-details')}}">
												<img src="{{URL::asset('/assets/img/user/avatar-6.jpg')}}" alt="User Image">
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
												<i class="fas fa-star filled"></i>
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
										<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
										<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6 col-xl-4">
								<div class="freelance-widget">
									<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
										<div class="freelance-img">
											<a href="{{url('developer-details')}}">
												<img src="{{URL::asset('/assets/img/user/avatar-7.jpg')}}" alt="User Image">
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
										<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
										<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6 col-xl-4">
								<div class="freelance-widget">
									<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
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
											<div class="freelancers-price">Free</div>
										</div>
									</div>
									<div class="cart-hover">
										<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
										<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6 col-xl-4">
								<div class="freelance-widget">
									<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
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
										<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
										<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6 col-xl-4">
								<div class="freelance-widget">
									<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
										<div class="freelance-img">
											<a href="{{url('developer-details')}}">
												<img src="{{URL::asset('/assets/img/user/avatar-10.jpg')}}" alt="User Image">
												<span class="verified"><i class="fas fa-check-circle"></i></span>
											</a>
										</div>
										<div class="freelance-info">
											<h3><a href="{{url('developer-details')}}">Veronica Cheek</a></h3>
											<div class="freelance-specific">Software Architect</div>
											<div class="freelance-location"><i class="feather-map-pin me-1"></i>Vermont, USA</div>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<span class="average-rating">2.3 (20)</span>
											</div>
											<div class="freelance-tags">
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
											</div>
											<div class="freelancers-price">$26 Hourly</div>
										</div>
									</div>
									<div class="cart-hover">
										<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
										<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6 col-xl-4">
								<div class="freelance-widget">
									<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
										<div class="freelance-img">
											<a href="{{url('developer-details')}}">
												<img src="{{URL::asset('/assets/img/user/avatar-11.jpg')}}" alt="User Image">
												<span class="verified"><i class="fas fa-check-circle"></i></span>
											</a>
										</div>
										<div class="freelance-info">
											<h3><a href="{{url('developer-details')}}">Andrew Glover</a></h3>
											<div class="freelance-specific">Software Developer</div>
											<div class="freelance-location"><i class="feather-map-pin me-1"></i>Virginia, USA</div>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="average-rating">5.0 (4)</span>
											</div>
											<div class="freelance-tags">
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
											</div>
											<div class="freelancers-price">$8 Hourly</div>
										</div>
									</div>
									<div class="cart-hover">
										<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
										<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6 col-xl-4">
								<div class="freelance-widget">
									<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="feather-heart"></i></a>
										<div class="freelance-img">
											<a href="{{url('developer-details')}}">
												<img src="{{URL::asset('/assets/img/user/avatar-12.jpg')}}" alt="User Image">
												<span class="verified"><i class="fas fa-check-circle"></i></span>
											</a>
										</div>
										<div class="freelance-info">
											<h3><a href="{{url('developer-details')}}">Mickey Bernier</a></h3>
											<div class="freelance-specific">QA Engineer</div>
											<div class="freelance-location"><i class="feather-map-pin me-1"></i>Colorado, USA</div>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="average-rating">5.0 (4)</span>
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
										<a href="javascript:void(0);" class="btn-invite mb-2 w-100 d-block" tabindex="-1">Invite</a>
										<a href="{{url('developer-details')}}" class="btn-cart" tabindex="-1">View Profile</a>
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
						
				</div>
			</div>

		</div>
		<!-- /Page Content -->

@component('components.modal-popup')
@slot('li_1') Freelancer @endslot   
@endcomponent	
@endsection