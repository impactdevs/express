        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <title>{{ env('APP_NAME') }}</title>

        <!-- Favicons -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/img/favicon.png') }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">

        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome/css/all.min.css') }}">
        <!-- Feather CSS -->
        <link rel="stylesheet" href="{{ URL::asset('/assets/plugins/feather/feather.css') }}">
        @if (Route::is(['chats', 'freelancer-chats']))
            <!-- Swiper CSS -->
            <link rel="stylesheet" href="{{ URL::asset('/assets/plugins/swiper/swiper.min.css') }}">

            <!-- Boxicons CSS -->
            <link rel="stylesheet" href="{{ URL::asset('/assets/plugins/boxicons/css/boxicons.min.css') }}">
        @endif
        @if (Route::is([
                'chats',
                'freelancer-chats',
                'company-gallery',
                'company-project',
                'company-review',
                'onboard-screen',
                'onboard-screen-employer',
            ]))
            <!-- FancyBox CSS -->
            <link rel="stylesheet" href="{{ URL::asset('/assets/plugins/fancybox/jquery.fancybox.min.css') }}">
        @endif

        <!-- Bootstrap Tag CSS -->
        <link rel="stylesheet" href="{{ url('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}">

        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{ url('assets/css/bootstrap-datetimepicker.min.css') }}">
        @if (Route::is(['about', 'index-two', 'index-three', 'index-four', 'index-five', 'pagee']))
            <!-- Owl Carousel CSS -->
            <link rel="stylesheet" href="{{ url('assets/plugins/owlcarousel/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ url('assets/plugins/owlcarousel/owl.theme.default.min.css') }}">
        @endif
        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ url('assets/plugins/select2/css/select2.min.css') }}">

        <!-- Datatables CSS -->
        <link rel="stylesheet" href="{{ url('assets/plugins/datatables/datatables.min.css') }}">

        <!-- Summernote CSS -->
        <link rel="stylesheet" href="{{ url('assets/plugins/summernote/dist/summernote-lite.css') }}">
        @if (Route::is(['about', 'index-two', 'index-three', 'index-four', 'index-five', 'pagee']))
            <!-- Aos CSS -->
            <link rel="stylesheet" href="{{ url('assets/plugins/aos/aos.css') }}">
        @endif
        @if (Route::is(['chats', 'freelancer-chats']))
            <link rel="stylesheet" href="{{ URL::asset('/assets/css/chat.css') }}">
        @endif
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
