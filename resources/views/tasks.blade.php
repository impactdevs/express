<?php $page="milestones";?>
@extends('layout.mainlayout')
@section('content')
			<!-- Page Content -->
			<div class="content">
				<div class="container">
					<div class="row">

						<div class="col-xl-9 col-lg-8">
							<div class="page-title">
								<h3>Manage Projects</h3>
							</div>
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="{{url('view-project-detail')}}">Overview & Discussions</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('milestones')}}">Milestones</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="{{url('tasks')}}">Tasks</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('files')}}">Files</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('project-payment')}}">Payments</a>
									</li>
								</ul>
							</nav>

							<!-- project list -->
							<div class="my-projects-view">
								<div class="row">
									<div class="col-lg-12">
										<div class="title-head d-flex justify-content-between align-items-center mb-4">
											<h4 class="mb-0">Task</h4>
											<a href="#add-milestone" class="login-btn btn-primary" data-bs-toggle="modal">Add Task</a>
										</div>

										<div class="table-responsive table-box manage-projects-table">
											<table class="table table-center table-hover datatable no-sort">
												<thead class="thead-pink">
													<tr>
														<th>Task Name</th>
														<th>Milestones</th>
														<th>Description</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Website Designer Required </td>
														<td>Research</td>
														<td>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...
														</td>
														<td><span class="badge badge-pill bg-success-light">Completed</span></td>
														<td>
															<div class="action-table-data">
																<div class="edit-delete-action m-0">
																	<a href="#edit-milestone" class="me-2" data-bs-toggle="modal"><i class="feather-edit-2"></i></a>
																	<a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>Create desktop applications </td>
														<td>Research</td>
														<td>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...
														</td>
														<td><span class="badge badge-pill bg-warning-light">Pending</span></td>
														<td>
															<div class="action-table-data">
																<div class="edit-delete-action m-0">
																	<a href="#edit-milestone" class="me-2" data-bs-toggle="modal"><i class="feather-edit-2"></i></a>
																	<a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>PHP, Javascript Projects  </td>
														<td>Research</td>
														<td>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...
														</td>
														<td><span class="badge badge-pill bg-success-light">Completed</span></td>
														<td>
															<div class="action-table-data">
																<div class="edit-delete-action m-0">
																	<a href="#edit-milestone" class="me-2" data-bs-toggle="modal"><i class="feather-edit-2"></i></a>
																	<a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>Website Designer Required  </td>
														<td>Research</td>
														<td>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...
														</td>
														<td><span class="badge badge-pill bg-warning-light">Pending</span></td>
														<td>
															<div class="action-table-data">
																<div class="edit-delete-action m-0">
																	<a href="#edit-milestone" class="me-2" data-bs-toggle="modal"><i class="feather-edit-2"></i></a>
																	<a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>Swift / SwiftUI Developer </td>
														<td>Research</td>
														<td>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...
														</td>
														<td><span class="badge badge-pill bg-success-light">Completed</span></td>
														<td>
															<div class="action-table-data">
																<div class="edit-delete-action m-0">
																	<a href="#edit-milestone" class="me-2" data-bs-toggle="modal"><i class="feather-edit-2"></i></a>
																	<a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>Full-stack Developer  </td>
														<td>Research</td>
														<td>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...
														</td>
														<td><span class="badge badge-pill bg-success-light">Completed</span></td>
														<td>
															<div class="action-table-data">
																<div class="edit-delete-action m-0">
																	<a href="#edit-milestone" class="me-2" data-bs-toggle="modal"><i class="feather-edit-2"></i></a>
																	<a href="javascript:void(0);"><i class="feather-trash-2"></i></a>
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
