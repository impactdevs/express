<?php $page="faq";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')
	@slot('li_1') FAQ @endslot                
    @slot('li_2') Home @endslot
    @slot('li_3') Faq @endslot
@endcomponent	

			
			<!-- Page Content -->
			<div class="content">
				<div class="container">
					
					<div class="row">
						<div class="col-md-12">
							
							<!-- FAQ Content -->
							<div class="faq p-0">
							<div id="accordion">
							
							<!-- Basic FAQ Content -->
							<div class="basics-faq">
								<h4>Basics</h4>
								
								<!-- FAQ Content -->
								<div class="card">
									<a class="card-link" data-bs-toggle="collapse" href="#collapseOne">
										<div class="card-header">																		  
											Do you have any built-in caching? <i class="fa fa-angle-right"></i>
										</div>
									</a>								 
									<div id="collapseOne" class="collapse" data-parent="#accordion">
										<div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>
								<!-- /FAQ Content -->
								
								<!-- FAQ Content -->
								<div class="card">
									<a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseTwo">	
										<div class="card-header">																	
											Can I add/upgrade my plan at any time?	<i class="fa fa-angle-right"></i>										
										</div>
									</a>
								  <div id="collapseTwo" class="collapse" data-parent="#accordion">
									<div class="card-body">
									  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>
								  </div>
								</div>
								<!-- /FAQ Content -->
								
								<!-- FAQ Content -->
								<div class="card">
									<a class="collapsed card-link" data-bs-toggle="collapse" href="#collapseThree">		
										<div class="card-header">
											How do I change my password? <i class="fa fa-angle-right"></i>
										</div>
									</a>
									
									<div id="collapseThree" class="collapse" data-parent="#accordion">
										<div class="card-body">
										  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
										</div>
									</div>
								</div>
								<!-- /FAQ Content -->
								
								<!-- FAQ Content -->
								<div class="card">									
									<a class="collapsed card-link" data-bs-toggle="collapse" href="#collapsefour">	
										<div class="card-header">
											Do you have any built-in caching? <i class="fa fa-angle-right"></i>
										</div>
									</a>
									<div id="collapsefour" class="collapse" data-parent="#accordion">
										<div class="card-body">
										  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
										</div>
									</div>
								</div>
								<!-- /FAQ Content -->
							</div>
							<!-- /Basic FAQ Content -->
							
							<!-- Account FAQ Content -->
							<div class="basics-faq">							
								<h4>Account</h4>
							
								<div class="card">
									<a class="card-link" data-bs-toggle="collapse" href="#accOne">
										<div class="card-header">																		  
											Do you have any built-in caching? <i class="fa fa-angle-right"></i>
										</div>
									</a>								 
									<div id="accOne" class="collapse" data-parent="#accordion">
										<div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>
								
								<div class="card">
									<a class="collapsed card-link" data-bs-toggle="collapse" href="#accTwo">	
										<div class="card-header">																	
											Can I add/upgrade my plan at any time?	<i class="fa fa-angle-right"></i>										
										</div>
									</a>
								  <div id="accTwo" class="collapse" data-parent="#accordion">
									<div class="card-body">
									  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>
								  </div>
								</div>
								
								<div class="card">
									<a class="collapsed card-link" data-bs-toggle="collapse" href="#accThree">		
										<div class="card-header">
											How do I change my password? <i class="fa fa-angle-right"></i>
										</div>
									</a>									
									<div id="accThree" class="collapse" data-parent="#accordion">
										<div class="card-body">
										  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
										</div>
									</div>
								</div>
							</div>
							<!-- /Account FAQ Content -->
							
							<!-- Privacy FAQ Content -->							
							<div class="basics-faq mb-4">
								<h4>Privacy</h4>
							
								<div class="card">
									<a class="card-link" data-bs-toggle="collapse" href="#PrivacyOne">
										<div class="card-header">																		  
											Do you have any built-in caching? <i class="fa fa-angle-right"></i>
										</div>
									</a>								 
									<div id="PrivacyOne" class="collapse" data-parent="#accordion">
										<div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>
								
								<div class="card">
									<a class="collapsed card-link" data-bs-toggle="collapse" href="#PrivacyTwo">	
										<div class="card-header">																	
											Can I add/upgrade my plan at any time?	<i class="fa fa-angle-right"></i>										
										</div>
									</a>
								  <div id="PrivacyTwo" class="collapse" data-parent="#accordion">
									<div class="card-body">
									  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>
								  </div>
								</div>
								
								<div class="card">
									<a class="collapsed card-link" data-bs-toggle="collapse" href="#PrivacyThree">		
										<div class="card-header">
											How do I change my password? <i class="fa fa-angle-right"></i>
										</div>
									</a>									
									<div id="PrivacyThree" class="collapse" data-parent="#accordion">
										<div class="card-body">
										  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
										</div>
									</div>
								</div>
							</div>
							<!-- /Privacy FAQ Content -->
							
							</div>
							</div>
							<!-- /FAQ Content -->
								
						</div>
					</div>

				</div>

			</div>					
			<!-- /Page Content -->

@endsection