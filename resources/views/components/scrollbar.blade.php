@if (!Route::is(['index-two', 'index-four', 'index-five']))
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="ti-angle-up"><img src="{{ URL::asset('/assets/img/icon/top-icon.svg') }}" class="img-fluid"
                alt="Img"></span>
    </button>
@endif

@if (Route::is(['index-two', 'index-four', 'index-five']))
    <button class="scroll-top scroll-top-next scroll-to-target" data-target="html">
        <span class="ti-angle-up"><i class="feather-arrow-up"></i></span>
    </button>
@endif
