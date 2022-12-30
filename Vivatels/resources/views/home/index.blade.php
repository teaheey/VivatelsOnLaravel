@extends('layouts.app-master')

@section('content')


        
  <div class="hero_area">
    
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box layout_padding2">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="img-box">
                      <div>
                        <img src="images/slider-img.jpg" alt="" class="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <div>
                        <h1>
                          SIA Vivatels <br>
                          <span>
                          {{__('messages.mebeles')}} 
                          </span>
                        </h1>
                        <p>
                        {{__('messages.mebeles-p')}} 
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="slider_item-box layout_padding2">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="img-box">
                      <div>
                        <img src="images/slider-img.jpg" alt="" class="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <div>
                        <h1>
                        {{__('messages.quality')}} <br>
                        {{__('messages.precision')}}  <br>
                          <span>
                          {{__('messages.individual')}}
                          </span>
                        </h1>
                        <p>
                        {{__('messages.q')}}<br>
                        {{__('messages.callUs')}}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="container">
        <div class="slider_nav-box">
          <!--
          <div class="btn-box">
            <a  href="#carouselExampleControls" role="button" data-slide="next">
              Vairāk...
            </a>
            <hr>
          </div>
          -->
          <div class="custom_carousel-control">
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  

    <!-- about section -->
    <section class="about_section layout_padding">
      <div class="container">
        <div class="custom_heading-container">
          <h3 class=" ">
          {{__('messages.nav-about')}}
          </h3>
        </div>
        <p class="layout_padding2-top">
        {{__('messages.about-p1-1')}}<br>
        {{__('messages.about-p1-2')}}<br>
        {{__('messages.about-p1-3')}}<br>
        {{__('messages.about-p1-4')}}<br>
        {{__('messages.about-p1-5')}}<br>
        </p>
        <div class="img-box layout_padding2">
          <img src="images/producer.jpg" alt="">
        </div>
        <h4>
        {{__('messages.about-p2-h4')}}<br>
        </h4>
        <p class="layout_padding2-bottom">
        {{__('messages.about-p2-1')}}<br>
        {{__('messages.about-p2-2')}}<br>

        </p>
      

    </section>


    <!-- end about section -->

    <!-- service section -->

    <section class="service_section layout_padding-bottom">
      <div class="container">
        <div class="custom_heading-container">
          <h3 class=" ">
          {{__('messages.service')}}
          </h3>
        </div>
        <p class="">
        {{__('messages.service-p1')}}<br>
        {{__('messages.service-p2')}}<br>
        {{__('messages.service-p3')}}<br>
        {{__('messages.service-p4')}}<br>
        {{__('messages.service-p5')}}<br>
        {{__('messages.service-p6')}}<br>
        </p>
        <div class="service_container ">
          <div class="row">
            <div class="col-md-3">
              <div class="box b-1">
                <div class="img-box">
                  <img src="images/personal-consultation.png" alt="Individuālā konsultācija">
                </div>
                <div class="detail-box">
                  <h6>
                  {{__('messages.h6-consultation')}}
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box b-2">
                <div class="img-box">
                  <img src="images/measure.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                  {{__('messages.h6-measurement')}}<br>
                  {{__('messages.h6-making')}}
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box b-3">
                <div class="img-box">
                  <img src="images/magic.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                  {{__('messages.h6-producing')}}
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box b-4">
                <div class="img-box">
                  <img src="images/install.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                  {{__('messages.h6-installing')}}
                  </h6>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end service section -->

    <section class="client_section layout_padding-bottom">
      <div class="container">
        <div class="custom_heading-container">
          <h3 class=" ">
          {{__('messages.feedback')}}
          </h3>
        </div>
        <div class="layout_padding2-top">
		
		  <div class="client_container">
            <div class="detail-box">
              <p>
              {{__('messages.Sandra-p')}}
              </p>
            </div>
            <div class="client_id">
              <div class="img-box">
                <img src="images/Sandra.png" alt="">
              </div>
              <div class="name">
                <h5>
                {{__('messages.Sandra')}}
                  
                </h5>
              </div>
            </div>
          </div>
		  
          <div class="client_container">
            <div class="detail-box">
              <p>
              {{__('messages.Iveta-p')}}
              
              </p>
            </div>
            <div class="client_id">
              <div class="img-box">
                <img src="images/Iveta.png" alt="">
              </div>
              <div class="name">
                <h5>
                {{__('messages.Iveta')}}
                  
                </h5>
              </div>
            </div>
          </div>
		  
		  <div class="client_container">
            <div class="detail-box">
              <p>
              {{__('messages.Tomass-p')}}
               
              </p>
            </div>
            <div class="client_id">
              <div class="img-box">
                <img src="images/Tomass.png" alt="">
              </div>
              <div class="name">
                <h5>
                {{__('messages.Tomass')}}
                </h5>
              </div>
            </div>
          </div>
		  
        </div>
      </div>
    </section>

@endsection
