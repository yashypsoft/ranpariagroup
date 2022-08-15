@extends('layouts.master')

@section('title','About us')

@section('content')
  @include('layouts.partials.page-header')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h4 class="text-primary">OUR STORY</h4>
                        <h2>Industris 1994-2019</h2>
                        <p>We’re Industris, a broad energy company with a proud history. We are 20,000 committed colleagues developing oil, gas, wind and solar energy in more than 30 countries worldwide. We’re the largest operator in Norway, one of the world’s largest offshore operators, and a growing force in renewables. Driven by our Nordic urge to explore beyond the horizon and dedication to safety, equality and sustainability, we’re developing the energy of the future.</p>
                        <br>
                        <p>Contacting Industris — <br>
                        addresses and information on how best to contact us. </p>
                        <a href="#" class="btn btn-primary">Contact us</a>
                        <div class="industris-space-sm"></div>
                </div>
                <div class="col-md-offset-1 col-md-5 col-sm-12 sm-center">
                    <div class="about-img-right">
                        <img src="https://via.placeholder.com/750x864.png" alt="">
                        <div class="about-img-small">
                            <div class="overlay"><img src="https://via.placeholder.com/211x211.png" class="circle-img" alt=""></div>
                                <div class="about-content">
                                <h2 class="text-primary">{{now()->year-1967}}+</h2>
                                <p class="text-white">Years of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="industris-space-60"></div>
        <div class="industris-space-60"></div>
        <br>
        <div class="row">
            <div class="col-12 text-center"><h3>Our Business Minds</h3></div>
        </div>

        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="project-item events col-lg-4 col-sm-6 col-sm-offset-4">
                        <div class="inner">
                        <a href="https://via.placeholder.com/720x841.png" class="image-link imghvr-shutter-out-vert"
                            title="gallery zoom image">
                            <img src="https://via.placeholder.com/720x841.png" alt="">
                        </a>
                        <strong>Rajesh Ranparia</strong>
                        <br>
                        <span>Founder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row text-center">
              <div class="col-md-12">
                <div id="projects" class="project-grid gallery row ">
                  <div class="project-item events col-lg-3 col-sm-6">
                    <div class="inner">
                      <a href="https://via.placeholder.com/720x841.png" class="image-link imghvr-shutter-out-vert"
                        title="gallery zoom image">
                        <img src="https://via.placeholder.com/720x841.png" alt="">
                      </a>
                      <strong>Jignesh Ranparia</strong>
                      <br>
                      <span>Co-Founder</span>
                    </div>
                  </div>
                  <div class="project-item events col-lg-3 col-sm-6">
                    <div class="inner">
                      <a href="https://via.placeholder.com/720x841.png" class="image-link imghvr-shutter-out-vert"
                        title="gallery zoom image">
                        <img src="https://via.placeholder.com/720x841.png" alt="">
                      </a>
                      <strong>Jaydeep Ranparia</strong>
                      <br>
                      <span>C.E.O.</span>
                    </div>
                    <span></span>
                  </div>
                  <div class="project-item events col-lg-3 col-sm-6">
                    <div class="inner">
                      <a href="https://via.placeholder.com/720x841.png" class="image-link imghvr-shutter-out-vert"
                        title="gallery zoom image">
                        <img src="https://via.placeholder.com/720x841.png" alt="">
                      </a>
                      <strong>Karan Ranparia</strong>
                      <br>
                      <span>Manager</span>
                    </div>
                  </div>
                  <div class="project-item events col-lg-3 col-sm-6">
                    <div class="inner">
                      <a href="https://via.placeholder.com/720x841.png" class="image-link imghvr-shutter-out-vert"
                        title="gallery zoom image">
                        <img src="https://via.placeholder.com/720x841.png" alt="">
                      </a>
                      <strong>Rishi Ranparia</strong>
                      <br>
                      <span>Accountant</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
@endsection
