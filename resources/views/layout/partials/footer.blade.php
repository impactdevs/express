	@if(!Route::is(['index-two','index-three','index-four','index-five']))	
		<!-- Footer -->	
		<footer class="footer">
			<div class="footer-top ">
				<div class="container">

					<div class="row">
						<div class=" col-lg-4 col-md-12">
							<div class="footer-bottom-logo">
								<a href="{{url('index')}}" class="menu-logo">
									<img src="{{URL::asset('/assets/img/logo.png')}}" 
									class="img-fluid" alt="Logo"
									height="80px"
									width="80px"
									>
								</a>
								<p>We’re always in search for talented and motivated people. Don’t be shy introduce yourself!</p>
								<ul>
									<li>
										<a href="javascript:void(0);"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="javascript:void(0);"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="javascript:void(0);"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="javascript:void(0);"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
									</li>
								</ul>
								<a href="javascript:void(0);" class="btn btn-connectus">Contact with us</a>
							</div>
						</div>
						<div class=" col-lg-8 col-md-12">
							<div class="row">
								<div class="col-xl-3 col-md-6">
									<div class="footer-widget footer-menu">
										<h2 class="footer-title">Useful Links</h2>
										<ul>
											<li><a href="{{url('about')}}"><i class="fas fa-angle-right me-1"></i>About Us</a></li>
											<li><a href="{{url('blog-list')}}"><i class="fas fa-angle-right me-1"></i>Blog</a></li>
											<li><a href="{{url('login')}}"><i class="fas fa-angle-right me-1"></i>Login</a></li>
											<li><a href="{{url('register')}}"><i class="fas fa-angle-right me-1"></i>Register</a></li>
											<li><a href="{{url('forgot-password')}}"><i class="fas fa-angle-right me-1"></i>Forgot Password</a></li>
										</ul>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="footer-widget footer-menu">
										<h2 class="footer-title">Help & Support</h2>
										<ul>
											<li><a href="javascript:void(0);"><i class="fas fa-angle-right me-1"></i>Browse Candidates</a></li>
											<li><a href="javascript:void(0);"><i class="fas fa-angle-right me-1"></i>Employers Dashboard</a></li>
											<li><a href="javascript:void(0);"><i class="fas fa-angle-right me-1"></i>Job Packages</a></li>
											<li><a href="javascript:void(0);"><i class="fas fa-angle-right me-1"></i>Jobs Featured</a></li>
											<li><a href="javascript:void(0);"><i class="fas fa-angle-right me-1"></i>Post A Job</a></li>
										</ul>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="footer-widget footer-menu">
										<h2 class="footer-title">Other Links</h2>
										<ul>
											<li><a href="{{url('freelancer-dashboard')}}"><i class="fas fa-angle-right me-1"></i>Freelancers</a></li>
											<li><a href="{{url('freelancer-portfolio')}}"><i class="fas fa-angle-right me-1"></i>Freelancer Details</a></li>
											<li><a href="{{url('project')}}"><i class="fas fa-angle-right me-1"></i>Project</a></li>
											<li><a href="{{url('project-details')}}"><i class="fas fa-angle-right me-1"></i>Project Details</a></li>
											<li><a href="{{url('post-project')}}"><i class="fas fa-angle-right me-1"></i>Post Project</a></li>
										</ul>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="footer-widget footer-menu">
										<h2 class="footer-title">Connect With Us</h2>
										<ul>
											<li><a href="{{url('freelancer-chats')}}"><i class="fas fa-angle-right me-1"></i>Chat</a></li>
											<li><a href="{{url('faq')}}"><i class="fas fa-angle-right me-1"></i>Faq</a></li>
											<li><a href="{{url('freelancer-review')}}"><i class="fas fa-angle-right me-1"></i>Reviews</a></li>
											<li><a href="{{url('privacy-policy')}}"><i class="fas fa-angle-right me-1"></i>Privacy Policy</a></li>
											<li><a href="{{url('term-condition')}}"><i class="fas fa-angle-right me-1"></i>Terms of use</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Footer Top -->
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
				
					<!-- Copyright -->
					<div class="copyright">
						<div class="row">
							<div class="col-md-12">
								<div class="copyright-text text-center">
									<p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> © {{ env('APP_NAME') }}. All right reserved.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- /Copyright -->						
				</div>
			</div>
			<!-- /Footer Bottom -->				
		</footer>
		<!-- /Footer -->
	
	@endif
	@if(Route::is(['index-two']))	
	<!-- Footer -->	
	<footer class="footer footer-two" id="bottom-scroll">
		<div class="footer-top ">
			<div class="container">

				<div class="row">
					<div class="col-xl-3 col-md-3">
						<div class="footer-widget footer-menu">
							<h2 class="footer-title">Useful Links</h2>
							<ul>
								<li><a href="javascript:void(0);">Browse Candidates</a></li>
								<li><a href="javascript:void(0);">Employers Dashboard</a></li>
								<li><a href="javascript:void(0);">Job Packages</a></li>
								<li><a href="javascript:void(0);">Jobs Featured</a></li>
								<li><a href="javascript:void(0);">Post A Job</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-md-3">
						<div class="footer-widget footer-menu">
							<h2 class="footer-title">Pages</h2>
							<ul>
								<li><a href="{{url('freelancer-dashboard')}}">Freelancers</a></li>
								<li><a href="{{url('freelancer-portfolio')}}">Freelancer Details</a></li>
								<li><a href="{{url('project')}}">Project</a></li>
								<li><a href="{{url('project-details')}}">Project Details</a></li>
								<li><a href="{{url('post-project')}}">Post Project</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-md-4">
						<div class="footer-widget footer-menu">
							<h2 class="footer-title">Featured Categories</h2>
							<ul>
								<li><a href="javascript:void(0);">Website Design</a></li>
								<li><a href="javascript:void(0);">Mobile Apps</a></li>
								<li><a href="javascript:void(0);">Android Apps</a></li>
								<li><a href="javascript:void(0);">iPhone Apps</a></li>
								<li><a href="javascript:void(0);">Software Architecture</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="footer-widget footer-menu">
							<h2 class="footer-title">Get Contact</h2>
							<ul class="info-contact">
								<li>Phone: (406) 555-0120</li>
								<li>E-mail: info@example.com</li>
							</ul>
							<h2 class="footer-title mb-0">Newsletter</h2>
							<div class="banner-content aos aos-init aos-animate" data-aos="fade-up">
								<form class="form" name="store" action="project">
									<div class="form-inner mb-0">
										<div class="input-group">
											<input type="email" class="form-control" placeholder="Enter Your Email here..">
											<button class="btn btn-primary sub-btn" type="submit">Subscribe</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Footer Top -->
		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<!-- Copyright -->
			<div class="copyright">
				<div class="row">
					<div class="col-md-12">
						<div class="copyright-text text-center">
							<p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> &copy; KofeJob. All right reserved. </p>
						</div>
					</div>
				</div>
			</div>
			<!-- /Copyright -->	
		</div>
		<!-- /Footer Bottom -->				
	</footer>
	<!-- /Footer -->

	@endif	
	@if(Route::is(['index-three']))
	<!-- Footer -->	
	<footer class="footer footer-three">
			
		<!-- Footer Top Nav -->
		<div class="footer-top-blk">
			<div class="container">
				<div class="footer-social-group">
					<div class="row">
						<div class="col-md-6 col-lg-6 ">
							<ul class="nav footer-bottom-nav p-0 mb-0">
								<li><a href="{{url('chats')}}">Chat</a></li>
								<li><a href="{{url('faq')}}">Faq</a></li>
								<li><a href="{{url('review')}}">Reviews</a></li>
								<li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
								<li><a href="{{url('term-condition')}}">Terms of use</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-6">
							<div class="social-icon d-flex">
								<span>Follow us on : </span>
								<ul>
									<li><a href="javascript:void(0);" class="icon" target="_blank"><i class="fab fa-facebook-f"></i> </a></li>
									<li><a href="javascript:void(0);" class="icon" target="_blank"><i class="fab fa-linkedin-in"></i> </a></li>
									<li><a href="javascript:void(0);" class="icon" target="_blank"><i class="fab fa-twitter"></i> </a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
		<!-- /Footer Top Nav -->	
		<div class="footer-top ">
			<div class="container">

				<div class="row">
					<div class="col-lg-2 col-md-4">
						<div class="footer-widget footer-menu">
							<h2 class="footer-title">Useful Links</h2>
							<ul>
								<li><a href="{{url('about')}}">About Us</a></li>
								<li><a href="{{url('blog-list')}}">Blog</a></li>
								<li><a href="{{url('login')}}">Login</a></li>
								<li><a href="{{url('register')}}">Register</a></li>
								<li><a href="{{url('forgot-password')}}">Forgot Password</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="footer-widget footer-menu">
							<h2 class="footer-title">Help & Support</h2>
							<ul>
								<li><a href="javascript:void(0);">Browse Candidates</a></li>
								<li><a href="javascript:void(0);">Employers Dashboard</a></li>
								<li><a href="javascript:void(0);">Job Packages</a></li>
								<li><a href="javascript:void(0);">Jobs Featured</a></li>
								<li><a href="javascript:void(0);">Post A Job</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="footer-widget footer-menu">
							<h2 class="footer-title">Other Links</h2>
							<ul>
								<li><a href="{{url('freelancer-dashboard')}}">Freelancers</a></li>
								<li><a href="{{url('freelancer-portfolio')}}">Freelancer Details</a></li>
								<li><a href="{{url('project')}}">Project</a></li>
								<li><a href="{{url('project-details')}}">Project Details</a></li>
								<li><a href="{{url('post-project')}}">Post Project</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="footer-widget footer-menu">
							<h2 class="footer-title">Categories</h2>
							<ul>
								<li><a href="{{url('project')}}">Website Design</a></li>
								<li><a href="{{url('project')}}">Mobile Apps</a></li>
								<li><a href="{{url('project')}}">Android Apps</a></li>
								<li><a href="{{url('project')}}">iPhone Apps</a></li>
								<li><a href="{{url('project')}}">Software Architecture</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="footer-widget footer-menu">
							<div class="applicate-mobile-blk">
								<h6>Mobile Application</h6>
								<p>We help our customers harness the power of AI to make smarter decisions</p>
							</div>
							<div class="row g-2">
								<div class="col-lg-4 col-md-6 col-6">
									<a href="javascript:void(0);"><img class="img-fluid" src="{{URL::asset('/assets/img/app-store.svg')}}" alt="app-store"></a>
								</div>
								<div class="col-lg-4 col-md-6 col-6">
									<a href="javascript:void(0);"><img class="img-fluid" src="{{URL::asset('/assets/img/google-play.svg')}}" alt="google-play"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Footer Top -->
		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<!-- Copyright -->
			<div class="copyright">
				<div class="row">
					<div class="col-md-12 col-lg-12 ">
						<div class="copyright-text text-center">
							<p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> © KofeJob. All right reserved.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- /Copyright -->		
		</div>
		<!-- /Footer Bottom -->				
	</footer>
	<!-- /Footer -->
	@endif
	@if(Route::is(['index-four']))
	<!-- Footer -->	
	<footer class="footer footer-four">
		<div class="footer-top ">
			<div class="container">

				<div class="row row-gap">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<div class="subscribe-four">
									<div class="banner-content">
										<form class="form" name="store" action="project">
											<div class="form-inner">
												<div class="input-group">
													<input type="email" class="form-control" placeholder="Your Email address.....">
													<button class="btn btn-primary sub-btn" type="submit">Send mail</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">Useful Links</h2>
									<ul>
										<li><a href="{{url('about')}}">About Us</a></li>
										<li><a href="{{url('blog-list')}}">Blog</a></li>
										<li><a href="{{url('login')}}">Login</a></li>
										<li><a href="{{url('register')}}">Register</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">Help & Support</h2>
									<ul>
										<li><a href="javascript:void(0);">Browse Candidates</a></li>
										<li><a href="javascript:void(0);">Employers Dashboard</a></li>
										<li><a href="javascript:void(0);">Job Packages</a></li>
										<li><a href="javascript:void(0);">Jobs Featured</a></li>
										<li><a href="javascript:void(0);">Post A Job</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">Catgeories</h2>
									<ul>
										<li><a href="{{url('project')}}">Website Design</a></li>
										<li><a href="{{url('project')}}">Mobile Apps</a></li>
										<li><a href="{{url('project')}}">Android Apps</a></li>
										<li><a href="{{url('project')}}">iPhone Apps</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<div class="footer-widget footer-menu play-app">
									<div class="row">
										<div class="col-lg-4 col-md-4">
											<div class="free-customer">
												<p>Toll Free Customer Care</p>
												<h6>+91 26447 99875</h6>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="free-customer">
												<p>Customization Email</p>
												<h6>custom@example.com</h6>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="free-customer">
												<p>Need live support?</p>
												<h6>info@example.com</h6>
											</div>
										</div>
									</div>
									<div class="applicate-mobile-blk">
										<h6>Mobile Application</h6>
										<p>Download our App and get the latest Breaking News Alerts and latest headlines and daily articles near you.</p>
									</div>
									<div class="row g-2">
										<div class="col-lg-4">
											<a href="javascript:void(0);"><img class="img-fluid" src="{{URL::asset('/assets/img/app-store.svg')}}" alt="app-store"></a>
										</div>
										<div class="col-lg-4">
											<a href="javascript:void(0);"><img class="img-fluid" src="{{URL::asset('/assets/img/google-play.svg')}}" alt="google-play"></a>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Footer Top -->
		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
			
				<!-- Copyright -->
				<div class="copyright">
					<div class="row">
						<div class="col-md-12 ">
							<div class="copyright-text text-center">
								<p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> © KofeJob. All right reserved.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- /Copyright -->						
			</div>
		</div>
		<!-- /Footer Bottom -->				
	</footer>
	<!-- /Footer -->
	@endif
	@if(Route::is(['index-five']))
	<!-- Footer -->	
	<footer class="footer footer-five">
			
				
		<!-- /Footer Top Nav -->	
		<div class="footer-top ">
			<div class="container">

				<div class="row">
					<div class="col-lg-2 col-md-4">
						<div class="footer-widget footer-menu">
							<h2 class="footer-title">Useful Links</h2>
							<ul>
								<li><a href="{{url('about')}}">About Us</a></li>
								<li><a href="{{url('blog-list')}}">Blog</a></li>
								<li><a href="{{url('login')}}">Login</a></li>
								<li><a href="{{url('register')}}">Register</a></li>
								<li><a href="{{url('forgot-password')}}">Forgot Password</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="footer-widget footer-menu">
							<h2 class="footer-title">Help & Support</h2>
							<ul>
								<li><a href="javascript:void(0);">Browse Candidates</a></li>
								<li><a href="javascript:void(0);">Employers Dashboard</a></li>
								<li><a href="javascript:void(0);">Job Packages</a></li>
								<li><a href="javascript:void(0);">Jobs Featured</a></li>
								<li><a href="javascript:void(0);">Post A Job</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="footer-widget footer-menu">
							<h2 class="footer-title">Other Links</h2>
							<ul>
								<li><a href="{{url('freelancer-dashboard')}}">Freelancers</a></li>
								<li><a href="{{url('freelancer-portfolio')}}">Freelancer Details</a></li>
								<li><a href="{{url('project')}}">Project</a></li>
								<li><a href="{{url('project-details')}}">Project Details</a></li>
								<li><a href="{{url('post-project')}}">Post Project</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="footer-widget footer-menu">
							<h2 class="footer-title">Featured Catgeories</h2>
							<ul>
								<li><a href="{{url('project')}}">Illustration</a></li>
								<li><a href="{{url('project')}}">Link Building</a></li>
								<li><a href="{{url('project')}}">Python Dev</a></li>
								<li><a href="{{url('project')}}">Angular Dev</a></li>
								<li><a href="{{url('project')}}">Node JS</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="footer-widget footer-menu">
							<h2 class="footer-title">Subscribe</h2>
							<div class="banner-content aos aos-init aos-animate" data-aos="fade-up">
								<form class="form" name="store" action="project">
									<div class="form-inner">
										<div class="input-group">
											<input type="email" class="form-control" placeholder="Your Email address.....">
											<button class="btn btn-primary sub-btn" type="submit"><i class="fas fa-long-arrow-alt-right long-arrow"></i></button>
										</div>
									</div>
								</form>
							</div>
							<div class="applicate-mobile-blk">
								<h6 class="mb-3">Mobile Application</h6>								
							</div>
							<div class="row g-2">
								<div class="col-lg-4">
									<a href="javascript:void(0);"><img class="img-fluid" src="{{URL::asset('/assets/img/app-store.svg')}}" alt="app-store"></a>
								</div>
								<div class="col-lg-4">
									<a href="javascript:void(0);"><img class="img-fluid" src="{{URL::asset('/assets/img/google-play.svg')}}" alt="google-play"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Footer Top -->
		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
			
				<!-- Copyright -->
				<div class="copyright">
					<div class="row">
						<div class="col-md-12 col-lg-12 ">
							<div class="footer-bottom-content">
								<div class="copyright-text">
									<p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> © KofeJob. All right reserved.</p>
								</div>
								<ul>
									<li><a href="javascript:void(0);" class="icon" target="_blank"><i class="fab fa-facebook-f"></i> </a></li>
									<li><a href="javascript:void(0);" class="icon" target="_blank"><i class="fab fa-linkedin-in"></i> </a></li>
									<li><a href="javascript:void(0);" class="icon" target="_blank"><i class="fab fa-twitter"></i> </a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /Copyright -->						
			</div>
		</div>
		<!-- /Footer Bottom -->				
	</footer>
	<!-- /Footer -->
	@endif
