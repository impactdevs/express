<?php $page="freelancer-project-proposals";?>
@extends('layout.mainlayout')
@section('content')

	<!-- Page Content -->
	<div class="content">
		<div class="container">
			<div class="row">
                @include('layout.partials.nav-freelancer')
				<div class="col-xl-9 col-lg-8">
					<div class="page-title">
						<h3>Manage Projects</h3>
					</div>
					<nav class="user-tabs mb-4">
						<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
							<li class="nav-item">
								<a class="nav-link" href="{{url('freelancer-view-project-detail')}}">Overview & Discussions</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('freelancer-milestones')}}">Milestones</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('freelancer-task')}}">Tasks</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="{{url('freelancer-files')}}">Files</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('freelancer-payment')}}">Payments</a>
							</li>
						</ul>
					</nav>

					<!-- project list -->
					<div class="my-projects-view">
						<div class="row">
							<div class="col-lg-12">
								<div class="title-head d-flex justify-content-between align-items-center mb-4">
									<h4 class="mb-0">Files</h4>

								</div>

								<div class="table-responsive table-box manage-projects-table">
									<table class="table table-center table-hover datatable no-sort">
										<thead class="thead-pink">
											<tr>
												<th>File Preview</th>
												<th>Title</th>
												<th>Description</th>
												<th>Type</th>
												<th>Size</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><img src="{{URL::asset('/assets/img/icon/manage-file-icon-01.svg')}}" alt="Img"> </td>
												<td>Website Designer Required </td>
												<td>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...
												</td>
												<td>Png</td>
												<td>20 KB</td>
												<td>
													<div class="action-table-data">
														<div class="edit-delete-action m-0">
															<a href="javascript:void(0);" class="download-icon"><i class="feather-download"></i></a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td><img src="{{URL::asset('/assets/img/icon/manage-file-icon-02.svg')}}" alt="Img"> </td>
												<td>Create desktop applications </td>
												<td>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...
												</td>
												<td>Jpg</td>
												<td>2 MB</td>
												<td>
													<div class="action-table-data">
														<div class="edit-delete-action m-0">
															<a href="javascript:void(0);" class="download-icon"><i class="feather-download"></i></a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td><img src="{{URL::asset('/assets/img/icon/manage-file-icon-03.svg')}}" alt="Img"> </td>
												<td>PHP, Javascript Projects  </td>
												<td>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...
												</td>
												<td>Jpg</td>
												<td>12 KB</td>
												<td>
													<div class="action-table-data">
														<div class="edit-delete-action m-0">
															<a href="javascript:void(0);" class="download-icon"><i class="feather-download"></i></a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td><img src="{{URL::asset('/assets/img/icon/manage-file-icon-04.svg')}}" alt="Img"> </td>
												<td>Website Designer Required  </td>
												<td>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...
												</td>
												<td>Png</td>
												<td>25 KB</td>
												<td>
													<div class="action-table-data">
														<div class="edit-delete-action m-0">
															<a href="javascript:void(0);" class="download-icon"><i class="feather-download"></i></a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td><img src="{{URL::asset('/assets/img/icon/manage-file-icon-05.svg')}}" alt="Img"> </td>
												<td>Swift / SwiftUI Developer </td>
												<td>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...
												</td>
												<td>Jpg</td>
												<td>50 KB</td>
												<td>
													<div class="action-table-data">
														<div class="edit-delete-action m-0">
															<a href="javascript:void(0);" class="download-icon"><i class="feather-download"></i></a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td><img src="{{URL::asset('/assets/img/icon/manage-file-icon-06.svg')}}" alt="Img"> </td>
												<td>Full-stack Developer  </td>
												<td>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...
												</td>
												<td>Png</td>
												<td>38 KB</td>
												<td>
													<div class="action-table-data">
														<div class="edit-delete-action m-0">
															<a href="javascript:void(0);" class="download-icon"><i class="feather-download"></i></a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

					</div>
					<!-- project list -->

				</div>
			</div>
		</div>
	</div>

	<!-- /Page Content -->
@endsection
