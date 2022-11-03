@extends('layouts.master')

@section('title','Home')

@section('content')
<div class="slider" data-show="1" data-arrow="true">

    <div>
        <div class="slider-item">
            <img class="slider-image" src="{{asset('images/banner/Slider1.png')}}" alt="" class="">
            <div class="container-custom-page">
                <div class="row">
                    <div class="col-md-9">
                        <div class="slider-content text-primary">
                            <h1 class="">WELCOME TO <br> RANPARIA GROUP</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="slider-item">
            <img class="slider-image" src="{{asset('images/banner/Slider.jpg')}}" alt="" class="">
        </div>
    </div>

    <div>
        <div class="slider-item">
            <img class="slider-image" src="{{asset('images/banner/Slider2.jpg')}}" alt="" class="">
        </div>
    </div>
</div>

<section class="no-padding" style="background-color: #f2f4f6">
    <div class="industris-space-90"></div>
    <h3 class="text-center text-primary title">{{__('Our Corporate Video')}}</h3>
    <div class="">
        <div class="container-custom-page">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="video-container">
                                <iframe  src="https://www.youtube.com/embed/aga1jm8e8Gc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    <div class="col-lg-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="industris-space-90"></div>

</section>

<section class="no-padding-bottom">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-12">
                <span class="text-primary title">{{__('OUR SERVICES')}}</span>
                <h2>{{__('Industries We Serve')}}</h2>
                <div class="industris-space-30"></div>

                <div class="services-slider" data-show="4" data-arrow="true">

                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>{{__('Agriculture')}}</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/serveindustry/Agriculture.jpg')}}" alt="services image">
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>{{__('Air Compressor')}}</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/serveindustry/Aircompressor.jpg')}}" alt="services image">
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>{{__('Earth Movers')}}</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/serveindustry/Earthmovers.jpg')}}" alt="services image">
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>{{__('Generators')}}</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/serveindustry/Generators.jpg')}}" alt="services image">
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>{{__('Goods and Carriage')}}</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/serveindustry/Goods.jpg')}}" alt="services image">
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>{{__('Locomotive')}}</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/serveindustry/Locomotive.jpg')}}" alt="services image">
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>{{__('Marine')}}</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/serveindustry/Marine.jpg')}}" alt="services image">
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>{{__('Oil and Chemical')}}</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/serveindustry/Oil.jpg')}}" alt="services image">
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>{{__('Passenger Vehicle')}}</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/serveindustry/Passanger.jpg')}}" alt="services image">
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>{{__('Tow, Three & Four Wheelers')}}</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/serveindustry/Bikecar.jpg')}}" alt="services image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="industris-space-90"></div>
</section>

@endsection

