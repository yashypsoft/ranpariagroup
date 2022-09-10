@extends('layouts.master')

@section('title','Corporate Video')

@section('content')
  @include('layouts.partials.page-header')
    <br>
    <div class="container">
        <div class="video-container">
            <iframe  src="https://www.youtube.com/embed/aga1jm8e8Gcgit" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

    <br>
@endsection
