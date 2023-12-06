<!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('flosun/js/vendor/modernizr-3.7.1.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('flosun/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('flosun/js/vendor/bootstrap.bundle.min.js') }}"></script>

    <!-- Swiper Slider JS -->
    <script src="{{ asset('flosun/js/plugins/swiper-bundle.min.js') }}"></script>
    <!-- nice select JS -->
    <script src="{{ asset('flosun/js/plugins/nice-select.min.js') }}"></script>
    <!-- Ajaxchimpt js -->
    <script src="{{ asset('flosun/js/plugins/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Jquery Ui js -->
    <script src="{{ asset('flosun/js/plugins/jquery-ui.min.js') }}"></script>
    <!-- Jquery Countdown js -->
    <script src="{{ asset('flosun/js/plugins/jquery.countdown.min.js') }}"></script>
    <!-- jquery magnific popup js -->
    <script src="{{ asset('flosun/js/plugins/jquery.magnific-popup.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('flosun/js/main.js') }}"></script>
    

    <script src="{{asset('js/toastr.js')}}"></script>
    <script src="{{asset('semicolon/js/functions.js')}}"></script>
    <script src="{{asset('js/swa2.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/plugin.js')}}"></script>
    <script src="{{asset('js/routes.js')}}"></script>
    <script src="{{asset('js/confirm.js')}}"></script>
    <script src="{{asset('js/alert.js')}}"></script>
    <script src="{{asset('js/method.js')}}"></script>



    







{{-- <script src="{{ asset('canvas/js/jquery.js') }}"></script>
<script src="{{ asset('canvas/js/plugins.min.js') }}"></script>


<script src="{{ asset('canvas/js/functions.js') }}"></script>


<script src="{{ asset('canvas/include/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('canvas/include/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

<script src="{{ asset('canvas/include/rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('canvas/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('canvas/include/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('canvas/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('canvas/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('canvas/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('canvas/include/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('canvas/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>


<script src="{{asset('js/toastr.js')}}"></script>
<script src="{{asset('semicolon/js/functions.js')}}"></script>
<script src="{{asset('js/swa2.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/plugin.js')}}"></script>
<script src="{{asset('js/routes.js')}}"></script>
<script src="{{asset('js/alert.js')}}"></script>
<script src="{{asset('js/method.js')}}"></script>

@section('custom_js')
    <script>
        var tpj=jQuery;
        tpj.noConflict();
        var $ = jQuery.noConflict();
        
        tpj(document).ready(function() {
        
            var apiRevoSlider = tpj('#rev_slider_ishop').show().revolution(
            {
                sliderType:"standard",
                jsFileLocation:"include/rs-plugin/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {},
                responsiveLevels:[1200,992,768,480,320],
                gridwidth:1140,
                gridheight:500,
                lazyType:"none",
                shadow:0,
                spinner:"off",
                autoHeight:"off",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    disableFocusListener:false,
                },
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "ares",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-title-wrap">	<span class="tp-arr-titleholder"> </span> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    }
                }
            });
        
            apiRevoSlider.on("revolution.slide.onloaded",function (e) {
                SEMICOLON.slider.sliderDimensions();
            });
        
        }); //ready
    </script>
@endsection --}}