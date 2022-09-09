@extends('layouts.master')

@section('title','Quality')

@section('content')
  @include('layouts.partials.page-header')
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-24">
          <h2>{{__('Quality Assurance')}}</h2>
          <p>{{__('Superior and consistent quality product range is the primary concern of ranparia engineering co. the fame and recognition incurred over the years speaks volumes of our efficiency in maintaining a total quality management policy. Being an ISO 9001:2015 certified company; we pay paramount attention to quality throughout the production stages, ensuring that the best and flawless products offered to our customer.')}}
          <br>{{__('Our diligent quality inspectors regularly conduct quality checks in our well equipped in house inspection, in order to ensure flawless production')}}</p>
        </div>
        <div class="col-md-3 col-sm-12 sm-center">
          <div class="industris-space-sm"></div>
          <img src="{{asset('images/Certificate.jpg')}}" alt="">
        </div>
      </div>
    </div>
    <br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="projects" class="project-grid gallery row ">
            @for($i = 1; $i<=4;$i++)
            <div class="project-item events col-lg-3 col-sm-6">
              <div class="inner">
                <a href="{{asset('Qualityimg/Q'.$i.'.jpg')}}" class="image-link imghvr-shutter-out-vert" title="gallery zoom image">
                  <img src="{{asset('Qualityimg/Q'.$i.'.jpg')}}" alt="">
                </a>
              </div>
            </div>
            @endfor
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
