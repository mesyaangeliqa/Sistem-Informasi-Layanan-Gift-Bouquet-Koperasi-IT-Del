<x-authLayout title="Login">
    {{-- <div class="nk-wrap">
        <main class="nk-pages nk-pages-centered">
            <div class="ath-container">
                <div class="ath-body">
                    <h5 class="ath-heading title">SIGN IN <small class="tc-default"><img src="{{ asset('img/logo.jpg') }}" srcset="images/logo-full-white2x.png 2x" alt="logo" width="300px"></small></h5>
                    <form id="login-form">
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" name="email" class="input-bordered" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" name="password" class="input-bordered" placeholder="Password">
                            </div>
                        </div>
                        <div class="forget-link fz-6">
                            Don’t have an account? <a href="{{ route('user.auth.register') }}"> <strong>Sign up here</strong></a>
                        </div>
                        <div class="forget-link fz-6">
                            Back?<a href="{{ route('home') }}"> <strong>Click Here!</strong></a>
                        </div>
                        <br>
                        <button type="button" class="btn btn-primary btn-block btn-md" id="login-button" onclick="auth('#login-button','#login-form','{{route('user.auth.login')}}','Login');">Sign In</button>
                    </form>
                </div>
            </div>
        </main>
	</div>
	<div class="preloader"><span class="spinner spinner-round"></span></div>
    @section('custom_js')
    <script type="text/javascript">
        $("#email_login").focus();
        number_only('phone');
        load_list(1);
    </script>
    @endsection --}}

    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <a href="{{ route('home') }}" class="d-inline-block auth-logo">
                            <img src="{{ asset('img/logo/logo.jpg') }}" alt="" height="100">
                        </a>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">
                    
                        <div class="card-body p-4"> 
                            <div class="text-center mt-2">
                                <h2 class="text-primary">Welcome Back !</h2>
                            </div>
                            <div class="p-2 mt-4">
                                <form id="login-form">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password-input">Password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" name="password" class="form-control pe-5" placeholder="Enter password" id="password-input">
                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit" id="login-button" onclick="auth('#login-button','#login-form','{{route('user.auth.login')}}','Login');">Sign In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <p class="mb-0">Don't have an account ? <a href="{{ route('user.auth.register') }}" class="fw-semibold text-primary text-decoration-underline"> Signup </a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-authLayout>    