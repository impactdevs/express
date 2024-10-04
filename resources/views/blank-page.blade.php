<?php $page="blank-page";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('li_1') Blank Page @endslot
    @slot('li_2') Home @endslot
	@slot('li_3') Blank Page @endslot
@endcomponent		
			<!-- Page Content -->
			<div class="content">
				<div class="container">					
					<div class="row">
						<div class="col-12">
							<h5>Blank Page</h5>
						</div>
					</div>
				</div>
			</div>					
			<!-- /Page Content -->

@endsection