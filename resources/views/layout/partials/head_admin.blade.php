		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>{{ env('APP_NAME') }}</title>
		
		<!-- Favicon -->
		  <link rel="shortcut icon" href="{{asset('assets_admin/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets_admin/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets_admin/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets_admin/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets_admin/plugins/fontawesome/css/all.min.css')}}">

		<!-- Feather CSS -->
		<link rel="stylesheet" href="{{asset('assets_admin/css/feather.css')}}">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{asset('assets_admin/plugins/select2/css/select2.min.css')}}">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="{{asset('assets_admin/plugins/datatables/datatables.min.css')}}">

		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{asset('assets_admin/css/bootstrap-datetimepicker.min.css')}}">
		@if(Route::is(['others-settings']))
		<!-- Ck Editor -->
		<link rel="stylesheet" href="{{asset('assets_admin/css/ckeditor.css')}}">
		@endif
		<link rel="stylesheet" href="{{asset('assets_admin/plugins/c3/c3.min.css')}}">
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets_admin/css/style.css')}}">