@extends('layouts.master')

@section('title','About us')

@section('content')
  @include('layouts.partials.page-header')

  <section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h4 class="text-primary">OUR STORY</h4>
                    <h2>Industris 1994-2019</h2>
                    <p>We’re Industris, a broad energy company with a proud history. We are 20,000 committed colleagues developing oil, gas, wind and solar energy in more than 30 countries worldwide. We’re the largest operator in Norway, one of the world’s largest offshore operators, and a growing force in renewables. Driven by our Nordic urge to explore beyond the horizon and dedication to safety, equality and sustainability, we’re developing the energy of the future.</p>
                    <br>
                    <p>Contacting Industris — <br>
                    addresses and information on how best to contact us. </p>
                    <a href="#" class="btn btn-primary">Contact us</a>
                    <div class="industris-space-sm"></div>
            </div>
            <div class="col-md-offset-1 col-md-5 col-sm-12 sm-center">
                <div class="about-img-right">
                    <img src="https://via.placeholder.com/750x864.png" alt="">
                    <div class="about-img-small">
                        <div class="overlay"><img src="https://via.placeholder.com/211x211.png" class="circle-img" alt=""></div>
                            <div class="about-content">
                            <h2 class="text-primary">24+</h2>
                            <p class="text-white">Years of Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="industris-space-60"></div>
    <div class="industris-space"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="icon-box">
                    <div class="icon-box-title">
                        <i class="icon ion-md-ribbon"></i><h4>Our Awards <span class="number" data-to="12" data-speed="2000">12</span><span>+)</span></h4>
                    </div>
                    <p>Over 25 years with 12 different awards, we are extremely proud of that</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="icon-box">
                    <div class="icon-box-title">
                        <i class="icon ion-ios-briefcase"></i><h4>Our Work <span class="number" data-to="100" data-speed="2000">100</span><span>+)</span></h4>
                    </div>
                    <p>More than 100 large and small projects are completed. It is an attempt to work with effort and passion</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="icon-box">
                    <div class="icon-box-title">
                        <i class="icon ion-ios-contacts"></i><h4>member <span class="number" data-to="1000" data-speed="2000">1000</span><span>+)</span></h4>
                    </div>
                    <p>The team of more than 1000 engineers and leading experts are working day and night</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
