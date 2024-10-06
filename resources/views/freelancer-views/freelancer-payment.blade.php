<?php $page="freelancer-withdraw-money";?>
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
							<a class="nav-link" href="{{url('freelancer-files')}}">Files</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="{{url('freelancer-payment')}}">Payments</a>
						</li>
					</ul>
				</nav>

				<!-- project list -->
				<div class="my-projects-view">
					<div class="row">
						<div class="col-lg-12">
							<div class="title-head d-flex justify-content-between align-items-center mb-4">
								<h4 class="mb-0">Payments</h4>

							</div>

							<div class="table-responsive table-box manage-projects-table">
								<table class="table table-center table-hover datatable no-sort">
									<thead class="thead-pink">
										<tr>
											<th>Name</th>
											<th>Type of  Payment</th>
											<th>Budget</th>
											<th>Status</th>
											<th>Date Paid</th>
											<th>Invoice</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Research </td>
											<td>
												Milestone
											</td>
											<td>$2222</td>
											<td><span class="badge badge-pill bg-success-light">Completed</span></td>
											<td>29 Sep 2023</td>
											<td>
												<div class="action-table-data">
													<div class="edit-delete-action m-0">
														<a href="#edit-milestone" class="download-icon" data-bs-toggle="modal"><i class="feather-download"></i></a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>Design </td>
											<td>
												Milestone
											</td>
											<td>$5762</td>
											<td><span class="badge badge-pill bg-success-light">Completed</span></td>
											<td>29 Sep 2023</td>
											<td>
												<div class="action-table-data">
													<div class="edit-delete-action m-0">
														<a href="#edit-milestone" class="download-icon" data-bs-toggle="modal"><i class="feather-download"></i></a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>Development	</td>
											<td>
												Milestone
											</td>
											<td>$4879</td>
											<td><span class="badge badge-pill bg-success-light">Completed</span></td>
											<td>29 Sep 2023</td>
											<td>
												<div class="action-table-data">
													<div class="edit-delete-action m-0">
														<a href="#edit-milestone" class="download-icon" data-bs-toggle="modal"><i class="feather-download"></i></a>
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
@component('components.modal-popup')

@endcomponent

@endsection