@extends('layouts.master')

@section('title','Subsidiaries/Other Ventures')

@section('content')
  @include('layouts.partials.page-header')
  <section>
    <div class="container">
        <div class="row text-center">
            <h2>Pipemaster</h2>
            <br><br>
            <div class="col-md-6 col-sm-12 sm-center">
                <div class="industris-space-sm"></div>
                <img src="{{asset('images/subsidiaries/1.jpg')}}" alt="">
            </div>
            <div class="col-md-6 col-sm-12 sm-center">
                <div class="industris-space-sm"></div>
                <img src="{{asset('images/subsidiaries/2.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>

@endsection
