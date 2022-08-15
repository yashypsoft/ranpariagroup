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
                        <h2>Hotline : <span class="text-primary" onclick="location.href='tel:+918758422436';">+91 8758422436</span> </h2>
                        <p onclick="location.href='mailto:karanranparia@gmail.com';"><i class="icon ion-md-mail"></i> karanranparia@gmail.com</p>
                        <p><i class="icon ion-md-pin"></i> Bhagyalaxmi Industrial Estate,St. no 2, Bhavnagar Rd, Rajkot (<a href="https://g.page/ranparia-engineering-co?share" class="text-primary" target="_blank">View map</a>)</p>
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
                        <div class="map-responsive">
                            <iframe src="https://maps.google.com/maps?q=Ranparia&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="https://g.page/ranparia-engineering-co?share" class="btn btn-primary btn-m-r" target="_blank">Get derection</a>
                        <a href="https://g.page/ranparia-engineering-co?share" class="btn btn-border" target="_blank">Google Map</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
