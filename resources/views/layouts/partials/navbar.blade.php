<header id="site-header" class="site-header mobile-header-blue header-style-1">
    {{-- <div id="header_topbar" class="header-topbar md-hidden sm-hidden clearfix">
        <div class="container-custom">
            <div class="row">
                <div class="col-md-10">
                    <!-- Info on Topbar -->
                    <ul class="topbar-left">
                        <li onclick="location.href='https://g.page/ranparia-engineering-co?share';"><i
                                class="icon ion-md-pin"></i>Bhagyalaxmi Industrial Estate,St. no 2, Bhavnagar Rd, Rajkot
                        </li>
                        <li onclick="location.href='tel:+919723918607';"><i class="icon ion-md-call"></i>+91 97239 18607
                        </li>
                        <li onclick="location.href='mailto:info@ranpariagroup.in';"><i
                                class="icon ion-md-mail"></i>info@ranpariagroup.in</li>
                    </ul>
                </div>
                <!-- Info on topbar close -->
                <div class="col-md-2">

                    <ul class="topbar-right pull-right">
                        <li class="topbar-languages">

                            <a class="btn btn-default btn-select">
                                <input type="hidden" class="btn-select-input" id="" name="" value=""  />
                                <span class="btn-select-value">
                                    <span value="us" class="flag-icon flag-icon-us"></span>English</span>
                                <span class='btn-select-arrow'><i class="fa fa-chevron-down"></i></span>
                                <ul>
                                    <li value="en" class="{{session()->get('locale') == 'en'?"selected":''}}"><span  class='flag-icon flag-icon-us'></span>English</li>
                                    <li value="de" class="{{session()->get('locale') == 'de'?"selected":''}}"><span class='flag-icon flag-icon-de'></span>German</li>
                                    <li value="es" class="{{session()->get('locale') == 'es'?"selected":''}}"><span class='flag-icon flag-icon-es'></span>Spanish</li>
                                    <li value="ru" class="{{session()->get('locale') == 'ru'?"selected":''}}"><span class='flag-icon flag-icon-ru'></span>Russian</li>
                                    <li value="fr" class="{{session()->get('locale') == 'fr'?"selected":''}}"><span class='flag-icon flag-icon-fr'></span>French</li>
                                    <li value="it" class="{{session()->get('locale') == 'it'?"selected":''}}"><span class='flag-icon flag-icon-it'></span>Italian</li>
                                    <li value="nl" class="{{session()->get('locale') == 'nl'?"selected":''}}"><span class='flag-icon flag-icon-nl'></span>Dutch</li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Top bar close -->
    <div class="main-header md-hidden sm-hidden">
        <div class="container-custom">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo-brand">
                        <a href="{{ route('home') }}"><img src="{{ asset('Logo/logowithtext.png') }}" alt="industris"></a>
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
                        <a href="{{ route('home') }}"><img src="{{ asset('Logo/logowithtext.png') }}" alt="industris"></a>
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
                                            href="{{ route('corporate-video') }}">{{ __('Corporate Video<') }}</a>
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
