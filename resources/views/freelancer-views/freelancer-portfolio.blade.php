<?php $page="freelancer-portfolio";?>
@extends('layout.mainlayout')
@section('content')


		<!-- Page Content -->
		<div class="content content-page portfolio-page">
			<div class="container">
				<div class="row">
                    @include('layout.partials.nav-freelancer')
					<div class="col-xl-9 col-lg-8">
						<div class="dashboard-sec freelance-favourites">
							<div class="page-title portfolio-title">
								<h3 class="mb-0">Portfolio</h3>
								<a class="btn btn-primary title-btn" data-bs-toggle="modal" href="#portfolio"><i class="feather-plus"></i> Add Portfolio</a>
							</div>
							<div class="pro-content">
								<div class="row row-gap">
									<div class="col-sm-6 col-lg-4">
										<div class="project-widget">
											<div class="portfolio-img">
												<img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/project-1.jpg')}}">
												<div class="portfolio-live">
												<div class="portfolio-content">
													<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="feather-edit-2"></i></a>
													<a href="#delete_modal" data-bs-toggle="modal" class="port-icon"><i class="feather-trash-2"></i></a>
												</div>
												</div>
											</div>
											<div class="portfolio-detail">
												<h3 class="pro-name">Razor Website Design</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-lg-4">
										<div class="project-widget">
											<div class="portfolio-img">
												<img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/project-2.jpg')}}">
												<div class="portfolio-live">
												<div class="portfolio-content">
													<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="feather-edit-2"></i></a>
													<a href="#delete_modal" data-bs-toggle="modal" class="port-icon"><i class="feather-trash-2"></i></a>
												</div>
												</div>
											</div>
											<div class="portfolio-detail">
												<h3 class="pro-name">Transport Website</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-lg-4">
										<div class="project-widget">
											<div class="portfolio-img">
												<img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/project-3.jpg')}}">
												<div class="portfolio-live">
												<div class="portfolio-content">
													<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="feather-edit-2"></i></a>
													<a href="#delete_modal" data-bs-toggle="modal" class="port-icon"><i class="feather-trash-2"></i></a>
												</div>
												</div>
											</div>
											<div class="portfolio-detail">
												<h3 class="pro-name">Wordpress Website</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-lg-4">
										<div class="project-widget">
											<div class="portfolio-img">
												<img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/project-4.jpg')}}">
												<div class="portfolio-live">
												<div class="portfolio-content">
													<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="feather-edit-2"></i></a>
													<a href="#delete_modal" data-bs-toggle="modal" class="port-icon"><i class="feather-trash-2"></i></a>
												</div>
												</div>
											</div>
											<div class="portfolio-detail">
												<h3 class="pro-name">Mobile App</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-lg-4">
										<div class="project-widget">
											<div class="portfolio-img">
												<img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/project-5.jpg')}}">
												<div class="portfolio-live">
												<div class="portfolio-content">
													<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="feather-edit-2"></i></a>
													<a href="#delete_modal" data-bs-toggle="modal" class="port-icon"><i class="feather-trash-2"></i></a>
												</div>
												</div>
											</div>
											<div class="portfolio-detail">
												<h3 class="pro-name">Healthcare Website</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-lg-4">
										<div class="project-widget">
											<div class="portfolio-img">
												<img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/project-6.jpg')}}">
												<div class="portfolio-live">
												<div class="portfolio-content">
													<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="feather-edit-2"></i></a>
													<a href="#delete_modal" data-bs-toggle="modal" class="port-icon"><i class="feather-trash-2"></i></a>
												</div>
												</div>
											</div>
											<div class="portfolio-detail">
												<h3 class="pro-name">Injury Website</h3>
											</div>
										</div>
									</div>
								</div>
							</div>

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
						<!-- project list -->


					</div>
				</div>
			</div>
		</div>

		<!-- /Page Content -->


@component('components.modal-popup')
@endcomponent
@endsection
