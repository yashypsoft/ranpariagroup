@extends('layouts.master')

@section('title', 'Products')

@section('content')
    @include('layouts.partials.page-header')
    <section class="padding-bottom-medium">
        <div class="container">
            @for ($i = 1; $i < 16; $i++)
                @if ($i%4 == 1)
                <div class="row text-center">
                    <div class="col-md-12">
                        <div id="projects" class="project-grid gallery row ">
                @endif
                <div class="project-item events col-lg-3 col-sm-6">
                    <div class="inner">
                        <a href="{{asset('images/products/'.$i.'.jpg')}}" class="image-link imghvr-shutter-out-vert"
                            title="gallery zoom image Product {{$i}}">
                            <img class="product-image" src="{{asset('images/products/'.$i.'.jpg')}}" >
                        </a>
                        <strong>Product {{$i }}</strong>
                    </div>
                </div>
                @if ($i%4 == 0)
                    </div>
                    </div>
                    </div>
                @endif
            @endfor

        </div>
    </section>
@endsection
