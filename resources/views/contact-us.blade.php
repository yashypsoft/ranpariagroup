@extends('layouts.master')

@section('title', 'Contact Us')

@section('content')
    @include('layouts.partials.page-header')
    <div>
        <section class="bg-contact-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h4 class="text-primary">{{ __('CONTACT INFO') }}</h4>
                        <div class="contact-info">
                            <h2>{{ __('Hotline') }} : <span class="text-primary"
                                    onclick="location.href='tel:+919723918607';">+91 9723918607</span> </h2>
                            <p onclick="location.href='mailto:info@ranpariagroup.in';"><i class="icon ion-md-mail"></i>
                                info@ranpariagroup.in</p>
                            <p><i class="icon ion-md-pin"></i> Bhagyalaxmi Industrial Estate,St. no 2, Bhavnagar Rd, Rajkot
                                (<a href="https://g.page/ranparia-engineering-co?share" class="text-primary"
                                    target="_blank">{{ __('View map') }}</a>)</p>
                        </div>
                        <div class="space-industris" style="height: 40px;"></div>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-message">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger alert-message">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form class="form-contact" method="post" {{ route('contact.us.store') }}>
                            {{ csrf_field() }}
                            <h3>{{ __('Contact form') }}</h3>
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <input type="text" name="name" id="your-name" class="form-control"
                                        placeholder="Your name" required="">
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="number" name="phone_number" id="phone-number" class="form-control"
                                        placeholder="Phone number" required="">
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="email" name="email" id="your-email" class="form-control"
                                        placeholder="Email Address" required="">
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea type="text" rows="6" name="message" id="your-message" class="form-control" placeholder="your message"
                                        required=""></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" value="Submit"
                                        class="wpcf7-form-control wpcf7-submit btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <iframe src="https://maps.google.com/maps?q=Ranparia&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="650" style="margin-bottom: -6px;border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
@endsection
