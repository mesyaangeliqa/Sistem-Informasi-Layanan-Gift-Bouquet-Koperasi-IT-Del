<header class="nk-header page-header is-transparent is-sticky is-shrink" id="header">

    <div class="header-main">
        <div class="header-container container">
            <div class="header-wrap">
                
                <div class="header-logo logo">
                    <a href="{{ route('home') }}" class="logo-link">
                        <img class="logo-dark" src="{{ asset('img/logo/logo.png') }}" srcset="{{ asset('img/logo/logo.png') }}" alt="logo">
                        <img class="logo-light" src="{{ asset('img/logo/logo.png') }}" srcset="{{ asset('img/logo/logo.png') }}" alt="logo" width="100">
                    </a>
                </div>


                <div class="header-nav-toggle">
                    <a href="#" class="navbar-toggle" data-menu-toggle="header-menu">
                        <div class="toggle-line">
                            <span></span>
                        </div>
                    </a>
                </div>

        
                <div class="header-navbar">
                    <nav class="header-menu" id="header-menu">
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#" class="menu-link nav-link menu-toggle" >Home</a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link nav-link menu-toggle" href="#">Gift Bouquet</a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link nav-link menu-toggle" href="#">Bouquet request</a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link nav-link menu-toggle" href="#">Kritik & Saran</a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link nav-link menu-toggle" href="#">Profil</a>
                            </li>
                        </ul>
                        <ul class="menu-btns">
                            @auth
                            <li><a href="{{ route('user.auth.logout') }}" class="btn btn-md btn-auto btn-grad no-change"><span>Logout</span></a></li>
                            @endauth
                            @guest
                            <li><a href="{{ route('user.auth.index') }}" class="btn btn-md btn-auto btn-grad no-change"><span>Login</span></a></li>
                            @endguest
                        </ul>
                    </nav>
                </div>
            </div>                                                
        </div>
    </div>

    <div class="header-banner bg-theme-grad">
        <div class="nk-banner">
            <div class="banner banner-page">
                <div class="banner-wrap">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-9">
                                <div class="banner-caption cpn tc-light text-center">
                                    <div class="cpn-head">
                                        <h2 class="title ttu">GIFT BOUQUET IT DEL</h2>
                                        <p>Gift Bouquet IT Del berada di bawah naungan Koperasi PI Del yang telah berdiri lama</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-ovm shape-a-sm"></div>
    </div>
</header>