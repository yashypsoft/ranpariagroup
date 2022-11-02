@extends('layouts.master')

@section('title', 'Career')
@section('addcss')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
@endsection

@section('content')
    @include('layouts.partials.page-header')
    <section>
        <div class="container-custom-page">
            <div class="industris-space"></div>
            <div class="row flex-row">
                <div class="col-sm-8 col-xs-12">
                    <span class="title text-primary">{{ __('Find job') }}</span>
                    <h2 class="no-margin-bottom">{{ __('Industris Job') }}</h2>
                </div>
                <div class="col-sm-4 col-xs-12 text-right align-self-end">
                    <a class="text-primary" href="#">{{ __('Career FAQs') }} <i class="icon ion-md-help"></i></a>
                </div>
            </div>
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
            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="industris-space-50"></div>
                    <div class="career-box">
                        <h3>{{ __('Business Development Manager') }}</h3>
                        <h4>{{ __('Responsibility:') }}</h4>
                        <p> -
                            {{ __('Act as a representative of the company for business development and client servicing') }}<br>
                            - {{ __('Generation of prospects data from various sources') }}<br>
                            - {{ __('Emailing, personal meeting with the prospects') }}<br>
                            -
                            {{ __('Prepare and deliver presentations before the prospect/client/stakeholder explaining services offered by the company along with portfolio and strengths') }}<br>
                            -
                            {{ __('Prepare quotations (if required, in consultation with the head) and send it to the prospect/client') }}<br>
                            - {{ __('Manage project costs, budgets and client expectations') }}</p>
                        <h4>{{ __('Skills:') }}</h4>
                        <p>
                            - {{ __('Thorough understanding of Sales and Marketing') }}<br>
                            -
                            {{ __('Understanding of various services in the advertising, branding and event areas') }}<br>
                            - {{ __('Excellent negotiation skills') }}
                            - {{ __('Proficiency in presentations: Preparation and delivery of presentations') }}
                            - {{ __('Proficient in written and spoken English - Excellent communication skills') }}
                        </p>
                        <div class="industris-space-30"></div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#applyModel">Apply
                            Now</button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="industris-space-50"></div>
                    <div class="career-box">
                        <h3>{{ __('Post Production Manager') }}</h3>
                        <h4>{{ __('Responsibility:') }}</h4>
                        <p> -
                            {{ __('Act as a representative of the company for business development and client servicing') }}<br>
                            - {{ __('Generation of prospects data from various sources') }}<br>
                            - {{ __('Emailing, personal meeting with the prospects') }}<br>
                            -
                            {{ __('Prepare and deliver presentations before the prospect/client/stakeholder explaining services offered by the company along with portfolio and strengths') }}<br>
                            -
                            {{ __('Prepare quotations (if required, in consultation with the head) and send it to the prospect/client') }}<br>
                            - {{ __('Manage project costs, budgets and client expectations') }}</p>
                        <h4>{{ __('Skills:') }}</h4>
                        <p>
                            - {{ __('Thorough understanding of Sales and Marketing') }}<br>
                            -
                            {{ __('Understanding of various services in the advertising, branding and event areas') }}<br>
                            - {{ __('Excellent negotiation skills') }}
                            - {{ __('Proficiency in presentations: Preparation and delivery of presentations') }}
                            - {{ __('Proficient in written and spoken English - Excellent communication skills') }}
                        </p>
                        <div class="industris-space-30"></div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#applyModel">Apply
                            Now</button>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="container">
            <section class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-10">
                    <h2 class="no-border text-center">
                        <small>Evolving your career with Ranparia Group</small>
                        <br>Submit your CV for
                        future opening.</h2>
                    <div id="upload_success" class="upload_success alert alert-success" style="display: none;"></div>
                    <form method="POST" action="{{ route('carrier.store') }}" enctype="multipart/form-data"
                        class="resume-block upload-form">
                        <input type="hidden" name="onlyfile" value="true">

                        {{ csrf_field() }}
                        <div class="form-group carrier-form-group">
                            <div class="browse">
                                <div class="custom-file">
                                    <input type="file" name="cvfile" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label carrier-file-label" for="inputGroupFile01">Attach yout CV (PDF/Doc)</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-cust btn-apply-carrier">Submit</button>
                            <div class="error text-danger"></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="applyModel" tabindex="-1" aria-labelledby="applyModelLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h2" id="applyModelLabel">{{ __('Apply for ') }} Job</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('carrier.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mx-2">
                            <label for="recipient-name" class="col-form-label">{{ __('Full name:') }}</label>
                            <input type="text" name="name" class="form-control" id="recipient-name">
                        </div>
                        <div class="mx-2 mt-3">
                            <label for="message-text" class="col-form-label">{{ __('Email:') }}</label>
                            <input type="text" name="email" class="form-control" id="email">
                        </div>
                        <div class="mx-2 mt-3">
                            <div class="">
                                <label for="message-text" class="col-form-label">{{ __('Upload CV:') }}</label>
                                <div class="custom-file">
                                    <input type="file" name="cvfile" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label"
                                        for="inputGroupFile01">{{ __('Attach yout CV (PDF/Doc)') }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="mx-2 mt-3">
                            <label for="message-text" class="col-form-label">{{ __('Message:') }}</label>
                            <textarea class="form-control " name="message" rows="4" cols="50" id="message-text"
                                placeholder="{{ __('Type your message here...') }}"></textarea>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="{{ __('Apply') }}"></input>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
