@extends('layouts.master')

@section('title','Home')

@section('content')
<div class="slider" data-show="1" data-arrow="true">

    <div>
        <div class="slider-item">
            <img src="https://via.placeholder.com/1920x850.png" alt="" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="slider-content">
                            <h4>WELCOME TO INDUSTRIS...!</h4>
                            <h1>The leading provider  of Industrial </h1>
                            <a class="btn btn-primary" href="#">Explore now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="slider-item">
            <img src="https://via.placeholder.com/1920x850.png" alt="" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="slider-content">
                            <h4>WELCOME TO INDUSTRIS...!</h4>
                            <h1>Leader in power Automation </h1>
                            <a class="btn btn-primary" href="#">Explore now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="slider-item">
            <img src="https://via.placeholder.com/1920x850.png" alt="" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="slider-content">
                            <h4>WELCOME TO INDUSTRIS...!</h4>
                            <h1>Best solution for Industrial &amp; Factories </h1>
                            <a class="btn btn-primary" href="#">Explore now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="no-padding-bottom">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h4 class="text-primary">OUR SERVICES</h4>
                <h2>Industries We Serve</h2>
                <div class="industris-space-30"></div>

                <div class="services-slider" data-show="4" data-arrow="true">

                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>Agriculture</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/ServeIndus/Agriculture.jpg')}}" alt="services image">
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>Air Compressor</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/ServeIndus/Aircompressor.jpg')}}" alt="services image"> 
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>Earth Movers</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/ServeIndus/Earthmovers.jpg')}}" alt="services image">
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>Generators</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/ServeIndus/Generators.jpg')}}" alt="services image">
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>Goods and Carriage</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/ServeIndus/Goods.jpg')}}" alt="services image">
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>Locomotive</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/ServeIndus/Locomotive.jpg')}}" alt="services image">
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>Marine</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/ServeIndus/Marine.jpg')}}" alt="services image">
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>Oil and Chemical</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/ServeIndus/Oil.jpg')}}" alt="services image">
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>Passenger Vehicle</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/ServeIndus/Passanger.jpg')}}" alt="services image">
                    </div>
                    <div class="services-box services-box-img">
                        <div class="services-content">
                            <h3><a>Tow, Three & Four Wheelers</a></h3>
                        </div>
                        <img class="indus-image" src="{{asset('images/ServeIndus/Bikecar.jpg')}}" alt="services image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="industris-space-90"></div>
</section>

<section class="bg-primary no-padding">
    <div class="industris-space-90"></div>
    <h3 class="text-center h2">Our Corporate Video</h3>
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="video-container">
                                <iframe  src="https://www.youtube.com/embed/QI1n0niG5E4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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


<section>
    <div class="container">
        <div class="row text-center">
                <h2 class="no-margin-bottom">Our Products</h2>
        </div>
        <div class="industris-space"></div>
        <div class="row">
            <div class="col-md-12">

                <div class="partner-slider image-carousel text-center" data-show="5" data-arrow="false">

                    @for ($i = 1; $i < 9; $i++)
                    <div>
                        <div class="partner-item text-center clearfix">
                            <div class="inner">
                                <div class="thumb">
                                    <img class="product-image-home" src="{{asset('images/products/'.$i.'.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor

                </div>
            </div>
        </div>
        <div class="industris-space-50"></div>
        <div class="row">
            <div class="text-right align-self-end">
                <a class="industris-lineheight" href="{{ route('products')}}">View all products<i class="icon ion-md-add-circle-outline"></i></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="industris-space"></div>
        <hr>
        <div class="industris-space"></div>
    </div>
</section>


@endsection

