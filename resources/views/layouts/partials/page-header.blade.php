<div class="page-header" style="background: url('{{asset('images/banner/page-header.jpg')}}') no-repeat center center;">
    <div class="container">
        <div class="breadc-box no-line">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">@yield('title')</h2>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="{{route('home')}}">{{__('Home')}}</a></li>
                        <li class="active">@yield('title')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
