<header class="main-header-area">
    <!-- Main Header Area Start -->
    <div class="main-header header-sticky">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-2 col-xl-2 col-sm-6 col-6 col-custom">
                    <div class="header-logo d-flex align-items-center">
                        <a href="{{ route('home') }}">
                            <img class="img-full" src="{{ asset('img/admin/logo.png') }}" alt="Header Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-xl-10 col-sm-6 col-6 position-static d-flex justify-content-end col-custom">
                    <nav class="main-nav mr-5 d-none d-lg-flex">
                        <ul class="nav">
                            <li>
                                <a class="active" href="{{ route('home') }}">
                                    <span class="menu-text"> Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('product.index') }}">
                                    <span class="menu-text"> Gift Bouquet</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('request') }}">
                                    <span class="menu-text"> Bouquet Request</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('critics') }}">
                                    <span class="menu-text"> Kritik & Saran</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('profile') }}">
                                    <span class="menu-text"> Profile</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-right-area main-nav">
                        <ul class="nav">
                            @auth
                            <li class="minicart-wrap">
                                <a href="#" class="minicart-btn toolbar-btn">
                                    <i class="fa fa-user"></i>
                                </a>
                                <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                    <div class="single-cart-item">
                                        <div class="cart-img">
                                            <img src="{{ asset('img/admin/blank.png') }}" alt="">
                                        </div>
                                        <div class="cart-text">
                                            <h5 class="title"><a href="cart.html">Hai, {{ Auth::user()->name }}</a></h5>
                                            <div class="cart-text-btn">
                                                <button type="button"><i class="ion-trash-b"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-links d-flex justify-content-between">
                                        @if( Auth::user()->role == 'admin')
                                        <a class="btn flosun-button secondary-btn rounded-0" href="{{ route('admin.product.index') }}">Tampilan Admin</a>
                                        @endif
                                        <a class="btn flosun-button secondary-btn rounded-0" href="{{ route('user.auth.logout') }}">Logout</a>
                                    </div>
                                </div>
                            </li>
                            @php
                                $totalCart = \App\Models\Cart::where('id_user',Auth::user()->id)->count();
                            @endphp
                            <li class="minicart-wrap">
                                <a href="{{ route('user.cart.index') }}" class="minicart-btn toolbar-btn">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="cart-item_count">{{$totalCart}}</span>
                                </a>
                            </li>
                            @endauth
                            @guest
                            <li class="minicart-wrap">
                                <a href="{{ route('user.auth.index') }}" class="minicart-btn toolbar-btn">
                                    Login
                                </a>
                            </li>
                            @endguest
                            <li class="mobile-menu-btn d-lg-none">
                                <a class="off-canvas-btn" href="#">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <aside class="off-canvas-wrapper" id="mobileMenu">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="fa fa-times"></i>
            </div>
            <div class="off-canvas-inner">
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="menu-item-has-children"><a href="{{ route('product.index') }}">Gift Bouquet</a>
                            </li>
                            <li class="menu-item-has-children "><a href="{{ route('request') }}">Bouquet Request</a>
                            </li>
                            <li class="menu-item-has-children "><a href="{{ route('critics') }}">Kritik & Saran</a>
                            </li>
                            <li class="menu-item-has-children "><a href="{{ route('profile') }}">Profile</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="offcanvas-widget-area">
                </div>
            </div>
        </div>
    </aside>
</header>
