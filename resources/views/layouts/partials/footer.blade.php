<div id="totop" class="tra" style=""><i class="fa fa-angle-up fa-lg"></i></div>
<footer id="site-footer" class="site-footer bg-footer">
    <div class="main-footer">
        <div class="container-custom">
            <div class="row">

                <div class="col-md-3 col-sm-6">
                    <div class="widget-footer">
                        <div id="media_image-1" class="widget widget_media_image">
                            <a href="{{route('home')}}"><img src="{{asset('images/logo/logowithtext.png')}}" alt=""></a>
                        </div>
                        <div id="custom_html-1" class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <p>Copyright © {{now()->year}} RANPARIA ENGINEERING CO. All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col-lg-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="widget-footer">
                        <div id="media_image-1" class="widget widget_media_image">
                            <a href="{{ route('home')}}"><img src="{{asset('images/iso-ts.png')}}" alt=""></a>
                        </div>
                        <div id="custom_html-1" class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <p>{{__('Being an ISO 9001:2008/TS:16949:2009 certified company, we pay paramount attention to quality throughout the production stages, ensuring that the best and flawless products offered to our customers.')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col-lg-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="widget-footer">
                        <div id="custom_html-3" class="widget_text widge widget-footer widget_custom_html padding-left">
                            <div class="textwidget custom-html-widget">
                                <ul>
                                    <li><a href="{{ route('about-us') }}">{{__('About Us')}}</a></li>
                                    <li><a href="{{ route('contact-us') }}">{{__('Contact Us')}}</a></li>
                                    <li><a href="{{ route('products') }}">{{__('Products')}}</a></li>
                                    <li><a href="{{ route('company-profile') }}">{{__('Company Profile')}}</a></li>
                                    <li><a href="{{ route('our-journey') }}">{{__('Our Journey')}}</a></li>
                                    <li><a href="{{ route('mission-and-vission') }}">{{__('Mission & Vission')}}</a></li>
                                    <li>

                                    </li>
                                </ul>
                                <div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col-lg-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="widget-footer">
                        <div class="widget bg-white">
                            <div class="map-responsive">
                                <iframe src="https://maps.google.com/maps?q=Ranparia&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div class="footer-social ot-socials">
                            {{__('follow us')}}:
                            <a target="_blank" href="#" rel="noopener noreferrer"><i class="icon ion-logo-facebook"></i></a>
                            <a target="_blank" href="#" rel="noopener noreferrer"><i class="icon ion-logo-instagram"></i></a>
                            <a target="_blank" href="#" rel="noopener noreferrer"><i class="icon ion-logo-skype"></i></a>
                            <a target="_blank" href="#" rel="noopener noreferrer"><i class="icon ion-logo-twitter"></i></a>
                            <a target="_blank" href="#" rel="noopener noreferrer"><i class="icon ion-logo-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end col-lg-3 -->

            </div>
        </div>
    </div>
    <!-- .main-footer -->
    <div class="footer-bottom">
        <div class="container-custom">
            <div class="row">
                <div class="col-md-12">
                    <ul class="topbar-left">
                        <li onclick="location.href='https://g.page/ranparia-engineering-co?share';"><i class="icon ion-md-pin"></i>Bhagyalaxmi Industrial Estate,St. no 2, Bhavnagar Rd, Rajkot</li>
                        <li onclick="location.href='tel:+919723918607';"><i class="icon ion-md-call"></i>+91 97239 18607</li>
                        <li onclick="location.href='mailto:info@ranpariagroup.in';"><i class="icon ion-md-mail"></i>info@ranpariagroup.in</li>
                    </ul>
                    {{-- <a id="back-to-top" href="#" class="btn btn-back-to-top pull-right">{{__('Back to top')}}<i class="icon ion-ios-arrow-dropup-circle"></i></a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- .copyright-footer -->
</footer>
