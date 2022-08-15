@extends('layouts.master')

@section('title', 'Career')

@section('content')
    @include('layouts.partials.page-header')
    <section>
        <div class="container">
            <div class="industris-space"></div>
            <div class="row flex-row">
                <div class="col-sm-8 col-xs-12">
                    <h4 class="text-primary">Find job</h4>
                    <h2 class="no-margin-bottom">Industris Job</h2>
                </div>
                <div class="col-sm-4 col-xs-12 text-right align-self-end">
                    <a class="text-primary" href="#">Career FAQs <i class="icon ion-md-help"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="industris-space-50"></div>
                    <div class="career-box">
                        <h3>Geophysics And Petrophysics Leader</h3>
                        <h4>Descriptions:</h4>
                        <p>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam
                            rhoncus.<br>
                            Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
                            sem neque sed ipsum.</p>
                        <h4>Descriptions:</h4>
                        <p>
                            - Sagittis eu faucibus integer, habitasse parturient.<br>
                            - Pharetra massa pretium cras quam, id nulla habitasse.<br>
                            - Torquent tellus nisl nam ornare a, lacinia metus fames.
                        </p>
                        <div class="industris-space-30"></div>
                        <a href="#" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
