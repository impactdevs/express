<?php $page="index-three";?>
@extends('layout.mainlayout')
@section('content')	
	
	<!-- Home Banner  -->
	<div class="home-banner home-three">
		<div class="dot-slider slider">
			<!-- Banner Images -->
			<div class="profile-widget-slide">
				<div class="slide-pro-img">
					<a href="javascript:void(0);">
						<img class="img-fluid" src="{{URL::asset('/assets/img/slider/slider-01.jpg')}}" alt="Img">
					</a>
				</div>
			</div>
			<!-- /Banner Images -->
			
			<!-- Banner Images -->
			<div class="profile-widget-slide">
				<div class="slide-pro-img">
					<a href="javascript:void(0);">
						<img class="img-fluid " src="{{URL::asset('/assets/img/slider/slider-02.jpg')}}" alt="Img">
					</a>
				</div>
			</div>
			<!-- /Banner Images -->
			
			<!-- Banner Images -->
			<div class="profile-widget-slide">
				<div class="slide-pro-img">
					<a href="javascript:void(0);">
						<img class="img-fluid" src="{{URL::asset('/assets/img/slider/slider-01.jpg')}}" alt="Img">
					</a>
				</div>
			</div>
			<!-- /Banner Images -->
			
			<!-- Banner Images -->
			<div class="profile-widget-slide">
				<div class="slide-pro-img">
					<a href="javascript:void(0);">
						<img class="img-fluid" src="{{URL::asset('/assets/img/slider/slider-02.jpg')}}" alt="Img">
					</a>
				</div>
			</div>
			<!-- /Banner Images -->
			
		</div>	
		<div class="container">
			<div class="banner-kofe">
				<div class="banner-content aos" data-aos="fade-up">
					<h5>With the world's #1 Developers Marketplace</h5> 
					<h1>The Largest Online Learning <span> Platform For Drive Your</span> Career.</h1>
					<p>We are experienced in educationl platform and skilled strategies for the success of our online learning.</p>
					<form class="form"  name="store" id="store" action="project">
						<div class="form-inner">
							<div class="input-group">
								<span class="drop-detail">
									<select class="form-control select" name="storeID">
										<option value="project">Projects</option>
										<option value="developer">Freelancers</option>
									</select>
								</span>
								<input type="email" class="form-control" placeholder="What are you looking for">
								<button class="btn btn-primary sub-btn" type="submit">Search </button>
							</div>
						</div>
					</form>
					<div class="banner-join-users">
						<ul>
							<li><a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/user/banner-user-01.jpg')}}" alt="Img"></a></li>
							<li><a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/user/banner-user-02.jpg')}}" alt="Img"></a></li>
							<li><a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/user/banner-user-03.jpg')}}" alt="Img"></a></li>
						</ul>
						<div class="join-user-content">
							<h6>Join Over 4000+ Students</h6>
							<span>Register to the Online courses</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>			
	<!-- /Home Banner -->
	
	
	<!-- Different Categories -->
	<section class="section different-categories">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-12 mx-auto">
					<div class="section-header section-header-three section-locate aos" data-aos="fade-up">
						<div>
							<span class="badge title-badge">Projects By Category</span>
							<h2 class="header-title">Get work done in over 60 different categories</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-xl-3 col-lg-4 col-md-6 d-flex">
					<div class="different-categories-blk aos" data-aos="fade-up">
						<div class="differ-img">
							<img  src="{{URL::asset('/assets/img/icon/category-01.svg')}}" alt="Img">
						</div>
						<div class="differ-img-right">
							<img src="{{URL::asset('/assets/img/icon/category-09.svg')}}" alt="Img">
						</div>
						<div class="differ-content">
							<h6>Angular Development</h6>
							<p>Web development, UI/UX development, Module development & more</p>
							<div class="category-foot">
								<span>840 Projects</span>
								<a href="{{url('project')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 d-flex">
					<div class="different-categories-blk aos" data-aos="fade-up">
						<div class="differ-img">
							<img  src="{{URL::asset('/assets/img/icon/category-02.svg')}}" alt="Img">
						</div>
						<div class="differ-img-right">
							<img src="{{URL::asset('/assets/img/icon/category-10.svg')}}" alt="Img">
						</div>
						<div class="differ-content">
							<h6>Python Development</h6>
							<p>Web development, UI/UX development, Module development & more</p>
							<div class="category-foot">
								<span>640 Projects</span>
								<a href="{{url('project')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 d-flex">
					<div class="different-categories-blk aos" data-aos="fade-up">
						<div class="differ-img">
							<img  src="{{URL::asset('/assets/img/icon/category-03.svg')}}" alt="Img">
						</div>
						<div class="differ-img-right">
							<img src="{{URL::asset('/assets/img/icon/category-11.svg')}}" alt="Img">
						</div>
						<div class="differ-content">
							<h6>Node JS Development</h6>
							<p>Web development, UI/UX development, Module development & more</p>
							<div class="category-foot">
								<span>240 Projects</span>
								<a href="{{url('project')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 d-flex">
					<div class="different-categories-blk aos" data-aos="fade-up">
						<div class="differ-img">
							<img  src="{{URL::asset('/assets/img/icon/category-04.svg')}}" alt="Img">
						</div>
						<div class="differ-img-right">
							<img src="{{URL::asset('/assets/img/icon/category-12.svg')}}" alt="Img">
						</div>
						<div class="differ-content">
							<h6>PHP Development</h6>
							<p>Web development, UI/UX development, Module development & more</p>
							<div class="category-foot">
								<span>840 Projects</span>
								<a href="{{url('project')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 d-flex">
					<div class="different-categories-blk aos" data-aos="fade-up">
						<div class="differ-img">
							<img  src="{{URL::asset('/assets/img/icon/category-05.svg')}}" alt="Img">
						</div>
						<div class="differ-img-right">
							<img src="{{URL::asset('/assets/img/icon/category-13.svg')}}" alt="Img">
						</div>
						<div class="differ-content">
							<h6>Illustration</h6>
							<p>Web development, UI/UX development, Module development & more</p>
							<div class="category-foot">
								<span>340 Projects</span>
								<a href="{{url('project')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 d-flex">
					<div class="different-categories-blk aos" data-aos="fade-up">
						<div class="differ-img">
							<img  src="{{URL::asset('/assets/img/icon/category-06.svg')}}" alt="Img">
						</div>
						<div class="differ-img-right">
							<img src="{{URL::asset('/assets/img/icon/category-14.svg')}}" alt="Img">
						</div>
						<div class="differ-content">
							<h6>Link Building</h6>
							<p>Web development, UI/UX development, Module development & more</p>
							<div class="category-foot">
								<span>540 Projects</span>
								<a href="{{url('project')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 d-flex">
					<div class="different-categories-blk aos" data-aos="fade-up">
						<div class="differ-img">
							<img  src="{{URL::asset('/assets/img/icon/category-07.svg')}}" alt="Img">
						</div>
						<div class="differ-img-right">
							<img src="{{URL::asset('/assets/img/icon/category-15.svg')}}" alt="Img">
						</div>
						<div class="differ-content">
							<h6>Android Apps</h6>
							<p>Web development, UI/UX development, Module development & more</p>
							<div class="category-foot">
								<span>640 Projects</span>
								<a href="{{url('project')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 d-flex">
					<div class="different-categories-blk aos" data-aos="fade-up">
						<div class="differ-img">
							<img  src="{{URL::asset('/assets/img/icon/category-08.svg')}}" alt="Img">
						</div>
						<div class="differ-img-right">
							<img src="{{URL::asset('/assets/img/icon/category-16.svg')}}" alt="Img">
						</div>
						<div class="differ-content">
							<h6>MYSQL</h6>
							<p>Web development, UI/UX development, Module development & more</p>
							<div class="category-foot">
								<span>140 Projects</span>
								<a href="{{url('project')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-12">
					<div class="more-project text-center aos aos-init aos-animate" data-aos="fade-up">
						<a href="{{url('project')}}" class="btn btn-primary">View More Projects<i class="feather feather-arrow-right ms-2"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Different Categories -->
	
	<!-- Marketplace -->
	<section class="section best-marketplace">
		<div class="container">
			<div class="row">
				<div class="col-md-6 d-flex align-items-center">
					<div class="market-place-group section-header-three aos" data-aos="fade-up">
						<span class="badge title-badge">About Us</span>
						<h2>Join World’s Best Marketplace for developers</h2>
						<p>Why hire people when you can simply integrate our talented cloud workforce instead?</p>
						<ul class="market-list-out">
							<li><i class="fa-solid fa-circle-check me-2"></i> It’s free and easy to post a job.</li>
							<li><i class="fa-solid fa-circle-check me-2"></i> We've got freelancers for jobs of any size or budget, across 1800+ skills.</li>
							<li><i class="fa-solid fa-circle-check me-2"></i> Only pay for work when it has been completed and you're 100% satisfied. </li>
							<li><i class="fa-solid fa-circle-check me-2"></i> Our talented team of recruiters can help you find the best freelancer.</li>
						</ul>
						<div class="market-place-btn">
							<a href="{{url('project')}}" class="btn btn-primary market-project me-2">Post a Project<i class="feather feather-arrow-right ms-2"></i></a>
							<a href="{{url('developer-details')}}" class="btn btn-primary market-developer">Find Developers<i class="feather feather-arrow-right ms-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="markrt-place-img aos" data-aos="fade-up">
						<img  src="{{URL::asset('/assets/img/market-place.png')}}" class="img-fluid" alt="Img">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Marketplace -->

	<!-- Company Hire -->
	<section class="section company-hire">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-header hire-heading section-header-three text-center aos" data-aos="fade-up">
						<span class="badge title-badge">Trusted Companies</span>
						<h2>Featured Companies in Kofejob</h2>
					</div>
				</div>
			</div>
			<div id="company-slider" class="owl-carousel owl-theme testimonial-slider aos" data-aos="fade-up">
				<div class="company-logos">
					<img  src="{{URL::asset('/assets/img/company-logo-01.svg')}}" alt="Img">
				</div>
				<div class="company-logos">
					<img  src="{{URL::asset('/assets/img/company-logo-02.svg')}}" alt="Img">
				</div>
				<div class="company-logos">
					<img  src="{{URL::asset('/assets/img/company-logo-03.svg')}}" alt="Img">
				</div>
				<div class="company-logos">
					<img  src="{{URL::asset('/assets/img/company-logo-04.svg')}}" alt="Img">
				</div>
				<div class="company-logos">
					<img  src="{{URL::asset('/assets/img/company-logo-05.svg')}}" alt="Img">
				</div>
				<div class="company-logos">
					<img  src="{{URL::asset('/assets/img/company-logo-06.svg')}}" alt="Img">
				</div>
				<div class="company-logos">
					<img  src="{{URL::asset('/assets/img/company-logo-03.svg')}}" alt="Img">
				</div>
				<div class="company-logos">
					<img  src="{{URL::asset('/assets/img/company-logo-02.svg')}}" alt="Img">
				</div>
			</div>
		</div>
	</section>
	<!-- / Company Hire -->
	
	<!-- Trending Projects -->
	<section class="section trend-projects trend-projects-three">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 mx-auto">
					<div class="section-header section-header-three aos" data-aos="fade-up">
						<span class="badge title-badge">Trending Projects</span>	
						<h2 class="header-title">Recently Update jobs  for you</h2>
					</div>
				</div>
			</div>
			<div id="trend-slider" class="owl-carousel owl-theme trend-slider aos" data-aos="fade-up">
				<div class="project-item trend-project-item" >
					<div class="project-img">
						<a href="{{url('project')}}"><img src="{{URL::asset('/assets/img/project/project-25.jpg')}}" alt="Img" class="img-fluid"></a>
					</div>
					<div class="trend-project-content">
						<div class="star-rated">
							<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<span class="average-rating">5.0</span>
							</div>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						<h4><a href="{{url('project')}}">UI/UX for Cryptocurrency Exchange</a></h4>
						<ul class="trend-project-list">
							<li><i class="feather-user me-1"></i>Web Development</li>
							<li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
						</ul>
						<div class="trend-rate">
							<ul class="nav">
								<li><span>$200</span></li>
								<li><a href="javascript:void(0);">Learn More<i class="feather feather-arrow-right ms-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="project-item trend-project-item" >
					<div class="project-img">
						<a href="{{url('project')}}"><img src="{{URL::asset('/assets/img/project/project-26.jpg')}}" alt="Img" class="img-fluid"></a>
					</div>
					<div class="trend-project-content">
						<div class="star-rated">
							<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<span class="average-rating">5.0</span>
							</div>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						<h4><a href="{{url('project')}}">Website Design for a Consumer Shop</a></h4>
						<ul class="trend-project-list">
							<li><i class="feather-user me-1"></i>Anugular Development</li>
							<li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
						</ul>
						<div class="trend-rate">
							<ul class="nav">
								<li><span>$100</span></li>
								<li><a href="javascript:void(0);">Learn More<i class="feather feather-arrow-right ms-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="project-item trend-project-item" >
					<div class="project-img">
						<a href="{{url('project')}}"><img src="{{URL::asset('/assets/img/project/project-27.jpg')}}" alt="Img" class="img-fluid"></a>
					</div>
					<div class="trend-project-content">
						<div class="star-rated">
							<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<span class="average-rating">5.0</span>
							</div>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						<h4><a href="{{url('project')}}">Landing Page Redesign / Sales Page Redesign</a></h4>
						<ul class="trend-project-list">
							<li><i class="feather-user me-1"></i>Web Development</li>
							<li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
						</ul>
						<div class="trend-rate">
							<ul class="nav">
								<li><span>$150</span></li>
								<li><a href="javascript:void(0);">Learn More<i class="feather feather-arrow-right ms-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="project-item trend-project-item" >
					<div class="project-img">
						<a href="{{url('project')}}"><img src="{{URL::asset('/assets/img/project/project-26.jpg')}}" alt="Img" class="img-fluid"></a>
					</div>
					<div class="trend-project-content">
						<div class="star-rated">
							<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<span class="average-rating">5.0</span>
							</div>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						<h4><a href="{{url('project')}}">Build a Coaching Website Product Store images</a></h4>
						<ul class="trend-project-list">
							<li><i class="feather-user me-1"></i>SEO Analyst</li>
							<li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
						</ul>
						<div class="trend-rate">
							<ul class="nav">
								<li><span>$200</span></li>
								<li><a href="javascript:void(0);">Learn More<i class="feather feather-arrow-right ms-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="project-item trend-project-item" >
					<div class="project-img">
						<a href="{{url('project')}}"><img src="{{URL::asset('/assets/img/project/project-26.jpg')}}" alt="Img" class="img-fluid"></a>
					</div>
					<div class="trend-project-content">
						<div class="star-rated">
							<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<span class="average-rating">5.0</span>
							</div>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						<h4><a href="{{url('project')}}">Website Design for a Consumer Shop</a></h4>
						<ul class="trend-project-list">
							<li><i class="feather-user me-1"></i>Anugular Development</li>
							<li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
						</ul>
						<div class="trend-rate">
							<ul class="nav">
								<li><span>$100</span></li>
								<li><a href="javascript:void(0);">Learn More<i class="feather feather-arrow-right ms-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="project-item trend-project-item" >
					<div class="project-img">
						<a href="{{url('project')}}"><img src="{{URL::asset('/assets/img/project/project-27.jpg')}}" alt="Img" class="img-fluid"></a>
					</div>
					<div class="trend-project-content">
						<div class="star-rated">
							<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<span class="average-rating">5.0</span>
							</div>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						<h4><a href="{{url('project')}}">Landing Page Redesign / Sales Page Redesign</a></h4>
						<ul class="trend-project-list">
							<li><i class="feather-user me-1"></i>Web Development</li>
							<li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
						</ul>
						<div class="trend-rate">
							<ul class="nav">
								<li><span>$300</span></li>
								<li><a href="javascript:void(0);">Learn More<i class="feather feather-arrow-right ms-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="project-item trend-project-item" >
					<div class="project-img">
						<a href="{{url('project')}}"><img src="{{URL::asset('/assets/img/project/project-26.jpg')}}" alt="Img" class="img-fluid"></a>
					</div>
					<div class="trend-project-content">
						<div class="star-rated">
							<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<span class="average-rating">5.0</span>
							</div>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						<h4><a href="{{url('project')}}">Build a Coaching Website Product Store images</a></h4>
						<ul class="trend-project-list">
							<li><i class="feather-user me-1"></i>SEO Analyst</li>
							<li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
						</ul>
						<div class="trend-rate">
							<ul class="nav">
								<li><span>$250</span></li>
								<li><a href="javascript:void(0);">Learn More<i class="feather feather-arrow-right ms-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="project-item trend-project-item" >
					<div class="project-img">
						<a href="{{url('project')}}"><img src="{{URL::asset('/assets/img/project/project-25.jpg')}}" alt="Img" class="img-fluid"></a>
					</div>
					<div class="trend-project-content">
						<div class="star-rated">
							<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<span class="average-rating">5.0</span>
							</div>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						<h4><a href="{{url('project')}}">UI/UX for Cryptocurrency Exchange</a></h4>
						<ul class="trend-project-list">
							<li><i class="feather-user me-1"></i>Web Development</li>
							<li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
						</ul>
						<div class="trend-rate">
							<ul class="nav">
								<li><span>$200</span></li>
								<li><a href="javascript:void(0);">Learn More<i class="feather feather-arrow-right ms-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="project-item trend-project-item" >
					<div class="project-img">
						<a href="{{url('project')}}"><img src="{{URL::asset('/assets/img/project/project-26.jpg')}}" alt="Img" class="img-fluid"></a>
					</div>
					<div class="trend-project-content">
						<div class="star-rated">
							<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<span class="average-rating">5.0</span>
							</div>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						<h4><a href="{{url('project')}}">Website Design for a Consumer Shop</a></h4>
						<ul class="trend-project-list">
							<li><i class="feather-user me-1"></i>Anugular Development</li>
							<li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
						</ul>
						<div class="trend-rate">
							<ul class="nav">
								<li><span>$200</span></li>
								<li><a href="javascript:void(0);">Learn More<i class="feather feather-arrow-right ms-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="project-item trend-project-item" >
					<div class="project-img">
						<a href="{{url('project')}}"><img src="{{URL::asset('/assets/img/project/project-26.jpg')}}" alt="Img" class="img-fluid"></a>
					</div>
					<div class="trend-project-content">
						<div class="star-rated">
							<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<span class="average-rating">5.0</span>
							</div>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						<h4><a href="{{url('project')}}">Build a Coaching Website Product Store images</a></h4>
						<ul class="trend-project-list">
							<li><i class="feather-user me-1"></i>SEO Analyst</li>
							<li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
						</ul>
						<div class="trend-rate">
							<ul class="nav">
								<li><span>$300</span></li>
								<li><a href="javascript:void(0);">Learn More<i class="feather feather-arrow-right ms-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="project-item trend-project-item" >
					<div class="project-img">
						<a href="{{url('project')}}"><img src="{{URL::asset('/assets/img/project/project-26.jpg')}}" alt="Img" class="img-fluid"></a>
					</div>
					<div class="trend-project-content">
						<div class="star-rated">
							<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<span class="average-rating">5.0</span>
							</div>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						<h4><a href="{{url('project')}}">Website Design for a Consumer Shop</a></h4>
						<ul class="trend-project-list">
							<li><i class="feather-user me-1"></i>Anugular Development</li>
							<li><i class="feather-map-pin me-1"></i>Delaware, USA</li>
						</ul>
						<div class="trend-rate">
							<ul class="nav">
								<li><span>$200</span></li>
								<li><a href="javascript:void(0);">Learn More<i class="feather feather-arrow-right ms-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Trending Projects -->
	
	<!-- Our Feature -->
	<section class="section feature-count feature-count-three">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 mx-auto">
					<div class="section-header section-header-three feature-count-head aos" data-aos="fade-up">	
						<h2 class="header-title">Achievement We Have Earned</h2>
						<p>At Freelancer, we believe that talent is borderless and opportunity should be too.</p>
					</div>
				</div>
			</div>
			<div class="row section-bottom-cards">					
						
				<!-- Feature Item -->
				<div class="col-xl-3 col-md-6">
					<div class="feature-item freelance-count aos" data-aos="fade-up">
						<div class="feature-icon ">
							<img src="{{URL::asset('/assets/img/icon/count-icon-01.svg')}}" class="img-fluid" alt="Img">
						</div>
						<div class="feature-content course-count">
							<h3 class="counter-up">9,207</h3>
							<p>Freelance developers</p>
						</div>
					</div>
				</div>
				<!-- /Feature Item -->
				
				<!-- Feature Item -->
				<div class="col-xl-3 col-md-6">
					<div class="feature-item aos" data-aos="fade-up">
						<div class="feature-icon">
							<img src="{{URL::asset('/assets/img/icon/count-icon-02.svg')}}" class="img-fluid" alt="Img">
						</div>
						<div class="feature-content course-count">
							<h3 ><span class="counter-up">6000 </span></h3>
							<p>Projects Added</p>
						</div>
					</div>
				</div>
				<!-- /Feature Item -->
				
				<!-- Feature Item -->
				<div class="col-xl-3 col-md-6">
					<div class="feature-item comp-project aos" data-aos="fade-up">
						<div class="feature-icon">
							<img src="{{URL::asset('/assets/img/icon/count-icon-03.svg')}}" class="img-fluid" alt="Img">
						</div>
						<div class="feature-content course-count">
							<h3 class="counter-up">919,207</h3>
							<p>Completed projects</p>
						</div>
					</div>
				</div>
				<!-- /Feature Item -->	

				<!-- Feature Item -->
				<div class="col-xl-3 col-md-6">
					<div class="feature-item comp-project aos" data-aos="fade-up">
						<div class="feature-icon">
							<img src="{{URL::asset('/assets/img/icon/count-icon-04.svg')}}" class="img-fluid" alt="Img">
						</div>
						<div class="feature-content course-count">
							<h3 class="counter-up">998</h3>
							<p>Companies Registered</p>
						</div>
					</div>
				</div>
				<!-- /Feature Item -->
										
			</div>
		</div>
	</section>	
	<!-- /Our Feature -->

	<!-- Feature Projects -->
	<section class="section feaure-project">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 mx-auto">
					<div class="section-header section-header-three justify-content-start text-start aos" data-aos="fade-up">
						<span class="badge title-badge">Featured Developers</span>		
						<h2 class="header-title">We have over 1400+  Developers</h2>
					</div>
				</div>
			</div>
			<div id="feature-project-slider" class="feature-dev-three owl-carousel owl-theme trend-slider aos" data-aos="fade-up">
				<div class="project-item project-item-feature" >
					<div class="project-img heart-blk">
						<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/developer/developer-05.jpg')}}" alt="Img" class="img-fluid"></a>
						<h5 class="hour-dollr">$64 <span>/ hr</span></h5>
					</div>
					<div class="feature-project-content">
						<div class="d-flex justify-content-between align-items-center mb-1">
							<h4 class="d-flex"><a href="{{url('developer-details')}}">Megan Torres</a><img src="{{URL::asset('/assets/img/icon/verify-badge.svg')}}" class="ms-1" alt="Img"></h4>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						
						<p>Java Developer</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="rating mb-0">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star"></i>
								<span class="average-rating">5.0</span>
							</div>
							<div class="feature-developer-foot d-flex justify-content-center">
								<a href="{{url('developer-details')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
						
					</div>
				</div>
				<div class="project-item project-item-feature" >
					<div class="project-img heart-blk">
						<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/developer/developer-06.jpg')}}" alt="Img" class="img-fluid"></a>
						<h5 class="hour-dollr">$54 <span>/ hr</span></h5>
					</div>
					<div class="feature-project-content">
						<div class="d-flex justify-content-between align-items-center mb-1">
							<h4 class="d-flex"><a href="{{url('developer-details')}}">Nicole Black</a><img src="{{URL::asset('/assets/img/icon/verify-badge.svg')}}" class="ms-1" alt="Img"></h4>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						
						<p>Angular Developer</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="rating mb-0">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star"></i>
								<span class="average-rating">5.0</span>
							</div>
							<div class="feature-developer-foot d-flex justify-content-center">
								<a href="{{url('developer-details')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
						
					</div>
				</div>
				<div class="project-item project-item-feature" >
					<div class="project-img heart-blk">
						<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/developer/developer-07.jpg')}}" alt="Img" class="img-fluid"></a>
						<h5 class="hour-dollr">$50 <span>/ hr</span></h5>
					</div>
					<div class="feature-project-content">
						<div class="d-flex justify-content-between align-items-center mb-1">
							<h4 class="d-flex"><a href="{{url('developer-details')}}">Shan Morris</a><img src="{{URL::asset('/assets/img/icon/verify-badge.svg')}}" class="ms-1" alt="Img"></h4>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						
						<p>Html Developer</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="rating mb-0">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star"></i>
								<span class="average-rating">5.0</span>
							</div>
							<div class="feature-developer-foot d-flex justify-content-center">
								<a href="{{url('developer-details')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
						
					</div>
				</div>
				<div class="project-item project-item-feature" >
					<div class="project-img heart-blk">
						<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/developer/developer-08.jpg')}}" alt="Img" class="img-fluid"></a>
						<h5 class="hour-dollr">$55 <span>/ hr</span></h5>
					</div>
					<div class="feature-project-content">
						<div class="d-flex justify-content-between align-items-center mb-1">
							<h4 class="d-flex"><a href="{{url('developer-details')}}">Harris Jod</a><img src="{{URL::asset('/assets/img/icon/verify-badge.svg')}}" class="ms-1" alt="Img"></h4>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						
						<p>React Developer</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="rating mb-0">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star"></i>
								<span class="average-rating">5.0</span>
							</div>
							<div class="feature-developer-foot d-flex justify-content-center">
								<a href="{{url('developer-details')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
						
					</div>
				</div>
				<div class="project-item project-item-feature" >
					<div class="project-img heart-blk">
						<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/developer/developer-05.jpg')}}" alt="Img" class="img-fluid"></a>
						<h5 class="hour-dollr">$64 <span>/ hr</span></h5>
					</div>
					<div class="feature-project-content">
						<div class="d-flex justify-content-between align-items-center mb-1">
							<h4 class="d-flex"><a href="{{url('developer-details')}}">Megan Torres</a><img src="{{URL::asset('/assets/img/icon/verify-badge.svg')}}" class="ms-1" alt="Img"></h4>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						
						<p>Java Developer</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="rating mb-0">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star"></i>
								<span class="average-rating">5.0</span>
							</div>
							<div class="feature-developer-foot d-flex justify-content-center">
								<a href="{{url('developer-details')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
						
					</div>
				</div>
				<div class="project-item project-item-feature" >
					<div class="project-img heart-blk">
						<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/developer/developer-06.jpg')}}" alt="Img" class="img-fluid"></a>
						<h5 class="hour-dollr">$54 <span>/ hr</span></h5>
					</div>
					<div class="feature-project-content">
						<div class="d-flex justify-content-between align-items-center mb-1">
							<h4 class="d-flex"><a href="{{url('developer-details')}}">Nicole Black</a><img src="{{URL::asset('/assets/img/icon/verify-badge.svg')}}" class="ms-1" alt="Img"></h4>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						
						<p>Angular Developer</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="rating mb-0">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star"></i>
								<span class="average-rating">5.0</span>
							</div>
							<div class="feature-developer-foot d-flex justify-content-center">
								<a href="{{url('developer-details')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
						
					</div>
				</div>
				<div class="project-item project-item-feature" >
					<div class="project-img heart-blk">
						<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/developer/developer-07.jpg')}}" alt="Img" class="img-fluid"></a>
						<h5 class="hour-dollr">$50 <span>/ hr</span></h5>
					</div>
					<div class="feature-project-content">
						<div class="d-flex justify-content-between align-items-center mb-1">
							<h4 class="d-flex"><a href="{{url('developer-details')}}">Shan Morris</a><img src="{{URL::asset('/assets/img/icon/verify-badge.svg')}}" class="ms-1" alt="Img"></h4>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						
						<p>Html Developer</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="rating mb-0">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star"></i>
								<span class="average-rating">5.0</span>
							</div>
							<div class="feature-developer-foot d-flex justify-content-center">
								<a href="{{url('developer-details')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
						
					</div>
				</div>
				<div class="project-item project-item-feature" >
					<div class="project-img heart-blk">
						<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/developer/developer-08.jpg')}}" alt="Img" class="img-fluid"></a>
						<h5 class="hour-dollr">$55 <span>/ hr</span></h5>
					</div>
					<div class="feature-project-content">
						<div class="d-flex justify-content-between align-items-center mb-1">
							<h4 class="d-flex"><a href="{{url('developer-details')}}">Harris Jod</a><img src="{{URL::asset('/assets/img/icon/verify-badge.svg')}}" class="ms-1" alt="Img"></h4>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						
						<p>React Developer</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="rating mb-0">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star"></i>
								<span class="average-rating">5.0</span>
							</div>
							<div class="feature-developer-foot d-flex justify-content-center">
								<a href="{{url('developer-details')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
						
					</div>
				</div>
				<div class="project-item project-item-feature" >
					<div class="project-img heart-blk">
						<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/developer/developer-05.jpg')}}" alt="Img" class="img-fluid"></a>
						<h5 class="hour-dollr">$64 <span>/ hr</span></h5>
					</div>
					<div class="feature-project-content">
						<div class="d-flex justify-content-between align-items-center mb-1">
							<h4 class="d-flex"><a href="{{url('developer-details')}}">Megan Torres</a><img src="{{URL::asset('/assets/img/icon/verify-badge.svg')}}" class="ms-1" alt="Img"></h4>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						
						<p>Java Developer</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="rating mb-0">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star"></i>
								<span class="average-rating">5.0</span>
							</div>
							<div class="feature-developer-foot d-flex justify-content-center">
								<a href="{{url('developer-details')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
						
					</div>
				</div>
				<div class="project-item project-item-feature" >
					<div class="project-img heart-blk">
						<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/developer/developer-06.jpg')}}" alt="Img" class="img-fluid"></a>
						<h5 class="hour-dollr">$54 <span>/ hr</span></h5>
					</div>
					<div class="feature-project-content">
						<div class="d-flex justify-content-between align-items-center mb-1">
							<h4 class="d-flex"><a href="{{url('developer-details')}}">Nicole Black</a><img src="{{URL::asset('/assets/img/icon/verify-badge.svg')}}" class="ms-1" alt="Img"></h4>
							<a href="javascript:void(0);" class="select-favourite"><i class="fa-regular fa-bookmark"></i></a>
						</div>
						
						<p>Angular Developer</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="rating mb-0">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star"></i>
								<span class="average-rating">5.0</span>
							</div>
							<div class="feature-developer-foot d-flex justify-content-center">
								<a href="{{url('developer-details')}}"><i class="feather feather-arrow-right"></i></a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="more-project text-center aos aos-init aos-animate" data-aos="fade-up">
						<a href="{{url('project')}}" class="btn btn-primary">View More Developers<i class="feather feather-arrow-right ms-2"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Feature Projects -->
	
	<!-- Review -->
	<section class="section review-people review-people-three">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-header section-header-three text-center aos" data-aos="fade-up">	
						<span class="badge title-badge">Testimonials</span>
						<h2 class="header-title">What our User Says</h2>
					</div>
				</div>
			</div>
			<div class="trend-slider aos row" data-aos="fade-up">
				<div class="col-lg-4 col-md-6">
					<div class="review-blog user-review">
						<div class="review-top ">
							<div class="review-img mx-auto">
								<a href="{{url('review')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/user/review-user-01.jpg')}}" alt="Post Image"></a>
							</div>
							<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star"></i>
								<span class="average-rating">5.0(45)</span>
							</div>
							
						</div>
						<div class="review-content text-center">
							<p>I've been using [Your Product/Service] for a year now, and it has exceeded my expectations. The quality and functionality are unmatched, and it has made my life so much easier.</p>
						</div>
						<div class="quate text-center d-flex justify-content-center">
							<img src="{{URL::asset('/assets/img/icon/user-quates.svg')}}" alt="Img">
						</div>
						<div class="review-info text-center">
							<h3><a href="{{url('review')}}">Durso Raeen</a></h3>
							<h5>Project Lead</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="review-blog user-review">
						<div class="review-top ">
							<div class="review-img mx-auto">
								<a href="{{url('review')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/user/review-user-02.jpg')}}" alt="Post Image"></a>
							</div>
							<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star"></i>
								<span class="average-rating">5.0(30)</span>
							</div>
							
						</div>
						<div class="review-content text-center">
							<p>I had a problem with [Specific Issue], and the support team at [Your Company] went above and beyond to resolve it. Their dedication to customer satisfaction is truly impressive.</p>
						</div>
						<div class="quate text-center d-flex justify-content-center">
							<img src="{{URL::asset('/assets/img/icon/user-quates.svg')}}" alt="Img">
						</div>
						<div class="review-info text-center">
							<h3><a href="{{url('review')}}">Durso Raeen</a></h3>
							<h5>Project Lead</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="review-blog user-review">
						<div class="review-top ">
							<div class="review-img mx-auto">
								<a href="{{url('review')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/user/review-user-03.jpg')}}" alt="Post Image"></a>
							</div>
							<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star"></i>
								<span class="average-rating">5.0(13)</span>
							</div>
							
						</div>
						<div class="review-content text-center">
							<p>I encountered an issue with [Your Product], and the customer support team provided a quick and effective solution. I'm impressed by their responsiveness.</p>
						</div>
						<div class="quate text-center d-flex justify-content-center">
							<img src="{{URL::asset('/assets/img/icon/user-quates.svg')}}" alt="Img">
						</div>
						<div class="review-info text-center">
							<h3><a href="{{url('review')}}">Durso Raeen</a></h3>
							<h5>Project Lead</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- / Review -->

	<!-- Top skill -->
	<section class="section top-skill top-skill-three">
		<div class="container">
			<div class="section-header section-header-three text-center aos" data-aos="fade-up">
				<span class="badge title-badge">Skill Sets</span>
				<h2 class="header-title">Get work done in over 1800 different categories</h2>
			</div>
			<div class="row justify-content-center">
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-01.svg')}}" alt="Img">
						</div>
						<span>Translation</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-02.svg')}}" alt="Img">
						</div>
						<span>Research Writing</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-03.svg')}}" alt="Img">
						</div>
						<span>Web Scraping</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-04.svg')}}" alt="Img">
						</div>
						<span>Article Writing</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-05.svg')}}" alt="Img">
						</div>
						<span>HTML 5</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-06.svg')}}" alt="Img">
						</div>
						<span>Website Design</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-07.svg')}}" alt="Img">
						</div>
						<span>Mobile Apps</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-08.svg')}}" alt="Img">
						</div>
						<span>Android Apps</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-09.svg')}}" alt="Img">
						</div>
						<span>Iphone Apps</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-10.svg')}}" alt="Img">
						</div>
						<span>Software Architecture</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-11.svg')}}" alt="Img">
						</div>
						<span>Graphic Design</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-12.svg')}}" alt="Img">
						</div>
						<span>Logo Design</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-13.svg')}}" alt="Img">
						</div>
						<span>Public Relations</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-14.svg')}}" alt="Img">
						</div>
						<span>Proofreading</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-15.svg')}}" alt="Img">
						</div>
						<span>Photoshop</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-16.svg')}}" alt="Img">
						</div>
						<span>Technical Writing</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-17.svg')}}" alt="Img">
						</div>
						<span>Blogging</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-18.svg')}}" alt="Img">
						</div>
						<span>Internet Marketing</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-19.svg')}}" alt="Img">
						</div>
						<span>eCommerce</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-20.svg')}}" alt="Img">
						</div>
						<span>Data Entry</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-21.svg')}}" alt="Img">
						</div>
						<span>Link Building</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-22.svg')}}" alt="Img">
						</div>
						<span>C++ Programming</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-23.svg')}}" alt="Img">
						</div>
						<span>C# Programming</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-24.svg')}}" alt="Img">
						</div>
						<span>Content Writing</span>
					</div>
				</div>
				<div class="skill-custom-col">
					<div class="skills-feature">
						<div class="skill-icon">
							<img src="{{URL::asset('/assets/img/icon/skill-icon-25.svg')}}" alt="Img">
						</div>
						<span>Marketing</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Top skill -->

	<!-- App Version -->
	<section class="section next-job">
		<div class="container">				
			<div class="row">
				<div class="col-md-12">
					<div class="job-next-blk text-center aos" data-aos="fade-up">
						<h2>Find Your Next Great Job Opportunity!</h2>
						<p>Quisque pretium dolor turpis, quis blandit turpis semper ut. Nam malesuada eros nec luctus laoreet. </p>
						<div class="next-job-btn">
							<a href="{{url('register')}}" class="btn btn-primary next-register me-3">Register Kofejob<i class="feather feather-arrow-right ms-2"></i></a>
							<a href="{{url('login')}}" class="btn btn-primary next-sign">Post A Project<i class="feather feather-arrow-right ms-2"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /App Version -->

	<section class="faq-section-three" id="faq">
		<div class="container">
			<div class="section-header section-header-three text-center aos" data-aos="fade-up">
				<span class="badge title-badge">FAQ’S</span>
				<h2 class="header-title">Frequently Question Answer </h2>
			</div>
			<div class="row" id="accordionExample">
				<div class="col-lg-6">
					<div class="faq-card aos aos-init aos-animate" data-aos="fade-up">
						<h4 class="faq-title">
							<a class="collapseds active" data-bs-toggle="collapse" href="#faqOne" aria-expanded="true">1. What are the costs to buy a house?</a>
						</h4>
						<div id="faqOne" class="card-collapse collapse show" data-bs-parent="#accordionExample">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
						</div>
					</div>	
					<div class="faq-card aos aos-init aos-animate" data-aos="fade-up">																																
						<h4 class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqtwo" aria-expanded="false">2. What are the costs to buy a house?</a>
						</h4>
						<div id="faqtwo" class="card-collapse collapse" data-bs-parent="#accordionExample">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
						</div>
					</div>
					<div class="faq-card aos aos-init aos-animate" data-aos="fade-up">
						<h4 class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqthree" aria-expanded="false">3. Do you have loan consultants?</a>
						</h4>
						<div id="faqthree" class="card-collapse collapse" data-bs-parent="#accordionExample">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
						</div>
					</div>	
					<div class="faq-card aos aos-init aos-animate" data-aos="fade-up">
						<h4 class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqfour" aria-expanded="false">4. What are the costs to buy a house?</a>
						</h4>
						<div id="faqfour" class="card-collapse collapse" data-bs-parent="#accordionExample">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
						</div>
					</div>
					<div class="faq-card aos aos-init aos-animate" data-aos="fade-up">
						<h4 class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqfive" aria-expanded="false">5. What are the costs to buy a house?</a>
						</h4>
						<div id="faqfive" class="card-collapse collapse" data-bs-parent="#accordionExample">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
						</div>
					</div>	
				</div>
				
				<div class="col-lg-6">
					<div class="faq-card aos aos-init aos-animate" data-aos="fade-up">
						<h4 class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqsix" aria-expanded="false"> 6. What are the costs to buy a house?</a>
						</h4>
						<div id="faqsix" class="card-collapse collapse" data-bs-parent="#accordionExample">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
						</div>
					</div>	
					<div class="faq-card aos aos-init aos-animate" data-aos="fade-up">
						<h4 class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqseven" aria-expanded="false">7. What are the costs to buy a house?</a>
						</h4>
						<div id="faqseven" class="card-collapse collapse" data-bs-parent="#accordionExample">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
						</div>
					</div>
					<div class="faq-card aos aos-init aos-animate" data-aos="fade-up">
						<h4 class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqeight" aria-expanded="false"> 8. What are the costs to buy a house?</a>
						</h4>
						<div id="faqeight" class="card-collapse collapse" data-bs-parent="#accordionExample">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
						</div>
					</div>	
					<div class="faq-card aos aos-init aos-animate" data-aos="fade-up">
						<h4 class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqnine" aria-expanded="false">9. What are the costs to buy a house?</a>
						</h4>
						<div id="faqnine" class="card-collapse collapse" data-bs-parent="#accordionExample">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
						</div>
					</div>	
					<div class="faq-card aos aos-init aos-animate" data-aos="fade-up">
						<h4 class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqten" aria-expanded="false">10. What are the costs to buy a house?</a>
						</h4>
						<div id="faqten" class="card-collapse collapse" data-bs-parent="#accordionExample">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
						</div>
					</div>	
				</div>
			</div>	
		</div>				
	</section>
	
	<!-- Blog -->
	<section class="section news">
		<div class="container">				
			<div class="row">
				<div class="col-12 col-md-12 mx-auto">
					<div class="section-header section-header-three aos" data-aos="fade-up">	
						<span class="badge title-badge">Our Blog</span>
						<h2 class="header-title">Read Our Article</h2>
					</div>
				</div>
			</div>
			<div class="trend-slider row aos" data-aos="fade-up">
				<div class="col-lg-6 col-md-12">
					<!-- Blog Post -->
					<div class="blog blog-trick aos" data-aos="fade-up">
						<div class="blog-image">
							<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-21.jpg')}}" alt="Post Image"></a>
						</div>
						<div class="blog-trick-content-main">
							<div class="d-flex justify-content-between align-items-center mb-3">
								<ul class="entry-meta meta-item d-flex align-items-center mb-0">
									<li>
										<div class="post-author blog-hover-img">
											<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/img-02.jpg')}}" alt="Post Author"> <span> Rihana madonna</span></a>
										</div>
									</li>
									<li>
										<i class="feather-calendar"></i>
										15  Jan 2023
									</li>
								</ul>
								<div class="blog-text">
									<span><i class="feather-grid me-2"></i>Education</span>
								</div>
							</div>
							
							<div class="blog-content blog-trick-content">
								<h3 class="blog-title"><a href="{{url('blog-details')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet.</a></h3>
								<p >Lorem ipsum dolor sit amet consectetur. Vitae amet cras nulla mi laoreet quis amet phasellus....</p>
								
							</div>
							<a href="javascript:void(0);" class="more-option">Learn More<i class="feather feather-arrow-right ms-2"></i></a>
						</div>
					</div>	
					<!-- Blog Post -->	
				</div>
				<div class="col-lg-6 col-md-12">
					<!-- Blog Post -->
					<div class="blog blog-trick aos" data-aos="fade-up">
						<div class="row align-items-center">
							<div class="col-sm-4">
								<div class="blog-image blog-list-img">
									<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-list-01.jpg')}}" alt="Post Image"></a>
								</div>
							</div>
							<div class="col-sm-8">
								<div class="blog-trick-content-main blog-list-main">
									<div class="blog-content blog-trick-content">
										<h3 class="blog-title"><a href="{{url('blog-details')}}">Lorem ipsum dolor sit amet, </a></h3>
										<p >Lorem ipsum dolor sit amet consectetur. Vitae amet</p>
									</div>
									<div class="d-flex justify-content-between align-items-center mb-2 mt-2">
										<ul class="entry-meta meta-item d-flex align-items-center mb-0">
											<li>
												<div class="post-author blog-hover-img">
													<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/img-03.jpg')}}" alt="Post Author"> <span> Aidan Funnell</span></a>
												</div>
											</li>
											<li>
												<i class="feather-calendar"></i>
												15  Jan 2023
											</li>
										</ul>
									</div>
									<a href="javascript:void(0);" class="more-option mt-0">Learn More<i class="feather feather-arrow-right ms-2"></i></a>
								</div>
							</div>
						</div>
						
						
					</div>	
					<!-- Blog Post -->	

					<!-- Blog Post -->
					<div class="blog blog-trick aos" data-aos="fade-up">
						<div class="row align-items-center">
							<div class="col-sm-4">
								<div class="blog-image blog-list-img">
									<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-list-02.jpg')}}" alt="Post Image"></a>
								</div>
							</div>
							<div class="col-sm-8">
								<div class="blog-trick-content-main blog-list-main">
									<div class="blog-content blog-trick-content">
										<h3 class="blog-title"><a href="{{url('blog-details')}}">Lorem ipsum dolor sit amet, </a></h3>
										<p >Lorem ipsum dolor sit amet consectetur. Vitae amet</p>
									</div>
									<div class="d-flex justify-content-between align-items-center mb-2 mt-2">
										<ul class="entry-meta meta-item d-flex align-items-center mb-0">
											<li>
												<div class="post-author blog-hover-img">
													<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/img-04.jpg')}}" alt="Post Author"> <span> Cameron Morley</span></a>
												</div>
											</li>
											<li>
												<i class="feather-calendar"></i>
												15  Jan 2023
											</li>
										</ul>
									</div>
									<a href="javascript:void(0);" class="more-option mt-0">Learn More<i class="feather feather-arrow-right ms-2"></i></a>
								</div>
							</div>
						</div>
						
						
					</div>	
					<!-- Blog Post -->	

					<!-- Blog Post -->
					<div class="blog blog-trick aos" data-aos="fade-up">
						<div class="row align-items-center">
							<div class="col-sm-4">
								<div class="blog-image blog-list-img">
									<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-list-03.jpg')}}" alt="Post Image"></a>
								</div>
							</div>
							<div class="col-sm-8">
								<div class="blog-trick-content-main blog-list-main">
									<div class="blog-content blog-trick-content">
										<h3 class="blog-title"><a href="{{url('blog-details')}}">Lorem ipsum dolor sit amet, </a></h3>
										<p >Lorem ipsum dolor sit amet consectetur. Vitae amet</p>
									</div>
									<div class="d-flex justify-content-between align-items-center mb-2 mt-2">
										<ul class="entry-meta meta-item d-flex align-items-center mb-0">
											<li>
												<div class="post-author blog-hover-img">
													<a href="{{url('developer-details')}}"><img src="{{URL::asset('/assets/img/img-05.jpg')}}" alt="Post Author"> <span> Amelie Hannah</span></a>
												</div>
											</li>
											<li>
												<i class="feather-calendar"></i>
												15  Jan 2023
											</li>
										</ul>
									</div>
									<a href="javascript:void(0);" class="more-option mt-0">Learn More<i class="feather feather-arrow-right ms-2"></i></a>
								</div>
							</div>
						</div>
						
						
					</div>	
					<!-- Blog Post -->	
				</div>
				<div class="col-md-12">
					<div class="next-job-btn mt-3">
						<a href="{{url('blog-details')}}" class="btn btn-primary next-register me-3">View More Articles<i class="feather feather-arrow-right ms-2"></i></a>
					</div>
				</div>
			</div>		
		</div>
	</section>
	<!-- / Blog -->		
@endsection