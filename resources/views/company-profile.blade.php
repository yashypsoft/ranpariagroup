@extends('layouts.master')

@section('title','Company Profile')

@section('content')
  @include('layouts.partials.page-header')
  <section>
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <h4 class="text-primary">OVERVIEW</h4>
                <h2>Industris Served</h2>
                <p>Our industries are experiencing basic challenges. From climate change and geopolitics to the energy market, we are facing new reality. Some people consider them a threat. At Industris, we believe our job is to turn them into opportunities.
                <br>That's why we look for new ways to use our expertise in the energy industry, discover new opportunities and promote innovation around the world. Our ambition is to become the world's most efficient industrial solutions and services provider.</p>
                <br>
                <h3>Our featured</h3>
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="icon ion-ios-help-buoy"></i>
                            </div>
                            <h4>Support 24/7</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="icon ion-ios-hammer"></i>
                            </div>
                            <h4>Maintenance support</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="icon ion-ios-briefcase"></i>
                            </div>
                            <h4>A full services</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12 sm-center">
                <div class="industris-space-sm"></div>
                <img src="https://via.placeholder.com/458x478.png" alt="">
            </div>
        </div>
    </div>
</section>

@endsection
