<!DOCTYPE html>
<html lang="en">
@include('theme.web.head')
@yield('css')
<body>

	<div id="preloader">
        <div class="preloader">
            <div class="spinner-block">
                <h1 class="spinner spinner-3 mb-0">.</h1>
            </div>
        </div>
    </div>
	

	@include('theme.web.header')

	{{ $slot }}

	<br>
	<br>

	@include('theme.web.footer')

	@include('theme.web.modal')

	<a class="scroll-to-top" href="#">
        <i class="lnr lnr-arrow-up"></i>
    </a>

	@include('theme.web.js')
	@yield('custom_js')


</body>
</html>


{{-- <!DOCTYPE html>
<html lang="en">
@include('theme.web.head')
<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		@include('theme.web.header')
        <!-- #header end -->
		

		<!-- Content
		============================================= -->
		{{ $slot }}
        <!-- #content end -->

		<!-- Footer
		============================================= -->
		@include('theme.web.footer')
        <!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	@include('theme.web.js')
	@yield('custom_js')

</html> --}}