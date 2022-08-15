<footer id="site-footer" class="site-footer bg-footer">
    <div class="main-footer">
        <div class="container-custom">
            <div class="row">

                <div class="col-md-3 col-sm-6">
                    <div class="widget-footer">
                        <div id="media_image-1" class="widget widget_media_image">
                            <a href="{{route('home')}}"><img src="{{asset('logo.png')}}" alt=""></a>
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
                                <p>Being an ISO 9001:2008/TS:16949:2009 certified company, we pay paramount attention to quality throughout the production stages, ensuring that the best and flawless products offered to our customers.</p>
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
                                    <li><a href="{{ route('about-us') }}">About us</a></li>
                                    <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                                    <li><a href="{{ route('products') }}">Products</a></li>
                                    <li><a href="{{ route('company-profile') }}">Company Profile</a></li>
                                    <li><a href="{{ route('our-journey') }}">Our Journey</a></li>
                                    <li><a href="{{ route('mission-and-vission') }}">Mission & Vission</a></li>
                                </ul>
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

                        <div class="footer-social ot-socials bg-white">
                            follow us:
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
                        <li onclick="location.href='tel:+918758422436';"><i class="icon ion-md-call"></i>+91 87584 22436</li>
                        <li onclick="location.href='mailto:karanranparia@gmail.com';"><i class="icon ion-md-mail"></i>karanranparia@gmail.com</li>
                    </ul>
                    <a id="back-to-top" href="#" class="btn btn-back-to-top pull-right">Back to top<i class="icon ion-ios-arrow-dropup-circle"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- .copyright-footer -->
</footer>
