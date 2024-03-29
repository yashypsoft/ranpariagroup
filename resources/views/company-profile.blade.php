@extends('layouts.master')

@section('title', 'Company Profile')

@section('content')
    @include('layouts.partials.page-header')
    <section>
        <div class="container-custom-page">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h2 class="text-primary">{{ __('Company Profile') }}</h2>
                    <p><b>Ranparia Engineering co. </b>
                        {{ __('is an ISO certified company located in rajkot (gujarat-india) and spread over 15000 square-metres of area with highly innovative and upgraded technologies. It was established in the year 2007 and is a subsidiary company of ranparia brothers which is engaged in the feild of manufacturing of flexible hose assemblies, high pressure and low pressure pipes, metal tube assemblies, injection pipe assemblies and many more since 1967.') }}
                        <br><b>Ranparia Engineering co. </b>
                        {{ __('is involved in manufacturing of various automotive, locomotive, earthmovers, agri-auto, marine, tractors, two-wheeler, three-wheelers, and passenger vehicles components.') }}
                    </p>
                </div>
                <div class="col-md-3 col-sm-12 sm-center">
                    <div class="industris-space-sm"></div>
                    <img src="{{ asset('images/certificate/1.jpg') }}" alt="">
                </div>
                <div class="col-md-3 col-sm-12 sm-center">
                    <div class="industris-space-sm"></div>
                    <img src="{{ asset('images/certificate/2.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="container-custom-page">
            <div class="row">
                <h2 class="text-primary" style="margin-left:10px">Infrastructure</h2>
                <p style="margin-left:10px">{{ __('Our industries are experiencing basic challenges. From climate change and geopolitics to the energy market, we are facing new reality. Some people consider them a threat. At Industris, we believe our job is to turn them into opportunities.') }}
                    <br>{{ __("That's why we look for new ways to use our expertise in the energy industry, discover new opportunities and promote innovation around the world. Our ambition is to become the world's most efficient industrial solutions and services provider.") }}
                </p>
            </div>
        </div>
        <div class="industris-space-90"></div>
        <div class="container-custom-page gallery-images">
            @for ($i = 1; $i < 4; $i++)
                @if ($i%3 == 1)
                <div class="row text-center">
                    <div class="col-md-12">
                        <div id="projects" class="project-grid gallery row ">
                @endif
                <div class="project-item events col-lg-4 col-sm-6">
                    <div class="inner product-block">
                            <img src="{{asset('images/infra/I'.$i.'.jpg')}}" >
                        </a>
                    </div>
                </div>
                @if ($i%3 == 0)
                    </div>
                    </div>
                    </div>
                @endif
            @endfor
        </div>
        <br>
        <hr>
        <br>
        <div class="container-custom-page">
            <div class="row">
                <h2 class="text-primary" style="margin-left:10px">Inhouse Facilities</h2>
                <div class="col-md-4 col-sm-12 sm-center">
                    <div class="industris-space-sm"></div>
                    <div class="slider" data-show="1" data-arrow="true">
                        <div>
                            <div class="slider-item">
                                <img class="unit-image" src="{{ asset('images/unit/Casting1.png') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="slider-item">
                                <img class="unit-image" src="{{ asset('images/unit/Casting2.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div>
                            <div class="slider-item">
                                <img class="unit-image" src="{{ asset('images/unit/Casting3.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h3 class="title">{{ __('Casting') }}</h3>
                    <ul>
                        <li>{{ __('Graded Cast Iron and Alloy CI casting') }}</li>
                        <li>{{ __('SG Iron Casting and Ductile Cast Iron') }}</li>
                        <li>{{ __('Investment Casting with different material grade') }}</li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 col-sm-12 sm-center">
                    <div class="industris-space-sm"></div>
                    <div class="slider" data-show="1" data-arrow="true">
                        <div>
                            <div class="slider-item">
                                <img class="unit-image" src="{{ asset('images/unit/Forging.jpg') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="slider-item">
                                <img class="unit-image" src="{{ asset('images/unit/Forging2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="slider-item">
                                <img class="unit-image" src="{{ asset('images/unit/Forging2.png') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="slider-item">
                                <img class="unit-image" src="{{ asset('images/unit/Forging3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h3 class="title">{{ __('Forging') }}</h3>
                    <ul>
                        <li>{{ __('Hot Forging') }}</li>
                        <li>{{ __('Cold Forging') }}</li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 col-sm-12 sm-center">
                    <div class="industris-space-sm"></div>
                    <div class="slider" data-show="1" data-arrow="true">
                        <div>
                            <div class="slider-item">
                                <img class="unit-image" src="{{ asset('images/unit/CNC.jpg') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="slider-item">
                                <img class="unit-image" src="{{ asset('images/unit/VMC.jpg') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="slider-item">
                                <img class="unit-image" src="{{ asset('images/unit/Drilling.jpg') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="slider-item">
                                <img class="unit-image" src="{{ asset('images/unit/Grinding.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h3 class="title">{{ __('Machining') }}</h3>
                    <ul>
                        <li>{{ __('CNC Machine') }}</li>
                        <li>{{ __('VMC Machine') }}</li>
                        <li>{{ __('Drilling Machine') }}</li>
                        <li>{{ __('Grinding Machine') }}</li>
                        <li>{{ __('Cutting Machine') }}</li>
                        <li>{{ __('Fettling Machine') }}</li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 col-sm-12 sm-center">
                    <div class="industris-space-sm"></div>
                    <div class="slider" data-show="1" data-arrow="true">
                        <div>
                            <div class="slider-item">
                                <img class="unit-image" src="{{ asset('images/unit/Lab1.png') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="slider-item">
                                <img class="unit-image" src="{{ asset('images/unit/Lab2.png') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="slider-item">
                                <img class="unit-image" src="{{ asset('images/unit/Lab3.png') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="slider-item">
                                <img class="unit-image" src="{{ asset('images/unit/Lab4.png') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="slider-item">
                                <img class="unit-image" src="{{ asset('images/unit/Lab5.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h3 class="title">{{ __('Laboratory') }}</h3>
                    <ul>
                        <li>{{ __('Ravalue Tester, Hardness Tester and Tensile Tester') }}</li>
                        <li>{{ __('Vision Measuring Machine') }}</li>
                        <li>{{ __('Profile Projector') }}</li>
                        <li>{{ __('Digital Height Guage, Vernier And Micro-metre') }}</li>
                        <li>{{ __('Surface Plate') }}</li>
                        <li>{{ __('Different Type Of Guages') }}</li>
                        <li>{{ __('Spectro Meter') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
