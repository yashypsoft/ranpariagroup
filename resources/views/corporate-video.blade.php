@extends('layouts.master')

@section('title','Corporate Video')

@section('content')
  @include('layouts.partials.page-header')
    <br>
    <div class="container">
        <div class="video-container">
            <iframe src="https://drive.google.com/file/d/1We2CQpBxe718hoPyc3R2tT8xvX5ycer1/preview" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            {{-- <iframe  src="https://www.youtube.com/embed/QI1n0niG5E4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
        </div>
    </div>

    <br>
@endsection
