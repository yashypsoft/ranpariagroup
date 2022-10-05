@extends('layouts.master')

@section('title', 'Contact Us')

@section('content')
    @include('layouts.partials.page-header')
    <div>
        <section class="bg-contact-info">
            <div class="container-custom-page">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <span class="text-primary title">{{ __('CONTACT INFO') }}</span>
                        <div class="contact-info">
                            <h2>{{ __('Telephone') }} : <span class="text-primary"
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7383.39272197208!2d70.826502!3d22.289489!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x998624e3ab14c579!2sRanparia%20engineering%20Co!5e0!3m2!1sen!2sin!4v1634717012615!5m2!1sen!2sin" width="100%" height="650" style="margin-bottom: -6px;border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
@endsection
