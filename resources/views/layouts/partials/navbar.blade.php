<header id="site-header" class="site-header mobile-header-blue header-style-1">
    <div id="header_topbar" class="header-topbar md-hidden sm-hidden clearfix">
        <div class="container-custom">
            <div class="row">
                <div class="col-md-9">
                    <!-- Info on Topbar -->
                    <ul class="topbar-left">
                        <li onclick="location.href='https://g.page/ranparia-engineering-co?share';"><i class="icon ion-md-pin"></i>Bhagyalaxmi Industrial Estate,St. no 2, Bhavnagar Rd, Rajkot</li>
                        <li onclick="location.href='tel:+918758422436';"><i class="icon ion-md-call"></i>+91 87584 22436</li>
                        <li onclick="location.href='mailto:karanranparia@gmail.com';"><i class="icon ion-md-mail"></i>karanranparia@gmail.com</li>
                    </ul>
                </div>
                <!-- Info on topbar close -->
                <div class="col-md-3">
                    <ul class="topbar-right pull-right">
                        <li class="topbar-languages"><a href="#"> English <i class="icon ion-ios-arrow-down"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Top bar close -->
    <div class="main-header md-hidden sm-hidden">
        <div class="container-custom">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo-brand">
                        <a href="{{ route('home') }}"><img src="{{ asset('logo.png')}}" alt="industris"></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="main-navigation">
                        <ul id="primary-menu" class="menu">
                            <li class="menu-item {{ request()->is('/') ? 'current-menu-parent' : ''  }}"><a href="{{ route('home') }}">Home</a></li>
                            <li class="menu-item menu-item-has-children {{ (request()->is('about-us') || request()->is('our-journey') || request()->is('company-profile') || request()->is('mission-and-vission') || request()->is('corporate-video')) ? 'current-menu-parent' : ''  }}"><a href="{{ route('about-us') }}">About Us</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{ route('our-journey') }}">Our journey</a></li>
                                    <li class="menu-item"><a href="{{ route('company-profile') }}">Company Profile</a></li>
                                    <li class="menu-item"><a href="{{ route('mission-and-vission') }}">Mission & Vision</a></li>
                                    <li class="menu-item"><a href="{{ route('corporate-video') }}">Corporate Video</a></li>
                                </ul>
                            </li>
                            <li class="menu-item {{ request()->is('products') ? 'current-menu-parent' : ''  }}"><a href="{{ route('products') }}">Products</a>
                            </li>
                            <li class="menu-item {{ request()->is('quality') ? 'current-menu-parent' : ''  }}"><a href="{{ route('quality') }}">Quality</a>
                            </li>
                            <li class="menu-item"><a href="{{ url()->to('https://drive.google.com/file/d/1OtHi0nA_jLeQIE9DonsdIo-Q3_yEUMIA/view?usp=sharing') }}">E-Catalogue</a>
                            </li>
                            <li class="menu-item {{ request()->is('career') ? 'current-menu-parent' : ''  }}"><a href="{{ route('career') }}">Career</a>
                            </li>
                            <li class="menu-item {{ request()->is('contact-us') ? 'current-menu-parent' : ''  }}"><a href="{{ route('contact-us') }}">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main header start -->

    <!-- Mobile header start -->
    <div class="mobile-header">
        <div class="container-custom">
            <div class="row">
                <div class="col-xs-6">
                    <div class="logo-brand-mobile">
                        <a href="{{route('home')}}"><img src="{{ asset('logo.png')}}" alt="industris"></a>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div id="mmenu_toggle">
                        <button></button>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="mobile-nav">
                        <ul id="primary-menu-mobile" class="mobile-menu">
                            <li class="menu-item current-menu-ancestor current-menu-parent"><a href="{{ route('home') }}">Home</a></li>
                            <li class="menu-item menu-item-has-children"><a href="{{ route('about-us') }}">About Us</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{ route('our-journey') }}">Our journey</a></li>
                                    <li class="menu-item"><a href="{{ route('company-profile') }}">Company Profile</a></li>
                                    <li class="menu-item"><a href="{{ route('mission-and-vission') }}">Mission & Vision</a></li>
                                    <li class="menu-item"><a href="{{ route('corporate-video') }}">Corporate Video</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="{{ route('products') }}">Products</a>
                            </li>
                            <li class="menu-item"><a href="{{ route('quality') }}">Quality</a>
                            </li>
                            <li class="menu-item"><a href="{{ url()->to('https://drive.google.com/file/d/1OtHi0nA_jLeQIE9DonsdIo-Q3_yEUMIA/view?usp=sharing') }}">E-Catalogue</a>
                            </li>
                            <li class="menu-item"><a href="{{ route('career') }}">Career</a>
                            </li>
                            <li class="menu-item"><a href="{{ route('contact-us') }}">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
