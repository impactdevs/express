<?php $page="company-review";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('li_1') Home @endslot
    @slot('li_2') Employers @endslot
    @slot('li_3') COMPANY PROFILE @endslot
@endcomponent	

@component('components.tab-details')                
@endcomponent
										<!-- Page Content -->
			<div class="content">
				<div class="container">	
					
					<div class="row">
						<div class="col-lg-8 col-md-12">
							
							<div class="pro-view">
								
								<!-- Tab Detail -->
								<nav class="provider-tabs mb-4 abouts-view">
									<ul class="nav nav-tabs nav-tabs-solid nav-justified">
										<li class="nav-item">
											<a class="nav-link " href="{{url('company-profile')}}">
												<img src="{{URL::asset('/assets/img/icon/tab-icon-13.png')}}"  alt="User Image">
												<p class="bg-red">About Us</p>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{url('company-project')}}">
												<img src="{{URL::asset('/assets/img/icon/tab-icon-09.png')}}"  alt="User Image">
												<p >Projects</p>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{url('company-gallery')}}">
												<img src="{{URL::asset('/assets/img/icon/tab-icon-10.png')}}"  alt="User Image">
												<p>Gallery</p>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link active-about" href="{{url('company-review')}}">
												<img src="{{URL::asset('/assets/img/icon/tab-icon-15.png')}}"  alt="User Image">
												<p>Reviews</p>
											</a>
										</li>
									</ul>
								</nav>
								<!-- /Tab Detail -->
								
								<!-- Reviews Tab Content -->
								<div class="pro-post widget-box company-post" >
									<h3 class="pro-title">Reviews</h3>
									<div class="reviews company-review">
										<div class="review-content no-padding">		
											<h4>This seller was great overall. </h4>
											<p class="mb-0">Fast and clear. European visual concepts. Easy to communicate TOP</p>
											<div class="review-top tab-reviews d-flex align-items-center">
												<div class="review-img">
													<a href="{{url('company-profile')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/review/review-01.jpg')}}" alt="Post Image"></a>
												</div>
												<div class="review-info">
													<h3><a href="{{url('company-profile')}}">javiervalino</a></h3>
													<h5>Today • 09:35 PM</h5>	
												</div>					
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="average-rating">4.7</span>
												</div>
											</div>
										</div>	
										<div class="review-content no-padding">		
											<h4>This seller was great overall. </h4>
											<p class="mb-0">This seller was great overall. One thing I noticed was that there was one logo out of the 4 I got that stood out amongst the others. Now I loved that one logo but the other ones did not look like much thought were put into them and they were a little disappointing. It is understandable for the price for them to only put effort into one logo, which like I said I loved. I think it would be better to tell this seller to make one good logo and to provide 3 other logos that work off the one good logo. Maybe make that one good logo and then change colors and fonts for the other 3. But overall this seller was great!</p>
											<div class="review-top tab-reviews d-flex align-items-center">
												<div class="review-img">
													<a href="{{url('company-profile')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/review/review-02.jpg')}}" alt="Post Image"></a>
												</div>
												<div class="review-info">
													<h3><a href="{{url('company-profile')}}">trentburns</a></h3>
													<h5>Yesterday • 09:35 PM</h5>	
												</div>					
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="average-rating">4.7</span>
												</div>
											</div>
										</div>		
										<div class="review-content no-padding">		
											<h4>Great help given and work</h4>
											<p class="mb-0">Great help given and work was done as asked on time! :)</p>
											<div class="review-top tab-reviews d-flex align-items-center">
												<div class="review-img">
													<a href="{{url('company-profile')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/review/review-03.jpg')}}" alt="Post Image"></a>
												</div>
												<div class="review-info">
													<h3><a href="{{url('company-profile')}}">mabdz</a></h3>
													<h5>Sep 3 • 6:57 AM</h5>	
												</div>					
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="average-rating">4.7</span>
												</div>
											</div>
										</div>	
										<div class="review-content no-padding">		
											<h4>very quick & smart.</h4>
											<p class="mb-0">very quick & smart. Recommend him for any web related work</p>
											<div class="review-top tab-reviews d-flex align-items-center">
												<div class="review-img">
													<a href="{{url('company-profile')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/review/review-02.jpg')}}" alt="Post Image"></a>
												</div>
												<div class="review-info">
													<h3><a href="{{url('company-profile')}}">creativerr</a></h3>
													<h5>Aug 12 • 9:37 AM</h5>	
												</div>					
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="average-rating">4.7</span>
												</div>
											</div>
										</div>	
										<div class="review-content no-padding">		
											<h4>always amaze me with his skills</h4>
											<p class="mb-0">always amaze me with his skills. Recommend this top rated seller for anyone. Absolute best of best</p>
											<div class="review-top tab-reviews d-flex align-items-center">
												<div class="review-img">
													<a href="{{url('company-profile')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/review/review-1.jpg')}}" alt="Post Image"></a>
												</div>
												<div class="review-info">
													<h3><a href="{{url('company-profile')}}">adirajulk</a></h3>
													<h5>Aug 3 • 6:57 AM</h5>	
												</div>					
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="average-rating">4.7</span>
												</div>
											</div>
										</div>	
										<div class="review-content no-padding">		
											<h4>They delivered great work! The delivery was prompt and the communication was excellent. </h4>
											<p class="mb-0">They delivered great work! The delivery was prompt and the communication was excellent. I will be using them in the future and recommend them to anyone who needs their services!</p>
											<div class="review-top tab-reviews d-flex align-items-center">
												<div class="review-img">
													<a href="{{url('company-profile')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/review/review-03.jpg')}}" alt="Post Image"></a>
												</div>
												<div class="review-info">
													<h3><a href="{{url('company-profile')}}">james</a></h3>
													<h5>Aug 2 • 7:57 AM</h5>	
												</div>					
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="average-rating">4.7</span>
												</div>
											</div>
										</div>	
										<div class="col-md-12 text-center">
											<a href="javascript:void(0);" class="btn more-btn"><img src="{{URL::asset('/assets/img/loader-icon.svg')}}" height="24" alt="User Image">Load More </a>
										</div>
									</div>
								</div>
								<!-- /Reviews Tab Content -->
								
								<!-- Post a comment -->
								<div class="pro-post widget-box company-post post-comment" >
									<h3 class="pro-title">Post a comment</h3>
									<form action="#">
										<div class="input-block">
											<label class="form-label">Full Name</label>
											<input type="text" class="form-control">
										</div>
										<div class="input-block">
											<label class="form-label">Email Address</label>
											<input type="text" class="form-control">
										</div>
										<div class="input-block">
											<label class="form-label">Phone Number</label>
											<input type="text" class="form-control">
										</div>
										<div class="input-block">
											<label class="form-label">Your Rating</label>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
											</div>
										</div>
										<div class="input-block">
											<textarea class="form-control" rows="4" placeholder="Message"></textarea>
										</div>
										<div class="post-btn">
											<button class="btn more-btn">Submit</button>
										</div>
									</form>
								</div>
								<!-- /Post a comment -->
								
							</div>
						</div>
					
						<!-- profile Sidebar -->
						<div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar company-profile">	

							<!-- About Widget -->	
							<div class="pro-post widget-box about-widget profile-overview">
								<div class="profile-head">
									<h4 class="pro-title mb-0">Profile Overview</h4>
								</div>
								<ul class="latest-posts pro-content">
									<li><p>Company Name</p><h6>Amaze Tech  PVT LTD.</h6></li>
									<li><p>Company Established</p><h6>02-12-2005</h6></li>
									<li><p>No of Employees</p><h6>1500 - 1850</h6></li>
									<li><p>Owner Name</p><h6>Charles Dickens</h6></li>
									<li><p>Email</p><h6>amazetechpvt.ltd@gmail.com</h6></li>
									<li><p>Website</p><h6>www.amazetechpvt.ltd.com</h6></li>
								</ul>
								<div class="contact-btn">
									<a href="javascript:void(0);" class="btn btn-primary"><i class="fas fa-phone-alt"></i> Contact</a>
								</div>
							</div>
							<!-- /About Widget -->
							
							<!-- Company Location -->	
							<div class="pro-post widget-box location-widget">
								<div class="profile-head">
									<h4 class="pro-title">Company Location</h4>
								</div>
								<div class="map-location">
									<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" ></iframe>
								</div>
							</div>
							<!-- /Company Location -->
							
							<!-- Working Widget -->	
							<div class="pro-post widget-box  working-days">
								<div class="profile-head">
									<h4 class="pro-title mb-0">Working Days</h4>
								</div>
								<ul class="latest-posts pro-content">
									<li><p>Monday</p><h6>9AM - 5PM</h6></li>
									<li><p>Tuesday </p><h6>9AM - 5PM</h6></li>
									<li><p>Wednesday </p><h6>9AM - 5PM</h6></li>
									<li><p>Thursday </p><h6>9AM - 5PM</h6></li>
									<li><p>Friday </p><h6>9AM - 5PM</h6></li>
									<li><p>Saturday </p><h6>9AM - 5PM</h6></li>
									<li><p>Sunday </p><h6><span>Close</span></h6></li>
								</ul>
							</div>
							<!-- /Working Widget -->	
							
							<!-- Social Widget -->	
							<div class="pro-post widget-box social-widget">
								<div class="profile-head">
									<h4 class="pro-title">SOCIAL LINKS</h4>
								</div>
								<ul class="social-link-profile">
									<li><a href="javascript:void(0);"><i class="fab fa-facebook"></i></a></li>
									<li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
									<li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
									<li><a href="javascript:void(0);"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="javascript:void(0);"><i class="fab fa-telegram"></i></a></li>
								</ul>
							</div>
							<!-- /Social Widget -->
						
						</div>
						<!-- /Profile Sidebar -->
						
					</div>
				</div>
			</div>		
			<!-- /Page Content -->
@component('components.modal-popup')                
@endcomponent				
@endsection