@extends('layouts.app-master')

@section('content')


    <!-- service section -->

    <section class="service_section layout_padding-bottom">
      <div class="container">
        <div class="custom_heading-container">
          <h3 class=" ">
          {{__('messages.nav-service')}}
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
    @endsection