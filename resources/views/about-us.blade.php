@extends('layouts.master')

@section('title', __('About us'))

@section('content')
    @include('layouts.partials.page-header')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h4 class="text-primary">{{ __('OUR STORY') }}</h4>
                    <h2>Ranparia Engineering co.</h2>
                    <p>{{ __('Ranparia Engineering Co has a highly qualified staff which includes technicians, engineers, quality inspectors, admin staff, skilled and semi skilled workers around 120 people in strength. our team is having profound knowledge in the feild of casting, forging and machining.') }}
                    </p>
                    <br>
                    <p>{{ __('This has become possible because of our business ethics, helpfull and co-operative nature, infrastructure, quality, research & development, and commitment to timely delivery.') }}
                    </p>
                    <a href="{{ route('contact-us') }}" class="btn btn-primary">{{ __('Contact us') }}</a>
                    <div class="industris-space-sm"></div>
                </div>
                <div class="col-md-offset-1 col-md-5 col-sm-12 sm-center">
                    <div class="about-img-right">
                        <img src="https://via.placeholder.com/750x864.png" alt="">
                        <div class="about-img-small">
                            <div class="overlay"><img src="https://via.placeholder.com/211x211.png" class="circle-img"
                                    alt=""></div>
                            <div class="about-content">
                                <h2 class="text-primary">{{ now()->year - 1967 }}+</h2>
                                <p class="text-white">{{ __('Years of Experience') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-12 text-center">
                <h2>{{ __('Our Business Minds') }}</h2>
            </div>
        </div>

        <div class="container ">
            <div class="row text-center">
                <div class="col-sm"></div>
                <div class="col-sm">
                    <div class="project-item events">
                        <div class="inner">
                            <img src="{{ asset('images/about/founder.jpg') }}" class="circle-img">
                            <br>
                            <strong>Rajesh Ranparia</strong>
                            <br>
                            <span>{{ __('Founder') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm"></div>
            </div>
            <div class="industris-space-30"></div>
            <div class="row text-center">
                <div class="col col-md-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="inner">
                                <img src="{{ asset('images/about/co-founder.jpg') }}" class="circle-img">
                                <br>
                                <strong>Jignesh Ranparia</strong>
                                <br>
                                <span>{{ __('Co-Founder') }}</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inner">
                                <img src="{{ asset('images/about/ceo.jpg') }}" class="circle-img">
                                <br>
                                <strong>Jaydeep Ranparia</strong>
                                <br>
                                <span>{{ __('C.E.O.') }}</span>
                            </div>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="industris-space-30"></div>
            <div class="row text-center">
                <div class="col col-md-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="inner">
                                <img src="{{ asset('images/about/manager.jpg') }}" class="circle-img">
                                <br>
                                <strong>Karan Ranparia</strong>
                                <br>
                                <span>{{ __('Manager') }}</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inner">
                                <img src="{{ asset('images/about/accountant.jpg') }}" class="circle-img">
                                <br>
                                <strong>Rishi Ranparia</strong>
                                <br>
                                <span>{{ __('Manager') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
