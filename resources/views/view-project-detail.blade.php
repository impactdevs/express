<?php $page="milestones";?>
@extends('layout.mainlayout')
@section('content')

			<!-- Page Content -->
			<div class="content">
				<div class="container">
					<div class="row">
                        @include('layout.partials.nav-employer')
						<div class="col-xl-9 col-lg-8">
							<div class="page-title">
								<h3>Manage Projects</h3>
							</div>
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="{{url('view-project-detail')}}">Overview & Discussions</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('milestones')}}">Milestones</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('tasks')}}">Tasks</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('files')}}">Files</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('project-payment')}}">Payments</a>
									</li>
								</ul>
							</nav>

							<!-- project list -->
							<div class="my-projects">
								<!-- Proposals -->
								<div class="freelancer-proposals proposal-ongoing">
									<div class="project-proposals align-items-center freelancer">
										<div class="proposal-info">
											<div class="proposals-details">
												<h3 class="proposals-title">3D Renders and Amazon Product Store images/Video</h3>
												<ul>

													<li>
														<div class="proposal-client-price">
															<h4 class="title-info">Client Price</h4>
															<h3 class="client-price">$599.00 <span class="price-type">( Fixed )</span></h3>
														</div>
													</li>
													<li>
														<div class="proposal-job-type">
															<h4 class="title-info">Project Deadline</h4>
															<h3>28 Oct 2023</h3>
														</div>
													</li>
													<li>
														<div class="proposal-img">
															<div class="proposal-client d-flex align-items-center">
																<img src="{{URL::asset('/assets/img/user/table-avatar-03.jpg')}}" alt="Img" class="img-fluid me-2">
																<div>
																	<h4>Hannah Finn</h4>
																	<span>10 Oct 2023<i class="fa-solid fa-star"></i>5.0</span>
																</div>
															</div>
														</div>
													</li>
													<li>
														<div class="project-action text-center overview-action">
															<a href="javascript:void(0);" class="projects-btn ">Is job completed?</a>
															<a href="{{url('chats')}}" class="btn-text mb-0">Chat Now</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Proposals -->
							</div>
							<!-- /project list -->

							<!-- Overview -->
							<div class="overview-description">
								<h4>Description</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
							</div>

							<!-- /Overview -->

							<!-- Skills Required -->
							<div class="skill-required">
								<h4 >Skills Required</h4>
								<div class="pro-content">
									<div class="tags">
										<span class="badge badge-pill badge-design">Web design</span>
										<span class="badge badge-pill badge-design">UI Design</span>
										<span class="badge badge-pill badge-design">React</span>
										<span class="badge badge-pill badge-design">Design Writing</span>
										<span class="badge badge-pill badge-design">Software Design</span>
										<span class="badge badge-pill badge-design">HTML5</span>
										<span class="badge badge-pill badge-design">Sketch</span>
									</div>
								</div>
							</div>
							<!-- /Skills Required -->

						</div>
					</div>
				</div>
			</div>
			<!-- /Page Content -->


@endsection
