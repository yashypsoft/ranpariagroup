@extends('layouts.master')

@section('title', 'Career')
@section('addcss')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
@endsection

@section('content')
    @include('layouts.partials.page-header')
    <section>
        <div class="container">
            <div class="industris-space"></div>
            <div class="row flex-row">
                <div class="col-sm-8 col-xs-12">
                    <h4 class="text-primary">{{__('Find job')}}</h4>
                    <h2 class="no-margin-bottom">{{__('Industris Job')}}</h2>
                </div>
                <div class="col-sm-4 col-xs-12 text-right align-self-end">
                    <a class="text-primary" href="#">{{__('Career FAQs')}} <i class="icon ion-md-help"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="industris-space-50"></div>
                    <div class="career-box">
                        <h3>{{__('Geophysics And Petrophysics Leader')}}</h3>
                        <h4>{{__('Descriptions:')}}</h4>
                        <p>{{__('Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam
                            rhoncus.<br>
                            Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
                            sem neque sed ipsum.')}}</p>
                        <h4>{{__('Descriptions:')}}</h4>
                        <p>
                            - {{__('Sagittis eu faucibus integer, habitasse parturient.')}}<br>
                            - {{__('Pharetra massa pretium cras quam, id nulla habitasse.')}}<br>
                            - {{__('Torquent tellus nisl nam ornare a, lacinia metus fames.')}}
                        </p>
                        <div class="industris-space-30"></div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#applyModel">Apply Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Modal -->
  <div class="modal fade" id="applyModel" tabindex="-1" aria-labelledby="applyModelLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title h2" id="applyModelLabel">{{__('Apply for ')}} ABC</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mx-2">
                  <label for="recipient-name" class="col-form-label">{{__('Full name:')}}</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mx-2 mt-3">
                  <label for="message-text" class="col-form-label">((__('Email:')))</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mx-2 mt-3">
                    <div class="">
                        <label for="message-text" class="col-form-label">{{__('Upload CV:')}}</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01">
                          <label class="custom-file-label" for="inputGroupFile01">{{__('Attach yout CV (PDF/Doc)')}}</label>
                        </div>
                    </div>
                </div>
                <div class="mx-2 mt-3">
                  <label for="message-text" class="col-form-label">{{__('Message:')}}</label>
                  <textarea class="form-control " rows="4" cols="50" id="message-text" placeholder="{{__('Type your message here...')}}"></textarea>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button"  class="btn btn-primary">{{__('Apply')}}</button>
        </div>
      </div>
    </div>
  </div>
@endsection
