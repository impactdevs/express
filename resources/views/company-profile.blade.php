<?php $page="company-profile";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('li_1') Company Profile @endslot
    @slot('li_2') Home @endslot
    @slot('li_3') Company Profile @endslot
@endcomponent	

	
			<!-- Page Content -->
			<div class="content">
				<div class="container">	
					<div class="row">
						<div class="col-lg-8 col-md-12">
							<div class="company-detail-block pt-0">
								<div class="company-detail">
									<div class="company-detail-image">
										<img src="{{URL::asset('/assets/img/default-logo.svg')}}" class="img-fluid" alt="logo">
									</div>
									<div class="company-title">
										<p>Soft Technologies</p>
										<h4>Build a Coaching Website Product Store images</h4>
									</div>
								</div>
								<div class="company-address">
									<ul>
										<li>
											<i class="feather-map-pin"></i>Los Angels
										</li>
										<li>
											<i class="feather-calendar"></i>22 September 2023
										</li>
										<li>
											<i class="feather-eye"></i>902 Views
										</li>
										<li>
											<i class="feather-edit-2"></i>15 Proposal
										</li>
									</ul>
								</div>
								<div class="project-proposal-detail">
									<ul>
										<li>
											<div class="proposal-detail-img">
												<img src="{{URL::asset('/assets/img/icon/computer-line.svg')}}" alt="icons">
											</div>
											<div class="proposal-detail text-capitalize">
												<span class=" d-block">Freelancer Type</span>
												<p class="mb-0">Full Time</p>
											</div>
										</li>
										<li>
											<div class="proposal-detail-img">
												<img src="{{URL::asset('/assets/img/icon/time-line.svg')}}" alt="icons">
											</div>
											<div class="proposal-detail text-capitalize">
												<span class=" d-block">Project Type</span>
												<p class="mb-0">Hourly</p>
											</div>
										</li>
										<li>
											<div class="proposal-detail-img">
												<img src="{{URL::asset('/assets/img/icon/time-line.svg')}}" alt="icons">
											</div>
											<div class="proposal-detail text-capitalize">
												<span class=" d-block">Project Duration</span>
												<p class="mb-0">10-15 Hours</p>
											</div>
										</li>
										<li>
											<div class="proposal-detail-img">
												<img src="{{URL::asset('/assets/img/icon/user-heart-line.svg')}}" alt="icons">
											</div>
											<div class="proposal-detail text-capitalize">
												<span class=" d-block">Experience</span>
												<p class="mb-0">Basic</p>
											</div>
										</li>
										<li>
											<div class="proposal-detail-img">
												<img src="{{URL::asset('/assets/img/icon/translate-2.svg')}}" alt="icons">
											</div>
											<div class="proposal-detail text-capitalize">
												<span class=" d-block">Languages</span>
												<p class="mb-0">English, Arabic</p>
											</div>
										</li>
										<li>
											<div class="proposal-detail-img">
												<img src="{{URL::asset('/assets/img/icon/translate.svg')}}" alt="icons">
											</div>
											<div class="proposal-detail text-capitalize">
												<span class=" d-block">Language Fluency</span>
												<p class="mb-0">Conversational</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="company-detail-block company-description">
								<h4 class="company-detail-title">Description</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
							</div>
							<div class="company-detail-block company-description">
								<h4 class="company-detail-title">Skills Required</h4>
								<div class="tags">
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">After Effects</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Illustrator</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">HTML</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Whiteboard</span></a>
								</div>
							</div>
							<div class="company-detail-block">
								<h4 class="company-detail-title">Attachments</h4>
								<div class="row row-gap">
									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="attachment-file">
											<div class="attachment-files-details">
												<h6>sample.pdf</h6>
												<span>file size 139 KB</span>
											</div>
											<a href="javascript:void(0);" class="file-download-btn">
												<i class="feather-download"></i>
											</a>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="attachment-file">
											<div class="attachment-files-details">
												<h6>Website logo.jpg</h6>
												<span>file size 139 KB</span>
											</div>
											<a href="javascript:void(0);" class="file-download-btn">
												<i class="feather-download"></i>
											</a>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="attachment-file">
											<div class="attachment-files-details">
												<h6>Banner image.jpg'</h6>
												<span>file size 139 KB</span>
											</div>
											<a href="javascript:void(0);" class="file-download-btn">
												<i class="feather-download"></i>
											</a>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="attachment-file">
											<div class="attachment-files-details">
												<h6>Services image.jpg</h6>
												<span>file size 139 KB</span>
											</div>
											<a href="javascript:void(0);" class="file-download-btn">
												<i class="feather-download"></i>
											</a>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="attachment-file">
											<div class="attachment-files-details">
												<h6>About us.jpg</h6>
												<span>file size 139 KB</span>
											</div>
											<a href="javascript:void(0);" class="file-download-btn">
												<i class="feather-download"></i>
											</a>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="attachment-file">
											<div class="attachment-files-details">
												<h6>Website Content.dcs</h6>
												<span>file size 139 KB</span>
											</div>
											<a href="javascript:void(0);" class="file-download-btn">
												<i class="feather-download"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="company-detail-block company-description">
								<h4 class="company-detail-title">Tags</h4>
								<div class="tags">
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Machine Learning</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">AI Chatbot</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Virtual Assistant</span></a>
								</div>
							</div>
							<div class="company-detail-block pb-0">
								<h4 class="company-detail-title">Project Proposals (5)</h4>
								<div class="project-proposals-block ">
									<div class="project-proposals-img">
										<img src="{{URL::asset('/assets/img/user/avatar-1.jpg')}}" class="img-fluid" alt="user">
									</div>
									<div class="project-proposals-description">
										<div class="proposals-user-detail">
											<div>
												<h5>Theresa Phillips</h5>
												<ul class="d-flex">
													<li>
														<div class="proposals-user-review">
															<span><i class="fa fa-star"></i>5.0 (346 Reviews)</span>
														</div>
													</li>
													<li>
														<div class="proposals-user-review">
															<span><i class="feather-calendar"></i>1 min ago</span>
														</div>
													</li>
												</ul>
											</div>
											<div>
												<div class="proposals-pricing">
													<h4>$40-$500</h4>
													<span>Price : Fixed </span>
												</div>
											</div>
										</div>
										<p class="mb-0" >I've been buying and selling on kofejob Marketplace for the past two years, and it's been a game-changer for me. The platform is user-friendly, and I've had great success selling my handmade crafts. Plus, the customer support team is always there to help if I have any questions or issues.</p>
									</div>
								</div>
								<div class="project-proposals-block ">
									<div class="project-proposals-img">
										<img src="{{URL::asset('/assets/img/user/avatar-2.jpg')}}" class="img-fluid" alt="user">
									</div>
									<div class="project-proposals-description">
										<div class="proposals-user-detail">
											<div>
												<h5>Aaron Storey</h5>
												<ul class="d-flex">
													<li>
														<div class="proposals-user-review">
															<span><i class="fa fa-star"></i>5.0 (346 Reviews)</span>
														</div>
													</li>
													<li>
														<div class="proposals-user-review">
															<span><i class="feather-calendar"></i>1 min ago</span>
														</div>
													</li>
												</ul>
											</div>
											<div>
												<div class="proposals-pricing">
													<h4>$20-$350</h4>
													<span>Price : Fixed </span>
												</div>
											</div>
										</div>
										<p class="mb-0" >I've been buying and selling on kofejob Marketplace for the past two years, and it's been a game-changer for me. The platform is user-friendly, and I've had great success selling my handmade crafts. Plus, the customer support team is always there to help if I have any questions or issues.</p>
									</div>
								</div>
								<div class="project-proposals-block ">
									<div class="project-proposals-img">
										<img src="{{URL::asset('/assets/img/user/avatar-3.jpg')}}" class="img-fluid" alt="user">
									</div>
									<div class="project-proposals-description">
										<div class="proposals-user-detail">
											<div>
												<h5>Aaron Storey</h5>
												<ul class="d-flex">
													<li>
														<div class="proposals-user-review">
															<span><i class="fa fa-star"></i>5.0 (346 Reviews)</span>
														</div>
													</li>
													<li>
														<div class="proposals-user-review">
															<span><i class="feather-calendar"></i>1 min ago</span>
														</div>
													</li>
												</ul>
											</div>
											<div>
												<div class="proposals-pricing">
													<h4>$50-$200</h4>
													<span>Price : Fixed </span>
												</div>
											</div>
										</div>
										<p class="mb-0" >I've been buying and selling on kofejob Marketplace for the past two years, and it's been a game-changer for me. The platform is user-friendly, and I've had great success selling my handmade crafts. Plus, the customer support team is always there to help if I have any questions or issues.</p>
									</div>
								</div>
								<div class="project-proposals-block ">
									<div class="project-proposals-img">
										<img src="{{URL::asset('/assets/img/user/avatar-4.jpg')}}" class="img-fluid" alt="user">
									</div>
									<div class="project-proposals-description">
										<div class="proposals-user-detail">
											<div>
												<h5>Archer Crossley</h5>
												<ul class="d-flex">
													<li>
														<div class="proposals-user-review">
															<span><i class="fa fa-star"></i>5.0 (346 Reviews)</span>
														</div>
													</li>
													<li>
														<div class="proposals-user-review">
															<span><i class="feather-calendar"></i>1 min ago</span>
														</div>
													</li>
												</ul>
											</div>
											<div>
												<div class="proposals-pricing">
													<h4>$10-$450</h4>
													<span>Price : Fixed </span>
												</div>
											</div>
										</div>
										<p class="mb-0" >I've been buying and selling on kofejob Marketplace for the past two years, and it's been a game-changer for me. The platform is user-friendly, and I've had great success selling my handmade crafts. Plus, the customer support team is always there to help if I have any questions or issues.</p>
									</div>
								</div>
								<div class="project-proposals-block ">
									<div class="project-proposals-img">
										<img src="{{URL::asset('/assets/img/user/avatar-5.jpg')}}" class="img-fluid" alt="user">
									</div>
									<div class="project-proposals-description">
										<div class="proposals-user-detail">
											<div>
												<h5>Amy Stockdill</h5>
												<ul class="d-flex">
													<li>
														<div class="proposals-user-review">
															<span><i class="fa fa-star"></i>5.0 (346 Reviews)</span>
														</div>
													</li>
													<li>
														<div class="proposals-user-review">
															<span><i class="feather-calendar"></i>5 min ago</span>
														</div>
													</li>
												</ul>
											</div>
											<div>
												<div class="proposals-pricing">
													<h4>$300-$350</h4>
													<span>Price : Fixed </span>
												</div>
											</div>
										</div>
										<p class="mb-0" >I've been buying and selling on kofejob Marketplace for the past two years, and it's been a game-changer for me. The platform is user-friendly, and I've had great success selling my handmade crafts. Plus, the customer support team is always there to help if I have any questions or issues.</p>
									</div>
								</div>
							</div>
						</div>
					
						<!-- Blog Sidebar -->
						<div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar project-client-view">	
							<div class="card budget-widget">
								<div class="budget-widget-details">
									<h6>Budget</h6>
									<h4>$125 - $180</h4>
									<p class="mb-0">Hourly Rate</p>
								</div>
								<div>
									<a data-bs-toggle="modal" href="#file" class="btn proposal-btn btn-primary">Submit Proposal  </a>
								</div>
							</div>
							<div class="card budget-widget">
								<div class="budget-widget-details">
									<h6>About Client</h6>
									<div class="company-detail-image">
										<img src="{{URL::asset('/assets/img/default-logo.svg')}}" class="img-fluid" alt="logo">
									</div>
									<h5>KIND SOFTWARES</h5>
									<span>Member Since December 31, 2020</span>
									<div class="rating mb-3">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<span class="average-rating">5.0</span>
									</div>
									<ul class="d-flex list-style mb-0 social-list">
										<li>
											<a href="javascript:void(0);" class="social-link-block">
												<i class="fa-brands fa-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="social-link-block">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="social-link-block">
												<i class="fa-brands fa-linkedin-in"></i>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="social-link-block">
												<i class="fa-brands fa-instagram"></i>
											</a>
										</li>
									</ul>
									<ul class="d-flex list-style mb-0 client-detail-list">
										<li>
											<span>Departments</span>
											<p class="mb-0">Designer</p>
										</li>
										<li>
											<span>Employees</span>
											<p class="mb-0">30-50</p>
										</li>
									</ul>
								</div>
								<div>
									<a href="javascript:void(0);" class="btn  btn-primary price-btn btn-block">Contact Me </a>
								</div>
							</div>
							<div class="card budget-widget">
								<ul class="d-flex mb-0 list-style job-list-block">
									<li>
										<span>Jobs Posted</span>
										<p class="mb-0">48</p>
									</li>
									<li>
										<span>Hire Rate</span>
										<p class="mb-0">22</p>
									</li>
									<li>
										<span>Open Jobs</span>
										<p class="mb-0">75</p>
									</li>
									<li>
										<span>Total Spent</span>
										<p class="mb-0">22</p>
									</li>
									<li>
										<span>Hired</span>
										<p class="mb-0">64</p>
									</li>
									<li>
										<span>Active</span>
										<p class="mb-0">29</p>
									</li>
								</ul>
							</div>
						
						
						</div>
						<!-- /Blog Sidebar -->
						
					</div>
				</div>
			</div>		
			<!-- /Page Content -->
								
							
@component('components.modal-popup')                
@endcomponent	
@endsection