{{-- <head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Yada Ekidanta" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bundle and Base CSS -->
    <link rel="stylesheet" href="{{ asset('crypto/css/vendor.bundle.css?ver=1930') }}">
    <link rel="stylesheet" href="{{ asset('crypto/css/style.css?ver=1930') }}" id="changeTheme">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="{{ asset('crypto/css/theme.css?ver=1930') }}">
    
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/confirm.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title ============================================= -->
	
</head> --}}

<head>
        
	<meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- Layout config Js -->
    <script src="{{ asset('authtema/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('authtema/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('authtema/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('authtema/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('authtema/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/confirm.css')}}" type="text/css" />

    <title>{{config('app.name') . ': ' .$title ?? config('app.name')}}</title>
	<link rel="shortcut icon" href="{{asset('img/logo.png')}}" />
    <style>
        .auth-one-bg {
            background-image: url("{{ asset('img/12.jpeg') }}");
            background-position: center;
            background-size: cover;
        }
    </style>
</head>