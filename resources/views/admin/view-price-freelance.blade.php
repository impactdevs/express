<?php $page="view-price-freelance";?>
@extends('layout.mainlayout_admin')
@section('content')
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					@component('admin/components.breadcrumb')
						@slot('li_1') Subscriber List @endslot
					    @slot('li_2') Home @endslot
					    @slot('li_3') Subscriber List @endslot
					@endcomponent
					<div class="row">
						<div class="col-sm-12">
							<div class="subscribe-employe">
								<ul>
									<li ><a href="{{url('admin/view-price-employe')}}">Employer </a></li>
									<li class="active"><a href="{{url('admin/view-price-freelance')}}">Freelancer</a></li>
								</ul>
							</div>
							
							<!-- Pricing Plans -->
							<div class="price-plan" >
								<div class="heading-price text-center" >
									<h2>Choose Your Plan </h2>
									<p>If you need more info about our pricing, please check <a href="javascript:void(0);">Pricing Guidelines</a></p>
								</div>
								<div class="plan-price">
									<ul class="nav nav-pills price-list" role="tablist">
										<li class="nav-item" role="presentation">
											<button class="btn-plan active" id="pills-Monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-client" aria-selected="false">Monthly</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="btn-plan " id="pills-annual-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-client" aria-selected="false">Annual</button>
										</li>
									</ul>
									<div class="tab-content" id="pills-tabContent">
										<div class="tab-pane fade active show" id="pills-1" role="tabpanel" aria-labelledby="pills-Monthly-tab">
											<div class="row justify-content-center">
												<div class="col-lg-4 col-md-6 d-flex">
													<div class="clockfie-plan">
														<div class="basic-plan text-center">
															<h2>Basic</h2>
															<p>Optimal for 10+ team size & new <br>startup</p>
															<div class="price-start text-center">
																<h2>$39.00 <span>/month</span></h2>
															</div>
														</div>
														<div class="credit-project">
															<ul class="credit-list">
																<li>20 prroject Credit <i class='fas fa-check-circle'></i></li>
																<li>10 Projects <i class='fas fa-check-circle'></i></li>
																<li>25 Project Visibility  <i class="fas fa-times-circle wrong-credit"></i></li>
																<li>20 Featured Services  <i class="fas fa-times-circle wrong-credit"></i></li>
															</ul>
															<div class="subscribe-now text-center">
																<a href="javascript:void(0);" class="btn btn-primary">Edit</a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-6 d-flex">
													<div class="clockfie-plan">
														<div class="basic-plan text-center">
															<h2>Professional</h2>
															<p>Optimal for 10+ team size & new <br>startup</p>
															<div class="price-start text-center">
																<h2>$94.00 <span>/month</span></h2>
															</div>
														</div>
														<div class="credit-project">
															<ul class="credit-list">
																<li>50 prroject Credit <i class='fas fa-check-circle'></i></li>
																<li>25 Projects <i class='fas fa-check-circle'></i></li>
																<li>50 Project Visibility  <i class='fas fa-check-circle'></i></li>
																<li>50 Featured Services  <i class="fas fa-times-circle wrong-credit"></i></li>
															</ul>
															<div class="subscribe-now text-center">
																<a href="javascript:void(0);" class="btn btn-primary">Edit</a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-6 d-flex">
													<div class="clockfie-plan">
														<div class="basic-plan text-center">
															<h2>Enterprise</h2>
															<p>Optimal for 10+ team size & new <br>startup</p>
															<div class="price-start text-center">
																<h2>$199.00 <span>/month</span></h2>
															</div>
														</div>
														<div class="credit-project">
															<ul class="credit-list">
																<li>100 prroject Credit <i class='fas fa-check-circle'></i></li>
																<li>120 Projects <i class='fas fa-check-circle'></i></li>
																<li>100 Project Visibility  <i class='fas fa-check-circle'></i></li>
																<li>100 Featured Services  <i class='fas fa-check-circle'></i></li>
															</ul>
															<div class="subscribe-now text-center">
																<a href="javascript:void(0);" class="btn btn-primary">Edit</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-annual-tab">
											<div class="row justify-content-center">
												<div class="col-lg-4 col-md-6 d-flex">
													<div class="clockfie-plan">
														<div class="basic-plan text-center">
															<h2>Basic</h2>
															<p>Optimal for 10+ team size & new <br>startup</p>
															<div class="price-start text-center">
																<h2>$50.00 <span>/month</span></h2>
															</div>
														</div>
														<div class="credit-project">
															<ul class="credit-list">
																<li>30 prroject Credit <i class='fas fa-check-circle'></i></li>
																<li>10 Projects <i class='fas fa-check-circle'></i></li>
																<li>30 Project Visibility  <i class="fas fa-times-circle wrong-credit"></i></li>
																<li>30 Featured Services  <i class="fas fa-times-circle wrong-credit"></i></li>
															</ul>
															<div class="subscribe-now text-center">
																<a href="javascript:void(0);" class="btn btn-primary">Edit</a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-6 d-flex">
													<div class="clockfie-plan">
														<div class="basic-plan text-center">
															<h2>Professional</h2>
															<p>Optimal for 10+ team size & new <br>startup</p>
															<div class="price-start text-center">
																<h2>$120.00 <span>/month</span></h2>
															</div>
														</div>
														<div class="credit-project">
															<ul class="credit-list">
																<li>80 prroject Credit <i class='fas fa-check-circle'></i></li>
																<li>25 Projects <i class='fas fa-check-circle'></i></li>
																<li>80 Project Visibility  <i class='fas fa-check-circle'></i></li>
																<li>80 Featured Services  <i class="fas fa-times-circle wrong-credit"></i></li>
															</ul>
															<div class="subscribe-now text-center">
																<a href="javascript:void(0);" class="btn btn-primary">Edit</a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-6 d-flex">
													<div class="clockfie-plan">
														<div class="basic-plan text-center">
															<h2>Enterprise</h2>
															<p>Optimal for 10+ team size & new <br>startup</p>
															<div class="price-start text-center">
																<h2>$1999.00 <span>/month</span></h2>
															</div>
														</div>
														<div class="credit-project">
															<ul class="credit-list">
																<li>140 prroject Credit <i class='fas fa-check-circle'></i></li>
																<li>120 Projects <i class='fas fa-check-circle'></i></li>
																<li>140 Project Visibility  <i class='fas fa-check-circle'></i></li>
																<li>140 Featured Services  <i class='fas fa-check-circle'></i></li>
															</ul>
															<div class="subscribe-now text-center">
																<a href="javascript:void(0);" class="btn btn-primary">Edit</a>
															</div>
														</div>
													</div>
												</div>
											</div>					
										</div>
									</div>
								</div>
							</div>
							<!-- /Pricing Plans -->
							
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		</div>
		<!-- /Main Wrapper -->
@component('admin/components.modal-popup') 
@endcomponent		
@endsection