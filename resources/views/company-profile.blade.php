@extends('layouts.master')

@section('title','Company Profile')

@section('content')
  @include('layouts.partials.page-header')
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-12">
          <h2>{{__('Company Profile')}}</h2>
          <p><b>Ranparia Engineering co. </b> {{__('is an ISO certified company located in rajkot (gujarat-india) and spread over 15000 square-metres of area with highly innovative and upgraded technologies. It was established in the year 2007 and is a subsidiary company of ranparia brothers which is engaged in the feild of manufacturing of flexible hose assemblies, high pressure and low pressure pipes, metal tube assemblies, injection pipe assemblies and many more since 1967.')}}
          <br><b>Ranparia Engineering co. </b> {{__('is involved in manufacturing of various automotive, locomotive, earthmovers, agri-auto, marine, tractors, two-wheeler, three-wheelers, and passenger vehicles components.')}}</p>
        </div>
        <div class="col-md-3 col-sm-12 sm-center">
          <div class="industris-space-sm"></div>
          <img src="{{asset('images/Certificate.jpg')}}" alt="">
        </div>
      </div>
    </div>
    <br>
    <hr>
    <br>
    <div class="container">
      <div class="row">
          <h2>Infrastructure</h2>
          <p>{{__("Our industries are experiencing basic challenges. From climate change and geopolitics to the energy market, we are facing new reality. Some people consider them a threat. At Industris, we believe our job is to turn them into opportunities.")}}
          <br>{{__("That's why we look for new ways to use our expertise in the energy industry, discover new opportunities and promote innovation around the world. Our ambition is to become the world's most efficient industrial solutions and services provider.")}}</p>
      </div>
    </div>
    <div class="industris-space-90"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="projects" class="project-grid gallery row ">
            @for($i = 1; $i<=4;$i++)
            <div class="project-item events col-lg-3 col-sm-6">
              <div class="inner">
                <a href="{{asset('infra/I'.$i.'.jpg')}}" class="image-link imghvr-shutter-out-vert" title="gallery zoom image">
                  <img src="{{asset('infra/I'.$i.'.jpg')}}" alt="">
                </a>
              </div>
            </div>
            @endfor
          </div>
        </div>
      </div>
    </div>
    <br>
    <hr>
    <br>
    <div class="container">
      <div class="row">
        <h2 class="text-center">Our Units</h2>
          <div class="col-md-6 col-sm-12 sm-center">
            <div class="industris-space-sm"></div>
              <div class="slider" data-show="1" data-arrow="true">
                <div>
                    <div class="slider-item">
                      <img src="{{asset('Unit/U1.jpg')}}" alt="">
                    </div>
                </div>         
                <div>
                    <div class="slider-item">
                      <img src="{{asset('Unit/U2.jpg')}}" alt="">
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
          <h3>{{__('Casting')}}</h3>
            <ul>
              <li>{{__('Graded Cast Iron and Alloy CI casting')}}</li>
              <li>{{__('SG Iron Casting and Ductile Cast Iron')}}</li>
              <li>{{__('Investment Casting with different material grade')}}</li>
            </ul>
          </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6 col-sm-12 sm-center">
          <div class="industris-space-sm"></div>
            <div class="slider" data-show="1" data-arrow="true">
              <div>
                  <div class="slider-item">
                    <img src="{{asset('Unit/U1.jpg')}}" alt="">
                  </div>
              </div>         
              <div>
                  <div class="slider-item">
                    <img src="{{asset('Unit/U2.jpg')}}" alt="">
                  </div>
              </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <h3>{{__('Forging')}}</h3>
          <ul>
            <li>{{__('Hot Forging')}}</li>
            <li>{{__('Cold Forging')}}</li>
          </ul>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6 col-sm-12 sm-center">
          <div class="industris-space-sm"></div>
            <div class="slider" data-show="1" data-arrow="true">
              <div>
                  <div class="slider-item">
                    <img src="{{asset('Unit/U1.jpg')}}" alt="">
                  </div>
              </div>         
              <div>
                  <div class="slider-item">
                    <img src="{{asset('Unit/U2.jpg')}}" alt="">
                  </div>
              </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <h3>{{__('Machining')}}</h3>
          <ul>
            <li>{{__('CNC Machine')}}</li>
            <li>{{__('VMC Machine')}}</li>
            <li>{{__('Drilling Machine')}}</li>
          </ul>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6 col-sm-12 sm-center">
          <div class="industris-space-sm"></div>
            <div class="slider" data-show="1" data-arrow="true">
              <div>
                  <div class="slider-item">
                    <img src="{{asset('Unit/U1.jpg')}}" alt="">
                  </div>
              </div>         
              <div>
                  <div class="slider-item">
                    <img src="{{asset('Unit/U2.jpg')}}" alt="">
                  </div>
              </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <h3>{{__('Laboratory')}}</h3>
          <ul>
            <li>{{__('Ravalue Tester, Hardness Tester and Tensile Tester')}}</li>
            <li>{{__('Vision Measuring Machine')}}</li>
            <li>{{__('Profile Projector')}}</li>
            <li>{{__('Digital Height Guage, Vernier And Micro-metre')}}</li>
            <li>{{__('Surface Plate')}}</li>
            <li>{{__('Different Type Of Guages')}}</li>
            <li>{{__('Spectro Meter')}}</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
@endsection
