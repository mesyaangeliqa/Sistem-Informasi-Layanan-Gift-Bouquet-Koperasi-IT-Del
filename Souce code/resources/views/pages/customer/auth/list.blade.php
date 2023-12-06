<x-authLayout>
    {{-- <div class="nk-wrap">
        <main class="nk-pages nk-pages-centered">
            <div class="ath-container">
                <div class="ath-body">
                    <h5 class="ath-heading title">REGISTER <small class="tc-default"><img src="{{ asset('img/logo.jpg') }}" srcset="images/logo-full-white2x.png 2x" alt="logo" width="300px"></small></h5>
                    <form id="register-form">
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" name="name" class="input-bordered" placeholder="Nama">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" name="email" class="input-bordered" placeholder="Email@email.com">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" name="username" class="input-bordered" placeholder="Username">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" name="phone" class="input-bordered" placeholder="No.Hp">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" name="password" class="input-bordered" placeholder="Password">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" name="repassword" class="input-bordered" placeholder="Confirm Passoword">
                            </div>
                        </div>
                        <div class="forget-link fz-6">
                            Login ?<a href="{{ route('user.auth.index') }}"> <strong>Click Here!</strong></a>
                        </div>
                        <br>
                        <button type="button" class="btn btn-primary btn-block btn-md" id="register-button" onclick="auth('#register-button','#register-form','{{route('user.auth.register')}}','Register');">Register Now</button>
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
                                <h5 class="text-primary">Create New Account</h5>
                                <p class="text-muted">Get your free Del Bouquet account now</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form id="register-form">
    
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="nama" name="name" placeholder="Enter Nama" required>  
                                    </div>

                                    <div class="mb-3">
                                        <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter email address" required>  
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="nohp" class="form-label">Phone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="phone" id="nohp" placeholder="Enter phone" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="userpassword" class="form-label">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="userpassword" name="password" placeholder="Enter password" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="userpassword" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="userpassword" name="repassword" placeholder="Enter confirm password" required>
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="button" id="register-button" onclick="auth('#register-button','#register-form','{{route('user.auth.register')}}','Register');">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <p class="mb-0">Already have an account ? <a href="{{ route('user.auth.index') }}" class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-authLayout>