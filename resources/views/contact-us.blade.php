@extends('layouts.master')

@section('title','Contact Us')

@section('content')
  @include('layouts.partials.page-header')
<div>
    <section class="bg-contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h4 class="text-primary">CONTACT INFO</h4>
                    <div class="contact-info">
                        <h2>Hotline : <span class="text-primary">+918758422436</span> </h2>
                        <p><i class="icon ion-md-mail"></i> karanranparia@gmail.com</p>
                        <p><i class="icon ion-md-pin"></i> Bhagyalaxmi Industrial Estate,St. no 2, Bhavnagar Rd, Rajkot (<a href="#" class="text-primary">View map</a>)</p>
                    </div>
                    <div class="space-industris" style="height: 40px;"></div>
                    <hr>
                </div>
                <div class="col-md-12">
                    <form class="form-contact" action="contact.php" method="post">
                        <h3>Contact form</h3>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <input type="text" name="your_name" id="your-name" class="form-control" placeholder="Your name" required="">
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="number" name="phone_number" id="phone-number" class="form-control" placeholder="Phone number" required="">
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="email" name="your_email" id="your-email" class="form-control" placeholder="Email Address" required="">
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea type="text" rows="6" name="your_message" id="your-message" class="form-control" placeholder="your message" required=""></textarea>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit btn btn-primary">
                                <input type="submit" value="Subcribe" class="wpcf7-form-control wpcf7-submit btn btn-border">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>View map:</h3>
                    <div class="map">
                        <img src="https://via.placeholder.com/1170x500?text=google+map" alt="">
                    </div>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary btn-m-r">Get derection</a>
                        <a href="#" class="btn btn-border">Google Map</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
