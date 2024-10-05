<?php $page="freelancer-project-proposals";?>
@extends('layout.mainlayout')
@section('content')


			<!-- Page Content -->
			<div class="content content-page">
				<div class="container">
					<div class="row">
                        @include('layout.partials.nav-freelancer')
						<div class="col-xl-9 col-lg-8">
							<div class="page-title">
								<h3>My Proposals</h3>
							</div>
							 {{-- <nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="{{url('freelancer-project-proposals')}}">My Proposals</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('freelancer-ongoing-projects')}}">Ongoing Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('freelancer-completed-projects')}}">Completed Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('freelancer-cancelled-projects')}}">Cancelled Projects</a>
									</li>
								</ul>
							</nav>   --}}

							<!-- Proposals list -->
							<div class="proposals-section">

								<!-- Proposals -->
								<div class="freelancer-proposals">
									<div class="project-proposals align-items-center freelancer">
										<div class="proposal-info">
											<div class="proposals-details">
												<h3 class="proposals-title">3D Renders and Amazon Product Store images/Video</h3>
												<ul>
													<li>
														<div class="proposal-img">
															<div class="proposal-client">
																<img src="{{URL::asset('/assets/img/user/table-avatar-02.jpg')}}" alt="Img" class="img-fluid">
																<h4>Hayley Melba</h4>
																<span class="info-btn">client</span>
															</div>
														</div>
													</li>
													<li>
														<div class="proposal-client-price">
															<h4 class="title-info">Client Price</h4>
															<h3 class="client-price">$599.00 <span class="price-type">( Fixed )</span></h3>
														</div>
													</li>
													<li>
														<div class="proposal-job-type">
															<h4 class="title-info">Job Type</h4>
															<h3>Hourly</h3>
														</div>
													</li>
													<li>
														<div class="project-amount">
															<h4 class="title-info">Your Price</h4>
															<h3>$500.00<span>(in 12 Days)</span></h3>
														</div>
													</li>
													<li>
														<div class="project-action text-center">
															<a data-bs-toggle="modal" href="#file" class="projects-btn">Edit Proposals </a>
															<a href="{{url('freelancer-view-project-detail')}}">View Project</a>
															<a href="javascript:void(0);" class="proposal-delete mb-0">Delete Proposal</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Proposals -->

								<!-- Proposals -->
								<div class="freelancer-proposals">
									<div class="project-proposals align-items-center freelancer">
										<div class="proposal-info">
											<div class="proposals-details">
												<h3 class="proposals-title">Landing Page Redesign / Sales Page Redesign (Not Entire Web)</h3>
												<ul>
													<li>
														<div class="proposal-img">
															<div class="proposal-client">
																<img src="{{URL::asset('/assets/img/user/avatar-25.jpg')}}" alt="Img" class="img-fluid">
																<h4>Hayden Paltridge</h4>
																<span class="info-btn">client</span>
															</div>
														</div>
													</li>
													<li>
														<div class="proposal-client-price">
															<h4 class="title-info">Client Price</h4>
															<h3 class="client-price">$460.00 <span class="price-type">( Fixed )</span></h3>
														</div>
													</li>
													<li>
														<div class="proposal-job-type">
															<h4 class="title-info">Job Type</h4>
															<h3>Hourly</h3>
														</div>
													</li>
													<li>
														<div class="project-amount">
															<h4 class="title-info">Your Price</h4>
															<h3>$420.00<span>(in 12 Days)</span></h3>
														</div>
													</li>
													<li>
														<div class="project-action text-center">
															<a data-bs-toggle="modal" href="#file" class="projects-btn">Edit Proposals </a>
															<a href="{{url('freelancer-view-project-detail')}}">View Project</a>
															<a href="javascript:void(0);" class="proposal-delete mb-0">Delete Proposal</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Proposals -->

								<!-- Proposals -->
								<div class="freelancer-proposals">
									<div class="project-proposals align-items-center freelancer">
										<div class="proposal-info">
											<div class="proposals-details">
												<h3 class="proposals-title">WooCommerce Product Page Back Up Restoration</h3>
												<ul>
													<li>
														<div class="proposal-img">
															<div class="proposal-client">
																<img src="{{URL::asset('/assets/img/user/proposal-user-01.jpg')}}" alt="Img" class="img-fluid">
																<h4>Lily Lipscombe</h4>
																<span class="info-btn">client</span>
															</div>
														</div>
													</li>
													<li>
														<div class="proposal-client-price">
															<h4 class="title-info">Client Price</h4>
															<h3 class="client-price">$370.00 <span class="price-type">( Fixed )</span></h3>
														</div>
													</li>
													<li>
														<div class="proposal-job-type">
															<h4 class="title-info">Job Type</h4>
															<h3>Hourly</h3>
														</div>
													</li>
													<li>
														<div class="project-amount">
															<h4 class="title-info">Your Price</h4>
															<h3>$300.00<span>(in 12 Days)</span></h3>
														</div>
													</li>
													<li>
														<div class="project-action text-center">
															<a data-bs-toggle="modal" href="#file" class="projects-btn">Edit Proposals </a>
															<a href="{{url('freelancer-view-project-detail')}}">View Project</a>
															<a href="javascript:void(0);" class="proposal-delete mb-0">Delete Proposal</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Proposals -->

								<!-- Proposals -->
								<div class="freelancer-proposals">
									<div class="project-proposals align-items-center freelancer">
										<div class="proposal-info">
											<div class="proposals-details">
												<h3 class="proposals-title">Full-stack Developer to help us to build our</h3>
												<ul>
													<li>
														<div class="proposal-img">
															<div class="proposal-client">
																<img src="{{URL::asset('/assets/img/user/table-avatar-04.jpg')}}" alt="Img" class="img-fluid">
																<h4>Flynn Gosman</h4>
																<span class="info-btn">client</span>
															</div>
														</div>
													</li>
													<li>
														<div class="proposal-client-price">
															<h4 class="title-info">Client Price</h4>
															<h3 class="client-price">$490.00 <span class="price-type">( Fixed )</span></h3>
														</div>
													</li>
													<li>
														<div class="proposal-job-type">
															<h4 class="title-info">Job Type</h4>
															<h3>Hourly</h3>
														</div>
													</li>
													<li>
														<div class="project-amount">
															<h4 class="title-info">Your Price</h4>
															<h3>$450.00<span>(in 12 Days)</span></h3>
														</div>
													</li>
													<li>
														<div class="project-action text-center">
															<a data-bs-toggle="modal" href="#file" class="projects-btn">Edit Proposals </a>
															<a href="{{url('freelancer-view-project-detail')}}">View Project</a>
															<a href="javascript:void(0);" class="proposal-delete mb-0">Delete Proposal</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Proposals -->

								<!-- Proposals -->
								<div class="freelancer-proposals">
									<div class="project-proposals align-items-center freelancer">
										<div class="proposal-info">
											<div class="proposals-details">
												<h3 class="proposals-title">Video animator to bring some illustrations to life</h3>
												<ul>
													<li>
														<div class="proposal-img">
															<div class="proposal-client">
																<img src="{{URL::asset('/assets/img/user/proposal-user-02.jpg')}}" alt="Img" class="img-fluid">
																<h4>Emma Icely</h4>
																<span class="info-btn">client</span>
															</div>
														</div>
													</li>
													<li>
														<div class="proposal-client-price">
															<h4 class="title-info">Client Price</h4>
															<h3 class="client-price">$680.00 <span class="price-type">( Fixed )</span></h3>
														</div>
													</li>
													<li>
														<div class="proposal-job-type">
															<h4 class="title-info">Job Type</h4>
															<h3>Hourly</h3>
														</div>
													</li>
													<li>
														<div class="project-amount">
															<h4 class="title-info">Your Price</h4>
															<h3>$620.00<span>(in 12 Days)</span></h3>
														</div>
													</li>
													<li>
														<div class="project-action text-center">
															<a href="javascript:void(0);" class="projects-btn">Closed </a>
															<a href="{{url('freelancer-view-project-detail')}}">View Project</a>
															<a href="javascript:void(0);" class="proposal-delete mb-0">Delete Proposal</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Proposals -->

								<!-- Proposals -->
								<div class="freelancer-proposals mb-0">
									<div class="project-proposals align-items-center freelancer">
										<div class="proposal-info">
											<div class="proposals-details">
												<h3 class="proposals-title">Food Delivery Mobile App</h3>
												<ul>
													<li>
														<div class="proposal-img">
															<div class="proposal-client">
																<img src="{{URL::asset('/assets/img/user/proposal-user-03.jpg')}}" alt="Img" class="img-fluid">
																<h4>Cody Cornish</h4>
																<span class="info-btn">client</span>
															</div>
														</div>
													</li>
													<li>
														<div class="proposal-client-price">
															<h4 class="title-info">Client Price</h4>
															<h3 class="client-price">$760.00 <span class="price-type">( Fixed )</span></h3>
														</div>
													</li>
													<li>
														<div class="proposal-job-type">
															<h4 class="title-info">Job Type</h4>
															<h3>Hourly</h3>
														</div>
													</li>
													<li>
														<div class="project-amount">
															<h4 class="title-info">Your Price</h4>
															<h3>$680.00<span>(in 12 Days)</span></h3>
														</div>
													</li>
													<li>
														<div class="project-action text-center">
															<a href="javascript:void(0);" class="projects-btn">Closed </a>
															<a href="{{url('freelancer-view-project-detail')}}">View Project</a>
															<a href="javascript:void(0);" class="proposal-delete mb-0">Delete Proposal</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Proposals -->

							</div>
							<!-- /Proposals list -->

						</div>
					</div>
				</div>
			</div>

			<!-- /Page Content -->

@component('components.modal-popup')
@endcomponent
@endsection
