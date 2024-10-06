<?php $page="manage-projects";?>
@extends('layout.mainlayout')
@section('content')

				<!-- Page Content -->
				<div class="content content-page">
					<div class="container">
						<div class="row">
                            @include('layout.partials.nav-employer')
							<div class="col-xl-9 col-lg-8">
								<div class="page-title">
									<h3>Pending Projects</h3>
								</div>
								<!-- project list -->
								<div class="my-projects-list ongoing-projects">
									<div class="row">
										<div class="col-xl-9 flex-wrap">
											<div class="freelancer-proposals proposal-ongoing mb-0">
												<div class="project-proposals align-items-center freelancer">
													<div class="proposal-info">
														<div class="proposals-details">
															<span class="tech-name-badge">Dreamguystech</span>
															<div class="d-flex justify-content-between align-items-start">
																<div class="employee-project-card">

																	<h3 class="proposals-title">Website Designer Required For Directory Theme</h3>
																	<ul>

																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Project type</h4>
																				<h3>Hourly</h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Location</h4>
																				<h3 class="flag-icon"><img src="{{URL::asset('/assets/img/icon/flag-icon.svg')}}" height="13" alt="Lang"> UK</h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Expiry</h4>
																				<h3>4 Days Left</h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Price</h4>
																				<h3>$500</h3>
																			</div>
																		</li>
																	</ul>
																</div>
																<ul class="employee-project">
																	<li>
																		<div class="project-action text-center">
																			<a href="{{url('project-employer-view-proposal')}}" class="projects-btn">View Proposal</a>
																			<a href="javascript:void(0);" class="mb-0">Edit Project</a>
																		</div>
																	</li>
																</ul>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 d-flex flex-wrap">
											<div class="projects-card flex-fill">
												<div class="card-body p-2">
													<div class="prj-proposal-count text-center hired">
														<h2>12</h2>
														<h3 class="mb-0">Proposal</h3>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /project list -->

								<!-- project list -->
								<div class="my-projects-list ongoing-projects">
									<div class="row">
										<div class="col-xl-9 flex-wrap">
											<div class="freelancer-proposals proposal-ongoing mb-0">
												<div class="project-proposals align-items-center freelancer">
													<div class="proposal-info">
														<div class="proposals-details">
															<span class="tech-name-badge">Dreamguystech</span>
															<div class="d-flex justify-content-between align-items-start">
																<div class="employee-project-card">

																	<h3 class="proposals-title">Landing Page Redesign / Sales Page Redesign</h3>
																	<ul>

																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Project type</h4>
																				<h3>Fixed</h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Location</h4>
																				<h3 class="flag-icon"><img src="{{URL::asset('/assets/img/icon/flag-icon.svg')}}" height="13" alt="Lang"> UK</h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Expiry</h4>
																				<h3>5 Days Left</h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Price</h4>
																				<h3>$280</h3>
																			</div>
																		</li>
																	</ul>
																</div>
																<ul class="employee-project">
																	<li>
																		<div class="project-action text-center">
																			<a href="{{url('project-employer-view-proposal')}}" class="projects-btn">View Proposal</a>
																			<a href="javascript:void(0);" class="mb-0">Edit Project</a>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 d-flex flex-wrap">
											<div class="projects-card flex-fill">
												<div class="card-body p-2">
													<div class="prj-proposal-count text-center hired">
														<h2>08</h2>
														<h3 class="mb-0">Proposal</h3>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /project list -->

								<!-- project list -->
								<div class="my-projects-list ongoing-projects">
									<div class="row">
										<div class="col-xl-9 flex-wrap">
											<div class="freelancer-proposals proposal-ongoing mb-0">
												<div class="project-proposals align-items-center freelancer">
													<div class="proposal-info">
														<div class="proposals-details">
															<span class="tech-name-badge">Dreamguystech</span>
															<div class="d-flex justify-content-between align-items-start">
																<div class="employee-project-card">

																	<h3 class="proposals-title">WooCommerce Product Page Back Up Restoration</h3>
																	<ul>

																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Project type</h4>
																				<h3>Hourly</h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Location</h4>
																				<h3 class="flag-icon"><img src="{{URL::asset('/assets/img/icon/flag-icon.svg')}}" height="13" alt="Lang"> UK</h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Expiry</h4>
																				<h3>3 Days Left</h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Price</h4>
																				<h3>$700</h3>
																			</div>
																		</li>
																	</ul>
																</div>
																<ul class="employee-project">
																	<li>
																		<div class="project-action text-center">
																			<a href="{{url('project-employer-view-proposal')}}" class="projects-btn">View Proposal</a>
																			<a href="javascript:void(0);" class="mb-0">Edit Project</a>
																		</div>
																	</li>
																</ul>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 d-flex flex-wrap">
											<div class="projects-card flex-fill">
												<div class="card-body p-2">
													<div class="prj-proposal-count text-center hired">
														<h2>27</h2>
														<h3 class="mb-0">Proposal</h3>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /project list -->

								<!-- project list -->
								<div class="my-projects-list ongoing-projects">
									<div class="row">
										<div class="col-xl-9 flex-wrap">
											<div class="freelancer-proposals proposal-ongoing mb-0">
												<div class="project-proposals align-items-center freelancer">
													<div class="proposal-info">
														<div class="proposals-details">
															<span class="tech-name-badge">Dreamguystech</span>
															<div class="d-flex justify-content-between align-items-start">
																<div class="employee-project-card">

																	<h3 class="proposals-title">Laravel Backend Developer to finish ongoing project</h3>
																	<ul>

																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Project type</h4>
																				<h3>Fixed </h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Location</h4>
																				<h3 class="flag-icon"><img src="{{URL::asset('/assets/img/icon/flag-icon.svg')}}" height="13" alt="Lang"> UK</h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Expiry</h4>
																				<h3>8 Days Left</h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Price</h4>
																				<h3>$300</h3>
																			</div>
																		</li>
																	</ul>
																</div>
																<ul class="employee-project">
																	<li>
																		<div class="project-action text-center">
																			<a href="{{url('project-employer-view-proposal')}}" class="projects-btn">View Proposal</a>
																			<a href="javascript:void(0);" class="mb-0">Edit Project</a>
																		</div>
																	</li>
																</ul>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 d-flex flex-wrap">
											<div class="projects-card flex-fill">
												<div class="card-body p-2">
													<div class="prj-proposal-count text-center hired">
														<h2>16</h2>
														<h3 class="mb-0">Proposal</h3>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /project list -->

								<!-- project list -->
								<div class="my-projects-list ongoing-projects">
									<div class="row">
										<div class="col-xl-9 flex-wrap">
											<div class="freelancer-proposals proposal-ongoing mb-0">
												<div class="project-proposals align-items-center freelancer">
													<div class="proposal-info">
														<div class="proposals-details">
															<span class="tech-name-badge">Dreamguystech</span>
															<div class="d-flex justify-content-between align-items-start">
																<div class="employee-project-card">

																	<h3 class="proposals-title">3D Renders and Amazon Product Store images/Video</h3>
																	<ul>

																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Project type</h4>
																				<h3>Fixed</h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Location</h4>
																				<h3 class="flag-icon"><img src="{{URL::asset('/assets/img/icon/flag-icon.svg')}}" height="13" alt="Lang"> UK</h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Expiry</h4>
																				<h3>8 Days Left</h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Price</h4>
																				<h3>$300</h3>
																			</div>
																		</li>
																	</ul>
																</div>
																<ul class="employee-project">
																	<li>
																		<div class="project-action text-center">
																			<a href="{{url('project-employer-view-proposal')}}" class="projects-btn">View Proposal</a>
																			<a href="javascript:void(0);" class="mb-0">Edit Project</a>
																		</div>
																	</li>
																</ul>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 d-flex flex-wrap">
											<div class="projects-card flex-fill">
												<div class="card-body p-2">
													<div class="prj-proposal-count text-center hired">
														<h2>13</h2>
														<h3 class="mb-0">Proposal</h3>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /project list -->

								<!-- project list -->
								<div class="my-projects-list ongoing-projects">
									<div class="row">
										<div class="col-xl-9 flex-wrap">
											<div class="freelancer-proposals proposal-ongoing mb-0">
												<div class="project-proposals align-items-center freelancer">
													<div class="proposal-info">
														<div class="proposals-details">
															<span class="tech-name-badge">Dreamguystech</span>
															<div class="d-flex justify-content-between align-items-start">
																<div class="employee-project-card">

																	<h3 class="proposals-title">Website Designer Required For Directory Theme</h3>
																	<ul>

																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Project type</h4>
																				<h3>Hourly</h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Location</h4>
																				<h3 class="flag-icon"><img src="{{URL::asset('/assets/img/icon/flag-icon.svg')}}" height="13" alt="Lang"> UK</h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Expiry</h4>
																				<h3>4 Days Left</h3>
																			</div>
																		</li>
																		<li>
																			<div class="proposal-job-type">
																				<h4 class="title-info">Price</h4>
																				<h3>$500</h3>
																			</div>
																		</li>
																	</ul>
																</div>
																<ul class="employee-project">
																	<li>
																		<div class="project-action text-center">
																			<a href="{{url('project-employer-view-proposal')}}" class="projects-btn">View Proposal</a>
																			<a href="javascript:void(0);" class="mb-0">Edit Project</a>
																		</div>
																	</li>
																</ul>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 d-flex flex-wrap">
											<div class="projects-card flex-fill">
												<div class="card-body p-2">
													<div class="prj-proposal-count text-center hired">
														<h2>27</h2>
														<h3 class="mb-0">Proposal</h3>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /project list -->

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

@endsection
