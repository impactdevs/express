<?php $page="index-four";?>
@extends('layout.mainlayout')
@section('content')

			<!-- Home Banner -->
			<section class="section home-banner home-four row-middle">
				<div class="banner-float-img">
					<img src="{{URL::asset('/assets/img/happy-young-man.png')}}" alt="banner-image">
				</div>
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-8 col-lg-6">
							<div class="banner-blk-four aos" data-aos="fade-up">
								<div class="banner-content">
									<div class="banner-note">
										<h5 class="mb-0">With the world's #1 Developers Marketplace</h5>
									</div>
									<h1>Kofejob is a Community <br>for Freelancers</h1>
									<p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat.</p>
									<form class="form"  name="store" id="store" action="project">
										<div class="form-inner">
											<div class="input-group">
												<span class="drop-detail">
													<select class="form-control select" name="storeID">
														<option value="project">Projects</option>
														<option value="developer">Freelancers</option>
													</select>
												</span>
												<input type="email" class="form-control" placeholder="Keywords">
												<button class="btn btn-primary sub-btn" type="submit">Search</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="coplete-job aos" data-aos="fade-right">
						<div class="complete-icon me-2">
							<i class="feather-briefcase"></i>
						</div>
						<div class="complete-content course-count">
							<h3>+ <span class="counter-up">21</span> K</h3>
							<p>Jobs Completed</p>
						</div>
					</div>
					<div class="fullstack-blk aos" data-aos="fade-up">
						<div class="fullstacker-img">
							<img src="{{URL::asset('/assets/img/user/avatar-12.jpg')}}" class="img-fluid" alt="Img">
							<span class="stacker-active"><i class="fas fa-check-circle"></i></span>
						</div>
						<div class="fullstacker-name">
							<h4>Chambers</h4>
							<p>Full stack developer</p>
						</div>
						<div class="rating">
							<i class="fas fa-star filled"></i>
							<i class="fas fa-star filled"></i>
							<i class="fas fa-star filled"></i>
							<i class="fas fa-star filled"></i>
							<i class="fas fa-star"></i>
							<span class="average-rating">5.0 (50 Review)</span>
						</div>
					</div>
					<div class="register-profesion aos" data-aos="fade-right">

						<div class="avatar-group">
                            <div class="avatar avatar-xs group_img group_header">
                                <img class="avatar-img rounded-circle" alt="User Image" src="{{URL::asset('/assets/img/user/avatar-1.jpg')}}">
                            </div>
                            <div class="avatar avatar-xs group_img group_header">
                                <img class="avatar-img rounded-circle" alt="User Image" src="{{URL::asset('/assets/img/user/avatar-2.jpg')}}">
                            </div>
                            <div class="avatar avatar-xs group_img group_header">
                                <img class="avatar-img rounded-circle" alt="User Image" src="{{URL::asset('/assets/img/user/avatar-3.jpg')}}">
                            </div>

                        </div>
						<div class="profesion-content course-count">
							<p>Join Over 4000+ Students</p>
							<span>Register to the Online courses</span>
						</div>
					</div>
				</div>
			</section>
			<!-- /Home Banner -->

			<!-- Browse Categories -->
			<section class="section browse-categories">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-12 mx-auto">
							<div class="section-header section-header-four section-locate aos" data-aos="fade-up">
								<div class="text-center">
									<h2 class="header-title">Browse Projects By Category  </h2>
									<p>Get work done in over 60 different categories</p>
								</div>
							</div>
						</div>
					</div>
					<div class="browse-categories-content">
						<div class="row row-gap aos" data-aos="fade-up">
							<div class="col-lg-3 col-md-6 col-12 aos  " data-aos="zoom-in" data-aos-duration="1000">
								<div class="popular-catergories">
									<div class="popular-catergories-img">
										<span><img src="{{URL::asset('/assets/img/icon/categories1.svg')}}" alt="img"></span>
									</div>
									<div class="popular-catergories-content">
										<h5>Development &amp; IT</h5>
										<a href="javascript:void(0);">958 Skills</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-12 aos  " data-aos="zoom-in" data-aos-duration="1500">
								<div class="popular-catergories">
									<div class="popular-catergories-img">
										<span><img src="{{URL::asset('/assets/img/icon/categories7.svg')}}" alt="img"></span>
									</div>
									<div class="popular-catergories-content">
										<h5>Design &amp; Creative</h5>
										<a href="javascript:void(0);">515 Skills</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-12 aos  " data-aos="zoom-in" data-aos-duration="2000">
								<div class="popular-catergories">
									<div class="popular-catergories-img">
										<span><img src="{{URL::asset('/assets/img/icon/categories3.svg')}}" alt="img"></span>
									</div>
									<div class="popular-catergories-content">
										<h5>Digital Marketing</h5>
										<a href="javascript:void(0);">486 Skills</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-12 aos  " data-aos="zoom-in" data-aos-duration="2500">
								<div class="popular-catergories">
									<div class="popular-catergories-img">
										<span><img src="{{URL::asset('/assets/img/icon/categories4.svg')}}" alt="img"></span>
									</div>
									<div class="popular-catergories-content">
										<h5>Writing &amp; Translation</h5>
										<a href="javascript:void(0);">956 Skills</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-12 aos  " data-aos="zoom-in" data-aos-duration="1000">
								<div class="popular-catergories">
									<div class="popular-catergories-img">
										<span><img src="{{URL::asset('/assets/img/icon/categories5.svg')}}" alt="img"></span>
									</div>
									<div class="popular-catergories-content">
										<h5>Music &amp; Video</h5>
										<a href="javascript:void(0);">662 Skills</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-12 aos  " data-aos="zoom-in" data-aos-duration="1500">
								<div class="popular-catergories">
									<div class="popular-catergories-img">
										<span><img src="{{URL::asset('/assets/img/icon/categories6.svg')}}" alt="img"></span>
									</div>
									<div class="popular-catergories-content">
										<h5>Video &amp; Animation</h5>
										<a href="javascript:void(0);">226 Skills</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-12 aos  " data-aos="zoom-in" data-aos-duration="2000">
								<div class="popular-catergories">
									<div class="popular-catergories-img">
										<span><img src="{{URL::asset('/assets/img/icon/categories7.svg')}}" alt="img"></span>
									</div>
									<div class="popular-catergories-content">
										<h5>Engineering &amp; Architecture</h5>
										<a href="javascript:void(0);">756 Skills</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-12 aos  " data-aos="zoom-in" data-aos-duration="2500">
								<div class="popular-catergories">
									<div class="popular-catergories-img">
										<span><img src="{{URL::asset('/assets/img/icon/categories8.svg')}}" alt="img"></span>
									</div>
									<div class="popular-catergories-content">
										<h5>Finance &amp; Accounting</h5>
										<a href="javascript:void(0);">958 Skills</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="home-four-viewall">
						<a href="{{url('project')}}" class="home-four-viewall-btn" >View all Categories</a>
					</div>
				</div>
			</section>
			<!-- /Browse Categories -->


			<section class="section projects">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-12 mx-auto text-center">
							<div class="section-header aos " data-aos="fade-up">
								<h2 class="header-title">What’s great about it?</h2>
								<p>All the features of kofejob below</p>
							</div>
						</div>
					</div>
					<div class="row row-gap">
						<!-- Feature Item -->
						<div class="col-xl-3 col-md-6 aos d-flex" data-aos="zoom-in" data-aos-duration="1000">
							<div class="feature-items">
								<div class="feature-icon">
									<img src="{{URL::asset('/assets/img/icon/great1.svg')}}" class="img-fluid" alt="Img">
								</div>
								<div class="feature-content course-count">
									<h3>Browse Portfolios</h3>
									<p>Find professionals you can trust by browsing their samples of previous work .</p>
								</div>
							</div>
						</div>
						<!-- /Feature Item -->

						<!-- Feature Item -->
						<div class="col-xl-3 col-md-6 aos d-flex" data-aos="zoom-in" data-aos-duration="1500">
							<div class="feature-items ">
								<div class="feature-icon">
									<img src="{{URL::asset('/assets/img/icon/great2.svg')}}" class="img-fluid" alt="Img">
								</div>
								<div class="feature-content course-count">
									<h3>Fast Bids</h3>
									<p>Receive obligation free quotes from our talented freelancers fast. 80% of projects get bid</p>
								</div>
							</div>
						</div>
						<!-- /Feature Item -->

						<!-- Feature Item -->
						<div class="col-xl-3 col-md-6 aos d-flex" data-aos="zoom-in" data-aos-duration="2000">
							<div class="feature-items ">
								<div class="feature-icon">
									<img src="{{URL::asset('/assets/img/icon/great3.svg')}}" class="img-fluid" alt="Img">
								</div>
								<div class="feature-content course-count">
									<h3>Quality Work</h3>
									<p>Kofejob.com has by far the largest pool of quality freelancers globally- over 50 million to choose from.</p>
								</div>
							</div>
						</div>
						<!-- /Feature Item -->

						<!-- Feature Item -->
						<div class="col-xl-3 col-md-6 aos d-flex" data-aos="zoom-in" data-aos-duration="2500">
							<div class="feature-items ">
								<div class="feature-icon">
									<img src="{{URL::asset('/assets/img/icon/great4.svg')}}" class="img-fluid" alt="Img">
								</div>
								<div class="feature-content course-count">
									<h3>Track Progress</h3>
									<p>Keep up-to-date and on-the-go with our time tracker Always know what freelancers are up to.</p>
								</div>
							</div>
						</div>
						<!-- /Feature Item -->

					</div>
				</div>
			</section>

			<!-- Update -->
			<section class="section feature-counts">
				<div class="container">
					<div class="row">
						<div class="col-12 aos " data-aos="fade-up">
							<div class="register-job-blk">
								<div class="job-content-blk text-center aos  " data-aos="fade-up">
									<h2>Want to Get Special Offers & Updates?</h2>
									<p>Quisque pretium dolor turpis, quis blandit turpis semper ut. Nam malesuada eros nec luctus laoreet.</p>

								</div>
								<div class="home-four-viewall">
									<a href="{{url('register')}}" class="home-four-viewall-btn" >Register Kofejob <i class="feather-arrow-right ms-2"></i></a>
									<a href="{{url('post-project')}}" class="home-four-viewall-btn" >Post a Project<i class="feather-arrow-right ms-2"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Update -->

			<!-- Feature Developers -->
			<section class="section feaure-for-developer">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-12 mx-auto">
							<div class="section-header section-header-four section-locate aos" data-aos="fade-up">
								<div>
									<h2 class="header-title mb-0">We have over 1400+ Developers</h2>
								</div>
							</div>
						</div>
					</div>

					<div id="dev-slider" class="owl-carousel popular-slider developers-slider owl-theme  aos" data-aos="fade-up">
						<div class="project-item project-item-feature aos" data-aos="fade-up" >
							<a href="{{url('developer-details')}}"><div class="project-img heart-blk">
								<img src="{{URL::asset('/assets/img/developer/developer-05.jpg')}}" alt="Img" class="img-fluid">
								<span class="hour-dollr develop-dollr">$64 <small>/ hr</small></span>
							</div>
						</a>
							<div class="developer-detail-box">
								<div class="developer-detail-card">
									<div>
										<div class="d-flex align-items-center">
											<h4 class="mb-0"><a href="{{url('developer-details')}}">Megan Torres</a></h4><img class="ms-1" src="{{URL::asset('/assets/img/icon/verified-badge-fill.svg')}}" alt="Img">
										</div>
										<p class="mb-0">Java Developer</p>
									</div>
									<div>
										<a href="javascript:void(0);" class="bookmark-check"><i class="fa-regular fa-bookmark"></i></a>
									</div>
								</div>
								<div class="rate-block">
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">5.0</span>
									</div>
									<div>
										<a href="{{url('developer-details')}}"><i class="feather-arrow-right"></i></a>
									</div>
								</div>
							</div>

						</div>
						<div class="project-item project-item-feature aos" data-aos="fade-up" >
							<a href="{{url('developer-details')}}"><div class="project-img heart-blk">
								<img src="{{URL::asset('/assets/img/developer/developer-06.jpg')}}" alt="Img" class="img-fluid">
								<span class="hour-dollr develop-dollr">$54 <small>/ hr</small></span>
							</div>
						</a>
							<div class="developer-detail-box">
								<div class="developer-detail-card">
									<div>
										<div class="d-flex align-items-center">
											<h4 class="mb-0"><a href="{{url('developer-details')}}">Nicole Black</a></h4><img class="ms-1" src="{{URL::asset('/assets/img/icon/verified-badge-fill.svg')}}" alt="Img">
										</div>
										<p class="mb-0">React Developer</p>
									</div>
									<div>
										<a href="javascript:void(0);" class="bookmark-check"><i class="fa-regular fa-bookmark"></i></a>
									</div>
								</div>
								<div class="rate-block">
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">5.0</span>
									</div>
									<div>
										<a href="{{url('developer-details')}}"><i class="feather-arrow-right"></i></a>
									</div>
								</div>
							</div>

						</div>
						<div class="project-item project-item-feature aos" data-aos="fade-up" >
							<a href="{{url('developer-details')}}"><div class="project-img heart-blk">
								<img src="{{URL::asset('/assets/img/developer/developer-07.jpg')}}" alt="Img" class="img-fluid">
								<span class="hour-dollr develop-dollr">$35 <small>/ hr</small></span>
							</div>
						</a>
							<div class="developer-detail-box">
								<div class="developer-detail-card">
									<div>
										<div class="d-flex align-items-center">
											<h4 class="mb-0"><a href="{{url('developer-details')}}">Shan Morris</a></h4><img class="ms-1" src="{{URL::asset('/assets/img/icon/verified-badge-fill.svg')}}" alt="Img">
										</div>
										<p class="mb-0">PHP Developer</p>
									</div>
									<div>
										<a href="javascript:void(0);" class="bookmark-check"><i class="fa-regular fa-bookmark"></i></a>
									</div>
								</div>
								<div class="rate-block">
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">5.0</span>
									</div>
									<div>
										<a href="{{url('developer-details')}}"><i class="feather-arrow-right"></i></a>
									</div>
								</div>
							</div>

						</div>
						<div class="project-item project-item-feature aos" data-aos="fade-up" >
							<a href="{{url('developer-details')}}"><div class="project-img heart-blk">
								<img src="{{URL::asset('/assets/img/developer/developer-08.jpg')}}" alt="Img" class="img-fluid">
								<span class="hour-dollr develop-dollr">$68 <small>/ hr</small></span>
							</div>
						</a>
							<div class="developer-detail-box">
								<div class="developer-detail-card">
									<div>
										<div class="d-flex align-items-center">
											<h4 class="mb-0"><a href="{{url('developer-details')}}">Harris Jod</a></h4><img class="ms-1" src="{{URL::asset('/assets/img/icon/verified-badge-fill.svg')}}" alt="Img">
										</div>
										<p class="mb-0">Java Developer</p>
									</div>
									<div>
										<a href="javascript:void(0);" class="bookmark-check"><i class="fa-regular fa-bookmark"></i></a>
									</div>
								</div>
								<div class="rate-block">
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">5.0</span>
									</div>
									<div>
										<a href="{{url('developer-details')}}"><i class="feather-arrow-right"></i></a>
									</div>
								</div>
							</div>

						</div>
						<div class="project-item project-item-feature aos" data-aos="fade-up" >
							<a href="{{url('developer-details')}}"><div class="project-img heart-blk">
								<img src="{{URL::asset('/assets/img/developer/developer-08.jpg')}}" alt="Img" class="img-fluid">
								<span class="hour-dollr develop-dollr">$64 <small>/ hr</small></span>
							</div>
						</a>
							<div class="developer-detail-box">
								<div class="developer-detail-card">
									<div>
										<div class="d-flex align-items-center">
											<h4 class="mb-0"><a href="{{url('developer-details')}}">Megan Torres</a></h4><img class="ms-1" src="{{URL::asset('/assets/img/icon/verified-badge-fill.svg')}}" alt="Img">
										</div>
										<p class="mb-0">Java Developer</p>
									</div>
									<div>
										<a href="javascript:void(0);" class="bookmark-check"><i class="fa-regular fa-bookmark"></i></a>
									</div>
								</div>
								<div class="rate-block">
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">5.0</span>
									</div>
									<div>
										<a href="{{url('developer-details')}}"><i class="feather-arrow-right"></i></a>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="home-four-viewall">
						<a href="{{url('developer-details')}}" class="home-four-viewall-btn" >View More Developers <i class="feather-arrow-right ms-2"></i></a>
					</div>
				</div>
			</section>
			<!-- Feature Developers -->

			<!-- Marketplace -->
			<section class="section join-marketplace">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="markrt-place-img aos" data-aos="fade-up">
								<img  src="{{URL::asset('/assets/img/plat-form1.png')}}" class="img-fluid" alt="Img">
							</div>
						</div>
						<div class="col-lg-6 col-md-12 d-flex align-items-center">
							<div class="market-place-group join-place-blk aos" data-aos="fade-up">
								<h2>Join World’s Best Marketplacevfor developers</h2>
								<p>Why hire people when you can simply integrate our talented cloud workforce instead?</p>
								<ul class="market-list-out">
									<li><i class="fa-solid fa-circle-check"></i> It’s free and easy to post a job.</li>
									<li><i class="fa-solid fa-circle-check"></i> We've got freelancers for jobs of any size or budget, across 1800+ skills.</li>
									<li><i class="fa-solid fa-circle-check"></i> Only pay for work when it has been completed and you're 100% satisfied. </li>
									<li><i class="fa-solid fa-circle-check"></i> Our talented team of recruiters can help you find the best freelancer.</li>
								</ul>
								<div class="market-place-btn">
									<a href="{{url('project')}}" class="btn btn-primary market-project me-2">Post a Project</a>
									<a href="{{url('developer-details')}}" class="btn btn-primary market-developer">Find Developers</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Marketplace -->

			<!-- Popular Projects -->
			<section class="section popular-projects">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-12 mx-auto">
							<div class="section-header  section-locate aos" data-aos="fade-up">
								<div>
									<h2 class="header-title">Popular Projects near you  </h2>
									<p>Bid and stary the new Jobs </p>
								</div>

							</div>
						</div>
					</div>
					<div id="popular-slider" class="owl-carousel owl-theme popular-slider developers-slider aos" data-aos="fade-up">
						<div class="popular-group" >
							<div class="blog-image">
								<a href="{{url('project')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/project/project-29.jpg')}}" alt="Post Image"></a>
							</div>
							<div class="popular-content-blk">
								<div class="head-popular">
									<h4><a href="{{url('project')}}">UI/UX for Cryptocurrency Exchange</a></h4>
									<p><i class="feather-user me-1"></i>Web Development</p>
								</div>
								<div class="popular-list-box">
									<ul class="nav">
										<li>Figma</li>
										<li>Adobe Xd</li>
									</ul>
									<h4>$80 - $180<span>/hour</span></h4>
								</div>
								<p class="popular-foot">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
							</div>
						</div>
						<div class="popular-group" >
							<div class="blog-image">
								<a href="{{url('project')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/project/project-30.jpg')}}" alt="Post Image"></a>
							</div>
							<div class="popular-content-blk">
								<div class="head-popular">
									<h4><a href="{{url('project')}}">Website Design for a Consumer Shop</a></h4>
									<p><i class="feather-user me-1"></i>Angular Development</p>
								</div>
								<div class="popular-list-box">
									<ul class="nav">
										<li>Angular</li>
									</ul>
									<h4>$40 - $80<span>/hour</span></h4>
								</div>
								<p class="popular-foot">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
							</div>
						</div>
						<div class="popular-group" >
							<div class="blog-image">
								<a href="{{url('project')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/project/project-31.jpg')}}" alt="Post Image"></a>
							</div>
							<div class="popular-content-blk">
								<div class="head-popular">
									<h4><a href="{{url('project')}}">Build a Coaching Website Product </a></h4>
									<p><i class="feather-user me-1"></i>Node JS Development</p>
								</div>
								<div class="popular-list-box">
									<ul class="nav">
										<li>Figma</li>
										<li>Node JS</li>
									</ul>
									<h4>$60 - $120<span>/hour</span></h4>
								</div>
								<p class="popular-foot">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
							</div>
						</div>
						<div class="popular-group" >
							<div class="blog-image">
								<a href="{{url('project')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/project/project-30.jpg')}}" alt="Post Image"></a>
							</div>
							<div class="popular-content-blk">
								<div class="head-popular">
									<h4><a href="{{url('project')}}">Website Design for a Consumer Shop</a></h4>
									<p><i class="feather-user me-1"></i>Angular Development</p>
								</div>
								<div class="popular-list-box">
									<ul class="nav">
										<li>Angular</li>
									</ul>
									<h4>$40 - $80<span>/hour</span></h4>
								</div>
								<p class="popular-foot">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
							</div>
						</div>
						<div class="popular-group" >
							<div class="blog-image">
								<a href="{{url('project')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/project/project-29.jpg')}}" alt="Post Image"></a>
							</div>
							<div class="popular-content-blk">
								<div class="head-popular">
									<h4><a href="{{url('project')}}">UI/UX for Cryptocurrency Exchange</a></h4>
									<p><i class="feather-user me-1"></i>Web Development</p>
								</div>
								<div class="popular-list-box">
									<ul class="nav">
										<li>Figma</li>
										<li>Adobe Xd</li>
									</ul>
									<h4>$80 - $180<span>/hour</span></h4>
								</div>
								<p class="popular-foot">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
							</div>
						</div>
						<div class="popular-group" >
							<div class="blog-image">
								<a href="{{url('project')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/project/project-31.jpg')}}" alt="Post Image"></a>
							</div>
							<div class="popular-content-blk">
								<div class="head-popular">
									<h4><a href="{{url('project')}}">Build a Coaching Website Product </a></h4>
									<p><i class="feather-user me-1"></i>Node JS Development</p>
								</div>
								<div class="popular-list-box">
									<ul class="nav">
										<li>Figma</li>
										<li>Node JS</li>
									</ul>
									<h4>$60 - $120<span>/hour</span></h4>
								</div>
								<p class="popular-foot">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Popular Projects -->

			<!-- Our Feature -->
			<section class="section projects">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-12 mx-auto">
							<div class="section-header text-center aos" data-aos="fade-up">
								<h2 class="header-title">What’s great about it?</h2>
								<p>All the features of kofejob below</p>
							</div>
						</div>
					</div>
					<div class="row row-gap">

						<!-- Feature Item -->
						<div class="col-xl-3 col-md-6">
							<div class="great-card aos" data-aos="fade-up">
								<div class="feature-icon mb-0 me-3">
									<img src="{{URL::asset('/assets/img/icon/great5.svg')}}" class="img-fluid" alt="Img">
								</div>
								<div class="feature-content course-count text-start">
									<h4 class="counter-up">9,207</h4>
									<p>Freelance developers</p>
								</div>
							</div>
						</div>
						<!-- /Feature Item -->

						<!-- Feature Item -->
						<div class="col-xl-3 col-md-6">
							<div class="great-card  aos" data-aos="fade-up">
								<div class="feature-icon mb-0 me-3">
									<img src="{{URL::asset('/assets/img/icon/great6.svg')}}" class="img-fluid" alt="Img">
								</div>
								<div class="feature-content course-count text-start">
									<h4><span class="counter-up">6000 </span> +</h4>
									<p>Projects Added</p>
								</div>
							</div>
						</div>
						<!-- /Feature Item -->

						<!-- Feature Item -->
						<div class="col-xl-3 col-md-6">
							<div class="great-card  aos" data-aos="fade-up">
								<div class="feature-icon mb-0 me-3">
									<img src="{{URL::asset('/assets/img/icon/great7.svg')}}" class="img-fluid" alt="Img">
								</div>
								<div class="feature-content course-count text-start">
									<h4 class="counter-up">919,207</h4>
									<p>Completed projects</p>
								</div>
							</div>
						</div>
						<!-- /Feature Item -->

						<!-- Feature Item -->
						<div class="col-xl-3 col-md-6">
							<div class="great-card  aos" data-aos="fade-up">
								<div class="feature-icon mb-0 me-3">
									<img src="{{URL::asset('/assets/img/icon/great8.svg')}}" class="img-fluid" alt="Img">
								</div>
								<div class="feature-content course-count text-start">
									<h4 class="counter-up">998</h4>
									<p>Companies Registered</p>
								</div>
							</div>
						</div>
						<!-- /Feature Item -->

					</div>
				</div>
			</section>
			<!-- /Our Feature -->

			<!-- Job Location -->
			<section class="section review">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-12 mx-auto">
							<div class="section-header d-block  section-locate aos" data-aos="fade-up">
								<div class="text-center">
									<h2 class="header-title">Jobs by Location</h2>
									<p>Find your favourite jobs and get the benefits of yourself</p>
								</div>

							</div>
						</div>
					</div>
					<div class="row row-gap">
						<div class="col-xl-3 col-md-4 aos" data-aos="fade-up">
							<div class="blog-article-group job-loc">
								<div class="blog-image">
									<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/location/loc1.jpg')}}" alt="Post Image"></a>
									<div class="article-blog-content">
										<span> Nevada, USA</span>
										<h4><a href="{{url('blog-details')}}">40 Companies</a></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-4 aos" data-aos="fade-up">
							<div class="blog-article-group job-loc">
								<div class="blog-image">
									<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/location/loc2.jpg')}}" alt="Post Image"></a>
									<div class="article-blog-content">
										<span> London, UK</span>
										<h4><a href="{{url('blog-details')}}">52 Companies</a></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-4 aos" data-aos="fade-up">
							<div class="blog-article-group job-loc">
								<div class="blog-image">
									<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/location/loc3.jpg')}}" alt="Post Image"></a>
									<div class="article-blog-content">
										<span>Bangalore, India</span>
										<h4><a href="{{url('blog-details')}}">77 Companies</a></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-4 aos" data-aos="fade-up">
							<div class="blog-article-group job-loc">
								<div class="blog-image">
									<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/location/loc4.jpg')}}" alt="Post Image"></a>
									<div class="article-blog-content">
										<span>New York, USA</span>
										<h4><a href="{{url('blog-details')}}">85 Companies</a></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Job Location -->

			<!-- Review -->
			<section class="section testimonial-section review review-four">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="section-header aos text-center" data-aos="fade-up">
								<h2 class="header-title">Client testimonials</h2>
								<p>Learning communicate to global world and build a bright future and career development, increase your skill with our histudy.</p>
							</div>
						</div>
					</div>
					<div id="testimonial-slider" class="owl-carousel owl-theme testimonial-slider aos" data-aos="fade-up">

						<!-- Review Widget -->
						<div class="review-blog">
							<div class="review-top d-flex align-items-center">
								<div class="review-img">
									<a href="{{url('review')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/review/review-01.jpg')}}" alt="Post Image"></a>
								</div>
								<div class="review-info">
									<h3><a href="{{url('review')}}">Durso Raeen</a></h3>
									<h5>Project Lead</h5>

								</div>

							</div>
							<div class="review-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
								</div>
							</div>
						</div>
						<!-- / Review Widget -->

						<!-- Review Widget -->
						<div class="review-blog">
							<div class="review-top d-flex align-items-center">
								<div class="review-img">
									<a href="{{url('review')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/review/review-02.jpg')}}" alt="Post Image"></a>
								</div>
								<div class="review-info">
									<h3><a href="{{url('review')}}">Camelia Rennesa</a></h3>
									<h5>Project Lead</h5>

								</div>

							</div>
							<div class="review-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
								</div>
							</div>
						</div>
						<!-- /Review Widget -->

						<!-- Review Widget -->
						<div class="review-blog">
							<div class="review-top d-flex align-items-center">
								<div class="review-img">
									<a href="{{url('review')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/review/review-03.jpg')}}" alt="Post Image"></a>
								</div>
								<div class="review-info">
									<h3><a href="{{url('review')}}">Brayan</a></h3>
									<h5>Team Lead</h5>

								</div>

							</div>
							<div class="review-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
								</div>
							</div>
						</div>
						<!-- /Review Widget -->

						<!-- Review Widget -->
						<div class="review-blog">
							<div class="review-top d-flex align-items-center">
								<div class="review-img">
									<a href="{{url('review')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/review/review-02.jpg')}}" alt="Post Image"></a>
								</div>
								<div class="review-info">
									<h3><a href="{{url('review')}}">Davis Payerf</a></h3>
									<h5>Project Lead</h5>

								</div>

							</div>
							<div class="review-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
								</div>
							</div>
						</div>
						<!-- /Review Widget -->
					</div>
				</div>
			</section>
			<!-- / Review -->

			<!-- Platform Location -->
			<section class="section platform-location">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="row">
								<div class="col-md-6 flex-fill">
									<div class="markrt-place-img aos" data-aos="fade-up">
										<img  src="{{URL::asset('/assets/img/markrt-place-img1.jpg')}}" class="img-fluid" alt="Img">
									</div>
								</div>
								<div class="col-md-6 flex-fill">
									<div class="d-flex flex-column row-gap">
										<div class="markrt-place-img aos" data-aos="fade-up">
											<img  src="{{URL::asset('/assets/img/markrt-place-img2.jpg')}}" class="img-fluid" alt="Img">
										</div>
										<div class="markrt-place-img aos" data-aos="fade-up">
											<img  src="{{URL::asset('/assets/img/markrt-place-img3.jpg')}}" class="img-fluid" alt="Img">
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-lg-6 col-md-12 d-flex align-items-center">
							<div class="market-place-group aos" data-aos="fade-up">
								<h2>Discover Project Around<span class="platform-head">your Location in Our Platform</span></h2>
								<p>Get Inspired by Development Projects</p>
								<p class="platform-pasage">We Provide Stable Service With Experts Freelancers around the globe, are looking for work and provide the best they have .Experience state-of-the-art marketplace platform with the Kofejob. We combine the experience of our global community around the globe for a best marketplace theme.</p>
								<div class="market-place-btn platform-btn">
									<a href="{{url('project')}}" class="btn btn-primary market-project me-2">View Projects</a>
									<a href="{{url('project')}}" class="btn btn-primary project-post">Post a Project</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Platform Location -->

			<!-- Employer Hire -->
			<section class="section top-company-four">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-12 mx-auto">
							<div class="section-header section-header-four section-locate aos" data-aos="fade-up">
								<div class="text-center">
									<h2 class="header-title">Trusted by the world’s best  </h2>
									<p>Top companies </p>
								</div>

							</div>
						</div>
					</div>
					<div id="trust-company-slider" class="owl-carousel owl-theme trust-slider developers-slider aos" data-aos="fade-up">
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
			<!-- / Employer Hire -->

			<section class="faq-section-three bg-white" id="faq">
				<div class="container">
					<div class="section-header section-header-three text-center aos  " data-aos="fade-up">
						<span class="badge title-badge">FAQ’S</span>
						<h2 class="header-title">Frequently Question Answer </h2>
					</div>
					<div class="row" id="accordionExample">
						<div class="col-lg-6">
							<div class="faq-card aos  " data-aos="fade-up">
								<h4 class="faq-title">
									<a class="collapseds active" data-bs-toggle="collapse" href="#faqOne" aria-expanded="true">1. What are the costs to buy a house?</a>
								</h4>
								<div id="faqOne" class="card-collapse collapse show" data-bs-parent="#accordionExample">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
								</div>
							</div>
							<div class="faq-card aos  " data-aos="fade-up">
								<h4 class="faq-title">
									<a class="collapsed" data-bs-toggle="collapse" href="#faqtwo" aria-expanded="false">2. What are the costs to buy a house?</a>
								</h4>
								<div id="faqtwo" class="card-collapse collapse" data-bs-parent="#accordionExample">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
								</div>
							</div>
							<div class="faq-card aos  " data-aos="fade-up">
								<h4 class="faq-title">
									<a class="collapsed" data-bs-toggle="collapse" href="#faqthree" aria-expanded="false">3. Do you have loan consultants?</a>
								</h4>
								<div id="faqthree" class="card-collapse collapse" data-bs-parent="#accordionExample">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
								</div>
							</div>
							<div class="faq-card aos  " data-aos="fade-up">
								<h4 class="faq-title">
									<a class="collapsed" data-bs-toggle="collapse" href="#faqfour" aria-expanded="false">4. What are the costs to buy a house?</a>
								</h4>
								<div id="faqfour" class="card-collapse collapse" data-bs-parent="#accordionExample">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
								</div>
							</div>
							<div class="faq-card aos  " data-aos="fade-up">
								<h4 class="faq-title">
									<a class="collapsed" data-bs-toggle="collapse" href="#faqfive" aria-expanded="false">5. What are the costs to buy a house?</a>
								</h4>
								<div id="faqfive" class="card-collapse collapse" data-bs-parent="#accordionExample">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,</p>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="faq-imgs">
								<img src="{{URL::asset('/assets/img/faqs.jpg')}}" alt="img">
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Blog -->
			<section class="section blog-article">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-12 mx-auto">
							<div class="section-header section-header-four section-locate aos" data-aos="fade-up">
								<div class="text-center">
									<h2 class="header-title">Our Blog  </h2>
									<p>Read Our Article To Get Tricks </p>
								</div>

							</div>
						</div>
					</div>
					<div  class="row aos row-gap" data-aos="fade-up">
						<div class="col-lg-4 col-md-6">
							<div class="blog-article-group" >
								<div class="blog-image">
									<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-15.jpg')}}" alt="Post Image"></a>
									<div class="article-Production">
										<span>Production</span>
									</div>
									<div class="article-blog-content">
										<span> <i class="feather-calendar"></i> 13, Dec2022</span>
										<h4><a href="{{url('blog-details')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet.</a></h4>

									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="blog-article-group" >
								<div class="blog-image">
									<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog1.jpg')}}" alt="Post Image"></a>
									<div class="article-Production">
										<span>Jobs</span>
									</div>
									<div class="article-blog-content">
										<span><i class="feather-calendar"></i>12, Dec2022</span>
										<h4><a href="{{url('blog-details')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet.</a></h4>

									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="blog-article-group" >
								<div class="blog-image">
									<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog2.jpg')}}" alt="Post Image"></a>
									<div class="article-Production">
										<span>Production</span>
									</div>
									<div class="article-blog-content">
										<span><i class="feather-calendar"></i>10, Dec2022</span>
										<h4><a href="{{url('blog-details')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet.</a></h4>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Popular Projects -->

@endsection
