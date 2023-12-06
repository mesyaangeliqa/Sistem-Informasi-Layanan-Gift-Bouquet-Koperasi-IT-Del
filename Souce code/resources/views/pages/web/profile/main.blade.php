<x-webLayout>
<div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Profil</h3>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>Profil</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!-- About Area Start Here -->
    <div class="about-area mt-no-text">
        <div class="container custom-area">
            <div class="row mb-30 align-items-center">
                <div class="col-md-6 col-custom">
                    <div class="collection-content">
                        <div class="section-title text-left">
                            <span class="section-title-1">Koperasi Serba Usaha</span>
                            <h3 class="section-title-3 pb-0">PI Del</h3>
                        </div>
                        <div class="desc-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-custom">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style">
                        <div class="banner-img">
                            <a href="#">
                                <img src="{{ asset('img/12.jpeg') }}" alt="About Image">
                                <div class="overlay-1"></div>
                            </a>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
            </div>

        </div>
    </div>

    <!-- Team Member Area Start Here -->
    <div class="team-member-wrapper mt-text-3">
        <div class="container custom-area">
            <div class="row">
                <div class="col-lg-12 col-custom">
                    <div class="section-title text-center">
                        <span class="section-title-1">Ssusunan kerja</span>
                        <h2 class="section-title-2">Koperasi PI Del Laguboti</h2>
                    </div>
                </div>
            </div>
            <div class="row ht-team-member-style-two align-content-center align-items-center align-self-center pt-40 ">
                @foreach($collection as $item)
                <div class="col-lg-4 col-md-4 col-custom">
                    <div class="grid-item ">
                        <div class="ht-team-member">
                            <div class="team-image">
                                <div class="banner-img">
                                    <img class="img-fluid" src="{{asset('storage/'.$item->image)}}" alt="">
                                </div>
                                <div class="social-networks">
                                    <div class="inner">
                                        <a href="https://wa.me/{{$item->phone}}" title="{{$item->phone}}" target="blank"><i class="fa fa-whatsapp"></i>
                                        </a>
                                        <a href="https://www.isntagram.com/{{$item->facebook}}" target="blank"><i class="fa fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-info text-center">
                                <h5 class="name">{{$item->name}}</h5>
                                <div class="position">{{$item->key_meta}}</div>
                                <div class="position">"{{$item->description}}"</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team Member Area End Here -->
    <!-- Contact Us Area Start Here -->
    <div class="contact-us-area mt-no-text">
        <div class="container custom-area">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-custom">
                    <div class="contact-info-item">
                        <div class="con-info-icon">
                            <i class="lnr lnr-map-marker"></i>
                        </div>
                        <div class="con-info-txt">
                            <h4>Our Location</h4>
                            <p>Kontainer Lapangan Npitupulu, Kampus Institut Teknologi Del Sitoluama, Laguboti</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-custom">
                    <div class="contact-info-item">
                        <div class="con-info-icon">
                            <i class="lnr lnr-smartphone"></i>
                        </div>
                        <div class="con-info-txt">
                            <h4>Contact us</h4>
                            <p>Admin 1: 012 345 678<br>Admin 2: 123 456 789</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-custom text-align-center">
                    <div class="contact-info-item">
                        <div class="con-info-icon">
                            <i class="lnr lnr-envelope"></i>
                        </div>
                        <div class="con-info-txt">
                            <h4>E-mail </h4>
                            <p>samysiahaaan@gmail.com <br> mesyahutagalung300@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-webLayout>