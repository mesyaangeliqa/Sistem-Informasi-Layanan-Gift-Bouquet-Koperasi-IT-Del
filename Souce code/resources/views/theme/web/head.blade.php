<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="noindex, follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('flosun/css/vendor/bootstrap.min.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('flosun/css/vendor/font.awesome.min.css') }}">
    <!-- Linear Icons CSS -->
    <link rel="stylesheet" href="{{ asset('flosun/css/vendor/linearicons.min.css') }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('flosun/css/plugins/swiper-bundle.min.css') }}">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('flosun/css/plugins/animate.min.css') }}">
    <!-- Jquery ui CSS -->
    <link rel="stylesheet" href="{{ asset('flosun/css/plugins/jquery-ui.min.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('flosun/css/plugins/nice-select.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('flosun/css/plugins/magnific-popup.css') }}">
	  <link href="{{ asset('css/confirm.css') }}"  rel="stylesheet" type="text/css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('flosun/css/style.css') }}">
	<style>
    
		.breadcrumbs-area {
        padding: auto;
        background: #f6f6f6 url("{{ asset('img/gif/gif1.gif') }}") no-repeat scroll center center/cover;
    }
	.slide-4 {
		background-image: url("{{ asset('img/gif/gif2.gif') }}");
		background-color: rgba(215, 177, 190, 0.9);
	}
	.slide-3 {
		background-image: url("{{ asset('img/gif/gif3.gif') }}");
		background-color: rgba(215, 177, 190, 0.9);
	}
	</style>
  <style>
      .rating {
  display: inline-block !important;
  position: relative !important;
  height: 25px !important;
  line-height: 25px !important;
  font-size: 25px !important;
  }

.rating label {
  position: absolute !important;
  top: 0 !important;
  left: 0 !important;
  height: 100% !important;
  cursor: pointer !important;
}

.rating label:last-child {
  position: static !important;
}

.rating label:nth-child(1) {
  z-index: 5 !important;
}

.rating label:nth-child(2) {
  z-index: 4 !important;
}

.rating label:nth-child(3) {
  z-index: 3 !important;
}

.rating label:nth-child(4) {
  z-index: 2 !important;
}

.rating label:nth-child(5) {
  z-index: 1 !important;
}

.rating label input {
  position: absolute !important;
  top: 0 !important;
  left: 0 !important;
  opacity: 0 !important;
}

.rating label .icon {
  float: left !important;
  color: transparent !important;
}

.rating label:last-child .icon {
  color: #000 !important;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: rgb(221, 221, 79) !important;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: #000 !important;
  text-shadow: 0 0 5px #09f !important;
}



    </style>
	
	<title>{{config('app.name') . ': ' .$title ?? config('app.name')}}</title>
</head>

