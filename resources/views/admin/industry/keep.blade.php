@extends('layout.mainlayout_admin')
@section('content')
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					@component('admin/components.breadcrumb')
						@slot('li_1') Industries @endslot
					    @slot('li_2') Home @endslot
					    @slot('li_4') Industries @endslot
					@endcomponent

					@component('admin/components.search-filter')
					@slot('li_1') Add Industry @endslot   
					@endcomponent

		
				</div>
			</div>
			<!-- /Page Wrapper -->
       </div>
	<!-- /Main Wrapper -->
@component('admin/components.modal-popup')   
@endcomponent	

@endsection
