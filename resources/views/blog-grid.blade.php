<?php $page="blog-grid";?>
@extends('layout.mainlayout')
@section('content')		


@component('components.breadcrumb')                
    @slot('li_1') Blog Grid @endslot
    @slot('li_2')  Home @endslot
	@slot('li_3') Blog Grid @endslot
@endcomponent
			
	<!-- Page Content -->
	<div class="content">
		<div class="container">
		
			<div class="row">
				<div class="col-lg-8 col-md-12">
				
					<div class="row blog-grid-row">
						<div class="col-md-6 col-sm-12">
						
							<!-- Blog Post -->
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-01.jpg')}}" alt="Post Image"></a>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/img-02.jpg')}}" alt="Post Author"> <span> David Lee</span></a>
											</div>
										</li>
										<li><i class="far fa-clock"></i> 4 Apr 2021</li>
									</ul>
									<h3 class="blog-title"><a href="{{url('blog-details')}}">Your next job starts right here</a></h3>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
						<div class="col-md-6 col-sm-12">
						
							<!-- Blog Post -->
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-02.jpg')}}" alt="Post Image"></a>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/img-03.jpg')}}" alt="Post Author"> <span> Deborah Angel</span></a>
											</div>
										</li>
										<li><i class="far fa-clock"></i> 3 Mar 2021</li>
									</ul>
									<h3 class="blog-title"><a href="{{url('blog-details')}}">People who completed NAND?</a></h3>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
						<div class="col-md-6 col-sm-12">
						
							<!-- Blog Post -->
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-03.jpg')}}" alt="Post Image"></a>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/img-04.jpg')}}" alt="Post Author"> <span>Darren Elder</span></a>
											</div>
										</li>
										<li><i class="far fa-clock"></i> 3 Dec 2021</li>
									</ul>
									<h3 class="blog-title"><a href="{{url('blog-details')}}">Kofejob - How to get job through online?</a></h3>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
						<div class="col-md-6 col-sm-12">
						
							<!-- Blog Post -->
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-04.jpg')}}" alt="Post Image"></a>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/img-05.jpg')}}" alt="Post Author"> <span>Sofia Brient</span></a>
											</div>
										</li>
										<li><i class="far fa-clock"></i> 2 Dec 2021</li>
									</ul>
									<h3 class="blog-title"><a href="{{url('blog-details')}}">Job Openings in top Companies</a></h3>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
						<div class="col-md-6 col-sm-12">
						
							<!-- Blog Post -->
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-05.jpg')}}" alt="Post Image"></a>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/img-02.jpg')}}" alt="Post Author"> <span>Marvin Campbell</span></a>
											</div>
										</li>
										<li><i class="far fa-clock"></i> 1 Dec 2021</li>
									</ul>
									<h3 class="blog-title"><a href="{{url('blog-details')}}">How to crack the interview easily - Kofejob</a></h3>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
						<div class="col-md-6 col-sm-12">
						
							<!-- Blog Post -->
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-06.jpg')}}" alt="Post Image"></a>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/img-03.jpg')}}" alt="Post Author"> <span> Paul Berthold</span></a>
											</div>
										</li>
										<li><i class="far fa-clock"></i> 3 Nov 2021</li>
									</ul>
									<h3 class="blog-title"><a href="{{url('blog-details')}}">Recommended technical languages to study</a></h3>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
					</div>
					
					<!-- Blog Pagination -->
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
					<!-- /Blog Pagination -->
					
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