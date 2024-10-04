<?php $page="project-conformation";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')
	@slot('li_1') Post a Project @endslot                
    @slot('li_2') Home @endslot
    @slot('li_3') Post a Project @endslot
@endcomponent	
			
			<!-- Page Content -->
			<div class="content">	
				<div class="container">
					<div class="row">		
						<div class="col-md-12">		
							<div class="select-project mb-4">		
								<div class="title-box widget-box">
									<div class="row">
										<div class="col-lg-12">
											<div class="projecthead">
												<h5>Create desktop applications with source PHP</h5>
												<ul>
													<li>
														<a href="#"><i class="feather-edit me-2"></i>Edit this job</a>
													</li>
													<li>
														<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#post-sucess">Post a Job</a>
													</li>
												</ul>
											</div>
										</div>

										<div class="col-lg-12">
											<h4 class="detailshead">Details</h4>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="catergyset">
												<ul class="m-0">
													<li>
														<h5>Category : <span>Web development </span></h5>
													</li>
													<li>
														<h5>Project Duration :  <span> 3 Month </span></h5>
													</li>
													<li>
														<h5>Freelancer Type :   <span>Full Time</span></h5>
													</li>
													<li>
														<h5>Freelancer Level :   <span>Intermediate</span></h5>
													</li>
												</ul>
												<div class="freelance-tags">
													<h6>Tags :</h6>
													<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
													<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
													<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<h4 class="detailshead">Skills</h4>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="catergyset">
												<div class="freelance-tags">
													<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Website Mockup</span></a>
													<a href="javascript:void(0);"><span class="badge badge-pill badge-design"> Design</span></a>
													<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Figma</span></a>
													<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Sketch</span></a>
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<h4 class="detailshead">Budget</h4>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="catergyset">
												<ul class="m-0">
													<li>
														<h5>Type : <span>Fixed </span></h5>
													</li>
													<li>
														<h5>Amount :  <span>  $200</span></h5>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-lg-12">
											<h4 class="detailshead">Attachment</h4>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="catergyset">
												<ul class="m-0">
													<li>
														<h5>No of Files :  <span>5 </span></h5>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-lg-12">
											<h4 class="detailshead">Other</h4>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="catergyset border-0 p-0 m-0">
												<ul class="m-0">
													<li>
														<h5>Languages : <span>English, Arabic </span></h5>
													</li>
													<li>
														<h5>Fluency : <span>Intermediate </span></h5>
													</li>
												</ul>
											</div>
											<div class="category-para">
												<p>Please provide details such as the topic or subject of the project, the goals and objectives, any specific requirements, and any other relevant information you would like to include in the project description. The more details you provide, the better I can assist you in crafting an accurate and compelling project description.</p>
											</div>
										</div>
									<!-- /Skills Content -->
									</div>
								</div>
								<!-- Project Title -->
							</div>					
						</div>					
					</div>					
				</div>					
			</div>					
			<!-- /Page Content -->
            @component('components.modal-popup')
                
            @endcomponent
   

@endsection