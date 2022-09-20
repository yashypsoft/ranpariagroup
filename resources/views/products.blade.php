@extends('layouts.master')

@section('title', 'Products')

@section('content')
    @include('layouts.partials.page-header')
    <section class="padding-bottom-medium">
        <div class="container-custom-page">
            @php
                $i=0;
            @endphp
            @foreach (File::glob(public_path('images') . '/wmproducts/*') as $path)
                @php
                    $i++;
                    $j = $i;
                    $productName = str_replace(public_path('images') . '/wmproducts/', '', $path);
                @endphp
                <div class="gallery-images">
                @foreach (File::glob($path . '/*') as $image)
                @php
                    $folderChanged = $j!=$i;
                    $j++;
                @endphp
                    <div class="project-item events col-lg-4 col-sm-6" style="{{$folderChanged ? "display:none":""}}">
                        <div class="inner product-block">
                            <a href="{{  str_replace(public_path(), '', $image)  }}" class="image-link imghvr-shutter-out-vert"
                                title="{{$productName}} ">
                                <img class="product-image" src="{{  str_replace(public_path(), '', $image)  }}">
                            </a>
                            <strong class="product-title">{{$productName}}</strong>
                        </div>
                    </div>
                @endforeach
                </div>
            @endforeach
            {{-- @for ($i = 1; $i < 14; $i++)
                @if ($i % 4 == 1)
                <div class="row text-center">
                    <div class="col-md-12">
                        <div id="projects" class="project-grid gallery row ">
                @endif
                <div class="project-item events col-lg-3 col-sm-6">
                    <div class="inner product-block">
                        <a href="{{asset('images/wproducts/'.$i.'.jpg')}}" class="image-link imghvr-shutter-out-vert"
                            title="gallery zoom image Product {{$i}}">
                            <img class="product-image" src="{{asset('images/wproducts/'.$i.'.jpg')}}" >
                        </a>
                        <strong class="product-title">Product {{$i }}</strong>
                    </div>
                </div>
                @if ($i % 4 == 0)
                    </div>
                    </div>
                    </div>
                @endif
            @endfor --}}
        </div>
    </section>
@endsection
