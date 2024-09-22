<?php $page="view-estimate";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
			
					<div class="row justify-content-center">
						<div class="col-xl-8">
							<div class="card">
								<div class="card-body">
									<div class="invoice-item">
										<div class="row">
											<div class="col-md-6">
												<div class="invoice-logo">
													<img src="{{ URL::asset('/assets_admin/img/logo.png')}}" alt="logo">
												</div>
											</div>
											<div class="col-md-6">
												<p class="invoice-details">
													<strong>Order:</strong> #00124 <br>
													<strong>Issued:</strong> 20/07/2019
												</p>
											</div>
										</div>
									</div>
									
									<!-- Invoice Item -->
									<div class="invoice-item">
										<div class="row">
											<div class="col-md-6">
												<div class="invoice-info">
													<strong class="customer-text">Invoice From</strong>
													<p class="invoice-details invoice-details-two">
														Darren Elder <br>
														806  Twin Willow Lane, Old Forge,<br>
														Newyork, USA <br>
													</p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="invoice-info invoice-info2">
													<strong class="customer-text">Invoice To</strong>
													<p class="invoice-details">
														Walter Roberson <br>
														299 Star Trek Drive, Panama City, <br>
														Florida, 32405, USA <br>
													</p>
												</div>
											</div>
										</div>
									</div>
									<!-- /Invoice Item -->
									
									<!-- Invoice Item -->
									<div class="invoice-item">
										<div class="row">
											<div class="col-md-12">
												<div class="invoice-info">
													<strong class="customer-text">Payment Method</strong>
													<p class="invoice-details invoice-details-two">
														Debit Card <br>
														XXXXXXXXXXXX-2541 <br>
														HDFC Bank<br>
													</p>
												</div>
											</div>
										</div>
									</div>
									<!-- /Invoice Item -->
									
									<!-- Invoice Item -->
									<div class="invoice-item invoice-table-wrap">
										<div class="row">
											<div class="col-md-12">
												<div class="table-responsive">
													<table class="invoice-table table table-bordered">
														<thead>
															<tr>
																<th>Description</th>
																<th class="text-center">Quantity</th>
																<th class="text-center">VAT</th>
																<th class="text-end">Total</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Website Designer Required For Directory Theme</td>
																<td class="text-center">1</td>
																<td class="text-center">$0</td>
																<td class="text-end">$50</td>
															</tr>
															<tr>
																<td>Lorem Ipsum is therefore always free</td>
																<td class="text-center">1</td>
																<td class="text-center">$0</td>
																<td class="text-end">$300</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="col-md-6 col-xl-4 ml-auto">
												<div class="table-responsive">
													<table class="invoice-table-two table">
														<tbody>
														<tr>
															<th>Subtotal:</th>
															<td><span>$400</span></td>
														</tr>
														<tr>
															<th>Discount:</th>
															<td><span>-10%</span></td>
														</tr>
														<tr>
															<th>Total Amount:</th>
															<td><span>$350</span></td>
														</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<!-- /Invoice Item -->
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Wrapper -->
		
		</div>
	<!-- /Main Wrapper -->
@endsection