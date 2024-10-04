<?php $page="blog-list";?>
@extends('layout.mainlayout')
@section('content')		


@component('components.breadcrumb')                
    @slot('li_1') Blog List @endslot
    @slot('li_2') Home @endslot
	@slot('li_3') Blog List @endslot
@endcomponent
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">				
					<div class="row">
						<div class="col-lg-8 col-md-12">
							<div class="blog-view">
							
								<!-- Blog Post -->
								<div class="blog-single-post pro-post widget-box">
									<div class="blog-image">
										<a href="{{url('blog-details')}}"><img alt="Img" src="{{URL::asset('/assets/img/blog/blog-01.jpg')}}" class="img-fluid"></a>
									</div>
									<h3 class="blog-title">Your next job starts right here</h3>
									<div class="blog-info clearfix">
										<div class="post-left">
											<ul>
												<li>
													<div class="post-author">
														<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/img-02.jpg')}}" alt="Post Author"> <span>John Doe</span></a>
													</div>
												</li>
												<li><i class="far fa-calendar"></i>4 May 2021</li>
												<li><i class="far fa-comments"></i>12 Comments</li>
												<li><i class="fas fa-tags"></i>job Tips</li>
											</ul>
										</div>
									</div>
									<div class="blog-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit laboris ullamco laborisut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										<a href="{{url('blog-details')}}" class="read-more">Read More</a>
									</div>
								</div>
								<!-- /Blog Post -->
								
								<!-- Blog Post -->
								<div class="blog-single-post pro-post widget-box">
									<div class="blog-image">
										<a href="{{url('blog-details')}}"><img alt="Img" src="{{URL::asset('/assets/img/blog/blog-02.jpg')}}" class="img-fluid"></a>
									</div>
									<h3 class="blog-title">What are the benefits of applying job Online?</h3>
									<div class="blog-info clearfix">
										<div class="post-left">
											<ul>
												<li>
													<div class="post-author">
														<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/img-03.jpg')}}" alt="Post Author"> <span>Nick Joe</span></a>
													</div>
												</li>
												<li><i class="far fa-calendar"></i>4 May 2021</li>
												<li><i class="far fa-comments"></i>12 Comments</li>
												<li><i class="fas fa-tags"></i>Job Tips</li>
											</ul>
										</div>
									</div>
									<div class="blog-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit laboris ullamco laborisut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										<a href="{{url('blog-details')}}" class="read-more">Read More</a>
									</div>
								</div>
								<!-- /Blog Post -->
								
								<!-- Blog Post -->
								<div class="blog-single-post pro-post widget-box">
									<div class="blog-image">
									<div class="video">
										<iframe src="https://www.youtube.com/embed/ExJZAegsOis" width="940"></iframe>
									</div>
								</div>
									<h3 class="blog-title">Mock job interview to get a job</h3>
									<div class="blog-info clearfix">
										<div class="post-left">
											<ul>
												<li>
													<div class="post-author">
														<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/img-03.jpg')}}" alt="Post Author"> <span>Nick Joe</span></a>
													</div>
												</li>
												<li><i class="far fa-calendar"></i>4 May 2021</li>
												<li><i class="far fa-comments"></i>12 Comments</li>
												<li><i class="fas fa-tags"></i>Job Tips</li>
											</ul>
										</div>
									</div>
									<div class="blog-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit laboris ullamco laborisut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										<a href="{{url('blog-details')}}" class="read-more">Read More</a>
									</div>
								</div>
								<!-- /Blog Post -->
								
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
					
						<!-- Blog Sidebar -->
						<div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">

							<!-- Latest Posts -->
							<div class=" pro-post widget-box post-widget">
								<h4 class="pro-title">Latest Posts</h4>
								<div class="pro-content pt-0">
									<ul class="latest-posts">
										<li>
											<div class="post-thumb">
												<a href="{{url('blog-details')}}">
													<img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-thumb-03.jpg')}}" alt="Img">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="{{url('blog-details')}}">Kofejob - How to get job through online?</a>
												</h4>
												<a href="javascript:void(0);" class="posts-date"><i class="feather-calendar"></i> 2 May 2021</a>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="{{url('blog-details')}}">
													<img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-thumb-02.jpg')}}" alt="Img">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="{{url('blog-details')}}">People who completed NAND technology got job 90% </a>
												</h4>
												<a href="javascript:void(0);" class="posts-date"><i class="feather-calendar"></i> 3 May 2021</a>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="{{url('blog-details')}}">
													<img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-thumb-01.jpg')}}" alt="Img">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="{{url('blog-details')}}">There are many variations of passages</a>
												</h4>
												<a href="javascript:void(0);" class="posts-date"><i class="feather-calendar"></i> 4 May 2021</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Latest Posts -->

							<!-- Categories -->
							<div class=" pro-post widget-box category-widget">
								<h4 class="pro-title">Blog Categories</h4>
								<div class="pro-content">
									<ul class="category-link">
										<li><a href="javascript:void(0);">Web Development</a></li>
										<li><a href="javascript:void(0);">IT Consultancy</a></li>
										<li><a href="javascript:void(0);">Email Marketing</a></li>
										<li><a href="javascript:void(0);">Business Consulting</a></li>
										<li><a href="javascript:void(0);">Apps Development</a></li>
										<li><a href="javascript:void(0);">SEO Optimizations</a></li>
									</ul>
								</div>
							</div>
							<!-- /Categories -->

							<!-- Tags -->
							<div class=" pro-post widget-box tags-widget">
								<h4 class="pro-title">Tags</h4>
								<div class="pro-content">
									<ul class="tags">
										<li><a href="javascript:void(0);" class="tag">Employer</a></li>
										<li><a href="javascript:void(0);" class="tag">Student</a></li>
										<li><a href="javascript:void(0);" class="tag">Freelancer</a></li>
										<li><a href="javascript:void(0);" class="tag">Designer</a></li>
										<li><a href="javascript:void(0);" class="tag">Jobs</a></li>
										<li><a href="javascript:void(0);" class="tag">Developer</a></li>
										<li><a href="javascript:void(0);" class="tag">Coding</a></li>
										<li><a href="javascript:void(0);" class="tag">Skills</a></li>
										<li><a href="javascript:void(0);" class="tag">Knowledge</a></li>
										<li><a href="javascript:void(0);" class="tag">Node Js</a></li>
										<li><a href="javascript:void(0);" class="tag">Courses</a></li>
										<li><a href="javascript:void(0);" class="tag">Engineer</a></li>
										<li><a href="javascript:void(0);" class="tag">Online</a></li>
										<li><a href="javascript:void(0);" class="tag">Study</a></li>
										<li><a href="javascript:void(0);" class="tag">Project</a></li>
										<li><a href="javascript:void(0);" class="tag">Experience</a></li>
										<li><a href="javascript:void(0);" class="tag">Freshers</a></li>
									</ul>
								</div>
							</div>
							<!-- /Tags -->
							
						</div>
						<!-- /Blog Sidebar -->
						
					</div>
				</div>
			</div>		
			<!-- /Page Content -->
@endsection