@php
    if(!isset($image)) {
        $image = asset('images/banner/page-header.jpg');
    }
@endphp
<div class="page-header" style="background: url({{$image}}) no-repeat center center;">
    {{-- <div class="container"> --}}
        <div class="breadc-box no-line">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">@yield('title')</h2>
                </div>
            </div>
        </div>
    {{-- </div> --}}
</div>
