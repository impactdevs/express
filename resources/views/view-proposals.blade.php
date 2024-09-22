<?php $page="view-proposals";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('li_1') Porposals @endslot
    @slot('li_2') Home @endslot
    @slot('li_3') Project Details @endslot
@endcomponent
			<!-- Page Content -->
			<div class="content">
				<div class="container">	
					<div class="row">	
						<div class="col-md-12">	
							<div class="profile">			
								<div class="profile-box">			
									<div class="provider-widget row">
										<div class="pro-info-left col-md-8">
											<div class="profile-info">
												<p class="profile-cmpny">Dreamguystech <i class="fas fa-check-circle text-success ms-2"></i></p>
												<h2 class="profile-title">3D Renders and Amazon Product Store images/Video</h2>
												<div></div>
											</div>
										</div>
										<div class="pro-info-right profile-inf">
											<ul class="profile-right">
												<li><div class="amt-hr">$20.00 <p>(  FIXED )</p></div></li>
											</ul>
										</div>
									</div>						
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<a href="{{url('project-details')}}" class="btn btn-primary bck-btn mb-4"><i class="fas fa-long-arrow-alt-left me-2"></i> Back to Project </a>
						</div>
						<div class="col-12">
							<div class="pro-post widget-box">
								<div class="average-bids">
									<p><span class="text-highlight">18 freelancers</span> are bidding on average <span class="text-highlight">$17.00</span> for this job</p>
								</div>
								<div class="proposal-cards">
								
									<!-- project proposal  -->
									<div class="bids-card">
										<div class="row align-items-center">
											<div class="col-lg-2">
												<div class="author-img-wrap">
													<a href="javascript:void(0);"><img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/user/avatar-1.jpg')}}"></a>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="author-detail">
													<h4><a href="javascript:void(0);">George Wells</a> <img src="{{ URL::asset('/assets/img/flags/de.png')}}" height="16" alt="Lang"></h4>
													<div class="rating">							
														<span class="average-rating">4.1</span>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star"></i>
													</div>
													<p class="mb-0">Look forward to hearing from you, I am a good designer and developer. I can handle your daily bases task with no extra effort. Please contact me as I am jobless nowadays.</p>
												</div>
											</div>
											<div class="col-lg-2">
												<div class="proposal-amnt text-end">
													<h3>$17.00</h3>
													<p class="mb-0">in 14 days</p>
												</div>
											</div>
										</div>
									</div>
									<!-- /project proposal  -->
									
									<!-- project proposal  -->
									<div class="bids-card">
										<div class="row align-items-center">
											<div class="col-lg-2">
												<div class="author-img-wrap">
													<a href="javascript:void(0);"><img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/user/avatar-2.jpg')}}"></a>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="author-detail">
													<h4><a href="javascript:void(0);">Timothy Smith</a> <img src="{{ URL::asset('/assets/img/flags/fr.png')}}" height="16" alt="Lang"></h4>
													<div class="rating">							
														<span class="average-rating">4.9</span>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star"></i>
													</div>
													<p class="mb-0">Look forward to hearing from you, I am a good designer and developer. I can handle your daily bases task with no extra effort. Please contact me as I am jobless nowadays.</p>
												</div>
											</div>
											<div class="col-lg-2">
												<div class="proposal-amnt text-end">
													<h3>$12.00</h3>
													<p class="mb-0">in 18 days</p>
												</div>
											</div>
										</div>
									</div>
									<!-- /project proposal  -->
									
									<!-- project proposal  -->
									<div class="bids-card">
										<div class="row align-items-center">
											<div class="col-lg-2">
												<div class="author-img-wrap">
													<a href="javascript:void(0);"><img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/user/avatar-3.jpg')}}"></a>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="author-detail">
													<h4><a href="javascript:void(0);">Janet Paden</a> <img src="{{ URL::asset('/assets/img/flags/us.png')}}" height="16" alt="Lang"></h4>
													<div class="rating">							
														<span class="average-rating">4.2</span>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star"></i>
													</div>
													<p class="mb-0">Look forward to hearing from you, I am a good designer and developer. I can handle your daily bases task with no extra effort. Please contact me as I am jobless nowadays.</p>
												</div>
											</div>
											<div class="col-lg-2">
												<div class="proposal-amnt text-end">
													<h3>$20.00</h3>
													<p class="mb-0">in 20 days</p>
												</div>
											</div>
										</div>
									</div>
									<!-- /project proposal  -->
									
									<!-- project proposal  -->
									<div class="bids-card">
										<div class="row align-items-center">
											<div class="col-lg-2">
												<div class="author-img-wrap">
													<a href="javascript:void(0);"><img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/user/avatar-4.jpg')}}"></a>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="author-detail">
													<h4><a href="javascript:void(0);">James Douglas</a> <img src="{{ URL::asset('/assets/img/flags/es.png')}}" height="16" alt="Lang"></h4>
													<div class="rating">							
														<span class="average-rating">3.9</span>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<p class="mb-0">Look forward to hearing from you, I am a good designer and developer. I can handle your daily bases task with no extra effort. Please contact me as I am jobless nowadays.</p>
												</div>
											</div>
											<div class="col-lg-2">
												<div class="proposal-amnt text-end">
													<h3>$10.00</h3>
													<p class="mb-0">in 22 days</p>
												</div>
											</div>
										</div>
									</div>
									<!-- /project proposal  -->
									
									<!-- project proposal  -->
									<div class="bids-card">
										<div class="row align-items-center">
											<div class="col-lg-2">
												<div class="author-img-wrap">
													<a href="javascript:void(0);"><img class="img-fluid" alt="" src="{{ URL::asset('/assets/img/user/avatar-5.jpg')}}"></a>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="author-detail">
													<h4><a href="javascript:void(0);">Floyd Lewis</a> <img src="{{ URL::asset('/assets/img/flags/de.png')}}" height="16" alt="Lang"></h4>
													<div class="rating">							
														<span class="average-rating">3.5</span>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<p class="mb-0">Look forward to hearing from you, I am a good designer and developer. I can handle your daily bases task with no extra effort. Please contact me as I am jobless nowadays.</p>
												</div>
											</div>
											<div class="col-lg-2">
												<div class="proposal-amnt text-end">
													<h3>$22.00</h3>
													<p class="mb-0">in 25 days</p>
												</div>
											</div>
										</div>
									</div>
									<!-- /project proposal  -->
									
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