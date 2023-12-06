{{-- <!DOCTYPE html>
<html dir="ltr" lang="en-US">
@include('theme.auth.head')
<body class="nk-body body-wider bg-light-alt">
	<div id="loader-wrapper">
        <div id="loader"></div>
    </div>
	<div id="wrapper" class="clearfix">
        @if (request()->is('home'))
        @endif
		{{ $slot }}
	</div>
	<div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog" aria-labelledby="reviewFormModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content" id="contentReviewModal">
				
			</div>
		</div>
	</div>
	<div id="gotoTop" class="icon-angle-up"></div>
	@include('theme.auth.js')
	@yield('custom_js')
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

	@include('theme.auth.head')

<body>
	
	<div class="auth-page-wrapper pt-5">
		<!-- auth page bg -->
		<div class="auth-one-bg-position auth-one-bg"  id="auth-particles">
			<div class="bg-overlay"></div>
			
			<div class="shape">
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
					<path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
				</svg>
			</div>
		</div>

		<!-- auth page content -->
		{{ $slot }}
		<!-- end auth page content -->

		@include('theme.auth.footer')

	</div>

	@include('theme.auth.js')
	@yield('custom_js')
</body>

</html>