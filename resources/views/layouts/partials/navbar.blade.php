<header id="site-header" class="site-header mobile-header-blue header-style-1">
    <div id="header_topbar" class="header-topbar md-hidden sm-hidden clearfix">
        <div class="container-custom">
            <div class="row">
                <div class="col-md-10">
                    <!-- Info on Topbar -->
                    <ul class="topbar-left">
                    </ul>
                </div>
                <!-- Info on topbar close -->
            </div>
        </div>
    </div>
    <!-- Top bar close -->
    <div class="main-header md-hidden sm-hidden">
        <div class="container-custom">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo-brand">
                        <a href="{{ route('home') }}"><img src="{{ asset('images/logo/logowithtext.png') }}" alt="industris"></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="main-navigation">
                        <ul id="primary-menu" class="menu">
                            <li class="menu-item {{ request()->is('/') ? 'current-menu-parent' : '' }}"><a
                                    href="{{ route('home') }}">{{ __('Home') }}</a></li>
                            <li
                                class="menu-item menu-item-has-children {{ request()->is('about-us') || request()->is('our-journey') || request()->is('company-profile') || request()->is('mission-and-vission') || request()->is('corporate-video') ? 'current-menu-parent' : '' }}">
                                <a href="{{ route('about-us') }}">{{ __('About Us') }}</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a
                                            href="{{ route('our-journey') }}">{{ __('Our journey') }}</a></li>
                                    <li class="menu-item"><a
                                            href="{{ route('company-profile') }}">{{ __('Company Profile') }}</a></li>
                                    <li class="menu-item"><a
                                            href="{{ route('mission-and-vission') }}">{{ __('Mission & Vision') }}</a>
                                    </li>
                                    <li class="menu-item"><a
                                        href="{{ route('subsidiaries') }}">{{ __('Subsidiaries/Other Ventures') }}</a>
                                    </li>
                                    <li class="menu-item"><a
                                            href="{{ route('corporate-video') }}">{{ __('Corporate Video') }}</a></li>
                                </ul>
                            </li>
                            <li class="menu-item {{ request()->is('products') ? 'current-menu-parent' : '' }}"><a
                                    href="{{ route('products') }}">{{ __('Products') }}</a>
                            </li>
                            <li class="menu-item {{ request()->is('quality') ? 'current-menu-parent' : '' }}"><a
                                    href="{{ route('quality') }}">{{ __('Quality') }}</a>
                            </li>
                            <li class="menu-item"><a
                                    href="{{ asset('E-catalog/e-catalog.pdf') }}" target="_blank">{{ __('E-Catalogue') }}</a>
                            </li>
                            <li class="menu-item {{ request()->is('career') ? 'current-menu-parent' : '' }}"><a
                                    href="{{ route('career') }}">{{ __('Career') }}</a>
                            </li>
                            <li class="menu-item {{ request()->is('contact-us') ? 'current-menu-parent' : '' }}"><a
                                    href="{{ route('contact-us') }}">{{ __('Contact Us') }}</a>
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
                        <a href="{{ route('home') }}"><img src="{{ asset('images/logo/logowithtext.png') }}" alt="industris"></a>
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
                            <li class="menu-item current-menu-ancestor current-menu-parent"><a
                                    href="{{ route('home') }}">{{ __('Home') }}</a></li>
                            <li class="menu-item menu-item-has-children"><a
                                    href="{{ route('about-us') }}">{{ __('About Us') }}</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a
                                            href="{{ route('our-journey') }}">{{ __('Our journey') }}</a></li>
                                    <li class="menu-item"><a
                                            href="{{ route('company-profile') }}">{{ __('Company Profile') }}</a></li>
                                    <li class="menu-item"><a
                                            href="{{ route('mission-and-vission') }}">{{ __('Mission & Vision') }}</a>
                                    </li>
                                    <li class="menu-item"><a
                                        href="{{ route('subsidiaries') }}">{{ __('Subsidiaries/Other Ventures') }}</a>
                                    </li>
                                    <li class="menu-item"><a
                                            href="{{ route('corporate-video') }}">{{ __('Corporate Video') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="{{ route('products') }}">{{ __('Products') }}</a>
                            </li>
                            <li class="menu-item"><a href="{{ route('quality') }}">{{ __('Quality') }}</a>
                            </li>
                            <li class="menu-item"><a
                                    href="{{ url()->to('https://drive.google.com/file/d/1OtHi0nA_jLeQIE9DonsdIo-Q3_yEUMIA/view?usp=sharing') }}">{{ __('E-Catalogue') }}</a>
                            </li>
                            <li class="menu-item"><a href="{{ route('career') }}">{{ __('Career') }}</a>
                            </li>
                            <li class="menu-item"><a href="{{ route('contact-us') }}">{{ __('Contact Us') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


@section('addScript')
<script>
function changeLangauge(self){
    landCode = jQuery(self).attr('value');
    var url = '{{route('changeChange')}}'+'?lang_code='+landCode;
    window.location.href = url;
}
</script>
@endsection
