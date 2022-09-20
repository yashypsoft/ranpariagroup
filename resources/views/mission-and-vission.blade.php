@extends('layouts.master')

@section('title','Mission & Vision')

@section('content')
  @include('layouts.partials.page-header')
  <section>
    <div class="container-custom-page">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <h2>{{__('Mission & Vision')}}</h2>

                <p> <strong> {{__('Mission:')}} </strong> {{__('To be the foremost manufacturer and supplier of various component by maintaining consistency in quality through continuous improvements in process by upgrading technology for offering at competitive price.')}}</p>
                <br>
                <p> <strong> {{__('Vision:')}} </strong> {{__('Our aim is to offer the best quality product at competitve price which can stand for times by keeping futuristic vision.')}}
                <br/>
                <br/>
                {{__('We aim to create company that is of and for the customers, vendors and employees. and to serve the quality product to the society without harming the enviroment.')}}
                </p>
            </div>
            <div class="col-md-5 col-sm-12 sm-center">
                <div class="industris-space-sm"></div>
                <img src="{{asset('images/About/mnv.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection
