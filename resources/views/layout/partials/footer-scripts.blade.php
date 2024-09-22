        <!-- jQuery -->
        <script src="{{ URL::asset('/assets/js/jquery-3.7.1.min.js') }}"></script>

        <!-- Bootstrap Bundle JS -->
        <script src="{{ URL::asset('/assets/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Select2 JS -->
        <script src="{{ URL::asset('/assets/plugins/select2/js/select2.min.js') }}"></script>

        <!-- Datatables JS -->
        <script src="{{ URL::asset('/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('/assets/plugins/datatables/datatables.min.js') }}"></script>

        @if (Route::is(['about', 'index-two', 'index-three', 'index-four', 'index-five', 'pagee']))
            <!-- counterup JS -->
            <script src="{{ URL::asset('/assets/js/jquery.waypoints.js') }}"></script>
            <script src="{{ URL::asset('/assets/js/jquery.counterup.min.js') }}"></script>
        @endif

        <!-- Chart JS -->
        @if (Route::is(['dashboard', 'freelancer-dashboard']))
            <script src="{{ URL::asset('/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
            <script src="{{ URL::asset('/assets/plugins/apexchart/chart-data.js') }}"></script>
        @endif

        @if (Route::is(['chats', 'freelancer-chats']))
            <!-- Swiper JS -->
            <script src="{{ URL::asset('/assets/plugins/swiper/swiper.min.js') }}"></script>
        @endif
        @if (Route::is(['chats', 'freelancer-chats', 'user-account-details']))
            <!-- Slimscroll JS -->
            <script src="{{ URL::asset('/assets/js/jquery.slimscroll.min.js') }}"></script>
        @endif
        <!-- Sticky Sidebar JS -->
        <script src="{{ URL::asset('/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
        <script src="{{ URL::asset('/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

        @if (Route::is(['chats', 'freelancer-chats', 'company-gallery', 'company-project', 'company-review']))
            <!-- Fancybox JS -->
            <script src="{{ URL::asset('/assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
        @endif
        <!-- Datetimepicker JS -->
        <script src="{{ URL::asset('/assets/js/moment.min.js') }}"></script>
        <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js') }}"></script>

        @if (Route::is(['about', 'index-two', 'index-three', 'index-four', 'index-five', 'pagee']))
            <!-- Owl Carousel -->
            <script src="{{ URL::asset('/assets/js/owl.carousel.min.js') }}"></script>
        @endif

        <!-- Select2 JS -->
        <script src="{{ URL::asset('/assets/plugins/select2/js/select2.min.js') }}"></script>

        <!-- Range JS -->
        @if (Route::is(['project-list']))
            <script src="{{ URL::asset('/assets/js/range.js') }}"></script>
        @endif

        <!-- Slick JS -->
        <script src="{{ URL::asset('/assets/js/slick.js') }}"></script>

        <!-- Bootstrap Tagsinput JS -->
        <script src="{{ URL::asset('/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>

        <!-- Summernote JS -->
        <script src="{{ URL::asset('/assets/plugins/summernote/dist/summernote-lite.min.js') }}"></script>
        @if (Route::is(['about', 'index-two', 'index-three', 'index-four', 'index-five', 'pagee']))
            <!-- Aos -->
            <script src="{{ URL::asset('/assets/plugins/aos/aos.js') }}"></script>
        @endif
        @if (Route::is(['onboard-screen-employer', 'onboard-screen']))
            <!-- Progress JS -->
            <script src="{{ URL::asset('/assets/js/circle-progress.min.js') }}"></script>
        @endif

        <!-- Custom JS -->
        @if (Route::is(['user-account-details']))
            <script src="{{ URL::asset('/assets/js/chart.js') }}"></script>
        @endif

        <script src="{{ URL::asset('/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        @if (Route::is([
                'developer-list',
                'developer',
                'edit-project',
                'freelancer-profile-settings',
                'post-project',
                'project-list',
                'project',
                'user-account-details',
            ]))
            <script src="{{ URL::asset('/assets/js/profile-settings.js') }}"></script>
        @endif
        <script src="{{ URL::asset('/assets/js/script.js') }}"></script>
